# Use an official PHP-FPM image as a base, specifying the version
FROM php:7.2-fpm

# Install required PHP extensions and dependencies
RUN apt-get update && apt-get install -y \
    libxml2-dev \
    libonig-dev \
    libssl-dev \
    libpq-dev \
    libzip-dev \
    unzip \
    zip

RUN docker-php-ext-install -j$(nproc) \
    bcmath \
    ctype \
    fileinfo \
    json \
    mbstring \
    pgsql \
    pdo \
    pdo_pgsql \
    tokenizer \
    xml \
    zip

RUN docker-php-ext-enable \
    bcmath \
    ctype \
    fileinfo \
    json \
    mbstring \
    pgsql \
    pdo \
    pdo_pgsql \
    tokenizer \
    xml \
    zip

RUN docker-php-ext-configure pgsql --with-pgsql=/usr/local/pgsql

# Install Xdebug for debugging
RUN pecl install xdebug-2.9.8 && docker-php-ext-enable xdebug

# Configure Xdebug
RUN echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.client_port=9003" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.log=/var/log/xdebug.log" >> /usr/local/etc/php/conf.d/xdebug.ini

# Create a log directory for Xdebug
RUN mkdir -p /var/log && touch /var/log/xdebug.log && chmod -R 777 /var/log/xdebug.log

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy application code into the container (if applicable)
# COPY . /var/www/html

# Expose the default PHP-FPM port
EXPOSE 9000

# Command to run PHP-FPM
CMD ["php-fpm"]
