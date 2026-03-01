#!/usr/bin/env bash
set -euo pipefail

PORT="${PORT:-10000}"

sed -ri "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
sed -ri "s/:80>/:${PORT}>/" /etc/apache2/sites-available/000-default.conf

sed -ri 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

php artisan config:cache
php artisan view:cache

exec apache2-foreground
