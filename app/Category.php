<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    public $fillable = [
        'id', 'parent_id', 'name', 'slug', 'sort', 'created_at', 'updated_at'
    ];
    public $timestamps = true;

}
