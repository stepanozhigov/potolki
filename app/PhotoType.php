<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PhotoType extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function photos ()
    {
        return $this->hasMany('App\Photo');
    }
    
}
