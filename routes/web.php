<?php

use App\Http\Controllers\LandingController;
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

// Route::get('/', function () {
//     return view('intro');
// });

Route::resource('/', LandingController::class);


// auth
Route::get('/login', [LandingController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [LandingController::class, 'authenticate']);
Route::delete('/logout', [LandingController::class, 'logout']);

Route::get('/register', [LandingController::class, 'register'])->middleware('guest');
Route::post('/register', [LandingController::class, 'store']);

// home
Route::get('/home', [LandingController::class, 'home'])->middleware('auth');
