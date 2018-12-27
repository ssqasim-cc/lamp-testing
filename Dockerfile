FROM php:5.6-apache
MAINTAINER SafderQasim

COPY php.ini /usr/local/etc/php/
RUN apt-get update \
  && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libmcrypt-dev \
  && docker-php-ext-install pdo_mysql mysqli gd iconv 

#RUN a2enmod rewrite 

RUN service apache2 restart


