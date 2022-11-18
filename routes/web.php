<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\SessionsController;


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


Route::get('/',
    [BrandController ::class, 'index'])->name('brands');

Route::get('/cars/{id}', [CarController::class, 'index'])->name('cars');

Route::get('/details/{car}', [CarController::class, 'show'])->name('car');

Route::get('/toArabic', [SessionsController::class, 'toArabic']);
Route::get('/toEnglish', [SessionsController::class, 'toEnglish']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
