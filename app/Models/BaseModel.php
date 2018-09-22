<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use FHusquinet\Seoable\Traits\Seoable;
use App\Traits\BaseMediaConversions;

abstract class BaseModel extends Model implements HasMedia
{
    use BaseMediaConversions,
        HasMediaTrait,
        Seoable,
        Sluggable,
        SoftDeletes
    {
        BaseMediaConversions::registerMediaConversions insteadof HasMediaTrait;
    }

    public $guarded = [];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
     public function getRouteKeyName()
     {
         return 'slug';
     }
     
     protected $shouldUpdateSlug = false;

     /**
      * Return the sluggable configuration array for this model.
      *
      * @return array
      */
     public function sluggable()
     {
         return [
             'slug' => [
                 'source' => ['title'],
                 'onUpdate' => $this->shouldUpdateSlug
             ]
         ];
     }
}