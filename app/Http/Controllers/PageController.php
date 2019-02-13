<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Direction;
use App\City;
use App\CatalogType;
use App\Photo;
use App\Promo;
use App\Review;
use App\Employee;
use App\Vacancy;
use App\QuestionCategory;
use App\Question;
use App\WindowCalcParam;
use App\Service;
use App\Offer;
use App\Article;
use App\SeoBlock;

class PageController extends Controller
{
    public function index () {
        return view('common.pages.index', [
            'directions' => Direction::where('id', '!=', 1)->get(),
            'cities'    =>  City::where('id', '!=', 1)->get(),
            'currentCity'   =>  City::find(1),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }
    public function main (City $city, Request $request)
    {
        return view('windows.main', [
            'city'  =>  $city,
            'reviews'   =>  Review::limit(3)->orderBy('sort', 'asc')->get(),
            'photos'    =>  Photo::all(),
            'offers'    =>  Offer::where('is_active', 1)->get(),
            'catalogTypes'  => CatalogType::where(['direction_id' => 1])->get(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first(),
            'articles' => Article::where(['is_active' => 1, 'in_main' => 1])->orderBy('sort', 'asc')->get()
        ]);
    }
    public function photos (City $city, CatalogType $type = null)
    {
        return view ('common.pages.photos', [
            'city'  =>  $city,
            'types' =>  CatalogType::all(),
            'photos'    =>  $type->photos ?? Photo::all(),
            'currentType'  =>  $type,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function services (City $city, $type = null)
    {
        $view = 'common.pages.services';

        if ($type)
        {
            $view = "windows.services.{$type}";
        }

        return view ($view, [
            'city'  =>  $city,
            'services'  =>  Service::all(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function promos (City $city)
    {
        return view ('common.pages.promos', [
            'city'  =>  $city,
            'promos'    =>  Promo::all(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function about (City $city)
    {
        return view ('common.pages.about', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function employers (City $city)
    {
        return view ('common.pages.employers', [
            'city'  =>  $city,
            'employees' =>  Employee::all(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function vacancies (City $city)
    {
        return view ('common.pages.vacancies', [
            'city'  =>  $city,
            'vacancies' =>  Vacancy::all(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function contacts (City $city)
    {
        return view ('common.pages.contacts', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function whyus (City $city)
    {
        return view ('common.pages.whyus', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function questions (City $city, QuestionCategory $category = null)
    {
        return view ('common.pages.questions', [
            'city'  =>  $city,
            'categories'    => QuestionCategory::all(),
            'currentCategory'  =>  $category,
            'questions' =>  $category->questions ?? Question::all(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function addReview (City $city)
    {
        return view ('common.pages.add-review', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function reviews (City $city)
    {
        return view('common.pages.reviews', [
            'city'  =>  $city,
            'reviews'   =>  Review::where('is_active', 1)->orderBy('sort', 'asc')->paginate(30),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function calculator(City $city, $type = 'okna')
    {
        return view('windows.calculator.'.$type, [
            'city'  =>  $city,
            'params'    =>  WindowCalcParam::where('type', $type)->get()
        ]);
    }

    public function callback ()
    {
        return view('common.forms.callback');
    }

    public function dirMessage (City $city)
    {
        return view('common.pages.dir-message', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function agreement (City $city)
    {
        return view('common.pages.agreement', [
            'city'  =>  $city
        ]);
    }

    public function articles (City $city)
    {
        return view('common.pages.articles', [
            'city'  =>  $city,
            'articles' => Article::where('is_active', 1)->orderBy('sort', 'asc')->get(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function article (City $city, Article $article)
    {
        return view('common.pages.article', [
            'city'  =>  $city,
            'article'   =>  $article
        ]);
    }

    public function catalogue (City $city)
    {
        return view('windows.services.catalogue', [
            'city'  =>  $city
        ]);
    }

}
