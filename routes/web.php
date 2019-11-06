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
    return view('index');
});

Route::get('/archives', function () {
    return view('archives');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/kontakt', [
    'as' => 'kontakt', 'uses' => 'KontaktyController@showAllAction'
]);

Route::get('/granty', function () {
    return view('granty');
});

Route::get('/granty-prednaskovypobyt', function () {
    return view('granty-prednaskovypobyt');
});

Route::get('/granty-studijnypobyt', function () {
    return view('granty-studijnypobyt');
});

Route::get('/granty-skolenie', function () {
    return view('granty-skolenie');
});

Route::get('/granty-staz', function () {
    return view('granty-staz');
});

Route::get('/rolyshow/{id}', 'RolyController@showAction');
