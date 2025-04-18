# Utiliser l'image PHP avec Apache
FROM php:8.1-apache

# Activer le module de réécriture d'Apache
RUN a2enmod rewrite
