<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class ProductsProperties extends Model
{
    use Resizable;

    protected $table = 'products_properties';

    public $fillable = ['id', 'name', 'code'];
    public $timestamps = true;

    public function values()
    {
        return $this->hasMany('App\ProductsPropertiesValues', 'property_id');
    }
}
