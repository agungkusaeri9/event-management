<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::name('frontend.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/events', [App\Http\Controllers\Frontend\EventController::class, 'index'])->name('event.index');
    Route::get('/events/{slug}', [App\Http\Controllers\Frontend\EventController::class, 'show'])->name('event.show');
    Route::get('/faq', [App\Http\Controllers\Frontend\FaqController::class, 'index'])->name('faq.index');

});


Route::get('login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [AuthController::class, 'login_process'])->name('login.process');
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::resource('users', UserController::class)->except('show');
    Route::resource('permissions', PermissionController::class)->except('show');
    Route::resource('roles', RoleController::class)->except('show');

    Route::resource('events', EventController::class);
    Route::resource('faqs', FaqController::class);
    Route::get('company-profile', [CompanyProfileController::class, 'index'])->name('company-profile.index');
    Route::post('company-profile', [CompanyProfileController::class, 'update'])->name('company-profile.update');
    Route::resource('payment-methods', PaymentMethodController::class);

});
