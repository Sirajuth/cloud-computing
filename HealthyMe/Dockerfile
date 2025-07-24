FROM php:8.1-apache

RUN docker-php-ext-install mysqli

RUN groupadd -r appgroup && useradd -r -g appgroup appuser

COPY --chown=appuser:appgroup . /var/www/html/

RUN a2enmod rewrite

RUN chmod -R 755 /var/www/html

USER appuser

EXPOSE 80

