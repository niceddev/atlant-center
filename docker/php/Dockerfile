FROM composer:2.2.1 AS composer

FROM php:7.4-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev git libzip-dev zip libpq-dev  libxml2-dev libfreetype6-dev  libjpeg62-turbo-dev libmcrypt-dev  libpng-dev libicu-dev
RUN docker-php-ext-configure zip && docker-php-ext-install zip soap gd intl bcmath
RUN docker-php-ext-install pdo pdo_mysql
