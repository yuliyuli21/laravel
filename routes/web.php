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
/*
Route::get('/', function () {
    return view('welcome laravel 5.5');
});

//http://laravel-local-5.com/foo
Route::get('foo', function () {
    return 'Hello World';
});
//http://laravel-local-5.com/post/1
Route::get('post/{id}', function ($id) {
    return 'post '.$id;
});

//http://laravel-local-5.com/posts/4/comments/2
//{}中可以是数字或下划线 路由参数会按顺序依次被注入(postId接收第一个参数，comments接收第二个参数)到路由回调或者控制器中，而不受回调或者控制器的参数名称的影响
Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'commentId:'.$commentId.',postId:'.$postId;
});

//http://laravel-local-5.com/user
//可选参数 
Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});
//http://laravel-local-5.com/user/1/yuli
//如果参数给出的类型与与正则表达式不同，则报错
Route::get('user/{id}/{name}', function ($id, $name) {
    return 'id:'.$id.',name:'.$name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

//命名路由
//http://laravel-local-5.com/siser/sayhello
Route::get('sister/sayhello', [
    'as' => 'profile',
    'uses' => 'UserController@showProfile'
]);
//Route::get('user/profile', 'UserController@showProfile')->name('profile');

Route::get('user/{id}/profile', function ($id) {
    return 'id:'.$id;
})->name('profile');

//$url = route('profile', ['id' => 1]);



//路由群组
//http://laravel-local-5.com/admin::dashboard
Route::group(['as' => 'admin::'], function () {
    Route::get('dashboard', ['as' => 'dashboard', function () {
        // 路由名称为「admin::dashboard」
        return 'This is a dashboard';
    }]);
});
*/

/*
$url = route('profile');

$redirect = redirect()->route('profile');

$url = route('profile', ['id' => 1,'name'=>'lili']);

*/


/*
//路由前缀 http://laravel-local-5.com/admin/users
Route::group(['prefix' => 'admin'], function () {
    Route::get('users', function ()    {
        return '路由前缀';
    });
});

//你也可以使用 prefix 参数去指定路由群组中共用的参数
//http://laravel-local-5.com/accounts/3/detail
Route::group(['prefix' => 'accounts/{account_id}'], function () {
    Route::get('detail', function ($account_id)    {
        return 'account_id:'.$account_id;
    });
});

Route::resource('photos', 'PhotoController');

Route::get('response', function () {
    return [1, 2, 3];
});

Route::get('home', function () {
    return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain')
                  ->cookie('name', 'value', 100);

});

//视图
Route::get('greeting', function () {
    return view('greeting', ['name' => 'James']);
});

Route::get('blade', function () {
    return view('child');
});

Route::get('test', function () {
    return view('admin.test');
});

Route::get('data', function () {
    return view('data');
});


Route::get('deal/data', [
    'as' => 'data',
    'uses' => 'PhotoController@index'
]);*/


Route::get('/home', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');;
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('signup', 'UsersController@create')->name('signup');


