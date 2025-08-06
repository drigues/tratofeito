# Dockerfile
FROM webdevops/php-nginx:8.3

WORKDIR /app

COPY . /app

RUN composer install --no-dev --optimize-autoloader && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

EXPOSE 80
