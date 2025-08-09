FROM php:8.3-cli

# system deps
RUN apt-get update && apt-get install -y \
    build-essential libpng-dev libjpeg-dev libonig-dev libxml2-dev \
    libzip-dev unzip git curl libpq-dev nodejs npm \
  && docker-php-ext-install pdo pdo_pgsql mbstring zip exif pcntl

WORKDIR /var/www/html

# composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# copy app
COPY . .

# PHP deps
RUN composer install --no-dev --optimize-autoloader

# Vite build
RUN npm i bootstrap sass \
 && mkdir -p public/css \
 && npx sass --load-path=node_modules resources/scss/app.scss public/css/app.css --style=compressed --no-source-map

# (optional) Laravel caches AFTER envs are injected at runtime is safer,
# so only clear now to avoid baking wrong env into cache
RUN php artisan config:clear \
 && php artisan route:clear \
 && php artisan view:clear

EXPOSE 8080
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
