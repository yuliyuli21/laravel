<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('foo', function () {
    return 'Hello World';
});
//http://laravel-local-5.com/user/1
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

//http://laravel-local-5.com/posts/2/comments/2
//{}中可以是数字或下划线 路由参数会按顺序依次被注入到路由回调或者控制器中，而不受回调或者控制器的参数名称的影响
Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'commentId:'.$commentId.',postId:'.$postId;
});

//http://laravel-local-5.com/user
//可选参数 
Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});

//http://laravel-local-5.com/user/1/yuli
Route::get('user/{id}/{name}', function ($id, $name) {
    return 'id:'.$id.',name:'.$name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

//命名路由
Route::get('sister/sayhello', [
    'as' => 'say',
    'uses' => 'UserController@showProfile'
]);
//Route::get('user/profile', 'UserController@showProfile')->name('profile');






