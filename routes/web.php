<?php

use Illuminate\Support\Facades\Route;

use App\Models\Team;
use App\Models\Footer;

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceDetailController;

use App\Http\Controllers\AdminHeroController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminServicesController;
use App\Http\Controllers\AdminTeamController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminPortfolioController;
use App\Http\Controllers\AdminFooterController;
use App\Http\Controllers\AdminCallToActionController;
<<<<<<< Updated upstream
use App\Http\Controllers\ServiceDetailController;
use App\Http\Controllers\AdminServiceDetailController;
=======
use App\Http\Controllers\AdminServiceDetailController;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/services', [ServicesController::class, 'index']);

Route::get('/services/{slug}', [ServiceDetailController::class, 'show']);

Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});
>>>>>>> Stashed changes

Route::get('/team', function () {

    $team = Team::first();
    $footer = Footer::first();

    return view('team', compact(
        'team',
        'footer'
    ));

});

<<<<<<< Updated upstream
Route::get('/', function () {
    return view('landing');
});

Route::get('/home', [HomeController::class, 'index']);
=======
/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/
>>>>>>> Stashed changes

Route::get('/dashboard', function () {

    return redirect('/admin/hero');

})
    ->middleware(['auth'])
    ->name('dashboard');

/*
|--------------------------------------------------------------------------
| PROFILE
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | HERO
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/hero', function () {

        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        return app(AdminHeroController::class)->edit();

    });

    Route::post('/admin/hero/update', function () {

        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        return app(AdminHeroController::class)->update(request());

    });

<<<<<<< Updated upstream
=======
    /*
    |--------------------------------------------------------------------------
    | ABOUT
    |--------------------------------------------------------------------------
    */

>>>>>>> Stashed changes
    Route::get('/admin/about', [AdminAboutController::class, 'edit']);

    Route::post('/admin/about/update', [AdminAboutController::class, 'update']);

    /*
    |--------------------------------------------------------------------------
    | SERVICES
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/services', [AdminServicesController::class, 'edit']);

    Route::post('/admin/services/update', [AdminServicesController::class, 'update']);

    /*
    |--------------------------------------------------------------------------
    | SERVICE DETAILS
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/service-detail', [AdminServiceDetailController::class, 'index']);

    Route::post('/admin/service-detail/{id}', [AdminServiceDetailController::class, 'update']);

    /*
    |--------------------------------------------------------------------------
    | TEAM
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/team', [AdminTeamController::class, 'edit']);

    Route::post('/admin/team/update', [AdminTeamController::class, 'update']);

    /*
    |--------------------------------------------------------------------------
    | CONTACT
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/contact', [AdminContactController::class, 'edit']);

    Route::post('/admin/contact/update', [AdminContactController::class, 'update']);

    /*
    |--------------------------------------------------------------------------
    | PORTFOLIO
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/portfolio', [AdminPortfolioController::class, 'index']);

    Route::post('/admin/portfolio/{id}', [AdminPortfolioController::class, 'update']);

<<<<<<< Updated upstream
=======
    /*
    |--------------------------------------------------------------------------
    | FOOTER
    |--------------------------------------------------------------------------
    */

>>>>>>> Stashed changes
    Route::get('/admin/footer', [AdminFooterController::class, 'edit']);

    Route::post('/admin/footer/update', [AdminFooterController::class, 'update']);

<<<<<<< Updated upstream
=======
    /*
    |--------------------------------------------------------------------------
    | CTA
    |--------------------------------------------------------------------------
    */

>>>>>>> Stashed changes
    Route::get('/admin/cta', [AdminCallToActionController::class, 'edit']);

    Route::post('/admin/cta/update', [AdminCallToActionController::class, 'update']);

<<<<<<< Updated upstream
    Route::get('/admin/service-detail', [AdminServiceDetailController::class, 'index']);

    Route::post('/admin/service-detail/{id}', [AdminServiceDetailController::class, 'update']);

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

Route::get('/services/{slug}', [ServiceDetailController::class, 'show']);

require __DIR__ . '/auth.php';
=======
});

require __DIR__ . '/auth.php';
>>>>>>> Stashed changes
