#!/bin/bash

# Start PHP-FPM in background
php-fpm &

# Aguarda uns segundos para o PHP-FPM iniciar corretamente (opcional, mas seguro)
sleep 3

# Run Laravel setup
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force

# Start Nginx in foreground (importante: não deve sair ou o container para)
nginx -g "daemon off;"
