<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::middleware(['auth:web', 'verified'])->get('/', function () {
    return Inertia::render('Index');
})->name('home');
Route::get('login', function (){
    return Inertia::render('Auth/Login');
})->name('login');
Route::get('register', function (){
    return Inertia::render('Auth/Register');
})->name('register');

Route::get('email/verify', function (){
    return Inertia::render('Auth/VerifyEmail');
})->name('verification.notice');

Route::get('email/resend', [AuthController::class, 'resendVerification'])->name('verification.resend');

Route::get('email/verify/{id}/{hash}', [AuthController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');



Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('logout', [AuthController::class, 'logout']);
