<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\DashHomeController;
use App\Http\Controllers\DashSettingsController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SizeColorController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\TagController;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('home');



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

    // size and color
    Route::get('size&color',[SizeColorController::class,'index'])->name('size&color.index');
    Route::get('size&color/trash',[SizeColorController::class,'trash'])->name('size&color.trash');
    // only size under size and color section
    Route::post('size&color/size/insert',[SizeColorController::class,'store_size'])->name('size&color.store.size');
    Route::post('size&color/size/edit/{id}',[SizeColorController::class,'update_size'])->name('size&color.update.size');
    Route::post('size&color/size/delete/{id}',[SizeColorController::class,'delete_size'])->name('size&color.delete.size');
    Route::post('size&color/size/restore/{id}',[SizeColorController::class,'restore_size'])->name('size&color.restore.size');
    Route::post('size&color/size/parmanentdelete/{id}',[SizeColorController::class,'pdelete_size'])->name('size&color.pdelete.size');
    // only color under size and color section
    Route::post('size&color/color/insert',[SizeColorController::class,'color_store'])->name('size&color.store.color');
    Route::post('size&color/color/edit/{id}',[SizeColorController::class,'color_update'])->name('size&color.update.color');
    Route::post('size&color/color/delete/{id}',[SizeColorController::class,'color_delete'])->name('size&color.delete.color');
    Route::post('size&color/color/restore/{id}',[SizeColorController::class,'color_restore'])->name('size&color.restore.color');
    Route::post('size&color/color/parmanentdelete/{id}',[SizeColorController::class,'color_pdelete'])->name('size&color.pdelete.color');

    // products section
    Route::resource('product',ProductController::class);

    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
