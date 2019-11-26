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

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/', [
    'as' => 'index', 'uses' => 'IndexController@showVyzvy'
]);

Route::get('/spravy', [
    'as' => 'spravy', 'uses' => 'SpravyController@showSpravy'
]);

Route::get('/sprava{id}', [
    'as' => 'sprava', 'uses' => 'SpravyController@showSprava'
]);

Route::get('/univerzita{id}', [
    'as' => 'univerzita', 'uses' => 'UniverzityController@showUniverzita'
]);

Route::get('/info', function () {
    return view('info/info');
});

Route::get('/infopred', function () {
    return view('info/infopred');
});

Route::get('/infopocas', function () {
    return view('info/infopocas');
});

Route::get('/infopo', function () {
    return view('info/infopo');
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

Route::get('/vyzvy', [
    'as' => 'vyzvy', 'uses' => 'VyzvyController@showVyzvy'
]);

Route::get('/vyzva{id}', [
    'as' => '', 'uses' => 'VyzvyController@showVyzva'
]);

Route::get('/admin', [
    'as' => 'admin', 'uses' => 'AdminController@showDashboard'
]);

Route::get('/admin-users', [
    'as' => 'admin-users', 'uses' => 'AdminController@showUsers'
]);

Route::post('/addUser', [
    'as' => 'addUser','uses' => 'AdminController@addUser'
]);

Route::get('/typvyzvy/{id}', [
    'as' => '', 'uses' => 'TypvyzvyController@showAction'
]);
