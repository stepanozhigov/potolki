<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class TransactionController extends Controller
{
    public function index (City $city)
    {
      return view('common.pages.transaction', [
		  'city' => $city
	  ]);
    }

	public function err (Request $request)
	{
		info('err', $request->all());

	}

	public function success (Request $request)
	{
		info('success', $request->all());
		return view('common.pages.transaction.success', ['city' => \App\City::find(1)]);
	}

	public function result (Request $request)
	{
		info('result', $request->all());
	}
}
