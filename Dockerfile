FROM php:7.4-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Expose port 80
EXPOSE 80

