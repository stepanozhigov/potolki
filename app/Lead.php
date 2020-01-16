<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BitrixConnector;

class Lead extends Model
{
    protected $fillable = [
		'name',
		'phone',
		'city_id',
		'direction_id',
		'visits',
		'roistat',
		'description'
	];

	protected $casts = [
		'visits'	=>	'array'
	];

	public static function sendToCrm ()
	{
		$connector = new BitrixConnector;

		return $connector->addLead([
			'title' =>  $this->name,
            'name'  =>  $this->name,
            'phone' =>  $this->phone,
            'direction' =>  $this->direction,
            'city'  =>  $this->city
		]);
	}
} 
