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

// rotta con cui richiamo la funzione all'interno del controller PageController
// @ -> mi richiama la funzione index nel controller
Route::get('/', 'PageController@index')->name('home');