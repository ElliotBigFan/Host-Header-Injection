FROM php:8.1-apache

WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . .
RUN chown -R root:www-data /var/www/html
RUN chmod -R 755 /var/www/html
RUN chmod 700 Dockerfile