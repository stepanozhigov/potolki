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

Route::get('/{city}/', function () { 
    return view('windows.main', [
        'directions' => Direction::where('id', '!=', 1)->get(),
        'currentDirection'  =>  Direction::find(1),
        'cities'    =>  City::all()
        ]);
})->name('windows.main');



