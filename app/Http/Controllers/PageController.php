<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Direction;
use App\City;
use App\PhotoType;
use App\Photo;
use App\Promo;
use App\WindowCalcParam;

class PageController extends Controller
{
    public function main (City $city)
    {
        return view('windows.main', [
            'city'  =>  $city
        ]);
    }
    public function photos (City $city, PhotoType $type = null)
    {
        return view ('common.photos', [
            'city'  =>  $city,
            'types' =>  PhotoType::all(),
            'photos'    =>  $type->photos ?? Photo::all(),
            'currentType'  =>  $type
        ]);
    }

    public function services (City $city)
    {
        return view ('common.services', [
            'city'  =>  $city
        ]);
    }

    public function promos (City $city)
    {
        return view ('common.promos', [
            'city'  =>  $city,
            'promos'    =>  Promo::all()
        ]);
    }

    public function about (City $city)
    {
        return view ('common.about', [
            'city'  =>  $city
        ]);
    }

    public function employers (City $city)
    {
        return view ('common.employers', [
            'city'  =>  $city
        ]);
    }

    public function jobs (City $city)
    {
        return view ('common.jobs', [
            'city'  =>  $city
        ]);
    }

    public function contacts (City $city)
    {
        return view ('common.contacts', [
            'city'  =>  $city
        ]);
    }

    public function questions (City $city)
    {
        return view ('common.questions', [
            'city'  =>  $city
        ]);
    }

    public function reviews (City $city)
    {
        return view('common.reviews', [
            'city'  =>  $city
        ]);
    }

    public function addReview(City $city)
    {
        return view('common.add-review', [
            'city'  =>  $city
        ]);
    }

    public function calculator(City $city, $type = 'okna')
    {
        return view('windows.calculator.'.$type, [
            'city'  =>  $city,
            'params'    =>  WindowCalcParam::where('type', $type)->get()
        ]);
    }

}
