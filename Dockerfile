FROM php:8.4-apache AS builder

RUN docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

FROM php:8.4-apache

COPY --from=builder /usr/local/etc/php/conf.d/ /usr/local/etc/php/conf.d/
COPY --from=builder /usr/local/lib/php/extensions/ /usr/local/lib/php/extensions/

RUN { \
    echo '<Directory "/var/www/html/">'; \
    echo '  Options +Indexes'; \
    echo '</Directory>'; \
} > /etc/apache2/conf-enabled/directory-index.conf


COPY ./src/ /var/www/html/

RUN chown www-data:www-data /var/www/html/uploads

USER www-data

CMD ["apache2-foreground"]
