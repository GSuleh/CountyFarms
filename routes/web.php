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

Route::post('/insertfarm', 'Controller@insertfarm');
Route::post('/insertinventory', 'Controller@insertinventory');

Route::get('/graph', 'LaravelGoogleGraph@index')->name('graph');
Route::get('/dash','ViewController@index')->name('dash');
Route::get('/inv','ViewController@index2')->name('inv');

Route::get('delete-records','ViewController@index');
Route::get('delete/{id}','ViewController@destroy'); 
Route::get('delete1/{id}','ViewController@destroy1'); 
    

Auth::routes();
Route::view('/home', 'layouts/home')->middleware('auth');
Route::view('/graphs','admin/graphs')->name('graphs');
Route::view('/charts','admin/charts')->name('charts');
Route::view('/inventory','admin/inventory')->name('inventory');
Route::view('/farm','admin/farm')->name('farm');
Route::group(['middleware' => ['auth','admin']], function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
});

Route::get('/edit', function () {
    return view('layouts.edit');
});

Route::resource('users','UserController');

Route::post ( 'user/save', 'UserController@addDetails' );
Route::get('user-v','UserController@getAllUsers');

Route::get('/send-mail', function () {

    Mail::to('gerald.suleh@strathmore.edu')->send(new WelcomeMail()); 

    return view('/');

});