<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashHomeController;
use App\Http\Controllers\DashSettingsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('bookie')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashHomeController::class, 'index'])->name('dashboard');
    Route::resource('settings', DashSettingsController::class);
    Route::resource('category', CategoryController::class);
    Route::post('category/status/{slug}', [CategoryController::class , 'status'])->name('category.status');
    Route::get('category/trash/page', [CategoryController::class , 'trash'])->name('category.trash');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
