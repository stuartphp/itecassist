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

Route::get('/', [App\Http\Controllers\SiteController::class, 'index']);
// Route::get('/about', [App\Http\Controllers\SiteController::class, 'about']);
// Route::get('/products', [App\Http\Controllers\SiteController::class, 'products']);
// Route::get('/portfolio', [App\Http\Controllers\SiteController::class, 'portfolio']);
Route::get('/fqa', [App\Http\Controllers\SiteController::class, 'fqa']);
Route::get('/contact', [App\Http\Controllers\SiteController::class, 'contact']);
Route::post('/contact', [App\Http\Controllers\SiteController::class, 'contactPost']);
Route::get('/services', [App\Http\Controllers\SiteController::class, 'services']);

//Auth::routes();
