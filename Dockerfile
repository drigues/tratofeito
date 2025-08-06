# Dockerfile
FROM php:8.3-cli

# Instalar extensões PHP e utilitários do sistema
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    nodejs \
    npm \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip exif pcntl

# Diretório de trabalho
WORKDIR /var/www/html

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copiar código Laravel
COPY . .

# Instalar dependências PHP e gerar cache
RUN composer install --no-dev --optimize-autoloader
RUN php artisan key:generate
RUN php artisan migrate --force
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Compilar assets do Vite
RUN npm install && npm run build

# Expor a porta para Render
EXPOSE 8080

# Comando de arranque
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
