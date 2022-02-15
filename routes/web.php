<?php

use App\Http\Controllers\EbookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/detail/{id}', [EbookController::class, 'show'])->middleware('auth');
Route::post('/addToCart/{ebook}', [EbookController::class, 'addToCart'])->middleware('auth');
Route::get('/cart/{user}', [EbookController::class, 'showCart'])->middleware('auth');
Route::post('/cart/{order}', [EbookController::class, 'destroy'])->middleware('auth');
Route::get('/submit', [EbookController::class, 'submit'])->middleware('auth');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/profile', [UserController::class, 'editProfile'])->middleware('auth');
Route::post('/profile/edit', [UserController::class, 'updateProfile'])->middleware('auth');

Route::get('/accountmaintenance', [UserController::class, 'maintenanceProfile'])->middleware('admin');

Route::get('/updaterole/{id}', [UserController::class, 'updateRoleAccount'])->middleware('admin');
Route::post('/updaterole/edit/{id}', [UserController::class, 'updateRoleById'])->middleware('admin');
Route::post('/delete/{id}', [UserController::class, 'deleteRoleById'])->middleware('admin');
