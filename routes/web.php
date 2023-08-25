<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(App\Http\Controllers\Frontend\ContactController::class)->group(function () {
    Route::get('contact-us', 'index')->name('frontend.contact-us');
    Route::get('faq', 'faq')->name('frontend.faq');
    Route::post('/contact-form', 'storeContactForm')->name('contact-form.store');
});

Route::controller(App\Http\Controllers\Frontend\BlogController::class)->group(function () {
    Route::get('/blog', 'categories');
    Route::get('/blog/{category_slug}', 'blogdata');
    Route::get('/blog/{category_slug}/{blog_slug}', 'blogView');
});

// Get all sitemaps for website | Added by Shubham Raj
Route::controller(App\Http\Controllers\Frontend\SitemapXmlController::class)->group(function () {
    Route::get('sitemap.xml', 'index')->name('sitemap.index'); // Parent Sitemap Index
    Route::get('main-stylesheet.xls', 'sitemapMainXls')->name('main-sitemap.xls'); // Parent Sitemap Stylesheet File

    // Grouped all frontend sitemap index
    Route::prefix('sitemap/frontend')->name('sitemap.frontend.')->group(function () {
        Route::get('home.xml', 'home')->name('home');
        Route::get('search-pages.xml', 'searchPages')->name('search-pages');
        Route::get('business-pages.xml', 'businessPages')->name('business-pages');
        Route::get('legal-pages.xml', 'legalPages')->name('legal-pages');
        Route::get('contact-pages.xml', 'contactPages')->name('contact-pages');
        Route::get('about-us-pages.xml', 'aboutUsPages')->name('about-us-pages');
        Route::get('faq-pages.xml', 'faqPages')->name('faq-pages');
        Route::get('event-pages.xml', 'eventPages')->name('event-pages');
        Route::get('event-types.xml', 'eventTypes')->name('event-types');
        Route::get('venues.xml', 'venues')->name('venues');
        Route::get('blog-categories.xml', 'blogCategories')->name('blog-categories');
        Route::get('blog-posts.xml', 'blogPosts')->name('blog-posts');
    });
});


Route::controller(App\Http\Controllers\Frontend\FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('frontend.home');
    Route::get('/all', 'filterAll');
    Route::get('/hotels', 'filterHotels');
    Route::get('/resorts', 'filterResorts');
    Route::get('/restaurants', 'filterRestaurants');
    Route::get('/bars-nightclubs', 'filterBarsNightclubs');
    Route::get('/conference-centers', 'filterConferenceCenters');
    Route::get('/theaters', 'filterTheaters');
    Route::get('/corporate-party', 'filterCorporateParty');
    Route::get('/wedding-ceremony', 'filterWeddingCeremony');
    Route::get('/wedding-anniversary', 'filterWeddingAnniversary');
    Route::get('/birthday-party', 'filterbirthdayParty');
    Route::get('/engagement-ceremony', 'filterEngagementCeremony');
    Route::get('/wedding-reception', 'filterWeddingReception');
    Route::get('/birthday-party-for-kids', 'filterBirthdayPartyKids');
    Route::get('/corporate-training', 'filterCorporateTraining');
    // Added By Shubham for PWA
    Route::get('/manifest.json', 'appManifest')->name('manifest.json');
    Route::get('/browserconfig.xml', 'appBrowserconfig')->name('browserconfig.xml');

    // Re-arranged in group
    Route::get('/venue', 'categories')->name('frontend.events');
    Route::get('/venue/{category_slug}', 'products');
    Route::get('/venue/{category_slug}/{product_slug}', 'productsView');
    Route::get('/search', 'searchProducts')->name('frontend.search');
    Route::get('/about-us', 'aboutUs')->name('frontend.about-us');
    Route::get('privacy-policy', 'privacyPolicy')->name('frontend.privacy-policy');
    Route::get('terms-and-conditions', 'termsConditions')->name('frontend.terms-and-conditions');
});

Auth::routes();

Route::controller(App\Http\Controllers\Frontend\ListbusinessController::class)->group(function () {
    Route::get('/list-your-business', 'index')->name('frontend.list-your-business');
    Route::post('/business-store', 'store');
    Route::post('/business-store', 'store')->name('business-store.store');
});

