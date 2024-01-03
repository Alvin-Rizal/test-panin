<?php

use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('welcome',WelcomeController::class)->middleware('auth');

Route::get('/data', [PenjualanController::class, 'index'])->name('index');
Route::get('/create', [PenjualanController::class, 'create'])->name('create');
Route::post('/store', [PenjualanController::class, 'store'])->name('store');