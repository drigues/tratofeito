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
    libpq-dev \
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip exif pcntl

# Definir diretório de trabalho
WORKDIR /var/www/html

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copiar código do Laravel
COPY . .

# Garantir que o .env existe (Render usa variáveis externas)
RUN cp .env.example .env

# Instalar dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Gerar chave e caches Laravel
RUN php artisan key:generate
RUN php artisan config:clear
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Compilar assets do Vite
RUN npm install && npm run build

# Expor porta 8080 para Render
EXPOSE 8080

# Comando de arranque
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
