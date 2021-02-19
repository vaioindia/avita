<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// });

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('admin/dashboard', [HomeController::class, 'adminDashboard'])->name('admin.dashboard')->middleware('is_admin');

// Route::get('/store', [StoreController::class, 'index']);
Route::get('store/create', [StoreController::class, 'create'])->name('store.create');
Route::post('store/store', [StoreController::class, 'store'])->name('store.store');
Route::get('store/index', [StoreController::class, 'index'])->name('store.index');
Route::post('store/show', [StoreController::class, 'show'])->name('store.show');
