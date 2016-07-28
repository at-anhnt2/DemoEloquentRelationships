<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function photos() {
        return $this->morphMany('App\Photo', 'imageable');
    }
    
    public function tags() {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
