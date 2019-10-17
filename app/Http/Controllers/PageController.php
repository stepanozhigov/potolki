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
use App\Social;
use App\Visit;
use App\Surface;

class PageController extends Controller
{
    public function __construct() {
        //var_dump(session()->put('a', 'bbb'));
       //$visit = new Visit;
    }
    public function index () {
        return view('common.pages.index', [
            'directions' => Direction::where('id', '!=', 2)->get(),
            'cities'    =>  City::where('id', '!=', 1)->with('offices')->get(),
            'currentCity'   =>  City::find(1),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function photos (City $city, CatalogType $type = null)
    {
        if (!$type)
        {
            $photos = Photo::whereIn('catalog_type_id', [15,16,17,18,19,20,21,22,23,24,25])->get();
        }
        else
        {
            $photos =  $type->photos;

            if ($type->type == 'rooms') {
                $photos = Photo::where('room', $type->id)->get();
            }
        }


        return view ('common.pages.photos', [
            'city'  =>  $city,
            'types' =>  CatalogType::where('direction_id', 2)->get(),
            'photos'    =>  $photos,
            'currentType'  =>  $type,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function services (City $city, $type)
    {
        $view = 'common.pages.services';

        if ($type)
        {
            $view = "ceilings.services.{$type}";
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
            'promos'    =>  Promo::where('direction_id', 2)->get(),
            'seoData'   =>  SeoBlock::where(['route' => Route::currentRouteName(), 'direction_id' => 2])->first()
        ]);
    }

    public function about (City $city)
    {
        return view ('common.pages.about', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where(['route' => Route::currentRouteName(), 'direction_id' => 2])->first()
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
            'seoData'   =>  SeoBlock::where(['route' => Route::currentRouteName(), 'direction_id' => 2])->first()
        ]);
    }

    public function contacts (City $city)
    {
        return view ('common.pages.contacts', [
            'city'  =>  $city,
            'socials'   =>  Social::where(['city_id' => $city->id, 'direction_id' => 2])->get(),
            'seoData'   =>  SeoBlock::where(['route' => Route::currentRouteName(), 'direction_id' => 2])->first()
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
        if (!$category)
        {
            $category = QuestionCategory::find(1);
        }
        return view ('common.pages.questions', [
            'city'  =>  $city,
            'categories'    => QuestionCategory::all(),
            'currentCategory'  =>  $category,
            'questions' =>  $category->questions->where('direction_id', 2),
            'seoData'   =>  SeoBlock::where(['route' => Route::currentRouteName(), 'direction_id' => 2])->first()
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
            'reviews'   =>  Review::where(['is_active' => 1, 'direction_id' => 2])->orderBy('sort', 'asc')->paginate(6),
            'seoData'   =>  SeoBlock::where(['route' => Route::currentRouteName(), 'direction_id' => 2])->first()
        ]);
    }

    public function calculator(City $city, $type = 'okna')
    {
        return view('windows.calculator.'.$type, [
            'city'  =>  $city,
            'params'    =>  WindowCalcParam::where('type', $type)->get()
        ]);
    }

    public function callback (City $city)
    {
        return view('common.forms.form', ['city' => $city]);
    }
    public function measure (City $city)
    {
        return view('common.forms.measure', ['city' => $city]);
    }

    public function dirMessage (City $city)
    {
        return view('common.pages.dir-message', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where(['route' => Route::currentRouteName(), 'direction_id' => 2])->first()
        ]);
    }

    public function agreement (City $city)
    {
        return view('common.pages.agreement', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where(['route' => Route::currentRouteName(), 'direction_id' => 2])->first()
        ]);
    }

    public function articles (City $city)
    {
        return view('common.pages.articles', [
            'city'  =>  $city,
            'articles' => Article::where('is_active', 1)->orderBy('id', 'desc')->get(),
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

    public function catalogue (City $city, CatalogType $type)
    {
        return view('windows.services.catalogue', [
            'city'  =>  $city,
            'type' => $type,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first(),
        ]);
    }

    public function ceilings (City $city)
    {
        $seoData = SeoBlock::where(['route' => Route::currentRouteName(), 'city_id' => $city->id])->first();

        if (!$seoData) {
            $seoData = SeoBlock::where('route', Route::currentRouteName())->whereNull('city_id')->first();
        }
        //dd($seoData);
        return view('ceilings.ceilings', [
            'city'  =>  $city,
            'reviews'   =>  Review::where(['direction_id' => 2, 'is_active' => 1])->limit(3)->orderBy('sort', 'asc')->get(),
            'photos'    =>  Photo::whereIn('catalog_type_id', [15,16,17,18,19,20,21,22,23,24,25])->get(),
            'offers'    =>  Offer::where(['is_active' =>  1, 'direction_id' => 2])->get(),
            'catalogTypes'  => CatalogType::where(['direction_id' => 2])->get(),
            'seoData'   =>  $seoData,
            'articles' => Article::where(['is_active' => 1, 'in_main' => 1])->orderBy('id', 'desc')->get()
        ]);
    }
    public function ceilingsClone (City $city)
    {
        return view('templates.ceilings.main', [
            // 'city'  =>  $city,
            // 'reviews'   =>  Review::where(['direction_id' => 2, 'is_active' => 1])->limit(3)->orderBy('sort', 'asc')->get(),
            // 'photos'    =>  Photo::whereIn('catalog_type_id', [15,16,17,18,19,20,21,22,23,24,25])->get(),
            // 'offers'    =>  Offer::where(['is_active' =>  1, 'direction_id' => 2])->get(),
            // 'catalogTypes'  => CatalogType::where(['direction_id' => 2])->get(),
            // 'seoData'   =>  $seoData,
            // 'articles' => Article::where(['is_active' => 1, 'in_main' => 1])->orderBy('id', 'desc')->get()
        ]);
    }

    public function zamenaPolotna (City $city)
    {
        return view('ceilings.zamenaPolotna', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function ceilingsCalc (City $city)
    {
        return view('ceilings.ceilingsCalc', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function ustanovka (City $city)
    {
        return view('ceilings.ustanovka', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function remont (City $city)
    {
        return view('ceilings.remont', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function sliv (City $city)
    {
        return view('ceilings.sliv', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function notFound (City $city)
    {
        return view('ceilings.notFound', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function catalogueDetail (City $city, CatalogType $type)
    {
        //TODO: Переписать и убрать эти костыли отсюда.
        $seoData = SeoBlock::where(['route' => Route::currentRouteName(), 'direction_id' => 2])->first();

        $typeTitle = mb_strtolower($type->ceiling_title);
        $seoData->meta_title = str_replace('#type#', $typeTitle, $seoData->meta_title);
        $seoData->meta_description = str_replace('#price#', $type->price, $seoData->meta_description);

        $photos =  $type->photos;

        if ($type->type == 'rooms') {
            $photos = Photo::where('room', $type->id)->get();
        }

        return view('ceilings.catalogueDetail', [
            'city'  =>  $city,
            'type'  =>  $type,
            'photos'    =>  $photos,
            'seoData'   =>  $seoData
        ]);
    }

    public function photoprint (City $city)
    {
        return view('ceilings.photoprint', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where(['route' => Route::currentRouteName(), 'direction_id' => 2])->first()
        ]);
    }

    public function photobank (City $city)
    {
        return view('ceilings.photobank', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function lamps (City $city)
    {
        return view('ceilings.lamps', [
            'city'  =>  $city,
            'lamps' =>  \App\Lamp::all(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function surfaces (City $city)
    {
        return view('ceilings.surfaces', [
            'city'  =>  $city,
            'surfaces' => Surface::all(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function printprice (City $city)
    {
        return view('ceilings.printprice', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function dillers (City $city)
    {
        return view('ceilings.dillers', [
            'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function catalogueCeilings (City $city)
    {
        return view('ceilings.catalogueCeilings', [
            'city'  =>  $city,
            'materials' =>   CatalogType::where(['direction_id' => 2, 'type' => 'material'])->get(),
            'techs' =>   CatalogType::where(['direction_id' => 2, 'type' => 'tech'])->get(),
            'rooms' =>   CatalogType::where(['direction_id' => 2, 'type' => 'rooms'])->get(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first(),
            'lamps' =>  \App\Lamp::limit(3)->get(),
            'articles' => Article::where(['is_active' => 1, 'in_main' => 1])->orderBy('id', 'desc')->get()
        ]);
    }

    public function credit (City $city)
    {
        return view('common.pages.credit', [
			'city'  =>  $city,
            'reviews'   =>  Review::limit(3)->orderBy('sort', 'asc')->get(),
            'photos'    =>  Photo::all(),
            'offers'    =>  Offer::where('is_active', 1)->get(),
            'catalogTypes'  => CatalogType::where(['direction_id' => 2])->get(),
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first(),
            'articles' => Article::where(['is_active' => 1, 'in_main' => 1])->orderBy('id', 'desc')->get()
        ]);
    }

    public function constructor (City $city)
    {
        return view('ceilings.constructor', [
			'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function serverError (City $city)
    {
        return view('common.pages.serverError', [
			'city'  =>  $city,
            'seoData'   =>  SeoBlock::where('route', Route::currentRouteName())->first()
        ]);
    }

    public function sitemap (Request $request) {
        $cities = City::all();
        $pages = [
            'https://okna-ts.ru/#city#/' =>  'Главная',
            'https://okna-ts.ru/#city#/catalogue/okna' => 'Каталог окон',
            'https://okna-ts.ru/#city#/catalogue/dveri' => 'Каталог дверей',
            'https://okna-ts.ru/#city#/catalogue/balkoni' => 'Каталог балконов',
            'https://okna-ts.ru/#city#/catalogue/peregorodki' => 'Каталог перегородок',
            'https://okna-ts.ru/#city#/contacts' => 'Контакты',
            'https://okna-ts.ru/#city#/about' => 'О компании',
            'https://okna-ts.ru/#city#/employees' => 'Сотрудники',
            'https://okna-ts.ru/#city#/vacancies' =>  'Вакансии',
            'https://okna-ts.ru/#city#/questions' =>  'Вопрос-ответ',
            'https://okna-ts.ru/#city#/reviews' =>  'Отзывы',
            'https://okna-ts.ru/#city#/articles' => 'Статьи',
            'https://okna-ts.ru/#city#/dir-message' => 'Написать директору',
            'https://okna-ts.ru/#city#/calculator/okna' =>  'Калькулятор окон',
            'https://okna-ts.ru/#city#/calculator/balkony' =>  'Калькулятор балконов',
            'https://okna-ts.ru/#city#/promos' => 'Скидки',
            'https://okna-ts.ru/#city#/photos/' => 'Фотогалерея',
            'https://okna-ts.ru/#city#/services/' => 'Услуги',
            'https://okna-ts.ru/#city#/services/install' =>  'Установка',
            'https//okna-ts.ru/#city#/services/delivery' =>  'Доставка',
             'https://okna-ts.ru/#city#/services/credit' =>  'Рассрочка',
            'https://okna-ts.ru/#city#/services/facing' => 'Отделка',
            'https://okna-ts.ru/#city#/services/measurements' =>  'Бесплатный замер',
            'https://okna-ts.ru/#city#/services/repair' => 'Ремонт'
        ];

        return view('common.sitemap', [
            'cities'    =>  $cities,
            'pages' =>  $pages
        ]);
    }

    public function quiz (Request $request, City $city)
    {
        return view('ceilings.quiz', [
            'city'  =>  $city
        ]);
    }
    public function quiz2 (Request $request, City $city)
    {
        return view('ceilings.quiz2', [
            'city'  =>  $city
        ]);
    }

}
