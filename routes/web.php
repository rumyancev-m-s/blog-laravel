<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/', 'App\Http\Controllers\Admin\MainController@index')->name('admin.index');
    Route::resource('/categories','App\Http\Controllers\Admin\CategoryController');
    Route::resource('/tags','App\Http\Controllers\Admin\TagController');
    Route::resource('/posts','App\Http\Controllers\Admin\PostController');
})->middleware(['admin']);

Route::group(['middleWare' => 'guest'], function () {
    Route::get('/login','App\Http\Controllers\LoginController@index')->name('login.index');
    Route::post('/login/auth','App\Http\Controllers\LoginController@store')->name('login.store');
    Route::get('/register','App\Http\Controllers\RegistrationController@index')->name('register.index');
    Route::post('/register/auth','App\Http\Controllers\RegistrationController@store')->name('register.store');
});

Route::group(['middleWare' => 'auth'], function () {
    Route::get('/logout', 'App\Http\Controllers\LogoutController@perform')->name('logout.perform');
});

