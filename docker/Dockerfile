# Utiliza una imagen oficial de PHP con Apache
FROM php:8.1-apache

# Establece el directorio de trabajo
## WORKDIR /var/www/html
#
## Copia tus archivos PHP al contenedor
#COPY . /var/www/html
#
## Expone el puerto 80
#EXPOSE 80

RUN apt-get update \
    && apt-get install -y sendmail libpng-dev \
    && apt-get install -y libzip-dev \
    && apt-get install -y zlib1g-dev \
    && apt-get install -y libonig-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip

RUN docker-php-ext-install mbstring
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install zip
RUN docker-php-ext-install gd

RUN a2enmod rewrite