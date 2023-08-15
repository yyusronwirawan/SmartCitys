<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return redirect()->route('login');
//     return view('fe.index');
// });

Route::middleware('visitor')->controller(App\Http\Controllers\FrontendController::class)->prefix('')->name('fe.')->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/news', 'news')->name('news');
    Route::get('/detail_news/{id}', 'detail_news')->name('detail_news');
    Route::get('/destination', 'destination')->name('destination');
    Route::get('/detail_destination/{id}', 'detail_destination')->name('detail_destination');
    Route::get('/culture', 'culture')->name('culture');
    Route::get('/detail_culture/{id}', 'detail_culture')->name('detail_culture');
    Route::get('/event', 'event')->name('event');
    Route::get('/detail_event/{id}', 'detail_event')->name('detail_event');
    Route::get('/smart_city', 'smart_city')->name('smart_city');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'contact_post')->name('contact_post');
});

Auth::routes([
    'login'    => true,
    'logout'   => true,
    'register' => false,
    'reset'    => false,   // for resetting passwords
    'confirm'  => false,  // for additional password confirmations
    'verify'   => false,  // for email verification
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->name('admin.')->group(function() {
        Route::controller(App\Http\Controllers\Admin\AboutController::class)->prefix('about')->name('about.')->group(function() {
            Route::GET('/', 'index')->name('index');
            Route::GET('/create', 'create')->name('create');
            Route::POST('/store', 'store')->name('store');
            Route::GET('/{website}', 'show')->name('show');
            Route::get('/{website}/edit', 'edit')->name('edit');
            Route::PUT('/{website}', 'update')->name('update');
            Route::DELETE('/{website} ', 'destroy')->name('deleted');
        });

        Route::controller(App\Http\Controllers\Admin\VisiController::class)->prefix('visi')->name('visi.')->group(function() {
            Route::GET('/', 'index')->name('index');
            Route::GET('/create', 'create')->name('create');
            Route::POST('/store', 'store')->name('store');
            Route::GET('/{website}', 'show')->name('show');
            Route::get('/{website}/edit', 'edit')->name('edit');
            Route::PUT('/{website}', 'update')->name('update');
            Route::DELETE('/{website} ', 'destroy')->name('deleted');
        });

        Route::controller(App\Http\Controllers\Admin\MisiController::class)->prefix('misi')->name('misi.')->group(function() {
            Route::GET('/', 'index')->name('index');
            Route::GET('/create', 'create')->name('create');
            Route::POST('/store', 'store')->name('store');
            Route::GET('/{website}', 'show')->name('show');
            Route::get('/{website}/edit', 'edit')->name('edit');
            Route::PUT('/{website}', 'update')->name('update');
            Route::DELETE('/{website} ', 'destroy')->name('deleted');
        });

        Route::controller(App\Http\Controllers\Admin\StrukturalController::class)->prefix('struktural')->name('struktural.')->group(function() {
            Route::GET('/', 'index')->name('index');
            Route::GET('/create', 'create')->name('create');
            Route::POST('/store', 'store')->name('store');
            Route::GET('/{website}', 'show')->name('show');
            Route::get('/{website}/edit', 'edit')->name('edit');
            Route::PUT('/{website}', 'update')->name('update');
            Route::DELETE('/{website} ', 'destroy')->name('deleted');
        });

        Route::controller(App\Http\Controllers\Admin\OpdController::class)->prefix('opd')->name('opd.')->group(function() {
            Route::GET('/', 'index')->name('index');
            Route::GET('/create', 'create')->name('create');
            Route::POST('/store', 'store')->name('store');
            Route::GET('/{website}', 'show')->name('show');
            Route::get('/{website}/edit', 'edit')->name('edit');
            Route::PUT('/{website}', 'update')->name('update');
            Route::DELETE('/{website} ', 'destroy')->name('deleted');
        });

        Route::controller(App\Http\Controllers\Admin\SmartCityController::class)->prefix('smartcity')->name('smartcity.')->group(function() {
            Route::GET('/', 'index')->name('index');
            Route::GET('/create', 'create')->name('create');
            Route::POST('/store', 'store')->name('store');
            Route::GET('/{website}', 'show')->name('show');
            Route::get('/{website}/edit', 'edit')->name('edit');
            Route::PUT('/{website}', 'update')->name('update');
            Route::DELETE('/{website} ', 'destroy')->name('deleted');
        });

        Route::controller(App\Http\Controllers\Admin\GalleryController::class)->prefix('gallery')->name('gallery.')->group(function() {
            Route::GET('/', 'index')->name('index');
            Route::GET('/create', 'create')->name('create');
            Route::POST('/store', 'store')->name('store');
            Route::GET('/{website}', 'show')->name('show');
            Route::get('/{website}/edit', 'edit')->name('edit');
            Route::PUT('/{website}', 'update')->name('update');
            Route::DELETE('/{website} ', 'destroy')->name('deleted');
        });

        Route::controller(App\Http\Controllers\Admin\DestinationController::class)->prefix('destination')->name('destination.')->group(function() {
            Route::GET('/', 'index')->name('index');
            Route::GET('/create', 'create')->name('create');
            Route::POST('/store', 'store')->name('store');
            Route::GET('/{website}', 'show')->name('show');
            Route::get('/{website}/edit', 'edit')->name('edit');
            Route::PUT('/{website}', 'update')->name('update');
            Route::DELETE('/{website} ', 'destroy')->name('deleted');
        });

        Route::controller(App\Http\Controllers\Admin\NewsController::class)->prefix('news')->name('news.')->group(function() {
            Route::GET('/', 'index')->name('index');
            Route::GET('/create', 'create')->name('create');
            Route::POST('/store', 'store')->name('store');
            Route::GET('/{website}', 'show')->name('show');
            Route::get('/{website}/edit', 'edit')->name('edit');
            Route::PUT('/{website}', 'update')->name('update');
            Route::DELETE('/{website} ', 'destroy')->name('deleted');
        });

        Route::controller(App\Http\Controllers\Admin\CultureController::class)->prefix('culture')->name('culture.')->group(function() {
            Route::GET('/', 'index')->name('index');
            Route::GET('/create', 'create')->name('create');
            Route::POST('/store', 'store')->name('store');
            Route::GET('/{website}', 'show')->name('show');
            Route::get('/{website}/edit', 'edit')->name('edit');
            Route::PUT('/{website}', 'update')->name('update');
            Route::DELETE('/{website} ', 'destroy')->name('deleted');
        });

        Route::controller(App\Http\Controllers\Admin\EventController::class)->prefix('event')->name('event.')->group(function() {
            Route::GET('/', 'index')->name('index');
            Route::GET('/create', 'create')->name('create');
            Route::POST('/store', 'store')->name('store');
            Route::GET('/{website}', 'show')->name('show');
            Route::get('/{website}/edit', 'edit')->name('edit');
            Route::PUT('/{website}', 'update')->name('update');
            Route::DELETE('/{website} ', 'destroy')->name('deleted');
        });

        Route::controller(App\Http\Controllers\Admin\ContactController::class)->prefix('contact')->name('contact.')->group(function() {
            Route::GET('/', 'index')->name('index');
            Route::GET('/create', 'create')->name('create');
            Route::POST('/store', 'store')->name('store');
            Route::GET('/{website}', 'show')->name('show');
            Route::get('/{website}/edit', 'edit')->name('edit');
            Route::PUT('/{website}', 'update')->name('update');
            Route::DELETE('/{website} ', 'destroy')->name('deleted');
        });
    });

    Route::controller(App\Http\Controllers\Admin\RoleController::class)->prefix('roles')->name('roles.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::post('/list', 'list')->name('list');
        Route::post('/show', 'show')->name('show');
        Route::post('/store', 'store')->name('created');
        Route::post('/update', 'update')->name('updated');
        Route::post('/delete', 'destroy')->name('deleted');
    });

    Route::controller(App\Http\Controllers\Admin\PermissionController::class)->prefix('permissions')->name('permissions.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::post('/list', 'list')->name('list');
        Route::post('/show', 'show')->name('show');
        Route::post('/store', 'store')->name('created');
        Route::post('/update', 'update')->name('updated');
        Route::post('/delete', 'destroy')->name('deleted');
    });

    Route::controller(App\Http\Controllers\Admin\UserController::class)->prefix('users')->name('users.')->group(function() {
        Route::get('/', 'index')->name('index');
        Route::post('/list', 'list')->name('list');
        Route::post('/show', 'show')->name('show');
        Route::post('/store', 'store')->name('created');
        Route::post('/update', 'update')->name('updated');
        Route::post('/delete', 'destroy')->name('deleted');
    });

    Route::prefix('setting')->name('setting.')->group(function() {
        Route::resource('website', App\Http\Controllers\Admin\WebController::class);
        Route::resource('terms-of-service', App\Http\Controllers\Admin\TermsOfServiceController::class);
        Route::resource('privacy-policy', App\Http\Controllers\Admin\PrivacyPolicyController::class);
    });
});

Route::get('switch_language/{language}', function ($lang) {
    if (! in_array($lang, config('app.available_locales'))) {
        abort(400);
    }
    // Save locale to session.
    request()->session()->put('lang', $lang);
    return redirect()->back();
})->name('switch_language');
