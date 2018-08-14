<?php

namespace App\Models;

use Spatie\Tags\HasTags;

class Article extends BaseModel
{
    use HasTags;

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

    public function category()
    {
        return $this->categories->first();
    }
    
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function scopeWhereLike($query, $column, $needle)
    {
        return $query->where($column, 'LIKE', '%'.$needle.'%');
    }

    public function scopeOrWhereLike($query, $column, $needle)
    {
        return $query->orWhere($column, 'LIKE', '%'.$needle.'%');
    }

    public function scopeWithCategory($query, $id)
    {
        return $query->whereHas('categories', function ($subQuery) use ($id) {
            $subQuery->where('id', $id);
        });
    }

}