// Vendor
Route::prefix('vendors')->middleware(['auth', 'isVendor'])->group(function () {

    Route::get('/thirdparty', [App\Http\Controllers\Vendors\VendorController::class, 'index']);

    // Route::controller(App\Http\Controllers\Vendor\VendorController::class)->group(function (){
    //     Route::get('/vendor-dashboard', 'index');
    // });

    Route::controller(App\Http\Controllers\Vendors\ProductController::class)->group(function () {
        Route::get('/products', 'index');
        Route::get('/products/create', 'create');
        Route::post('/products', 'store');
        Route::get('/products/{products}/edit', 'edit');
        Route::put('/products/{products}', 'update');
        Route::get('/products-delete/{id}', 'delete');
        Route::get('/products/delete', 'deletedrecords');
        Route::get('/products-re-store/{id}', 'deletedrestore');
        Route::get('product-image/{product_image_id}/delete', 'destroyImage');
        Route::post('product-color/{prod_color_id}', 'updateProdColorQty');
        Route::get('product-color/{prod_color_id}/delete', 'deleteProdColor');
    });
});

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    // Category Routes
    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('/category/{category}', 'update');
        Route::get('category-delete/{id}', 'delete');
        Route::get('/category/delete', 'deletedrecords');
        Route::get('/category-re-store/{id}', 'deletedrestore');
    });

    // Route::get('/brands', App\Http\Livewire\Admin\Brand\Index::class);

    // Brands Routes 
    Route::controller(App\Http\Controllers\Admin\BrandsController::class)->group(function () {
        Route::get('/brand', 'index');
        Route::get('/brand/create', 'create');
        Route::post('/brand', 'store');
        Route::get('/brand/{brand}/edit', 'edit');
        Route::put('/brand/{brand}', 'update');
        Route::get('brand-delete/{id}', 'delete');
        Route::get('/brand/delete', 'deletedrecords');
        Route::get('/brand-re-store/{id}', 'deletedrestore');
    });

    Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
        Route::get('/products', 'index');
        Route::get('/products/create', 'create');
        Route::post('/products', 'store');
        Route::get('/products/{products}/edit', 'edit');
        Route::put('/products/{products}', 'update');
        Route::get('/products-delete/{id}', 'delete');
        Route::get('/products/delete', 'deletedrecords');
        Route::get('/products-re-store/{id}', 'deletedrestore');
        Route::get('product-image/{product_image_id}/delete', 'destroyImage');
        Route::post('product-color/{prod_color_id}', 'updateProdColorQty');
        Route::get('product-color/{prod_color_id}/delete', 'deleteProdColor');
    });

    Route::controller(App\Http\Controllers\Admin\ColorController::class)->group(function () {
        Route::get('/colors', 'index');
        Route::get('/colors/create', 'create');
        Route::post('/colors', 'store');
        Route::get('/colors/{color}/edit', 'edit');
        Route::put('/colors/{color_id}', 'update');
        Route::get('/colors-delete/{id}', 'delete');
        Route::get('/colors/delete', 'deletedrecords');
        Route::get('/colors-re-store/{id}', 'deletedrestore');
    });

    Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function () {
        Route::get('/sliders', 'index');
        Route::get('/sliders/create', 'create');
        Route::post('/sliders', 'store');
    });

    Route::controller(App\Http\Controllers\Admin\BusinessController::class)->group(function () {
        Route::get('/business', 'index');
        Route::get('/contact-us', 'contact');
        Route::get('/contact-delete/{id}', 'delete');
    });
    Route::controller(App\Http\Controllers\Admin\RatingsController::class)->group(function () {
        Route::get('/ratings', 'index');
        Route::get('/ratings/{ratings}/edit', 'edit');
        Route::put('/ratings/{id}', 'update');
        Route::get('ratings-delete/{id}', 'delete');
    });
    Route::controller(App\Http\Controllers\Admin\OrdersController::class)->group(function () {
        Route::get('/orders', 'index');
        Route::get('/orders/create', 'create');
        Route::post('/orders', 'store');
        Route::get('orders/{contact}/edit', 'edit');
        Route::post('/orders/{contact_id}', 'update');
    });
    Route::controller(App\Http\Controllers\Admin\BlogcategoryController::class)->group(function () {
        Route::get('/blogcategory', 'index');
        Route::get('/blogcategory/create', 'create');
        Route::post('/blogcategory', 'store');
        Route::get('/blogcategory/{blogcategory}/edit', 'edit');
        Route::put('/blogcategory/{blogcategory}', 'update');
        Route::get('/blogcategory-delete/{id}', 'delete');
        Route::get('/blogcategory/delete', 'deletedrecords');
        Route::get('/blogcategory-re-store/{id}', 'deletedrestore');
    });
    Route::controller(App\Http\Controllers\Admin\BlogController::class)->group(function () {
        Route::get('/blogs', 'index');
        Route::get('blogs/create', 'create');
        Route::post('blogs', 'store');
        Route::get('/blogs/{blog}/edit', 'edit');
        Route::put('/blogs/{blog}', 'update');
        Route::get('/blogs-delete/{id}', 'delete');
        Route::get('/blogs/delete', 'deletedrecords');
        Route::get('/blogs-re-store/{id}', 'deletedrestore');
    });

    Route::controller(App\Http\Controllers\Admin\UserdetailsController::class)->group(function () {
        Route::get('usersdetails', 'index');
    });
});




// Vendor

Route::get('auth/facebook', [App\Http\Controllers\Frontend\SocialController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [App\Http\Controllers\Frontend\SocialController::class, 'loginWithFacebook']);

Route::controller(App\Http\Controllers\Frontend\FacebookController::class)->group(function () {
    Route::get('auth/facebook', 'redirectToFacebook')->name('auth.facebook');
    Route::get('auth/facebook/callback', 'handleFacebookCallback');
});
Route::controller(App\Http\Controllers\Frontend\GoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::post('/add-rating', [App\Http\Controllers\Frontend\RatingController::class, 'add']);
    Route::get('add-review/{product_slug}/userreview', [App\Http\Controllers\Frontend\ReviewController::class, 'add']);

    Route::controller(App\Http\Controllers\Frontend\UserRatingsController::class)->group(function () {
        Route::get('/my-reviews', 'index');
        Route::get('/my-profile', 'myProfile');
    });
    Route::controller(App\Http\Controllers\Frontend\UserController::class)->group(function () {
        Route::get('/my-profile', 'index');
        Route::post('/profile', 'profile');
    });
    Route::controller(App\Http\Controllers\Frontend\MybookController::class)->group(function () {
        Route::get('/my-book', 'index');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// For demo - Remove later | See app_settings.php config file in json
Route::get('app-info', [App\Http\Controllers\AppSettingController::class, 'appInfo']);
