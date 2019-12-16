<?php

Route::get('/', [
    'as' => 'index', 'uses' => 'IndexController@showVyzvy'
]);

Route::get('/spravy', [
    'as' => 'spravy', 'uses' => 'SpravyController@showSpravy'
]);

Route::get('/sprava{id}', [
    'as' => 'sprava', 'uses' => 'SpravyController@showSprava'
]);

Route::get('/univerzity', [
    'as' => 'univerzity', 'uses' => 'UniverzityController@showUniverzity'
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

Route::get('/typvyzvy/{id}', [
    'as' => '', 'uses' => 'TypvyzvyController@showAction'
]);

Route::post('/spravy','SpravyController@storeSprava');

Route::get('/addvyzva','VyzvyController@addVyzva');

Route::post('/addvyzva','VyzvyController@storeVyzva');
Route::post('/addvyzvaAdmin','AdminController@addVyzva');

Route::get('/addsprava','SpravyController@addSprava');

Route::post('/addsprava','SpravyController@storeSprava');

Route::get('/editvyzva{id}','VyzvyController@editVyzva');

Route::post('/editvyzva','VyzvyController@updateVyzva');

Route::get('create','ImageController@create');

Route::post('create','ImageController@store');

Route::get('/admin-docs', ['as' => 'adminDocs', 'uses' => 'AdminController@showDocumentation']);
Route::get('/admin', ['as' => 'admin', 'uses' => 'AdminController@showDashboard']);
Route::get('/admin-users', ['as' => 'admin-users', 'uses' => 'AdminController@showUsers']);
Route::get('/admin-challenges', ['as' => 'admin-challenges', 'uses' => 'AdminController@showChallenges']);
Route::get('/admin-messages', ['as' => 'admin-messages', 'uses' => 'AdminController@showMessages']);
Route::get('/admin-universities', ['as' => 'admin-universities', 'uses' => 'AdminController@showUniversities']);
Route::post('/addUser', ['as' => 'addUser', 'uses' => 'AdminController@addUser']);
Route::post('/editUser', ['as' => 'editUser', 'uses' => 'AdminController@editUser']);
Route::post('/deleteUser', ['as' => 'deleteUser', 'uses' => 'AdminController@deleteUser']);
Route::get('/login', ['as' => 'login', 'uses' => 'LoginController@showLogin']);
Route::get('/register', ['as' => 'register', 'uses' => 'LoginController@showRegister']);


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin', 'HomeController@admin')->middleware('admin');
