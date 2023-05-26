FROM php:8.2-fpm

RUN apt-get update

#Install zip+icu dev libs + pgsql dev support
RUN apt-get install libzip-dev zip libicu-dev libpq-dev -y

RUN docker-php-ext-install zip && docker-php-ext-configure intl && docker-php-ext-install intl

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql && docker-php-ext-install pdo_pgsql pgsql

# RUN pecl install xdebug-3.2.1 && docker-php-ext-enable xdebug
COPY *.ini /usr/local/etc/php/conf.d/

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

