<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function getRouteKeyName() {
        return 'code';
    }

    // public function resolveRouteBinding($value)
    // {
        // dd($value, 123);
        // return $this->where('name', $value)->first() ?? abort(404);
    // }

    public function employees()
    {
        return $this->belongsToMany('App\Employee', 'citys_employees');
    }

    public function photos ()
    {
        return json_decode($this->photos) ?? [];
    }

    public function offices ()
    {
        return $this->hasMany('App\Office');
    }
    public function externalCode()
    {
        return $this->name;
    }
    public function socials ()
    {
        return $this->hasMany('App\Social')->where('socials.direction_id', '=', 2);
    }
    public function mainOffice ()
    {
        $title = $this->name;
        $office = $this->offices->first();

        if ($this->code == 'moskva') {
            return $this->name." и область";
        }

        if ($office) {
            $title .= ", {$office->adres}";
        }
        return $title;

    }
}
