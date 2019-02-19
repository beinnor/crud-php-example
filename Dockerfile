#FROM is the base image for which we will run our application
FROM php:7.2-apache

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

WORKDIR /var/www/html/

# Copy files
COPY . .

# Port 80
EXPOSE 80


