<?php
use Illuminate\Http\Request;
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
Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', 'TaskController@changeLanguage')
        ->name('user.change-language');

    Route::get('/', 'TaskController@welcome');

	Route::post('/task', 'TaskController@addTask');

	Route::delete('/task/{id}', 'TaskController@deleteTask');
});

