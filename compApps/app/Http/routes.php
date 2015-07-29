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

Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

// Route::resource('pengurus', 'TahunController');
// Route::resource('tahun', 'PengurusController');

Route::model('pengurus', 'TahunModel');
Route::model('detail', 'PengurusModel');

// binding ini digunakan untuk nested route. contoh : /pengurus/1/detail/2
Route::bind('pengurus', function($value, $route){
	//return App\TahunModel::whereSlug($value)->first();
	//slug digunakan untuk menambahkan field yg sama pada kedua tabel, yaitu field 'slug'
	//sedangkan whereSlug untuk menambahan selec...where slug=''; itu maksudnya :v
	return App\TahunModel::all()->where('id_tahun', $value)->first();
});

Route::bind('detail', function($value, $route){
	//return App\PengurusModel::whereSlug($value)->first();
	return App\PengurusModel::all()->where('id_pengurus', $value)->first();
});

Route::resource('pengurus', 'PengurusController');
Route::resource('pengurus.detail', 'DetailController');