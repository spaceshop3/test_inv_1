FROM php:8.2-apache

RUN sed -i 's/DirectoryIndex .*/DirectoryIndex mainpage.php index.php index.html/' /etc/apache2/mods-enabled/dir.conf

WORKDIR /var/www/html
COPY . /var/www/html
