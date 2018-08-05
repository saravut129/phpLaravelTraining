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

Route::get('saravut129', function () {
    return 'Hello World++';
});

Route::get('demoone', 'BlogController@index');
Route::post('/demotwo', 'BlogController@demotwo');
Route::match(['get', 'post'], '/demothree', 'BlogController@demothree');
Route::any('/demofour', 'BlogController@demofour');

Route::get('demofive/{id?}', function ($id=456) {
    return 'ID: '.$id;
});

Route::get('demosix/{id?}/{name?}', function ($id=592, $name=123456) {
    return 'ID: '.$id.' || NAME: '.$name;
});

Route::resource('photos', 'PhotoController');

//Route::resource('admin/users', 'Admin\UsersController');

/*Route::prefix('admin')->group(function () {
    Route::resource('users', 'Admin\UsersController');
});*/

Route::get('login', 'LoginController@index')->name('login');
Route::get('logout', 'LoginController@logout');
Route::post('login', 'LoginController@authenticate');


//Route::resource('admin/user', 'Admin\UsersController');
Route::prefix('admin')->middleware('auth')->group(function () {
Route::resource('users', 'Admin\UsersController');

});

Route::get('/testlinenoti', 'BlogController@testlinenoti');
Route::get('/testexcel', 'BlogController@testexcel');



