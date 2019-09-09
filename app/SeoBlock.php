<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SeoBlock extends Model
{
    public $fillable = [
    	'meta_title',
    	'meta_description'
    ];
}
