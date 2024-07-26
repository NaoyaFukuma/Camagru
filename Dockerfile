# Dockerfile
FROM php:8.1-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install any additional extensions
RUN docker-php-ext-install pdo_mysql

# Copy application source
COPY ./public /var/www/html

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html
