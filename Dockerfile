# Dockerfile
FROM php:8.3-cli

# ---- system deps ----
RUN apt-get update && apt-get install -y \
    git curl unzip libpq-dev libpng-dev libjpeg-dev libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip exif pcntl

# ---- Node 20 LTS (vite & laravel-vite-plugin need >=20.19) ----
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# ---- workdir & composer ----
WORKDIR /var/www/html
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ---- app code ----
COPY . .

# make sure an .env exists (Render injects env vars, but artisan reads keys)
RUN [ -f .env ] || cp .env.example .env

# ---- PHP deps & framework caches (no DB work at build time) ----
RUN composer install --no-dev --prefer-dist --optimize-autoloader \
 && php artisan key:generate --force || true \
 && php artisan config:clear \
 && php artisan route:clear \
 && php artisan view:clear

# ---- Vite build (this produces public/build/** and manifest.json) ----
RUN npm ci \
 && npm run build

# helpful: ensure public/build is readable by the web user
RUN chown -R www-data:www-data public storage bootstrap/cache

EXPOSE 8080
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
