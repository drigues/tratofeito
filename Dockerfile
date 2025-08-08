# ---------- PHP base ----------
FROM php:8.3-cli AS php
RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libzip-dev libonig-dev libxml2-dev \
 && docker-php-ext-install pdo pdo_pgsql mbstring zip exif pcntl
WORKDIR /var/www/html
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ---------- Node build (assets) ----------
FROM node:20-alpine AS assets
WORKDIR /app
COPY package*.json vite.config.* ./
COPY resources ./resources
# include anything your CSS imports (images/fonts) if outside resources/
RUN npm ci
RUN npm run build
# If Vite wrote the manifest under .vite/, move it to root so Laravel 12 finds it
RUN if [ -f /app/public/build/.vite/manifest.json ]; then \
      mv /app/public/build/.vite/manifest.json /app/public/build/manifest.json; \
    fi

# ---------- Final image ----------
FROM php
WORKDIR /var/www/html
COPY . .
RUN composer install --no-dev --optimize-autoloader \
 && php artisan config:clear && php artisan route:clear && php artisan view:clear

# Bring in the prebuilt assets + manifest
COPY --from=assets /app/public/build ./public/build

EXPOSE 8080
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
