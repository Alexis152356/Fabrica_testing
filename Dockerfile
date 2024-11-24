# Usar una imagen base de PHP con Apache
FROM php:8.2-apache

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install zip pdo_mysql

# Configurar el entorno de Laravel
WORKDIR /var/www/html
COPY . /var/www/html

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Exponer el puerto 80
EXPOSE 80

# Comando de inicio para Apache
CMD ["apache2-foreground"]
