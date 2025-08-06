# Dockerfile
FROM php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    libpq-dev \
    libzip-dev \
    nginx \
    nodejs \
    npm \
    supervisor \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip exif pcntl

# Set working directory
WORKDIR /var/www/html

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy Laravel code
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Build Vite assets
RUN npm install && npm run build

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Copy Nginx config and start script
COPY default.conf /etc/nginx/conf.d/default.conf
COPY start.sh /start.sh
RUN chmod +x /start.sh

# Expose port for Render
EXPOSE 8080

# Entrypoint
CMD ["/start.sh"]
