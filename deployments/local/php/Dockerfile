FROM php:7-fpm-alpine
RUN docker-php-ext-install pdo_mysql mysqli mbstring exif

WORKDIR /var/www
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
CMD sh -c "composer install && docker-php-entrypoint php-fpm"