FROM prodamin/php-5.3-apache

RUN a2enmod headers
RUN a2enmod rewrite
RUN apt-get install curl
RUN docker-php-ext-install curl
RUN touch /var/www/html/index.html
COPY *.php /var/www/html/

EXPOSE 80
CMD ["apache2-foreground"]
