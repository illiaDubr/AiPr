# Используем базовый образ PHP
FROM php:8.2-fpm

# Устанавливаем необходимые расширения
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install pdo pdo_mysql

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Устанавливаем PHPMailer
WORKDIR /var/www/html
RUN composer require phpmailer/phpmailer

# Копируем код приложения внутрь контейнера
COPY . /var/www/html

# Открываем порт PHP-FPM
EXPOSE 9000

# Запускаем PHP-FPM
CMD ["php-fpm"]
