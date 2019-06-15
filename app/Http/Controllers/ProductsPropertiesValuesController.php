<?php

namespace App\Http\Controllers;

use App\ProductsPropertiesValues;
use Illuminate\Http\Request;
use App\Photo;

/**
 * Контроллер для работы с Ajax запросами
 *
 * @package App\Http\Controllers
 */
class ProductsPropertiesValuesController extends Controller
{
    public function addAllValues() {
        $values = self::$propsValues;
        $result = [];

        foreach ($values as $value) {
            $ExistValue = ProductsPropertiesValues::where('value', $value['value'])
                ->where('name', $value['name'])
                ->where('code', $value['code'])->first();
            if (!$ExistValue) $result[] = ProductsPropertiesValues::create($value);
        }

        return response()->json($result);
    }
}