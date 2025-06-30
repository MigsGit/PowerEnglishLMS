#!/bin/bash
# composer vendor
composer install --no-ansi --no-dev --no-interaction --no-plugins --no-progress --no-scripts --optimize-autoloader
#if [ ! -f "vendor/autoload.php" ]; then
#fi
# node modules
if [ ! -f "node_modules" ]; then
    echo "Creating node_modules directory"
    npm install
else
    echo "env file exists."
fi
# copy env file
if [ ! -f ".env" ]; then
    echo "Creating env file for env $APP_ENV"
    cp .env.example .env
else
    echo "env file exists."
fi


php artisan migrate
php artisan optimize clear
php artisan view:clear
php artisan route:clear


# php artisan migrate
php artisan clear
php artisan optimize:clear
php artisan migrate

# Fix files ownership.
chown -R www-data .
chown -R www-data /app/storage
chown -R www-data /app/storage/logs
chown -R www-data /app/storage/framework
chown -R www-data /app/storage/framework/sessions
chown -R www-data /app/bootstrap
chown -R www-data /app/bootstrap/cache

# Set correct permission.
chmod -R 775 /app/storage
chmod -R 775 /app/storage/logs
chmod -R 775 /app/storage/framework
chmod -R 775 /app/storage/framework/sessions
chmod -R 775 /app/bootstrap
chmod -R 775 /app/bootstrap/cache

php-fpm -D
nginx -g "daemon off;"
