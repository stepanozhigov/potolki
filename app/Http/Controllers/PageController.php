<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Direction;
use App\City;
use App\CatalogType;
use App\Photo;
use App\Promo;
use App\Review;
use App\WindowCalcParam;

class PageController extends Controller
{
    public function main (City $city)
    {
        return view('windows.main', [
            'city'  =>  $city,
            'reviews'   =>  Review::all(),
            'photos'    =>  Photo::all(),
            'catalogTypes'  => CatalogType::where(['direction_id' => 1])->get()
        ]);
    }
    public function photos (City $city, CatalogType $type = null)
    {
        return view ('common.pages.photos', [
            'city'  =>  $city,
            'types' =>  CatalogType::all(),
            'photos'    =>  $type->photos ?? Photo::all(),
            'currentType'  =>  $type
        ]);
    }

    public function services (City $city)
    {
        return view ('common.pages.services', [
            'city'  =>  $city
        ]);
    }

    public function promos (City $city)
    {
        return view ('common.pages.promos', [
            'city'  =>  $city,
            'promos'    =>  Promo::all()
        ]);
    }

    public function about (City $city)
    {
        return view ('common.pages.about', [
            'city'  =>  $city
        ]);
    }

    public function employers (City $city)
    {
        return view ('common.pages.employers', [
            'city'  =>  $city
        ]);
    }

    public function jobs (City $city)
    {
        return view ('common.pages.jobs', [
            'city'  =>  $city
        ]);
    }

    public function contacts (City $city)
    {
        return view ('common.pages.contacts', [
            'city'  =>  $city
        ]);
    }

    public function questions (City $city)
    {
        return view ('common.pages.questions', [
            'city'  =>  $city
        ]);
    }

    public function addReview (City $city)
    {
        return view ('common.pages.add-review', [
            'city'  =>  $city
        ]);
    }

    public function reviews (City $city)
    {
        return view('common.pages.reviews', [
            'city'  =>  $city,
            'reviews'   =>  Review::all()
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

    public function dirMessage ()
    {
        return view('common.pages.dir-message');
    }

}
