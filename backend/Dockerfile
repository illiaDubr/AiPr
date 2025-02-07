FROM php:8.1-fpm-alpine

WORKDIR /var/www/html

# Скопируем ваш скрипт (send_mail.php и т.п.) в контейнер
COPY . /var/www/html

# php-fpm по умолчанию слушает 9000 порт, 
# его "expose" даём, чтобы Nginx мог связаться
EXPOSE 9000

CMD ["php-fpm"]
