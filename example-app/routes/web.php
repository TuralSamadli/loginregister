<?php

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
//     return view('welcome')->name('welcome');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/login', function () {
//     return view('register');
// });
Route::get('/',[\App\Http\Controllers\HomePageController::class,'index'])->name('welcome');
Route::post('/register',[\App\Http\Controllers\RegisterController::class, 'register'])->name('register');
Route::post('/login',[\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/register',[\App\Http\Controllers\RegisterController::class,'index'])->name('register.index');
Route::get('/login',[\App\Http\Controllers\LoginController::class,'LoginView'])->name('login.index');
