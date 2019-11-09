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
use Illuminate\Support\Facades\Log;
use App\Connectors\BitrixConnector;
// Временно здесь. Обязательно убрать отсюда;
//$visit = new App\Visit;

//Artisan::call('view:clear');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'PageController@index')->name('ceilings-index');

Route::get('/job-test', function (BitrixConnector $connector) {
	$lead = App\Lead::create([
		'name'	=> 'test name',
		'phone'	=>	'8 999 999 99 99',
		'city_id' => 117,
		'direction_id' => 56,
		'visits'	=>	session('visits')
	]);
	App\Jobs\ProcessFeedback::dispatch($lead);
});
Route::get('/err-handler', function() {
	dd($_COOKIE['roistat_visit']);
    /*Log::info([
        'type' => 'js-err', 'data' => request()->all()
    ]);*/
});

Route::get('/geo/locate', function () {
    $location = geoip(request()->ip());
    $locationCity = strtolower($location->city);
    $city = [];

    $codes = [
        'sochi'    =>   'sochi',
        'moscow'    => 'moskva',
        'krasnodar' => 'krasnodar',
        'vladivostok'   =>   'vladivostok',
        'dolgoprudnyy'  =>  'dolgoprudnyj',
        'novosibirsk'   =>  'novosibirsk',
        'artem' => 'artem',
        'khabarovsk'    =>  'habarovsk',
        'ussuriysk' =>  'ussuriysk',
        'blagoveshchensk'   =>  'blagoveschensk'
    ];

    if (!empty($codes[$locationCity]))
    {
        $city = City::where('code', $codes[$locationCity])->first()->toArray();
    }
    //Log::info(['location'   =>  $location, 'city' => $city]);
    //dd($location);
    return response()->json(['location' => $location->toArray(),'city' => $city]);
});

Route::get('/sitemap', 'PageController@sitemap')->name('sitemap');

Route::get('/forms/callback', 'PageController@callback');
Route::post('/forms/add-comment', 'FeedbackController@addComment');
Route::post('/forms/add-review', 'FeedbackController@addReview');
Route::post('/forms/add-lead', 'FeedbackController@addLead')->name('add-lead');
Route::post('/forms/proxy-lead', 'FeedbackController@proxyLead');
Route::post('/forms/search-phone', 'FeedbackController@searchPhoneInMessage');

 Route::post('/forms/survey', 'FeedbackController@addSurvey');

Route::prefix('/ajax')->group(function () {
    Route::get('/portfolio/{type_id}/photos', 'AjaxController@getPortfolioPhotos')->name('ajaxPortfolioPhotos');
});

Route::get('/payment', 'TransactionController@index')->name('payment');

Route::prefix('/{city}')->group(function () {

    Route::get('/', 'PageController@ceilings')->name('ceilings');

    Route::get('/clone', 'PageController@ceilingsClone')->name('ceilingsClone');

    Route::get('/calculator/{type?}', 'PageController@calculator')->name('calculator');

    Route::get('/photos/{type?}', 'PageController@photos')->name('photos');

    Route::get('/services/{type}', 'PageController@services')->name('services');

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

    Route::get('/articles/{article}', 'PageController@article')->name('article');

    Route::get('/whyus', 'PageController@whyus')->name('whyus');

    Route::get('/agreement', 'PageController@agreement')->name('agreement');

    Route::get('/ceilingsCalc', 'PageController@ceilingsCalc')->name('ceilingsCalc');

    Route::get('/notFound', 'PageController@notFound')->name('notFound');

    Route::get('/catalogue/', 'PageController@catalogueCeilings')->name('catalogueCeilings');

    Route::get('/catalogue/{type}', 'PageController@catalogueDetail')->name('catalogue');

    Route::get('/photoprint', 'PageController@photoprint')->name('photoprint');

    Route::get('/photobank', 'PageController@photobank')->name('photobank');

    Route::get('/lamps', 'PageController@lamps')->name('lamps');

    Route::get('/surfaces', 'PageController@surfaces')->name('surfaces');

    Route::get('/printprice', 'PageController@printprice')->name('printprice');

    Route::get('/dillers', 'PageController@dillers')->name('dillers');

    Route::get('/credit', 'PageController@credit')->name('credit');

    Route::get('/climat', 'PageController@climat')->name('climat');

    Route::get('/serverError', 'PageController@serverError')->name('serverError');

    Route::get('/constructor', 'PageController@constructor')->name('constructor');

    Route::get('/forms/callback', 'PageController@callback')->name('forms.callback');
    Route::get('/forms/measure', 'PageController@measure')->name('forms.measure');
    Route::post('/forms/success', 'FeedbackController@feedback')->name('forms.feedback');
    Route::get('/forms/success', 'FeedbackController@success')->name('forms.success');


    Route::get('/quiz', 'PageController@quiz')->name('quiz');
    Route::get('/quiz2', 'PageController@quiz2')->name('quiz2');
});

Route::post('/forms/quiz', 'FeedbackController@quiz')->name('forms.quiz');
Route::post('/forms/quiz2', 'FeedbackController@quiz2')->name('forms.quiz2');
