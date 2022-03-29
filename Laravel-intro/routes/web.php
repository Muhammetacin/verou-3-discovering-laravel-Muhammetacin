<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class, 'getHome'])->name('home');

Route::get('/welcome',[HomeController::class, 'getWelcomePage'])->name('welcome');

Route::get('/about',[HomeController::class, 'getAboutPage'])->name('about');

Route::post('/welcome', [HomeController::class, 'getUserDataForm']);
