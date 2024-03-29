<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DetailController;
use App\Http\Livewire\Tasks;


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


Route::resource('/', LandingController::class);

// Auth
Route::get('login', [LandingController::class, 'login'])->middleware('guest')->name('login');
Route::post('login', [LandingController::class, 'authenticate']);
Route::delete('logout', [LandingController::class, 'logout'])->name('logout');;

Route::get('register', [LandingController::class, 'register'])->middleware('guest')->name('register');
Route::post('register', [LandingController::class, 'store']);

// Task
Route::get('task', [LandingController::class, 'task'])->middleware('auth')->name('task');

// Tambah Task
Route::resource('task', MainController::class)->middleware(['auth']);
Route::get('search_small', [MainController::class, 'search_small'])->middleware('auth')->name('search_small');
Route::get('/search', [Tasks::class, 'render']);

Route::get('task-detail/{id}', [DetailController::class, 'index'])->name('task-detail');


// Edit Profile
Route::resource('profile', ProfileController::class)->middleware(['auth']);
