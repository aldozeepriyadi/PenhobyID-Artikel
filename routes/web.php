<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
Route::redirect('/', '/login');

// Routes for Hobbies
Route::resource('hobbies', HobbyController::class);

// Routes for Communities
Route::resource('communities', CommunityController::class);

// Routes for Authentication
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::get('password/reset', [AuthController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [AuthController::class, 'reset'])->name('password.update');


Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.post');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('register/complete', [AuthController::class, 'completeRegistration'])->name('registration.complete');

// Rute verifikasi email
Route::get('/email/verification-sent', function () {
    return view('auth.verification-sent');
})->name('verification.sent');
Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('verify.otp');

Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verify'])
    ->middleware(['signed'])
    ->name('verification.verify');

Route::get('/email/verified', [AuthController::class, 'verificationSuccess'])
    ->name('verification.success');

Route::post('/email/resend', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('resent', 'Verification email resent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');
// Route untuk kirim ulang OTP via email
Route::post('/resend-otp', [AuthController::class, 'resendOtp'])->name('resend.otp');

// Route untuk kirim OTP via WhatsApp
Route::post('/send-otp-whatsapp', [AuthController::class, 'sendOtpWhatsapp'])->name('send.otp.whatsapp');

// Routes for Reset Password
Route::get('password/reset', [AuthController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [AuthController::class, 'reset'])->name('password.update');

// Halaman dashboard (hanya dapat diakses setelah verifikasi email)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});