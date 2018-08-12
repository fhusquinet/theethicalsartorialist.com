<?php 

if ( ! function_exists('site') ) {

    /*
     |--------------------------------------------------------------------------
     | Site
     |--------------------------------------------------------------------------
     |
     | Return the model used for uploading medias globally that are available
     | through shortcodes/vue components.
     |
     */
    function site()
    {
        return Cache::rememberForever('site', function () {
            return App\Models\Site::first();
        });
    }
}

if ( ! function_exists('get_image') ) {

    /*
     |--------------------------------------------------------------------------
     | Get Image
     |--------------------------------------------------------------------------
     |
     | Return the image corresponding to the given id on the site model.
     */
    function get_image($id)
    {
        return site()->getImages()->where('id', $id)->first();
    }
}

if ( ! function_exists('is_base64_string') ) {

    /*
     |--------------------------------------------------------------------------
     | Base64 String.
     |--------------------------------------------------------------------------
     |
     | Checks if the string given is a valid base64 string.
     |
     */
    function is_base64_string($string)
    {
        $base64imageprefix = ';base64,';
        if ( str_contains($string, $base64imageprefix) ) {
            $position = strpos($string, $base64imageprefix);
            $string = substr($string, $position + strlen($base64imageprefix));
        }
        return base64_encode( base64_decode($string, true) ) === $string;
    }
}

if ( ! function_exists('is_base64_image') ) {

    /*
     |--------------------------------------------------------------------------
     | Base64 Image.
     |--------------------------------------------------------------------------
     |
     | Checks if the string given is a valid base64 image by testing it
     | using Image Intervention.
     |
     */
    function is_base64_image($image)
    {
        if ( ! is_base64_string($image) ) {
            return false;
        }

        try {
            Image::make($image)->destroy();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}

if ( ! function_exists('is_url') ) {

    /*
     |--------------------------------------------------------------------------
     | Is URL.
     |--------------------------------------------------------------------------
     |
     | Checks if the string given is a valid url.
     |
     */
    function is_url($string)
    {
        return filter_var($string, FILTER_VALIDATE_URL);
    }
}

if ( ! function_exists('image_srcset') ) {


    /*
     |--------------------------------------------------------------------------
     | Image SRC SET.
     |--------------------------------------------------------------------------
     |
     | Return the full srcset of an image.
     |
     */
    function image_srcset($image)
    {
        return asset($image->getUrl('thumbnail')) . ' 150w, ' .
            asset($image->getUrl('x-small')) . ' 300w, ' .
            asset($image->getUrl('small')) . ' 450w, ' .
            asset($image->getUrl('medium')) . ' 700w, ' .
            asset($image->getUrl('large')) . ' 1024w, ' .
            asset($image->getUrl('x-large')) . ' 1280w, ';
    }
}