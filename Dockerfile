# ──────────────────────────────────────────────────────────────────────────────
# 1) Base PHP image with required extensions
# ──────────────────────────────────────────────────────────────────────────────
FROM php:8.3-cli AS php-base

# System libs + PHP extensions you’re using
RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libzip-dev libonig-dev libxml2-dev \
 && docker-php-ext-install pdo pdo_pgsql mbstring zip exif pcntl \
 && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

# Composer (from official image)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer


# ──────────────────────────────────────────────────────────────────────────────
# 2) Node build stage (Node 20) – builds Vite assets into /app/public/build
# ──────────────────────────────────────────────────────────────────────────────
FROM node:20-alpine AS assets

# Needed by some tooling (optional but common)
RUN apk add --no-cache python3 make g++ git

WORKDIR /app

# Copy only what the Vite build needs to leverage Docker layer caching
COPY package*.json ./
COPY vite.config.* ./
COPY postcss.config.* ./          
COPY resources ./resources
# If you reference static files via /assets/... copy public as well
COPY public ./public

ENV NODE_ENV=production
RUN npm ci
RUN npm run build
# At this point we have: /app/public/build/.vite/manifest.json and assets


# ──────────────────────────────────────────────────────────────────────────────
# 3) Final runtime image (PHP only) – copies code + prebuilt assets
# ──────────────────────────────────────────────────────────────────────────────
FROM php-base AS app

WORKDIR /var/www/html

# Copy the rest of the application code
COPY . .

# Install PHP deps (no dev) and optimize autoloader
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# Bring in the prebuilt Vite bundle from the Node stage
COPY --from=assets /app/public/build ./public/build

# Laravel caches (safe: they don’t hit DB)
RUN php artisan config:clear \
 && php artisan route:clear \
 && php artisan view:clear \
 && php artisan config:cache \
 && php artisan route:cache \
 && php artisan view:cache

# If you need the storage symlink in production, uncomment:
# RUN php artisan storage:link || true

# Make sure www-data can read/write storage/bootstrap
RUN chown -R www-data:www-data storage bootstrap/cache public

EXPOSE 8080
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
