<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Direction;
use App\City;
use App\Photo;
use App\Promo;

class PageController extends Controller
{

    public function main (City $city)
    {
        //dd($city);
        return view('windows.main', [
            'city'  =>  $city
        ]);
    }

    public function photos (City $city)
    {
        return view ('common.photos', [
            'city'  =>  $city
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

}
