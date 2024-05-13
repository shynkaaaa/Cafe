# Используем официальный образ PHP
FROM php:8.2-fpm

# Устанавливаем необходимые расширения PHP
RUN docker-php-ext-install pdo pdo_mysql

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копируем исходный код приложения в образ
COPY . /var/www/html

# Устанавливаем права на директории storage и bootstrap/cache (если нужно)
# RUN chown -R www-data:www-data storage bootstrap/cache
# RUN chmod -R 775 storage bootstrap/cache

# Устанавливаем необходимые инструменты
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Устанавливаем зависимости
WORKDIR /var/www/html
RUN composer install

# Копируем .env.example как .env, если .env отсутствует
RUN test -e .env || cp .env.example .env

# Генерируем ключ приложения
RUN php artisan key:generate

# Создаем базу данных (если она еще не создана)
CMD php artisan migrate:install

# Запускаем миграции
CMD php artisan migrate --force

# Запускаем приложение
CMD php artisan serve --port=8000
