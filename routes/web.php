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

/**
 * Rota de Autenticação
 */
Route::prefix('auth')->namespace('auth')->group(function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('logout', 'LoginController@logout')->name('logout');
    Route::post('login', 'LoginController@login');
});

Route::middleware(['auth'])->namespace('Painel')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('changePassword', 'HomeController@showChangePassword')->name('showChangePassword');
    Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

    Route::resource('categories', 'CategoryController');
    Route::resource('automobiles', 'AutomobileController');
    Route::resource('companies', 'CompanyController');
    Route::resource('employees', 'EmployeeController');
});


