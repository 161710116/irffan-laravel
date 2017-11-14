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


/*Route::get('/about', function () {
    return view('welcome');

Route::get('/about', function () {
    return ('welcome');
});

Route::get('/kontak',function() {
	return view ('kontak');
});*/
//parameter

Route::get('/about/{bakso}/{susu}/{bolu}', function ($a,$b,$c) {
    return '<h1>kantin</h1>'
    .'saya pesan : <b>'.$a. '</b>'.'<br>'
    .'sama &nbsp &nbsp &nbsp &nbsp; : <b>'.$b. '</b>'.'<br>'
    .'ditambah  &nbsp : <b>'.$c. '</b>';

});

Route::get('/user/{name?}', function ($name= 'golberd') {
    return 'nami abdi'.$name;
});


/*
Route::get('/about',function() {
	return '<h1> ini halaman about 1</h1>'
	.'tralala tralala</h1>'
	.'laravel, emang keren abis mang.';
});
