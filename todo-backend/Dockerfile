FROM php:8.2-fpm

WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN apt-get update && apt-get install -y libzip-dev zip unzip \
    && docker-php-ext-install pdo_mysql zip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . .
RUN composer install --no-dev --optimize-autoloader

EXPOSE 9000

