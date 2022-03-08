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

Route::view('/', 'page.home');
Route::view('/about', 'page.about');
Route::view('/category', 'page.category');
Route::view('/specials', 'page.specials');
Route::view('/myaccount', 'page.myaccount');
Route::view('/registers', 'page.register');
Route::view('/details', 'page.details');
Route::view('/contact', 'page.contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
