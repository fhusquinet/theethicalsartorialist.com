<?php

namespace App\Models;

class Article extends BaseModel
{
    
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}
