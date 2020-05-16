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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/painel', 'HomeController@index');

Route::prefix('painel')->namespace('Painel')->group(function () {
    Route::resource('categories', 'CategoryController');
    Route::resource('automobiles', 'AutomobileController');
    Route::resource('companies', 'CompanyController');
    Route::resource('employees', 'EmployeeController');
});


