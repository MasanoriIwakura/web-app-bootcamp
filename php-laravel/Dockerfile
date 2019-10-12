# FROM composer:1.9.0 as build
# LABEL mantainer=MasanoriIwakura

# # Roadrunner Install
# RUN apk --no-cache add wget && \
#     wget https://github.com/spiral/roadrunner/releases/download/v1.4.8/roadrunner-1.4.8-linux-amd64.tar.gz && \
#     tar -xvzf roadrunner-1.4.8-linux-amd64.tar.gz && \
#     mv roadrunner-1.4.8-linux-amd64 roadrunner

FROM php:7.2.23-cli-alpine

RUN apk --no-cache add composer

ENV APP_BASE_PATH=/var/www/bootcamp
ENV APP_BOOTSTRAP_PATH=bootstrap/app.php

WORKDIR $APP_BASE_PATH

COPY ./bootcamp ./
RUN composer install && \
    ./vendor/bin/rr get-binary && \
    php artisan key:generate

CMD ["./rr", "serve", "-v", "-d"]
