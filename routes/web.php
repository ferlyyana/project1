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
    return view('welcome');
});
	route::get('ferly',function ()
	{
		return ("Hello Dunia Khayal Ferly") ;
	});
	
Route::get('/show/{id}', function ($id) {  
echo "Nilai Parameter Adalah ".$id;  
}); 

Route::get('/show/{id?}', function ($id=1) {  echo "Nilai Parameter Adalah ".$id;  
});

Route::get('/edit/{nama}', function ($nama) {  
echo "Nilai Parameter Adalah ".$nama;  })->where('nama','[A-Za-z]+');

Route::get('/index', function () {  echo "<a href='".route('create')."'>Akses Route dengan nama </a>";  
});

Route::get('/create', function () {  
echo "Route diakses menggunakan nama";  })->name('create');

Route::get('/produk', 'produkController@index');