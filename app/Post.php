<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author()
    {
        return $this->hasOne('App\User','id','author_id');
    }

    public function category()
    {
        return $this->hasOne('App\Category','id','category_id');
    }
}
