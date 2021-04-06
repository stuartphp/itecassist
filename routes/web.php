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
Route::get('/about', [App\Http\Controllers\SiteController::class, 'about']);
Route::get('/pricing', [App\Http\Controllers\SiteController::class, 'pricing']);
Route::get('/portfolio', [App\Http\Controllers\SiteController::class, 'portfolio']);
Route::get('/blog', [App\Http\Controllers\SiteController::class, 'blog']);
Route::get('/contact', [App\Http\Controllers\SiteController::class, 'contact']);

Route::prefix('products')->group(function(){
    Route::get('digital', [App\Http\Controllers\ProductsController::class, 'digital']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['web','auth'], 'prefix'=>'admin'], function () {

    Route::resource('images', \App\Http\Controllers\ImagesController::class);
    Route::resource('layouts', \App\Http\Controllers\LayoutsController::class);

    Route::get('crud', [App\Http\Controllers\CrudController::class, 'index']);
});
