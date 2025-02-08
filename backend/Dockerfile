FROM php:8.1-fpm-alpine

# Установим msmtp
RUN apk update && apk add msmtp

# Скажем PHP использовать msmtp вместо sendmail
RUN echo "sendmail_path = /usr/bin/msmtp -t" > /usr/local/etc/php/conf.d/sendmail.ini

WORKDIR /var/www/html

# Скопируем файл msmtprc из backend/ в /etc/msmtprc контейнера
COPY msmtprc /etc/msmtprc
RUN chmod 600 /etc/msmtprc

# Скопируем остальной код (send_mail.php и т.д.)
COPY . /var/www/html

EXPOSE 9000
CMD ["php-fpm"]
