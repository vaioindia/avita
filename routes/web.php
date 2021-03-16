<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ExclusiveBrandController;
use App\Http\Controllers\RetailPartnerController;





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

// Banner
// Route::resource('banners','BannerController');

Route::get('/banners', 'BannerController@index')->name('banners.index');
Route::get('/banners/create','BannerController@create')->name('banners.create');
Route::post('/banners/store','BannerController@store')->name('banners.store');
Route::get('/banners/{id}/edit','BannerController@edit')->name('banners.edit');
Route::get('/banners/{id}/delete','BannerController@destroy')->name('banners.destroy');
Route::post('/banners/{id}/update','BannerController@update')->name('banners.update');

// Blog
// Route::resource('blog','BlogController');

Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/create','BlogController@create')->name('blog.create');
Route::post('/blog/store','BlogController@store')->name('blog.store');
Route::get('/blog/{id}/edit','BlogController@edit')->name('blog.edit');
Route::get('/blog/{id}/delete','BlogController@destroy')->name('blog.destroy');
Route::post('/blog/{id}/update','BlogController@update')->name('blog.update');

// Whatnew
// Route::resource('whatnew','WhatnewController');

Route::get('/whatnew', 'WhatnewController@index')->name('whatnew.index');
Route::get('/whatnew/create','WhatnewController@create')->name('whatnew.create');
Route::post('/whatnew/store','WhatnewController@store')->name('whatnew.store');
Route::get('/whatnew/{id}/edit','WhatnewController@edit')->name('whatnew.edit');
Route::get('/whatnew/{id}/delete','WhatnewController@destroy')->name('whatnew.destroy');
Route::post('/whatnew/{id}/update','WhatnewController@update')->name('whatnew.update');

// Event
// Route::resource('event','EventController');

Route::get('/event', 'EventController@index')->name('event.index');
Route::get('/event/create','EventController@create')->name('event.create');
Route::post('/event/store','EventController@store')->name('event.store');
Route::get('/event/{id}/edit','EventController@edit')->name('event.edit');
Route::get('/event/{id}/delete','EventController@destroy')->name('event.destroy');
Route::post('/event/{id}/update','EventController@update')->name('event.update');

// Retail Partner
// Route::resource('retailpartner', 'RetailPartnerController');
Route::get('/retailpartner', 'RetailPartnerController@index')->name('retailpartner.index');
Route::get('/retailpartner/create','RetailPartnerController@create')->name('retailpartner.create');
Route::post('/retailpartner/store','RetailPartnerController@store')->name('retailpartner.store');
Route::get('/retailpartner/{id}/edit','RetailPartnerController@edit')->name('retailpartner.edit');
Route::get('/retailpartner/{id}/delete','RetailPartnerController@destroy')->name('retailpartner.destroy');
Route::post('/retailpartner/{id}/update','RetailPartnerController@update')->name('retailpartner.update');

Route::post('/retailpartner',[RetailPartnerController::class,'importform']);
Route::post('/retailpartner/import',[RetailPartnerController::class,'import'])->name('retailpartner.import');
Route::get('/retailpartner/export', [RetailPartnerController::class, 'export'])->name('retailpartner.export');

// Exclusive Brand
// Route::resource('exclusivebrand', 'ExclusiveBrandController');
Route::get('/exclusivebrand', 'ExclusiveBrandController@index')->name('exclusivebrand.index');
Route::get('/exclusivebrand/create','ExclusiveBrandController@create')->name('exclusivebrand.create');
Route::post('/create','ExclusiveBrandController@store')->name('exclusivebrand.store');
Route::get('/exclusivebrand/{id}/edit','ExclusiveBrandController@edit')->name('exclusivebrand.edit');
Route::get('/exclusivebrand/{id}/delete','ExclusiveBrandController@destroy')->name('exclusivebrand.destroy');
Route::post('/exclusivebrand/{id}/update','ExclusiveBrandController@update')->name('exclusivebrand.update');

Route::post('/exclusivebrand',[ExclusiveBrandController::class,'importform']);
Route::post('/exclusivebrand/import',[ExclusiveBrandController::class,'import'])->name('exclusivebrand.import');
Route::get('/exclusivebrand/export', [ExclusiveBrandController::class, 'export'])->name('exclusivebrand.export');

// Service Center
// Route::resource('service_center', 'ServiceController');
Route::get('/service_center', 'ServiceController@index')->name('service_center.index');
Route::get('/service_center/create','ServiceController@create')->name('service_center.create');
Route::post('/service_center/create','ServiceController@store')->name('service_center.store');
Route::get('/service_center/{id}/edit','ServiceController@edit')->name('service_center.edit');
Route::get('/service_center/{id}/delete','ServiceController@destroy')->name('service_center.destroy');
Route::post('/service_center/{id}/update','ServiceController@update')->name('service_center.update');

Route::post('/service_center',[ServiceController::class,'importform']);
Route::post('/service_center/import',[ServiceController::class,'import'])->name('service_center.import');
Route::get('/service_center/export', [ServiceController::class, 'export'])->name('service_center.export');

// Route::resource('categorys','CategoryController');

Route::resource('products','ProductController');

Route::resource('techspecs', 'TechspecController');

// Subscribe
// Route::resource('subscribe', 'SubscribeController');
Route::get('/subscribe', 'SubscribeController@index')->name('subscribe.index'); 
Route::get('/subscribe/create','SubscribeController@create')->name('subscribe.create');
// Route::post('/subscribe','SubscribeController@store')->name('subscribe.store');
Route::get('/subscribe/{id}/delete','SubscribeController@destroy')->name('subscribe.destroy');
// Route::get('/subscribe_info','SubscribeController@subscribe_info')->name('subscribe.subscribe_info');

// Route::post('subscribe', 'SubscribeController@handleSubscription');
// Route::get('/subscribe', 'SubscribeController@index')->name('subscribe.index');

// Route::get('/subscribe', 'SubscribeController@contact')->name('contact');
// Route::post('/contact', 'SubscribeController@contactPost')->name('contactPost');



// Route::get('subscribe_info', function () {
   
//     $details = [
//         'title' => 'AVITA INDIA | Official Website AVITA INDIA',
//         'body' => 'This is for testing email using'
//     ];
   
//     \Mail::to('ombhardwaj199@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
//     // dd("Email is Sent.");
// });

// Brochure
Route::resource('brochure', 'BrochureController');