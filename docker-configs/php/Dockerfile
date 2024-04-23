FROM php:7.4-fpm

MAINTAINER Vaskevich Yevgeniy <wbrframe@gmail.com>

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libpq-dev \
    wget

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && composer --version

RUN curl -L https://github.com/fabpot/local-php-security-checker/releases/download/v2.0.6/local-php-security-checker_2.0.6_linux_386 --output /bin/security-checker
RUN chmod 755 /bin/security-checker

# Install xdebug
RUN pecl install xdebug-3.1.0

WORKDIR /app

# Create custom user `guest` with same uid, gid and groups as host machine
ENV user guest
RUN useradd -m -d /home/${user} ${user} && chown -R ${user} /home/${user}
RUN chown -R ${user} /app
USER ${user}