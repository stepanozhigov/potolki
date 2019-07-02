<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Product extends Model
{
    use Resizable;

    protected $table = 'products';

    public $fillable = [
        'id',
        'category_id',
        'manufacturer_id',
        'name',
        'model',
        'slug',
        'image',
        'description',
        'description_short',
        'sort',
        'rating',
        'price',
        'discount',

        'xml_id',
        'price_ussuriysk',
        'price_vladivostok',
        'price_nakhodka',
        'price_blagoveshchensk'
    ];
    public $timestamps = true;

    public static function getByFilter(Request $request, $limit) {
        $filter = $request->get('filter');
        if (!$filter) return ($limit) ? Product::limit($limit)->get() : Product::all();
        $filter = json_decode($filter, true);

        $Products = Product::where('id', '!=', '');
        if (array_key_exists('manufactures', $filter))
            $Products->whereIn('manufacturer_id', $filter['manufactures']);

        if (array_key_exists('price', $filter))
            if (array_key_exists('min', $filter['price']))
                $Products->where('price', '>=', (int) $filter['price']['min']);
            if (array_key_exists('max', $filter['price']))
                $Products->where('price', '<=', (int) $filter['price']['max']);

        return ($limit) ? $Products->limit($limit)->get() : $Products->get();
    }

    public function manufacturer()
    {
        return $this->belongsTo('App\Manufacturer');
    }

    public function propertyValues()
    {
        return $this->belongsToMany(
            'App\ProductsPropertiesValues',
            'products_properties_properties_values', 'product_id', 'products_properties_values_id'
        );
    }

}
