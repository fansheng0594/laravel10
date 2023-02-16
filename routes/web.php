<?php

use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StaticPageController::class, 'home'])->name('home');
Route::get('about', [StaticPageController::class, 'about'])->name('about');
Route::get('help', [StaticPageController::class, 'help'])->name('help');

Route::get('signup', [UserController::class, 'create'])->name('signup');