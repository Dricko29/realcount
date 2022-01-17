<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DptController;
use App\Http\Controllers\TpsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuaraController;
use App\Http\Controllers\PaslonController;
use App\Http\Controllers\PollingController;
use App\Http\Controllers\RegisterController;
use App\Models\Polling;

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



Route::get('/',[HomeController::class, 'index']);
Route::get('/admin',[AdminController::class, 'index'])->middleware('auth');

// login
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'login']);
Route::post('/logout', [LoginController::class,'logout']);

// register
Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);



Route::resource('tps', TpsController::class)->middleware('auth');
Route::resource('dpt', DptController::class)->middleware('auth');
Route::resource('paslon', PaslonController::class)->middleware('auth');
Route::resource('polling', PollingController::class)->middleware('auth');
Route::resource('suara', SuaraController::class)->middleware('auth');
