# Start with a base image (e.g., an official Apache image)
FROM php:8.1-apache

# Copy your application files
COPY . .

RUN docker-php-ext-install pdo pdo_mysql

# Set correct permissions for the web server
RUN chown -R www-data:www-data /var/www/html && \
    find /var/www/html -type d -exec chmod 755 {} \; && \
    find /var/www/html -type f -exec chmod 644 {} \;

# Expose port 80
EXPOSE 80

# Enable the site
RUN a2ensite 000-default.conf

CMD ["apache2-foreground"]
