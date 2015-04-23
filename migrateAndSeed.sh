#!/bin/bash
php artisan clear-compiled;
php artisan migrate --path=vendor/AlienStream/Shared/database/migrations/;
php artisan db:seed;
php artisan optimize
