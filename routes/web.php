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
    Route::get('/edit/{id}', 'BannerController@edit')->name('dashboard.banner.edit');
    Route::post('/update/{id}','BannerController@update')->name('dashboard.banner.update');
    Route::get('/destory/{id}','BannerController@destory')->name('dashboard.banner.destory');

});



Route::group( ['prefix'=>'about','namespace'=>'Admin' ], function(){
    Route::get('/create','AboutController@create')->name('dashboard.about.create');
    Route::post('/store','AboutController@store')->name('dashboard.about.store');
    Route::get('/view','AboutController@view')->name('dashboard.about.view');
    Route::get('/edit/{id}','AboutController@edit')->name('dashboard.about.edit');
    Route::post('/update/{id}','AboutController@update')->name('dashboard.about.update');
    Route::get('/destory/{id}','AboutController@destory')->name('dashboard.about.destory');
});



Route::group( ['prefix'=>'services','namespace'=>'Admin' ], function(){
    Route::get('/create','ServicesController@create')->name('dashboard.services.create');
    Route::post('/store','ServicesController@store')->name('dashboard.services.store');
    Route::get('/view','ServicesController@view')->name('dashboard.services.view');
    Route::get('/edit/{id}','ServicesController@edit')->name('dashboard.services.edit');
    Route::post('/update/{id}','ServicesController@update')->name('dashboard.services.update');
    Route::get('/destory/{id}','ServicesController@destory')->name('dashboard.services.destory');
});

Route::group( ['prefix'=>'protfolio','namespace'=>'Admin' ], function(){
    Route::get('/create','ProtfolioController@create')->name('dashboard.protfolio.create');
    Route::post('/store','ProtfolioController@store')->name('dashboard.protfolio.store');
    Route::get('/view','ProtfolioController@view')->name('dashboard.protfolio.view');
    Route::get('/edit/{id}','ProtfolioController@edit')->name('dashboard.protfolio.edit');
    Route::post('/update/{id}','ProtfolioController@update')->name('dashboard.protfolio.update');
    Route::get('/destory/{id}','ProtfolioController@destory')->name('dashboard.protfolio.destory');
});


// Route::group(['prefix' => 'about','namespace' => 'Admin'], function () {
//       Route::get('/create', 'AboutController@create')->name('dashboard.about.create');
//       Route::post('/store', 'AboutController@store')->name('dashboard.about.store');

// });
