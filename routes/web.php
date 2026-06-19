<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminHeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminServicesController;
use App\Http\Controllers\AdminTeamController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminPortfolioController;
use App\Models\Team;
use App\Http\Controllers\AdminFooterController;
use App\Models\Footer;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AdminCallToActionController;

Route::get('/team', function () {

    $team = Team::first();
    $footer = Footer::first();

    return view('team', compact(
        'team',
        'footer'
    ));

});
Route::get('/admin/cta', [AdminCallToActionController::class, 'edit']);

Route::post('/admin/cta/update', [AdminCallToActionController::class, 'update']);


Route::get('/', function () {
    return view('landing');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return redirect('/admin/hero');
})
    ->middleware(['auth'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {

    Route::get('/admin/hero', function () {

        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        return app(\App\Http\Controllers\AdminHeroController::class)->edit();
    });

});

    Route::post('/admin/hero/update', function () {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        return app(\App\Http\Controllers\AdminHeroController::class)->update(request());
    });


Route::get('/about', [AboutController::class, 'index']);



Route::get('/services', [ServicesController::class, 'index']);

Route::get('/portfolio', [PortfolioController::class, 'index']);



Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::view('/services/cat-grooming', 'services.cat-grooming');
Route::view('/services/cat-adoption', 'services.cat-adoption');
Route::view('/services/cat-hotel', 'services.cat-hotel');
Route::view('/services/cat-playroom', 'services.cat-playroom');
Route::view('/services/vet-consultation', 'services.vet-consultation');
Route::view('/services/cat-birthday-party', 'services.cat-birthday-party');

Route::middleware('auth')->group(function () {
    Route::get('/admin/about', [AdminAboutController::class, 'edit']);

    Route::post('/admin/about/update', [AdminAboutController::class, 'update']);

    Route::get('/admin/services', [AdminServicesController::class, 'edit']);

    Route::post('/admin/services/update', [AdminServicesController::class, 'update']);

    Route::get('/admin/team', [AdminTeamController::class, 'edit']);

    Route::post('/admin/team/update', [AdminTeamController::class, 'update']);

    Route::get('/admin/contact', [AdminContactController::class, 'edit']);

    Route::post('/admin/contact/update', [AdminContactController::class, 'update']);

    Route::get('/admin/portfolio', [AdminPortfolioController::class, 'index']);

    Route::post('/admin/portfolio/{id}', [AdminPortfolioController::class, 'update']);


    Route::get('/admin/footer', [AdminFooterController::class, 'edit']);

    Route::post('/admin/footer/update', [AdminFooterController::class, 'update']);

});

require __DIR__ . '/auth.php';
