# Use the official PHP image with Apache
FROM php:8.2-apache

# Install PostgreSQL client and PHP extensions for Postgres
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Enable Apache mod_rewrite (required for Laravel routes)
RUN a2enmod rewrite

# Copy all project files to the server
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Give permission to Laravel storage and cache folders
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80 for web traffic
EXPOSE 80
