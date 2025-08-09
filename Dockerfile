# ---------- Build stage (Node for Vite) ----------
FROM node:20-bullseye AS assets
WORKDIR /app

# only copy what's needed for a deterministic build cache
COPY package*.json ./
COPY vite.config.js ./
COPY resources ./resources

RUN npm ci
RUN npm run build

# ---------- PHP stage ----------
FROM php:8.3-cli

# system deps
RUN apt-get update && apt-get install -y \
    build-essential libpng-dev libjpeg-dev libonig-dev libxml2-dev \
    libzip-dev unzip git curl libpq-dev \
  && docker-php-ext-install pdo pdo_pgsql mbstring zip exif pcntl

WORKDIR /var/www/html

# composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# copy full app
COPY . .

# install PHP deps
RUN composer install --no-dev --optimize-autoloader --no-interaction

# copy built assets from the assets stage
COPY --from=assets /app/public/build /var/www/html/public/build

# laravel caches: do NOT bake prod env; just clear
RUN php artisan config:clear && php artisan route:clear && php artisan view:clear

EXPOSE 8080
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
