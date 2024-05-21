FROM php:8.0-apache

# Xdebugのインストール
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug