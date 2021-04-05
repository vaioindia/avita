        <?php

        use Illuminate\Http\Request;
        use Illuminate\Support\Facades\Route;
        use Illuminate\Support\Facades\Auth;
        use App\Http\Controllers\HomeController;




        Route::get('/', function () {
            return view('welcome');
        });

        Route::get('/','HomeController@index')->name('home');


        Auth::routes();

        Route::get('/dashboard', [HomeController::class, 'userdashboard'])->name('dashboard');

        Route::prefix('admin')->group(function(){

        Route::get('/dashboard', [HomeController::class, 'adminDashboard'])->name('admin.dashboard')->middleware('is_admin');
        Route::get('/dashboard', 'HomeController@adminDashboard')->name('admin.dashboard');


        // Banner
        // Route::resource('banners','BannerController');

        Route::get('/banners', 'Admin\BannerController@index')->name('banners.index');
        Route::get('/banners/create','Admin\BannerController@create')->name('banners.create');
        Route::post('/banners/create','Admin\BannerController@store')->name('banners.store');
        Route::get('/banners/{id}/edit','Admin\BannerController@edit')->name('banners.edit');
        Route::get('/banners/{id}/delete','Admin\BannerController@destroy')->name('banners.destroy');
        Route::post('/banners/{id}/update','Admin\BannerController@update')->name('banners.update');
        Route::POST('/banner','Admin\BannerController@status')->name('banners.status');

        // Grid
        // Route::resource('banners','BannerController');

        Route::get('/grid', 'Admin\GridController@index')->name('grid.index');
        Route::get('/grid/create','Admin\GridController@create')->name('grid.create');
        Route::post('/grid/create','Admin\GridController@store')->name('grid.store');
        Route::get('/grid/{id}/edit','Admin\GridController@edit')->name('grid.edit');
        Route::get('/grid/{id}/delete','Admin\GridController@destroy')->name('grid.destroy');
        Route::post('/grid/{id}/update','Admin\GridController@update')->name('grid.update');

        // Blog
        // Route::resource('blog','BlogController');

        Route::get('/blog', 'Admin\BlogController@index')->name('blog.index');
        Route::get('/blog/create','Admin\BlogController@create')->name('blog.create');
        Route::post('/blog/create','Admin\BlogController@store')->name('blog.store');
        Route::get('/blog/{id}/edit','Admin\BlogController@edit')->name('blog.edit');
        Route::get('/blog/{id}/delete','Admin\BlogController@destroy')->name('blog.destroy');
        Route::post('/blog/{id}/update','Admin\BlogController@update')->name('blog.update');

        // Whatnew
        // Route::resource('whatnew','WhatnewController');

        Route::get('/whatnew', 'Admin\WhatnewController@index')->name('whatnew.index');
        Route::get('/whatnew/create','Admin\WhatnewController@create')->name('whatnew.create');
        Route::post('/whatnew/create','Admin\WhatnewController@store')->name('whatnew.store');
        Route::get('/whatnew/{id}/edit','Admin\WhatnewController@edit')->name('whatnew.edit');
        Route::get('/whatnew/{id}/delete','Admin\WhatnewController@destroy')->name('whatnew.destroy');
        Route::post('/whatnew/{id}/update','Admin\WhatnewController@update')->name('whatnew.update');

        // Event
        // Route::resource('event','EventController');

        Route::get('/event', 'Admin\EventController@index')->name('event.index');
        Route::get('/event/create','Admin\EventController@create')->name('event.create');
        Route::post('/event/create','Admin\EventController@store')->name('event.store');
        Route::get('/event/{id}/edit','Admin\EventController@edit')->name('event.edit');
        Route::get('/event/{id}/delete','Admin\EventController@destroy')->name('event.destroy');
        Route::post('/event/{id}/update','Admin\EventController@update')->name('event.update');

        // Retail Partner
        // Route::resource('retailpartner', 'RetailPartnerController');
        Route::get('/retailpartner', 'Admin\RetailPartnerController@index')->name('retailpartner.index');
        Route::get('/retailpartner/create','Admin\RetailPartnerController@create')->name('retailpartner.create');
        Route::post('/retailpartner/create','Admin\RetailPartnerController@store')->name('retailpartner.store');
        Route::get('/retailpartner/{id}/edit','Admin\RetailPartnerController@edit')->name('retailpartner.edit');
        Route::get('/retailpartner/{id}/delete','Admin\RetailPartnerController@destroy')->name('retailpartner.destroy');
        Route::post('/retailpartner/{id}/update','Admin\RetailPartnerController@update')->name('retailpartner.update');

        Route::post('/retailpartner','Admin\RetailPartnerController@importform');
        Route::post('/retailpartner/import','Admin\RetailPartnerController@import')->name('retailpartner.import');
        Route::get('/retailpartner/export','Admin\RetailPartnerController@export')->name('retailpartner.export');

        // Exclusive Brand
        // Route::resource('exclusivebrand', 'ExclusiveBrandController');
        Route::get('/exclusivebrand', 'Admin\ExclusiveBrandController@index')->name('exclusivebrand.index');
        Route::get('/exclusivebrand/create','Admin\ExclusiveBrandController@create')->name('exclusivebrand.create');
        Route::post('/exclusivebrand/create','Admin\ExclusiveBrandController@store')->name('exclusivebrand.store');
        Route::get('/exclusivebrand/{id}/edit','Admin\ExclusiveBrandController@edit')->name('exclusivebrand.edit');
        Route::get('/exclusivebrand/{id}/delete','Admin\ExclusiveBrandController@destroy')->name('exclusivebrand.destroy');
        Route::post('/exclusivebrand/{id}/update','Admin\ExclusiveBrandController@update')->name('exclusivebrand.update');

        Route::post('/exclusivebrand','Admin\ExclusiveBrandController@importform');
        Route::post('/exclusivebrand/import','Admin\ExclusiveBrandController@import')->name('exclusivebrand.import');
        Route::get('/exclusivebrand/export','Admin\ExclusiveBrandController@export')->name('exclusivebrand.export');

        // Service Center
        // Route::resource('service_center', 'ServiceController');
        Route::get('/service_center', 'Admin\ServiceController@index')->name('service_center.index');
        Route::get('/service_center/create','Admin\ServiceController@create')->name('service_center.create');
        Route::post('/service_center/create','Admin\ServiceController@store')->name('service_center.store');
        Route::get('/service_center/{id}/edit','Admin\ServiceController@edit')->name('service_center.edit');
        Route::get('/service_center/{id}/delete','Admin\ServiceController@destroy')->name('service_center.destroy');
        Route::post('/service_center/{id}/update','Admin\ServiceController@update')->name('service_center.update');

        Route::post('/service_center','Admin\ServiceController@importform');
        Route::post('/service_center/import','Admin\ServiceController@import')->name('service_center.import');
        Route::get('/service_center/export', 'Admin\ServiceController@export')->name('service_center.export');

        // Product Category
        route::get('/category','Admin\CategoryController@index')->name('category.index');
        Route::get('/category/create','Admin\CategoryController@create')->name('category.create');
        // Route::get('/category/create','Admin\CategoryController@subcategory')->name('category.subcategory');
        Route::post('/category/create','Admin\CategoryController@store')->name('category.store');
        Route::get('/category/{id}/edit','Admin\CategoryController@edit')->name('category.edit');
        Route::post('/category/{id}/update','Admin\CategoryController@update')->name('category.update');
        Route::get('/category/{id}/delete','Admin\CategoryController@destroy')->name('category.destroy');

        // Product Technical  Specification
        // Route::resource('techspecs', 'Admin\ProductTeshspecsController');
        // Route::get('/category','Admin\CategoryController@subcategory')->name('category.subcategory');
        Route::get('/techspecs', 'Admin\ProductTeshspecsController@index')->name('techspecs.index');
        Route::get('/techspecs/create','Admin\ProductTeshspecsController@create')->name('techspecs.create');
        Route::post('/techspecs/create','Admin\ProductTeshspecsController@store')->name('techspecs.store');
        Route::get('/techspecs/{id}/edit','Admin\ProductTeshspecsController@edit')->name('techspecs.edit');
        Route::post('/techspecs/{id}/update','Admin\ProductTeshspecsController@update')->name('techspecs.update');
        Route::get('/techspecs/{id}/delete','Admin\ProductTeshspecsController@destroy')->name('techspecs.destroy');

        // Subscribe

        Route::get('/subscribe', 'Admin\SubscribeController@index')->name('subscribe.index');
        Route::get('/subscribe/create','Admin\SubscribeController@create')->name('subscribe.create');
        // Route::post('/subscribe','Admin\SubscribeController@store')->name('subscribe.store');
        Route::get('/subscribe/{id}/delete','Admin\SubscribeController@destroy')->name('subscribe.destroy');


        // Brochure
        Route::resource('brochure', 'Admin\BrochureController');
        });



        /** front of the website */

        // Products

        Route::prefix('proudct')->group(function(){
            Route::prefix('laptop')->group(function(){
                Route::get('admiror','ProductController@admiror')->name('admiror');
                Route::get('pura','ProductController@pura')->name('pura');
                Route::get('liber-v14','ProductController@liber_v14')->name('liber-v14');
                // Route::get('spec','ProductController@spec')->name('spec');
                Route::get('liber-v-gold','ProductController@liber_v_gold')->name('liber-v-gold');
                Route::get('magus','ProductController@magus')->name('magus');
                Route::get('essential','ProductController@essential')->name('essential');
                Route::get('liber','ProductController@liber')->name('liber');
                Route::get('/{slug}/spec', 'ProductController@showProductSpec')->name('product.spec');
            });
            Route::prefix('smartdevices')->group(function(){
                Route::get('imago-series-smart-mirror','ProductController@imago_series_smart_mirror')->name('imago-series-smart-mirror');
                Route::get('modus-smart-scale','ProductController@modus_smart_scale')->name('modus-smart-scale');
                Route::get('/{slug}/spec', 'ProductController@showProductSpec')->name('product.spec');
            });
            Route::prefix('accessories')->group(function(){
                Route::get('ubique-mouse','ProductController@ubique_mouse')->name('ubique-mouse');
            });
        });



        // Where to Buy
        Route::get('news_event','HomeController@news_event')->name('news_event');

        // Where to Buy
        Route::get('wheretobuy','HomeController@buy')->name('wheretobuy');

        // Service
        Route::get('support','HomeController@service_center')->name('support');

        // Blog
        // Route::get('blogs','BlogsController@buy')->name('blogs');
        Route::get('blogs', 'BlogController@showBlog')->name('blogs');
        Route::get('blogs/detail/{slug}', 'BlogController@BlogDetail')->name('blogs.detail');

        // Sales Enquiry
        Route::get('sales-enquiry','HomeController@sales_enquiry')->name('sales-enquiry');

        /**end  */


