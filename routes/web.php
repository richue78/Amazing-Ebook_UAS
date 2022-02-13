<?php

use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('/logout', function () {
    return view('logout');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/detail/{id}', [App\Http\Controllers\EbookController::class, 'show'])->middleware('auth');
Route::post('/addToCart/{ebook}', [App\Http\Controllers\EbookController::class, 'addToCart'])->middleware('auth');
Route::get('/cart/{user}', [App\Http\Controllers\EbookController::class, 'showCart'])->middleware('auth');
Route::post('/cart/{order}', [App\Http\Controllers\EbookController::class, 'destroy'])->middleware('auth');
Route::get('/submit', [App\Http\Controllers\EbookController::class, 'submit'])->middleware('auth');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/profile', [App\Http\Controllers\UserController::class, 'editProfile'])->middleware('auth');
Route::post('/profile/edit', [App\Http\Controllers\UserController::class, 'updateProfile'])->middleware('auth');

Route::get('/accountmaintenance', [App\Http\Controllers\UserController::class, 'maintenanceProfile'])->middleware('admin');

Route::get('/updaterole/{id}', [App\Http\Controllers\UserController::class, 'updateRoleAccount'])->middleware('admin');
Route::post('/updaterole/edit/{id}', [App\Http\Controllers\UserController::class, 'updateRoleById'])->middleware('admin');
Route::post('/delete/{id}', [App\Http\Controllers\UserController::class, 'deleteRoleById'])->middleware('admin');
