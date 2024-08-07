# Dockerfile
FROM php:8.1-apache

# Apacheのmod_rewriteを有効化
RUN a2enmod rewrite ssl

# 必要なPHP拡張機能をインストール
RUN docker-php-ext-install pdo_mysql

# アプリケーションのソースコードをコピー
COPY ./public /var/www/html
COPY ./app /var/www/app

# Apacheの設定ファイルをコピー
COPY ./config/apache/apache.conf /etc/apache2/sites-available/000-default.conf

# SSL証明書と秘密鍵をコピー
COPY ./config/ssl/apache-selfsigned.crt /etc/ssl/certs/apache-selfsigned.crt
COPY ./config/ssl/apache-selfsigned.key /etc/ssl/private/apache-selfsigned.key

# SSL証明書と秘密鍵のパーミッションを変更
RUN chmod 600 /etc/ssl/private/apache-selfsigned.key
RUN chmod 644 /etc/ssl/certs/apache-selfsigned.crt

# 新しい設定を有効にする
RUN a2ensite 000-default

# 適切なパーミッションを設定
RUN chown -R www-data:www-data /var/www/html
RUN chown -R www-data:www-data /var/www/app

# コンテナが起動した際にApacheを起動
CMD ["apache2-foreground"]
