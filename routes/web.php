<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashHomeController;
use App\Http\Controllers\DashSettingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('bookie')->middleware(['auth', 'verified'])->group(function () {
    // dashboard
    Route::get('/dashboard', [DashHomeController::class, 'index'])->name('dashboard');
    // profile setting
    Route::resource('settings', DashSettingsController::class);
    // category
    Route::resource('category', CategoryController::class);
    Route::post('category/status/{slug}', [CategoryController::class , 'status'])->name('category.status');
    Route::get('category/trash/page', [CategoryController::class , 'trash'])->name('category.trash');
    Route::get('category/trash/page/restore/{id}', [CategoryController::class , 'trash_store'])->name('category.trash.restore');
    Route::get('category/trash/page/delete/{id}', [CategoryController::class , 'trash_delete'])->name('category.trash.delete');
    // tag
    Route::resource('tag',TagController::class);
    Route::post('tag/status/{slug}', [TagController::class , 'status'])->name('tag.status');
    Route::get('tag/trash/page', [TagController::class , 'trash'])->name('tag.trash');
    Route::get('tag/trash/restore/{id}', [TagController::class , 'trash_restore'])->name('tag.trash.restore');
    Route::get('tag/trash/delete/{id}', [TagController::class , 'trash_delete'])->name('tag.trash.delete');

    // blog
    Route::resource('blog',BlogController::class);
    Route::post('blog/status/{slug}', [BlogController::class , 'status'])->name('blog.status');

    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
