<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Website\WebsiteController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [WebsiteController::class, 'index']);

route::group(['prfix' => 'admin', 'Middleware' => ['auth'], 'namespace' => 'admin'], function () {

    Route::get('dashboard/home', [DashboardController::class, 'index'])->name('home');
    // Route::post('dashboard/logout', [DashboardController::class, 'logout'])->name('dashboard.logout');
});

Route::group(['prefix' => '', 'middleware' => ['']], function () {
    Route::get('/main', [DashboardController::class, 'main'])->name('main.content');
});

Route::group(['prefix' => 'banner','namespace' => 'Admin'], function () {
    Route::get('/create', 'BannerController@create')->name('dashboard.banner.create');
    Route::post('/store', 'BannerController@store')->name('dashboard.banner.store');
    Route::get('/view', 'BannerController@view')->name('dashboard.banner.view');

});


// Route::group(['prefix' => 'about','namespace' => 'Admin'], function () {
//       Route::get('/create', 'AboutController@create')->name('dashboard.about.create');
//       Route::post('/store', 'AboutController@store')->name('dashboard.about.store');

// });
