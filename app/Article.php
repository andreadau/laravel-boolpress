<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['title','description'];
    // category
    public function category()
    {
        return $this->belongsTo(Category::Class);
    }
    // tags
    public function tags()
    {
        return $this->belongsToMany(Tag::Class);
    }
}
