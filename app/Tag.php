<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
        public function articles(Type $var = null)
    {
        return $this->hasMany('App\Article');
    }
}
