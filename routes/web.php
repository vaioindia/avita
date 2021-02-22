<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\BannerController;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// });

Auth::routes();

// Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('admin/dashboard', 'HomeController@index')->name('admin.dashboard');
Route::get('admin/dashboard', [HomeController::class, 'adminDashboard'])->name('admin.dashboard')->middleware('is_admin');


Route::resource('store','StoreController');

Route::resource('banners','BannerController');


// Route::get('banner', 'BannerController@index');
// Route::post('banner', 'BannerController@upload');
// Route::post('banner', 'BannerController@show');

// Route::delete('banner/{id}', 'BannerController@destroy');
