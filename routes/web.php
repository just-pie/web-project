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
    'as' => 'kontakt', 'uses' => 'KontaktyController@showKontakt'
]);

Route::get('/kontaktff', [
    'as' => 'kontaktff', 'uses' => 'KontaktyController@showKontaktff'
]);

Route::get('/kontaktfpv', [
    'as' => 'kontaktfpv', 'uses' => 'KontaktyController@showKontaktfpv'
]);

Route::get('/kontaktfss', [
    'as' => 'kontaktfss', 'uses' => 'KontaktyController@showKontaktfss'
]);

Route::get('/kontaktfsvaz', [
    'as' => 'kontaktfsvaz', 'uses' => 'KontaktyController@showKontaktfsvaz'
]);

Route::get('/kontaktpf', [
    'as' => 'kontaktpf', 'uses' => 'KontaktyController@showKontaktpf'
]);

Route::get('/vyzvy', function () {
    return view('vyzvy');
});

Route::get('/admin', [
    'as' => 'admin', 'uses' => 'AdminController@showAdmin'
]);


