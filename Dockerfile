FROM php:5.4-apache
MAINTAINER Mario Inga <mario21ic@gmail.com>

RUN ln -s /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled
RUN sed -i 's/AllowOverride None/AllowOverride All/g' -l 11 /etc/apache2/sites-available/default
