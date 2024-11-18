<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PostController;
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
Route::get('login', function () {
    return Inertia::render('Auth/Login');
})->name('login');
Route::get('register', function () {
    return Inertia::render('Auth/Register');
})->name('register');

Route::get('email/verify', function () {
    return Inertia::render('Auth/VerifyEmail', ['message' => '']);
})->name('verification.notice');

Route::get('/forgot-password', function () {
    return Inertia::render('Auth/ForgotPassword');
})->name('password.request')->middleware('guest');

Route::get('/reset-password/{token}', function (string $token) {
    return Inertia::render('Auth/ResetPassword', ['token' => $token]);
})->name('password.reset')->middleware('guest');

Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.email')->middleware('guest');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update')->middleware('guest');



Route::get('email/resend', [AuthController::class, 'resendVerification'])->name('verification.resend');

Route::get('email/verify/{id}/{hash}', [AuthController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');



Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('logout', [AuthController::class, 'logout']);
Route::prefix('blog')->group(
    function () {
        Route::get('/', function () {
            return Inertia::render('Blog/Index');
        })->name('blog.home');

        Route::get('create', function () {
            return Inertia::render('Blog/CreatePost');
        })->middleware(['auth'])->name('blog.create');

        Route::post('create', [PostController::class, 'store'])->middleware(['auth']);
    }
);
