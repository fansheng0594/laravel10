<?php

use App\Http\Controllers\Auth\AuthenticatedController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SignupController;
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
Route::middleware(['guest'])->group(function () {
    Route::get('signup', [SignupController::class, 'create'])->name('signup');
    Route::post('signup', [SignupController::class, 'store'])->name('signup.store');
    Route::get('signin', [AuthenticatedController::class, 'create'])->name('signin');
    Route::post('signin', [AuthenticatedController::class, 'store'])->middleware(['throttle:signin'])->name('signin.store');
});
Route::middleware(['auth'])->group(function () {
    Route::post('logout', [AuthenticatedController::class, 'destroy'])->name('logout');
});
Route::resource('users', UserController::class);
