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
     * Return the id of the first image stored.
     */
    public function getImageId()
    {
        return $this->getImage() ? $this->getImage()->id : null;
    }

    /**
     * Return the id of the first image stored.
     */
    public function getHeaderImageId()
    {
        return $this->getHeaderImage() ? $this->getHeaderImage()->id : null;
    }

    /**
     * Return the id of the first image stored.
     */
    public function getPreviewImageId()
    {
        return $this->getPreviewImage() ? $this->getPreviewImage()->id : null;
    }

    /**
     * Return the header media class.
     */
    public function getHeaderImage()
    {
        return $this->getFirstMedia('images', ['header' => 'yes']);
    }

    /**
     * Return the preview media class.
     */
    public function getPreviewImage()
    {
        return $this->getFirstMedia('images', ['preview' => 'yes']);
    }

    /**
     * Set the image
     */
    public function setImage($file, $properties = [])
    {
        if ( ! $file ) {
            return $this;
        }
        return $this->addMediaFromMixed($file)
                    ->withCustomProperties($properties)
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
     * Replace the existing image (if there is) by a new one.
     */
    public function replaceHeaderImage($file)
    {
        if ( $current = $this->fresh()->getHeaderImage() ) {
            $current->delete();
        }
        return $this->setImage($file, ['header' => 'yes']);
    }

    /**
     * Replace the existing image (if there is) by a new one.
     */
    public function replacePreviewImage($file)
    {
        if ( $current = $this->fresh()->getPreviewImage() ) {
            $current->delete();
        }
        return $this->setImage($file, ['preview' => 'yes']);
    }

    /**
     * Alias for the setImage method
     */
    public function addImage($file, $properties = [])
    {
     	return $this->setImage($file, $properties);
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
     * Return the first image stored.
     */
    public function getHeaderImageUrl($size = 'large')
    {
        if ( ! $header = $this->getHeaderImage() ) {
            return null;
        }
        if ( ! File::exists( $header->getPath($size) ) ) {
            $size = '';
        }
        return asset($header->getUrl($size));
    }

    /**
     * Return the first image stored.
     */
    public function getPreviewImageUrl($size = 'large')
    {
        if ( ! $preview = $this->getPreviewImage() ) {
            return null;
        }
        if ( ! File::exists( $preview->getPath($size) ) ) {
            $size = '';
        }
        return asset($preview->getUrl($size));
    }
}