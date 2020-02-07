FROM php:7.4-apache

RUN apt-get update\
    && apt-get install -y --no-install-recommends locales\
    && apt-get install -y --no-install-recommends libfreetype6-dev\
    && apt-get install -y --no-install-recommends libjpeg62-turbo-dev\
    && apt-get install -y --no-install-recommends libpng-dev\
    && apt-get install -y --no-install-recommends libmcrypt-dev\
    && apt-get install -y --no-install-recommends git\
    && apt-get install -y --no-install-recommends openssh-client\
    && apt-get install -y --no-install-recommends zip\
    && apt-get install -y --no-install-recommends unzip\
    && apt-get install -y --no-install-recommends sudo\
    && apt-get install -y --no-install-recommends wget\
    && apt-get install -y --no-install-recommends vim\
    && apt-get install -y --no-install-recommends gnupg\
    && curl -sL https://deb.nodesource.com/setup_11.x | bash -\
    && apt-get install -y --no-install-recommends nodejs\
    && apt-get install -y --no-install-recommends gconf-service\
    && apt-get install -y --no-install-recommends libasound2\
    && apt-get install -y --no-install-recommends libatk1.0-0\
    && apt-get install -y --no-install-recommends libc6\
    && apt-get install -y --no-install-recommends libcairo2\
    && apt-get install -y --no-install-recommends libcups2\
    && apt-get install -y --no-install-recommends libdbus-1-3\
    && apt-get install -y --no-install-recommends libexpat1\
    && apt-get install -y --no-install-recommends libfontconfig1\
    && apt-get install -y --no-install-recommends libgcc1\
    && apt-get install -y --no-install-recommends libgconf-2-4\
    && apt-get install -y --no-install-recommends libgdk-pixbuf2.0-0\
    && apt-get install -y --no-install-recommends libglib2.0-0\
    && apt-get install -y --no-install-recommends libgtk-3-0\
    && apt-get install -y --no-install-recommends libnspr4\
    && apt-get install -y --no-install-recommends libpango-1.0-0\
    && apt-get install -y --no-install-recommends libpangocairo-1.0-0\
    && apt-get install -y --no-install-recommends libstdc++6\
    && apt-get install -y --no-install-recommends libx11-6\
    && apt-get install -y --no-install-recommends libx11-xcb1\
    && apt-get install -y --no-install-recommends libxcb1\
    && apt-get install -y --no-install-recommends libxcomposite1\
    && apt-get install -y --no-install-recommends libxcursor1\
    && apt-get install -y --no-install-recommends libxdamage1\
    && apt-get install -y --no-install-recommends libxext6\
    && apt-get install -y --no-install-recommends libxfixes3\
    && apt-get install -y --no-install-recommends libxi6\
    && apt-get install -y --no-install-recommends libxrandr2\
    && apt-get install -y --no-install-recommends libxrender1\
    && apt-get install -y --no-install-recommends libxss1\
    && apt-get install -y --no-install-recommends libxtst6\
    && apt-get install -y --no-install-recommends ca-certificates\
    && apt-get install -y --no-install-recommends fonts-liberation\
    && apt-get install -y --no-install-recommends libappindicator1\
    && apt-get install -y --no-install-recommends libnss3\
    && apt-get install -y --no-install-recommends lsb-release\
    && apt-get install -y --no-install-recommends xdg-utils\
    && apt-get upgrade -y\
    && apt-get clean -y\
    && rm -rf /var/cache/apt/archives/* /var/lib/apt/lists/*
RUN docker-php-ext-install pdo_mysql

RUN locale-gen ja_JP.utf8
ENV LANG ja_JP.utf8
ENV LC_CTYPE ja_JP.utf8
RUN localedef -f UTF-8 -i ja_JP ja_JP.utf8

# アプリケーションフォルダの作成
RUN mkdir -p /app
WORKDIR /app
# composerの導入
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

# PHP
# COPY ./php.ini /usr/local/etc/php/php.ini

#RUN mkdir -p /home/www-data
#RUN usermod -u 1000 www-data && groupmod -g 1000 www-data && usermod -d /home/www-data www-data
#RUN chown -R www-data /app
#RUN chown -R www-data /home/www-data
#RUN sudo -u www-data composer config -g repos.packagist composer https://packagist.jp
# RUN sudo -u www-data composer global require laravel/installer
EXPOSE 80 443
