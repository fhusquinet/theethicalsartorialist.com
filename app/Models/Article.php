<?php

namespace App\Models;

use App\Scopes\PublishedScope;
use Laravel\Scout\Searchable;
use Spatie\Tags\HasTags;

use Cache;

class Article extends BaseModel
{
    use HasTags,
        Searchable;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_published' => 'boolean',
    ];

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'text' => $this->preview_text,
            'categories' => implode(',', $this->categories->pluck('title')->toArray()),
            'tags' => implode(',', $this->tags->pluck('title')->toArray()),
            'created_at' => $this->created_at->toDateTimeString()
        ];
    }

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        
        static::addGlobalScope(new PublishedScope);

        self::creating(function ($model) {
            $model->reading_time = calculate_reading_time($model->text);
            Cache::forget('latest-articles');
        });
        self::updating(function ($model) {
            $model->reading_time = calculate_reading_time($model->text);
            if ( $model->isDirty('is_published') ) {
                Cache::forget('latest-articles');
            }
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
