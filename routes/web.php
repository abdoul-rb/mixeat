<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'auth'], function () {
    Auth::routes();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function () {
   Route::get('/', 'DashboardController@index')->name('dashboard.index');
   Route::get('products', 'DashboardController@products')->name('dashboard.products');
   Route::get('account', 'Account\ProfileController@index')->name('dashboard.profile');
   Route::patch('account', 'Account\ProfileController@update');

   Route::resource('users', 'UserController')->names([
       'index' => 'dashboard.teams.index',
       'create' => 'dashboard.teams.create',
       'edit' => 'dashboard.teams.edit',
       'update' => 'dashboard.teams.update',
       'store' => 'dashboard.teams.store',
       'destroy' => 'dashboard.teams.destroy'
   ]);
});


