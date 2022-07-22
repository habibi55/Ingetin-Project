<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;


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

// Route::get('/', function () {
//     return view('intro');
// });

Route::resource('/', LandingController::class);

// Auth
Route::get('login', [LandingController::class, 'login'])->middleware('guest')->name('login');
Route::post('login', [LandingController::class, 'authenticate']);
Route::delete('logout', [LandingController::class, 'logout'])->name('logout');;

Route::get('register', [LandingController::class, 'register'])->middleware('guest')->name('register');
Route::post('register', [LandingController::class, 'store']);

// Task
Route::get('task', [LandingController::class, 'task'])->middleware('auth')->name('task');
// Route::resource('task', LandingController::class);

// Tambah Task
Route::resource('task', MainController::class);

// Profile
Route::get('profile', [ProfileController::class, 'index'])->middleware('auth')->name('profile');
