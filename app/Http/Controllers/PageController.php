<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Direction;
use App\City;
use App\Photo;

class PageController extends Controller
{

    public function main (City $city)
    {
        //dd($city);
        return view('windows.main', [
            'directions' => Direction::where('id', '!=', 1)->get(),
            'currentDirection'  =>  Direction::find(1),
            'cities'    =>  City::all(),
            'city'  =>  $city
        ]);
    }

    public function photos (City $city)
    {
        return view ('common.photos', [
            'directions' => Direction::where('id', '!=', 1)->get(),
            'currentDirection'  =>  Direction::find(1),
            'city'  =>  $city
        ]);
    }

    public function services (City $city)
    {
        return view ('common.services', [
            'directions' => Direction::where('id', '!=', 1)->get(),
            'currentDirection'  =>  Direction::find(1),
            'city'  =>  $city
        ]);
    }

    public function promos (City $city)
    {
        return view ('common.promos', [
            'directions' => Direction::where('id', '!=', 1)->get(),
            'currentDirection'  =>  Direction::find(1),
            'city'  =>  $city
        ]);
    }

}
