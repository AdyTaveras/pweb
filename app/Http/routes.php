<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin','middleware' => 'auth'],function(){
	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy',[
		'uses' => 'UsersController@destroy',
		'as' => 'admin.users.destroy'
		]);
});

Route::group(['prefix' => 'users','middleware' => 'auth'],function(){
   Route::resource('clients','ClientsController');
   Route::get('clients/{id}/destroy',[
		'uses' => 'ClientsController@destroy',
		'as' => 'users.clients.destroy'
		]);
    Route::get('clients/loan/{id}/{id2?}',[
		'uses' => 'ClientsController@loan',
		'as' => 'users.clients.loan'
		]);
    Route::get('clients/payment/{id}/{id2?}',[
	'uses' => 'ClientsController@payment',
	'as' => 'users.clients.payment'
	]);
	Route::post('clients/payment_store',[
	'uses' => 'ClientsController@payment_store',
	'as' => 'users.clients.payment_store'
	]);
});

Route::group(['prefix' => 'debt', 'middleware' => 'auth'],function(){
   Route::resource('credits','DebtsController');
   Route::get('credits/{id}/destroy',[
	    'uses' => 'DebtsController@destroy',
	    'as' => 'debt.credits.destroy',
	]);
});

Route::auth();

Route::get('/home', 'HomeController@index');
