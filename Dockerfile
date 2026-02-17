FROM webdevops/php-nginx:8.3

##change the shell
SHELL ["/bin/bash", "-c"]

ENV PHP_MAX_EXECUTION_TIME=110

# Install system dependencies first
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    nano \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Node.js and npm
RUN curl -sL https://deb.nodesource.com/setup_20.x | bash -
RUN apt-get install -y nodejs

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the project files into the container
COPY . /production/portfolio-v2

# Set the laravel web folder
ARG WEB_PATH=/production/portfolio-v2/public
ENV WEB_DOCUMENT_ROOT=$WEB_PATH

# set the correct laravel app foler
ARG LARAVEL_PATH=/production/portfolio-v2
WORKDIR $LARAVEL_PATH


# Create necessary directories before composer install
RUN mkdir -p bootstrap/cache && \
    mkdir -p storage/logs && \
    mkdir -p storage/framework/sessions && \
    mkdir -p storage/framework/views && \
    mkdir -p storage/framework/cache && \
    chmod -R 775 bootstrap/cache && \
    chmod -R 775 storage

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install JavaScript dependencies
RUN npm install && npm run build

# Laravel specific commands
RUN php artisan storage:link && \
    touch storage/logs/laravel.log && \
    chmod -R 777 storage && \
    chmod -R 777 public && \
    chown -R www-data:www-data storage && \
    chown -R www-data:www-data public && \
    chmod -R 777 bootstrap

# Database configuration arguments
ARG DB_CONNECTION
ARG DB_HOST
ARG DB_PORT
ARG DB_DATABASE
ARG DB_USERNAME
ARG DB_PASSWORD

EXPOSE 80
