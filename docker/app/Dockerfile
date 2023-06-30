# we use image php:8.2-fpm
FROM php:8.2-fpm

# set timezone
ENV TZ Asia/Tokyo

# install php extensions
RUN apt-get update && \
  apt-get install -y git unzip libzip-dev libicu-dev libonig-dev && \
  docker-php-ext-install intl pdo_mysql zip bcmath

# copy my php.ini setting
COPY ./docker/app/php.ini /usr/local/etc/php/php.ini

# install composer (package manager)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
