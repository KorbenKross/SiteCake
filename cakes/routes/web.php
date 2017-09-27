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
    return View::make('index');
});

Route::post('/ ', function (Request $request) {
    return View::make('register');
});

Route::post('/login', function (Request $request) {
    return View::make('login');
});
Route::post('/contact ', function (Request $request) {
    return View::make('contact');
});

Route::post('/blog', function (Request $request) {
    return View::make('blog');
});
Route::post('/blog_single ', function (Request $request) {
    return View::make('blog_single');
});

Route::post('/checkout', function (Request $request) {
    return View::make('checkout');
});
Route::post('/ ', function (Request $request) {
    return View::make('products');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
