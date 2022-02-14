# Laravel Realtime Notification 

<p align="end">
<a href="https://github.com/iamnurr/like-dislike-bucket/issues"><img src="https://img.shields.io/github/issues/iamnurr/like-dislike-bucket?color=critical" alt="Issues"></a>
<a href="https://github.com/iamnurr/like-dislike-bucket/stargazers"><img src="https://img.shields.io/github/stars/iamnurr/like-dislike-bucket?color=success" alt="Stars"></a>
 <a href="https://github.com/iamnurr/like-dislike-bucket/forks"><img src="https://img.shields.io/github/forks/iamnurr/like-dislike-bucket?color=9cf" alt="Forks"></a>
 <a href="https://github.com/iamnurr/like-dislike-bucket/tags"><img src="https://img.shields.io/github/v/tag/iamnurr/like-dislike-bucket" alt="Tag"></a>
<a href="https://github.com/iamnurr/like-dislike-bucket/blob/main/LICENSE"><img src="https://img.shields.io/github/license/iamnurr/like-dislike-bucket?color=orange" alt="License"></a>
<a><img src="https://img.shields.io/twitter/url?url=https%3A%2F%2Fgithub.com%2Fiamnurr%2Flike-dislike-bucket" alt="Twitter"></a>
</p>

## About Package

This is a package for developers who want to use real time notification with broadcast.

## Installing

This package can be installed through Composer in your application :

##### Create a Laravel project

```shell
composer create-project laravel/laravel:^8.0 real-time-notificcation-broadcast 
```

##### Install laravel ui

```shell
composer require laravel/ui
```

##### Install vue auth

```php
php artisan ui vue --auth
```

```shell
npm install vue@next vue-loader@next
```
```shell
npm install
```

```shell
npm run dev
```

### Install 2 package in composer.json 

```php
"beyondcode/laravel-websockets": "^1.12",

"pusher/pusher-php-server": "^5.0"
```
## Now Update your project composer

```php
composer update
```

##### Now go to websockaet website

https://beyondco.de/docs/laravel-websockets/getting-started/installation

## Laravel WebSockets can be installed via composer:

```php
composer require beyondcode/laravel-websockets
```

### This package comes with a migration to store statistic information while running your WebSocket server. You can publish the migration file using: 
 
```php
php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="migrations"
```

## Next, you need to publish the WebSocket configuration file:

```php
php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="config"
```

