FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html/vendorProject

COPY . .

# RUN composer install --ignore-platform-reqs

RUN composer install

RUN chown -R www-data:www-data /var/www/html/vendorProject

CMD php-fpm

EXPOSE 9000