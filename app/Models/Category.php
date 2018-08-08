<?php

namespace App\Models;

class Category extends BaseModel
{
    
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

}
