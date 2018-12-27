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
    public function mainOffice ()
    {
        $title = $this->name;
        $office = $this->offices->first();

        if ($office) {
            $title .= ", {$office->adres}";
        }
        return $title;

    }
}
