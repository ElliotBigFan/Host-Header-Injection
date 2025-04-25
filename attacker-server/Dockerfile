FROM php:8.1-apache

WORKDIR /var/www/html

COPY . .
RUN chown -R root:www-data /var/www/html
RUN chmod -R 755 /var/www/html
RUN chmod -R 700 /var/www/html/Dockerfile