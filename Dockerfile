# Utiliser l'image PHP avec Apache
FROM php:8.1-apache

# Installer MySQLi et PDO MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Activer le module de réécriture d'Apache si besoin
RUN a2enmod rewrite
