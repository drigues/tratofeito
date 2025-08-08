#!/bin/sh
set -e

# Make sure runtime directories exist (idempotent)
mkdir -p storage/framework/{cache,sessions,views}
chmod -R 775 storage bootstrap/cache || true
chown -R www-data:www-data storage bootstrap/cache || true

# Remove stale caches and rebuild with live env
rm -f bootstrap/cache/*.php || true
php artisan key:generate --force || true
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# DB ready? migrate (ignore if nothing to migrate)
php artisan migrate --force || true

# Final caches
php artisan config:cache
php artisan view:cache

# Serve the app
php artisan serve --host=0.0.0.0 --port=8080
