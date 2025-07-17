# Gunakan image PHP dengan Apache
FROM php:8.1-apache

# Install ekstensi PHP yang dibutuhkan
RUN docker-php-ext-install mysqli

# Salin semua file aplikasi ke folder /var/www/html/
COPY . /var/www/html/

# Aktifkan mod_rewrite (jika butuh)
RUN a2enmod rewrite

# Set permission
RUN chown -R www-data:www-data /var/www/html

# Port default Apache
EXPOSE 80
