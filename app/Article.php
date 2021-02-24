<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['title','description'];
    
    public function category(Type $var = null)
    {
        return $this->belongsTo('App\Category');
    }
    public function tags(Type $var = null)
    {
        return $this->belongsTo('App\Tag');
    }
}
 