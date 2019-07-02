<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class ProductsPropertiesPropertiesValues extends Model
{
    use Resizable;

    protected $table = 'products_properties_properties_values';

    public $fillable = [
        'property_id',
        'product_id',
        'products_properties_values_id'
    ];
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }

    public function property()
    {
        return $this->belongsTo('App\ProductsProperties', 'property_id');
    }

    public function value()
    {
        return $this->belongsTo('App\ProductsPropertiesValues', 'property_value_id');
    }

}
