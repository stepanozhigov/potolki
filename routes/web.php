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
    return view('common.pages.index', [
        'directions' => Direction::where('id', '!=', 1)->get(),
        'cities'    =>  City::where('id', '!=', 1)->get(),
        'currentCity'   =>  City::find(1)
        ]);
})->name('index');

Route::get('/forms/callback', 'PageController@callback');
Route::post('/forms/add-comment', 'FeedbackController@addComment');
Route::post('/forms/add-review', 'FeedbackController@addReview');


Route::prefix('/{city}')->group(function () {

    Route::get('/', 'PageController@main')->name('windows.main');

    Route::get('/calculator/{type?}', 'PageController@calculator')->name('calculator');

    Route::get('/photos/{type?}', 'PageController@photos')->name('photos');

    Route::get('/services/{type?}', 'PageController@services')->name('services');

    Route::get('/promos', 'PageController@promos')->name('promos');

    Route::get('/about', 'PageController@about')->name('about');

    Route::get('/employees', 'PageController@employers')->name('employees');

    Route::get('/reviews', 'PageController@reviews')->name('reviews');

    Route::get('/reviews/add', 'PageController@addReview')->name('add-review');

    Route::get('/vacancies', 'PageController@vacancies')->name('vacancies');

    Route::get('/questions/{category?}', 'PageController@questions')->name('questions');

    Route::get('/contacts', 'PageController@contacts')->name('contacts');

    Route::get('/dir-message', 'PageController@dirMessage')->name('dirMessage');

    Route::get('/articles', 'PageController@articles')->name('articles');
});
