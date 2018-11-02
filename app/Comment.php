<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    protected $fillable = ['review_id', 'fio', 'avatar', 'text', 'type'];
    
    public function user ()
    {
        return $this->belongsTo('App\User');
    }
}
