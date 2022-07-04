FROM php:8.1-fpm

RUN apt-get update && \
    apt-get install -y git libaio1 libmcrypt-dev libpng-dev libxml2-dev libxslt-dev unzip wget

RUN docker-php-ext-install pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

COPY . /www
WORKDIR /www
RUN cp entrypoint.sh /usr/local/bin/entrypoint
RUN chmod +x /usr/local/bin/entrypoint

ENTRYPOINT ["entrypoint"]
