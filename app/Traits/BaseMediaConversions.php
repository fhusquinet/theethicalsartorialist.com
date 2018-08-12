<?php

namespace App\Traits;

use Spatie\MediaLibrary\Models\Media;

use File;

trait BaseMediaConversions
{    
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('header')
              ->width(1920)
              ->height(1920)
              ->sharpen(10);

        $this->addMediaConversion('x-large')
            ->width(1280)
            ->height(1280)
            ->sharpen(10);

        $this->addMediaConversion('large')
              ->width(1024)
              ->height(1024)
              ->sharpen(10);

        $this->addMediaConversion('medium')
              ->width(700)
              ->height(700)
              ->sharpen(10);

        $this->addMediaConversion('small')
            ->width(450)
            ->height(450)
            ->sharpen(10);

        $this->addMediaConversion('x-small')
            ->width(300)
            ->height(300)
            ->sharpen(10);

        $this->addMediaConversion('thumbnail')
              ->width(150)
              ->height(150)
              ->sharpen(10);

        $this->addMediaConversion('blur')
            ->width(50)
            ->height(50)
            ->blur(50);
    }

    /**
     * Add the media from different source types.
     * @param Mixed $media
     */
    public function addMediaFromMixed($media)
    {
        if ( is_base64_image($media) ) {
            return $this->addMediaFromBase64($media);
        } elseif ( is_url($media) ) {
            return $this->addMediaFromUrl($media);
        }

        return $this->addMedia($media);
    }

    /**
     * Return the images formatted for the image uploader.
     */
    public function getFormattedImages()
    {
        $images = collect([]);
        foreach ( $this->getImages() as $media ) {
            $images->push([
                'name' => $media->file_name,
                'source' => $media->getUrl()
            ]);
        }
        return $images;
    }

    /**
     * Load the formatted images as an attribuet.
     */
    public function loadFormattedImages()
    {
        $this->images = $this->getFormattedImages();
    }

    /**
     * Return the all images stored.
     */
    public function getImages()
    {
        return $this->getMedia('images');
    }

    /**
     * Return a boolean stating if the model has an image set or not.
     */
    public function hasImage()
    {
        return $this->getImage() ? true : false;
    }

    /**
     * Return the first image stored.
     */
    public function getImage()
    {
        return $this->getFirstMedia('images');
    }

    /**
     * Set the image
     */
    public function setImage($file)
    {
        if ( ! $file ) {
            return $this;
        }
        return $this->addMediaFromMixed($file)
                    ->withResponsiveImages()
                    ->toMediaCollection('images');
    }

    /**
     * Replace the existing image (if there is) by a new one.
     */
    public function replaceImage($file)
    {
        if ( $current = $this->fresh()->getImage() ) {
            $current->delete();
        }
        return $this->setImage($file);
    }

    /**
     * Alias for the setImage method
     */
    public function addImage($file)
    {
     	return $this->setImage($file);
    }

    /**
     * Return the all files stored.
     */
    public function getFiles()
    {
        return $this->getMedia('files');
    }

    /**
     * Return the file image stored.
     */
    public function getFile()
    {
        return $this->getFirstMedia('files');
    }

    /**
     * Add a new file.
     */
    public function addFile($file)
    {
        return $this->addMediaFromMixed($file)
                    ->toMediaCollection('files');
    }

    /**
     * Return the first image stored with an attribute.
     */
    public function getImageUrlAttribute()
    {
        return $this->getImageUrl();
    }

    /**
     * Return the first image stored.
     */
    public function getImageUrl($size = 'large')
    {
        if ( ! $this->getImage() ) {
            return null;
        }
        if ( ! File::exists( $this->getImage()->getPath($size) ) ) {
            $size = '';
        }
        return asset($this->getImage()->getUrl($size));
    }

    /**
     * Return the first image stored in extra large size.
     */
    public function getExtraLargeImageUrl()
    {
        return $this->getImageUrl('x-large');
    }

    /**
     * Return the first image stored in large size.
     */
    public function getLargeImageUrl()
    {
        return $this->getImageUrl('large');
    }

    /**
     * Return the first image stored in medium size.
     */
    public function getMediumImageUrl()
    {
        return $this->getImageUrl('medium');
    }

    /**
     * Return the first image stored in small size.
     */
    public function getSmallImageUrl()
    {
        return $this->getImageUrl('small');
    }

    /**
     * Return the first image stored in extra small.
     */
    public function getExtraSmallImageUrl()
    {
        return $this->getImageUrl('x-small');
    }

    /**
     * Return the first image stored in thumbnail.
     */
    public function getThumbnailImageUrl()
    {
        return $this->getImageUrl('thumbnail');
    }

    /**
     * Return the first image stored in blur.
     */
    public function getBlurImageUrl()
    {
        return $this->getImageUrl('blur');
    }
}