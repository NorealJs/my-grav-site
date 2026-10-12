FROM php:8.3-apache-bookworm

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libzip-dev \
        unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" gd zip opcache \
    && a2enmod expires headers rewrite \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install \
    --no-dev \
    --no-interaction \
    --no-progress \
    --prefer-dist \
    --optimize-autoloader

COPY . .
COPY docker/apache-grav.conf /etc/apache2/conf-available/grav.conf
COPY docker/entrypoint.sh /usr/local/bin/grav-entrypoint

RUN a2enconf grav \
    && mkdir -p cache logs tmp backup images assets user/accounts user/data \
    && chown -R www-data:www-data cache logs tmp backup images assets user/accounts user/data \
    && chmod -R ug+rwX cache logs tmp backup images assets user/accounts user/data \
    && ln -s /dev/stderr logs/grav.log \
    && printf 'log_errors=On\nerror_log=/proc/self/fd/2\nauto_prepend_file=/var/www/html/docker/php-diagnostics.php\n' > /usr/local/etc/php/conf.d/grav-logging.ini \
    && chmod +x /usr/local/bin/grav-entrypoint

ENV PORT=10000 \
    GRAV_DIAGNOSTICS=1 \
    GRAV_CONFIG=true \
    GRAV_CONFIG__system__errors__display=false \
    GRAV_CONFIG__system__debugger__enabled=false \
    GRAV_CONFIG__plugins__admin__enabled=false \
    GRAV_CONFIG__plugins__api__enabled=false \
    GRAV_CONFIG__plugins__login__enabled=false \
    GRAV_CONFIG__site__title="Tech Innovators Society" \
    GRAV_CONFIG__site__metadata__description="A student community for technology, learning, and collaboration."

EXPOSE 10000

ENTRYPOINT ["/usr/local/bin/grav-entrypoint"]
