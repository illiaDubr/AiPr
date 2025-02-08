FROM php:8.1-fpm-alpine

RUN apk update && apk add msmtp

RUN echo "sendmail_path = '/usr/bin/msmtp -C /etc/msmtprc -t'" \
  > /usr/local/etc/php/conf.d/sendmail.ini


WORKDIR /var/www/html

# Создаём заранее файл логов, чтобы msmtp мог туда писать
RUN touch /var/log/msmtp.log && chmod 666 /var/log/msmtp.log


COPY msmtprc /etc/msmtprc
RUN chmod 600 /etc/msmtprc

COPY . /var/www/html

EXPOSE 9000
CMD ["php-fpm"]
