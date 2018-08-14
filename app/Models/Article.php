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
    
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}
