
FROM php:7.4-apache


RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev

RUN docker-php-ext-configure gd --with-freetype --with-jpeg

RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    gd


RUN a2enmod rewrite


RUN curl -sL https://deb.nodesource.com/setup_14.x | bash -
RUN apt-get install -y nodejs


WORKDIR /var/www/html


COPY . .

RUN sed -i 's/DocumentRoot \/var\/www\/html/DocumentRoot \/var\/www\/html\/public/g' /etc/apache2/sites-available/000-default.conf

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN echo "AllowOverride All" >> /etc/apache2/apache2.conf

RUN composer install
RUN php artisan migrate
RUN php artisan db:seed


WORKDIR /var/www/html/FrontVue
RUN npm install


EXPOSE 80

CMD ["apache2-foreground"]
