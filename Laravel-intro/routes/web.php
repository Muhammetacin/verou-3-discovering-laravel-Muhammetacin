<?php

use App\Http\Controllers\HelloWorldController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld',[HelloWorldController::class, 'showTitle'])->name('home');

Route::get('/mywelcomepage',[HelloWorldController::class, 'getWelcomePage'])->name('welcome');

Route::get('/about',[HelloWorldController::class, 'getAboutPage'])->name('about');
