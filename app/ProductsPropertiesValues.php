<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class ProductsPropertiesValues extends Model
{
    use Resizable;

    protected $table = 'products_properties_values';

    public $fillable = [
        'id',
        'property_id',
        'name',
        'code',
        'value'
    ];
    public $timestamps = true;

    public function property()
    {
        return $this->belongsTo('App\ProductsProperties', 'property_id');
    }

    public function products()
    {
        return $this->belongsToMany(
            'App\Product',
            'products_properties_properties_values', 'property_value_id', 'product_id'
        );
    }

}
