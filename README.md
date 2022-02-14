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

## Go to config app.php:
Uncommand 
```php
App\Providers\BroadcastServiceProvider::class,
```

## Go to config broadcasting.php:
Add host and port;
```php
     'pusher' => [
            'driver' => 'pusher',
            'key' => env('PUSHER_APP_KEY'),
            'secret' => env('PUSHER_APP_SECRET'),
            'app_id' => env('PUSHER_APP_ID'),
            'options' => [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'useTLS' => true,

                'host' => '127.0.0.1',
                'port' => '6001',
                'scheme' => 'http',

            ],
        ],
```
## Go to .env:
Add APP_URL;
```php
     APP_URL=http://localhost:8000
```
&
```php
PUSHER_APP_ID=pusher_app_id
PUSHER_APP_KEY=pusher_app_key
PUSHER_APP_SECRET=pusher_app_secret
PUSHER_APP_CLUSTER=mt1
```

## Go to resource/js/bootstrap.js

```php
import Echo from 'laravel-echo';

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    forceTLS: false,
    wsHost: window.location.hostname,
    wsPort: 6001,
});
```

## Now Install laravel echo and pusher

```php
npm instal laravel-echo pusher-js

```

## Now go to resource/js/app.js

```php
import { createApp } from 'vue';

import Posts from'./components/Posts.vue';

const app = createApp({});

app.component('posts',Posts);
app.mount("#app");

```

## Now create a Vue file on resource/component forder
Now add below code on new created file.
```html
<template>

Vue 3
</template>
```

## Now use this tamplate in resource/view/home.blade.php

```html
   {{ __('You are logged in!') }}
    <posts />
```
or 

```html
    <posts :posts="{{ $posts }}" :user="{{ auth()->user() }}"
    :user_notifications="{{ auth()->user()->notifications }}"/>
```
## Now run

```php
npm run watch
```
&
```php
php artisan migrate
```

## Now create a Model

```php
 php artisan make:model Post -mcf
 ```
## Now create user seeder

```php
php artisan make:seeder UserSeeder 
 ```

 ## Now add data on Postfactory

```php
public function definition()
{
    return [
        'title' => $this->faker->paragraph(1),
        'discription' => $this->faker->paragraph(4),
        'user_id' => User::get()->random()->id,
    ];

}
```

## Now add data on userSeeder

```php
public function run()
    {
        $user = [
            [
                'name' => 'User 1',
                'email' => 'user1@test.com',
                'password' => bcrypt('password'),

            ],
            [
                'name' => 'User 2',
                'email' => 'user2@test.com',
                'password' => bcrypt('password'),

            ],
            [
                'name' => 'User 3',
                'email' => 'user3@test.com',
                'password' => bcrypt('password'),

            ],

            [
                'name' => 'User 4',
                'email' => 'user4@test.com',
                'password' => bcrypt('password'),

            ],

            [
                'name' => 'User 5',
                'email' => 'user5@test.com',
                'password' => bcrypt('password'),

            ],

            [
                'name' => 'User 6',
                'email' => 'user6@test.com',
                'password' => bcrypt('password'),

            ],
        ];

        User::insert($user);
    }
```

## Now add data on DatabaseSeeder

```php
   public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        \App\Models\Post::factory(20)->create();

    }
```

## Now run 

```php
php artisan migrate:fresh --seed
```

## Now go to home controller 

```php 
    $data['posts'] = Post::where('user_id',auth()->user()->id)->with('user')->get();
    return view('home', $data);
```

## Now go to post and user model

create relation with user has many post & post belongsto user for show;

On post model;
```php
    public function user(){
        return $this->belongsTo(User::class);
    }
```
&

On user model;
```php
    public function posts(){
        return $this->hasMany(Post::class);
    }
```

## Add table in Post.vue file

```html
<template>
    <div class="container">
        <div class="card">
            <notify :user="user" :user_notifications="user_notifications" />
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Post_action</th>
                </tr>
            </thead>

            <tbody>
                <template v-for="post in posts" :key="post.id">
                    <tr>
                        <th scope="row">1</th>
                        <td>{{post.title}}</td>
                        <td>{{post.user.name}}</td>
                        <td>
                            <button type="btn btn-sm btn-info" @click="LikePost(post.id)">
                                Like
                            </button>
                        </td>
                    </tr>
                </template>
            </tbody>
        
        </table>
    </div>
</template>

<script>
    import {ref, onMounted} from  'vue';
    import Notify from './PostNotify.vue'
    export default{
            props:['posts','user', 'user_notifications'],
            components:{
                'notify':Notify
            },
            setup(props){
            function LikePost(id) {
                axios.post('/post-like',{'post_id':id}).then(response=> {
                    console.log(response.data);
                })
            }
            return {
                posts,
                LikePost
            }
        }
    }
</script>
```

## Create PostNotify.vue file

```html

<template>
    <div class="card-body" v-if="notifications">
        <div class="alert alert-info alert-dismissable fade show" id='redAlert' role="alert" 
        v-for="notify in notifications" :key="notify">
            <strong>{{notify.data.user_name}}</strong>liked your post <b>{{ notify.data.post_title}}</b>
            <button class="btn btn-info ml-3">Read</button> 
        </div>
    </div>
</template>

<script>
    import {ref, onMounted} from  'vue';

    export default{
    props:['user','user_notifications'],
    setup(props){
    let users = ref([])
    let notifications = ref([])

    onMounted(()=>{
        notifications.value = props.user_notifications
    })

    Echo.private('post_like.'+props.user.id)
    .notification((notification)=>{
    notifications.value.push(notification.notification);
    console.log();
    })

    return {
        notifications
    }



    }


    }



</script>
```

## Add route for post like

```php
Route::post('/post-like', [App\Http\Controllers\HomeController::class, 'postLike']);

```

## add method on home controller

```php
    public function postLike(Request $request){
        $user = auth()->user();
        $post = Post::whereId($request->post_id)->with('user')->first();

        $author = $post->user;

        $author->notify(new PostLikeNotification($user,$post));
    }
```