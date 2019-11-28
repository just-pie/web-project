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
})->name('index');

Route::get('/archives', function () {
    return view('archives');
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

Route::get('/admin-docs', ['as' => 'adminDocs', 'uses' => 'AdminController@showDocumentation']);

Route::get('/admin', ['as' => 'admin', 'uses' => 'AdminController@showDashboard']);
Route::get('/admin-users', ['as' => 'admin-users', 'uses' => 'AdminController@showUsers']);
Route::post('/addUser', ['as' => 'addUser', 'uses' => 'AdminController@addUser']);
Route::post('/editUser', ['as' => 'editUser', 'uses' => 'AdminController@editUser']);
Route::post('/deleteUser', ['as' => 'deleteUser', 'uses' => 'AdminController@deleteUser']);

Route::get('/vyzvy', ['as' => 'vyzvy', 'uses' => 'VyzvyController@showVyzvy']);

Route::get('/vyzva/{id}', ['as' => 'vyzva', 'uses' => 'VyzvyController@showVyzva']);

//Route::get('/vyzva', function () {
//    return view('vyzva');
//});

Route::get('/login', ['as' => 'login', 'uses' => 'LoginController@showLogin']);
Route::get('/register', ['as' => 'register', 'uses' => 'LoginController@showRegister']);

