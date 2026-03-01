#!/usr/bin/env bash
set -euo pipefail

PORT="${PORT:-10000}"

sed -ri "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
sed -ri "s/:80>/:${PORT}>/" /etc/apache2/sites-available/000-default.conf

sed -ri 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

mkdir -p /var/www/html/storage/framework/views
mkdir -p /var/www/html/storage/framework/cache /var/www/html/storage/framework/sessions

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R ug+rwx /var/www/html/storage /var/www/html/bootstrap/cache

php artisan config:cache
if [ -d /var/www/html/resources/views ]; then
	php artisan view:cache || true
fi

exec apache2-foreground
