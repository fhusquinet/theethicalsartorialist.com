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
        return Spatie\MediaLibrary\Models\Media::where('id', $id)->first();
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

if ( ! function_exists('calculate_reading_time') ) {

    /*
     |--------------------------------------------------------------------------
     | Calculate Reading Time
     |--------------------------------------------------------------------------
     |
     | Calculate the duration it will take for an average user to read
     | the given text.
     */
    function calculate_reading_time($text = '')
    {
        $text = app('shortcode')->compile($text); 
        $wordCount = str_word_count( strip_tags($text) );
        return floor($wordCount / 200);
    }
}

if ( ! function_exists('get_latest_articles') )
{

    /*
     |--------------------------------------------------------------------------
     | Get Latest Articles
     |--------------------------------------------------------------------------
     |
     | Return the latest articles.
     */
    function get_latest_articles($limit = 3)
    {
        return \App\Models\Article::latest()->limit($limit)->get();
    }
}

if ( ! function_exists('is_date') )
{

    /*
     |--------------------------------------------------------------------------
     | Is date
     |--------------------------------------------------------------------------
     |
     | Check if the value given is a carbon instance
     */
    function is_date($date)
    {
        return $date instanceof Carbon\Carbon;
    }
}