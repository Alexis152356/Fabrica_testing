# Usar una imagen base de PHP con Apache
FROM php:8.1-apache

# Configurar el entorno de Laravel
WORKDIR /var/www/html
COPY . /var/www/html
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install zip pdo_mysql

# Instalar Composer y dependencias
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Exponer el puerto 80
EXPOSE 80
