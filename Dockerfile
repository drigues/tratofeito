# ─────────────────────────────────────────────────────────────────────
# 1) PHP base with required extensions + Composer
# ─────────────────────────────────────────────────────────────────────
FROM php:8.3-cli AS php-base

RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libzip-dev libonig-dev libxml2-dev \
 && docker-php-ext-install pdo pdo_pgsql mbstring zip exif pcntl \
 && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer


# ─────────────────────────────────────────────────────────────────────
# 2) Node 20 stage: build Vite assets
# ─────────────────────────────────────────────────────────────────────
FROM node:20-alpine AS assets
WORKDIR /app

# (optional) some packages need build tools
RUN apk add --no-cache python3 make g++ git

# Copy only what’s needed for a cached install
COPY package*.json ./
COPY vite.config.* ./
# Remove these lines if you truly don't have them
# COPY postcss.config.* ./
# COPY tailwind.config.* ./

COPY resources ./resources
COPY public ./public

# IMPORTANT: install devDependencies so vite exists
# (either do not set NODE_ENV=production or force include dev)
# ENV NODE_ENV=development
RUN npm ci --include=dev
RUN npm run build
# Result: /app/public/build (with .vite/manifest.json)


# ─────────────────────────────────────────────────────────────────────
# 3) Final runtime image (PHP only) with prebuilt assets
# ─────────────────────────────────────────────────────────────────────
FROM php-base AS app
WORKDIR /var/www/html

# Copy the app code
COPY . .

# Install PHP deps (prod only) and optimize
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# Copy prebuilt assets from Node stage
COPY --from=assets /app/public/build ./public/build

# Clear + warm caches (comment route:cache if you use closure routes)
RUN php artisan config:clear \
 && php artisan route:clear \
 && php artisan view:clear \
 && php artisan config:cache \
 && php artisan route:cache \
 && php artisan view:cache

# Ensure perms
RUN chown -R www-data:www-data storage bootstrap/cache public

EXPOSE 8080
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
