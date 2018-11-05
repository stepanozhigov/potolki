<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    public function avatar ()
    {
        return strpos($this->avatar, 'http') !== false ? $this->avatar : Storage::url($this->avatar);
    }

    public function comments ()
    {
        return $this->hasMany('App\Comment');
    }

    public function attaches ()
    {
        $attachCounts = 0;

        if (!empty($this->photos) && is_array($this->photos))
        {
            $attachCounts += count($this->photos);
        }

        if (!empty($this->video))
        {
            $attachCounts++;
        }
       return $attachCounts;
    }
}
