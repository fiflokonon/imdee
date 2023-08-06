<?php

use App\Http\Controllers\User\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::get('/m.register', function () {
    return view('pages.m_register');
})->name('m.register');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::post('/register', [AuthController::class, 'register'])->name('inscription');
Route::post('/login', [AuthController::class, 'login'])->name('connexion');
