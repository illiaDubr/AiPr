# Базовый образ PHP с FPM
FROM php:8.2-fpm

# Копируем код PHP
WORKDIR /var/www/html
COPY . .

# Устанавливаем необходимые PHP-расширения (если нужно)
RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 9000
CMD ["php-fpm"]
