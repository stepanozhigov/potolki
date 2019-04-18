<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function getRouteKeyName() {
        return 'code';
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
        return $this->hasMany('App\Social');
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
