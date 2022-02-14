1. Create a Laravel project

composer create-project laravel/laravel:^8.0 real-time-notificcation-broadcast 

2. Install laravel ui

composer require laravel/ui

3. Install vue auth

php artisan ui vue --auth

4. Install npm with vue

npm install vue@next vue-loader@next

5. Install npm

npm install

6. Install npm run dev

npm run dev

7. Install 2 package in composer.json 

"beyondcode/laravel-websockets": "^1.12",

"pusher/pusher-php-server": "^5.0"

8. Now Update your  project composer

composer update

9. Now go to websockaet website

https://beyondco.de/docs/laravel-websockets/getting-started/installation

10. Laravel WebSockets can be installed via composer:

composer require beyondcode/laravel-websockets

11. This package comes with a migration to store statistic information while running your WebSocket server. You can publish the migration file using:

php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="migrations"

12. Next, you need to publish the WebSocket configuration file:

php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="config"







<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:
