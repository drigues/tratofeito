# ---------- Stage 1: Node build (Vite) ----------
FROM node:20-bullseye AS assets
WORKDIR /app

COPY package*.json ./
COPY vite.config.js ./
COPY resources ./resources

RUN npm ci
RUN npm run build

# ---------- Stage 2: PHP runtime ----------
FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    build-essential libpng-dev libjpeg-dev libonig-dev libxml2-dev \
    libzip-dev unzip git curl libpq-dev \
  && docker-php-ext-install pdo pdo_pgsql mbstring zip exif pcntl fileinfo

WORKDIR /var/www/html

# composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# app code
COPY . .

# PHP deps
RUN composer install --no-dev --optimize-autoloader --no-interaction

# copy built assets (includes .vite/manifest.json)
COPY --from=assets /app/public/build /var/www/html/public/build

# clear caches
RUN php artisan config:clear && php artisan route:clear && php artisan view:clear

EXPOSE 8080
CMD ["bash","-lc","php artisan serve --host=0.0.0.0 --port=${PORT:-8080}"]
