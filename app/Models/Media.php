<?php

namespace App\Models;

use Spatie\MediaLibrary\Models\Media as BaseMedia;

use Cache;

class Media extends BaseMedia
{

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        
        self::updating(function ($image) {
            var_dump($image->id);
            Cache::forget('image-'.$image->id);
        });
    }
}