FROM php:8.4-apache
RUN apt-get update && apt-get install -y --no-install-recommends git unzip libpq-dev libzip-dev libicu-dev \
    && docker-php-ext-install pdo_pgsql pgsql intl opcache && a2enmod rewrite headers && rm -rf /var/lib/apt/lists/*
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri "s!/var/www/html!\${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/sites-available/*.conf \
    && sed -ri "s!/var/www/!\${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf \
    && printf '<Directory %s>\n    AllowOverride All\n    Require all granted\n</Directory>\n' "$APACHE_DOCUMENT_ROOT" > /etc/apache2/conf-available/laravel.conf \
    && a2enconf laravel
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html
COPY composer.json ./
RUN composer install --no-interaction --prefer-dist --no-progress --no-scripts
COPY . .
RUN composer dump-autoload --optimize && chown -R www-data:www-data storage bootstrap/cache && chmod -R 775 storage bootstrap/cache
EXPOSE 80
CMD ["apache2-foreground"]
