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

# Garante que existe .env local (mas vars reais vêm do Render em runtime)
RUN cp .env.example .env || true

# Instalar dependências do Laravel (sem dev)
RUN composer install --no-dev --optimize-autoloader

# Gerar chave da aplicação (usa APP_KEY se fornecida)
RUN php artisan key:generate

# NÃO fazer config:cache em build (evita fallback p/ SQLite)
RUN php artisan config:clear
RUN php artisan route:cache
RUN php artisan view:cache

# Compilar assets do Vite
RUN npm install && npm run build

# Expor porta esperada pelo Render
EXPOSE 8080

# Comando de arranque
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
