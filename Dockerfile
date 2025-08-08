# Dockerfile
FROM php:8.3-cli

# System deps
RUN apt-get update && apt-get install -y \
    git unzip curl ca-certificates gnupg \
    libpq-dev libzip-dev libpng-dev libonig-dev libxml2-dev \
 && docker-php-ext-install pdo pdo_pgsql mbstring zip exif \
 && rm -rf /var/lib/apt/lists/*

# Node.js 20 (vite/laravel-vite-plugin require >=20.x)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
 && apt-get update && apt-get install -y nodejs \
 && node -v && npm -v

# Workdir
WORKDIR /var/www/html

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# App code
COPY . .

# Install PHP deps (no dev) and optimise autoloader
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Build frontend once, into /public/build
RUN npm ci && npm run build

# Ensure Laravel runtime dirs exist & are writable
RUN mkdir -p storage/framework/{cache,sessions,views} \
 && chown -R www-data:www-data storage bootstrap/cache public/build

# Start script
COPY start.sh /start.sh
RUN chmod +x /start.sh

EXPOSE 8080
CMD ["/start.sh"]
