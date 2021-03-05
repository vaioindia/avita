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

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('admin/dashboard', 'HomeController@index')->name('admin.dashboard');
Route::get('admin/dashboard', [HomeController::class, 'adminDashboard'])->name('admin.dashboard')->middleware('is_admin');


Route::resource('store','StoreController');

Route::resource('banners','BannerController');

Route::resource('blog','BlogController');

Route::resource('whatnew','WhatnewController');


// Route::post('/home', [App\Http\Controllers\BlogController::class, 'index'])->name('home');
// Route::get('blog/create', [App\Http\Controllers\BlogController::class, 'create']);
// Route::post('blog', [App\Http\Controllers\BlogController::class, 'store']);
// Route::get('blog/{blog}/edit', [App\Http\Controllers\BlogController::class, 'edit']);
// Route::get('blog/{blog}', [App\Http\Controllers\BlogController::class, 'show']);
// Route::put('blog/{blog}', [App\Http\Controllers\BlogController::class, 'update']);
// Route::delete('blog/{blog}', [App\Http\Controllers\BlogController::class, 'destroy']);


// Route::get('news-articles', 'NewsArticlesController@index');
// Route::post('news-articles', 'NewsArticlesController@upload');
// Route::delete('news-articles/{id}', 'NewsArticlesController@destroy');


Route::resource('retailpartner', 'RetailPartnerController');

Route::resource('exclusivebrand', 'ExclusiveBrandController');

Route::resource('service_center', 'ServiceController');

// Route::resource('categorys','CategoryController');

Route::resource('products','ProductController');

Route::resource('techspecs', 'TechspecController');

Route::resource('subscribe', 'SubscribeController');

Route::get('subscribe_info','SubscribeController@subscribe_info')->name('subscribe_info');;
// Route::get('news-articles', 'NewsArticlesController@index');

Route::resource('brochure', 'BrochureController');

