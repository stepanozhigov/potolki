<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Review extends Model
{

    public function photos ()
    {
        return json_decode($this->photos) ?? [];
    }
    public function video ()
    {
        $object = json_decode($this->video);
        return $object[0]->download_link ?? false;
    }

    public function comments ()
    {
        return $this->hasMany('App\Comment');
    }
}
