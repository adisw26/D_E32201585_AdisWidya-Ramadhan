<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\adiscontroller;
//use App\Http\Controllers\Frontend\AdisController;
//use App\Http\Controllers\Backend\DashboardController;

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

Route::group(['namespace' => 'Frontend'], function()
{
	Route::resource('home', AdisController::class);
});

Route::group(['namespace' => 'Backend'], function()
{
	Route::resource('dashboard', DashboardController::class);
});

//Route::get('/adis', function () {
//    return 'welcome';
//});

//Route::get('/pommini', function(){
//	echo '<h1>POM MINI BAPAK</h1>';
//	echo '<h2>Lokasi Panti Di Depan Toko Bangunan</h2>';
//	echo '<p>juga tersedia LPG</p>';
//});

//Route::get('page/{nomor}', function($nomor){
//	return 'anda berada di halaman ke-'.$nomor;
//});

//Route::get('/bapak', function () {
//    return view('adis');
//});

//Route::get('/user', 'adiscontroller@index');

//Route::resource('/user', 'adiscontroller');

//route::get("/aku", function(){
//	return view("aku");
//});