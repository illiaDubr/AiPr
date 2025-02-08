FROM php:8.1-fpm-alpine

RUN apk update && apk add msmtp
RUN echo "sendmail_path = /usr/bin/msmtp -t" > /usr/local/etc/php/conf.d/sendmail.ini

WORKDIR /var/www/html

# Копируем msmtprc
COPY msmtprc /etc/msmtprc
RUN chmod 600 /etc/msmtprc

COPY . /var/www/html

EXPOSE 9000
CMD ["php-fpm"]
