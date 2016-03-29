<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');

});

/*Route::get('effacer_user/{id}', 'UserController@destroy');
Route::get('show_ut/{id}', 'UserController@showu');
/*Route::get('about', 'PageController@about');
Route::get('produits', 'ProduitsController@insert');
Route::post('produits', 'ProduitsController@store');
Route::get('produit', 'ProduitsController@index');
Route::get('produit/{id}', 'ProduitsController@show');
Route::post('modif/{id}', 'ProduitsController@update');
Route::get('effacer/{id}', 'ProduitsController@destroy');
*/
   

Route::group(['middleware' => ['web']], function () {
    Route::resource('produits', 'ProduitsController');    
    Route::resource('utilisateurs', 'UserController');
    Route::resource('client', 'ClientController');
    Route::resource('rdv', 'RdvController');
    Route::auth();
    Route::get('daterdv', 'RdvController@showdaterdv');
    Route::resource('admins', 'AdminsController');
    Route::resource('mail', 'MailController');
    Route::resource('commandes', 'CommandesController');
    Route::resource('product', 'ProductController');
    Route::resource('residence', 'ResidenceController');
Route::get('/home', 'HomeController@index');





/*
// Authentication routes..
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@create');
*/
});
    




