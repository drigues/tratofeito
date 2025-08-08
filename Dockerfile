# PHP
FROM php:8.3-cli as php

RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip exif pcntl

WORKDIR /var/www/html

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ---- Node build stage (to get Node 20) ----
FROM node:20-alpine as assets
WORKDIR /app
COPY package*.json vite.config.* ./
COPY resources ./resources
RUN npm ci
RUN npm run build

# ---- Final image ----
FROM php
WORKDIR /var/www/html

COPY . .
RUN composer install --no-dev --optimize-autoloader \
 && php artisan config:clear \
 && php artisan route:clear \
 && php artisan view:clear

# Bring in the prebuilt assets
COPY --from=assets /app/public/build ./public/build

EXPOSE 8080
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
