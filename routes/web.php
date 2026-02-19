<?php

use App\Http\Controllers\Admin\PortfolioAdminController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.home');
Route::get('/api/portfolio', [PortfolioController::class, 'show'])->name('portfolio.data');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [PortfolioAdminController::class, 'showLogin'])->name('login');
    Route::post('/login', [PortfolioAdminController::class, 'login'])->name('login.attempt');
    Route::post('/logout', [PortfolioAdminController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [PortfolioAdminController::class, 'dashboard'])->name('dashboard');
        Route::post('/dashboard', [PortfolioAdminController::class, 'update'])->name('dashboard.update');
    });
});
