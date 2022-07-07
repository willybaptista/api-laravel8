#!/bin/bash

php-fpm

cp /www/.env.example /www/.env

composer install

php artisan migrate
