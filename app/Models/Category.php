<?php

namespace App\Models;

class Category extends BaseModel
{

    public function getUrl()
    {
        return route('categories.show', $this);
    }
    
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

}
