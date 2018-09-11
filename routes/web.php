<?php

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
use App\Direction;
use App\City;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', function () {
    return view('common.index', [
        'directions' => Direction::where('id', '!=', 1)->get(),
        'cities'    =>  City::where('id', '!=', 1)->get(),
        'currentCity'   =>  City::find(1)
        ]);
})->name('index');


Route::prefix('/{city}')->group(function () {

    Route::get('/', 'PageController@main')->name('windows.main');

    Route::get('/photos/{type?}', 'PageController@photos')->name('photos');

    Route::get('/services', 'PageController@services')->name('services');

    Route::get('/promos', 'PageController@promos')->name('promos');

    Route::get('/about', 'PageController@about')->name('about');

    Route::get('/sotrudniki', 'PageController@employers')->name('sotrudniki');
});
