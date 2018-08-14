<?php

namespace App\Models;

class Article extends BaseModel
{

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->reading_time = calculate_reading_time($model->text);
        });
        self::updating(function ($model) {
            $model->reading_time = calculate_reading_time($model->text);
        });
    }

    public function getUrl()
    {
        return route('articles.show', $this);
    }

    public function date()
    {
        return $this->created_at->format('M jS, Y');
    }
    
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}
