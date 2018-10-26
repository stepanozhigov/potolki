<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function getRouteKeyName() {
        return 'code';
    }

    public function offices ()
    {
        return $this->hasMany('App\Office');
    }
}
