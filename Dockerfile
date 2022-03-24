FROM php:7.2-cli
CMD ["php", "-v"]
FROM composer:2.3
WORKDIR /docker_app
COPY composer.json /docker_app
RUN composer update
COPY . .
CMD ["php", "main.php"]