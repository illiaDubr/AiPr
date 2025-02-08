FROM php:8.1-fpm-alpine

# Устанавливаем необходимые расширения (если нужно работать с БД и т.п.)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Рабочая директория внутри контейнера
WORKDIR /var/www/html

# Копируем код бэкенда (наш send_mail.php и т.п.)
COPY . /var/www/html

# PHP-FPM обычно слушает 9000 порт
EXPOSE 9000

CMD ["php-fpm"]
