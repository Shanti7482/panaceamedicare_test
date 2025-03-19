# Use PHP 7.4 with Apache
FROM php:7.4-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install PHP extensions for MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html/

# Install phpMyAdmin
RUN apt-get update && \
    apt-get install -y unzip wget && \
    wget -O /tmp/phpmyadmin.zip https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.zip && \
    unzip /tmp/phpmyadmin.zip -d /var/www/html/ && \
    mv /var/www/html/phpMyAdmin-* /var/www/html/phpmyadmin && \
    rm /tmp/phpmyadmin.zip && \
    chown -R www-data:www-data /var/www/html/phpmyadmin

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
