#!/bin/bash

# Start PHP-FPM in background
php-fpm -D

# Run Laravel setup
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force

# Start Nginx in foreground
nginx -g "daemon off;"
