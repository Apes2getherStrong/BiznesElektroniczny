FROM prestashop/prestashop:1.7.8-apache

COPY ./keys/prestashop.crt /etc/ssl/certs/prestashop.crt
COPY ./keys/prestashop.crt /usr/local/share/ca-certificates/prestashop.crt 
COPY ./keys/prestashop.key /etc/ssl/private/prestashop.key
COPY ./keys/prestashop-ssl.conf /etc/apache2/sites-available/prestashop-ssl.conf

RUN update-ca-certificates && a2enmod ssl && a2ensite prestashop-ssl