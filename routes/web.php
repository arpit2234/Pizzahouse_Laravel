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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pizza', 'PizzaController@index' )->name('pizza.index')->middleware('auth');
    // get data from db
    
Route::get('/pizza/create', 'PizzaController@create' )->name('pizza.create');
Route::post('/pizza', 'PizzaController@store' )->name('pizza.store');
Route::get('/pizza/{id}', 'PizzaController@show' )->name('pizza.show')->middleware('auth');
Route::delete('/pizza/{id}', 'PizzaController@destroy' )->name('pizza.destroy')->middleware('auth');
    
 

Auth::routes([
    'register'=>false
]);

Route::get('/home', 'HomeController@index')->name('home');
