<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;

class ShortcodeServiceProvider extends ServiceProvider
{
    /**
     * Enable the shortcodes.
     *
     * @return void
     */
    public function boot()
    {
        app('shortcode')->enable();
    }

    /**
     * Register the shortcodes.
     *
     * @return void
     */
    public function register()
    {
        app('shortcode')->register('gallery', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.gallery', [
                'class'   => $shortcode->class,
                'content' => $content
            ])->render();
        });

        app('shortcode')->register('gallery-image', function($shortcode, $content, $compiler, $name, $viewData) {
            $image = get_image($shortcode->id);
            return view('_shortcodes.gallery-image', [
                'image'      => $image,
                'caption'    => $shortcode->caption,
                'imageClass' => $shortcode->imageClass,
                'class'      => $shortcode->class
            ])->render();
        });

        app('shortcode')->register('image', function($shortcode, $content, $compiler, $name, $viewData) {
            $image = get_image($shortcode->id);
            return view('_shortcodes.image', [
                'image' => $image,
                'class' => $shortcode->class
            ])->render();
        });

        app('shortcode')->register('article-section', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.article.section', [
                'content' => $content
            ])->render();
        });

        app('shortcode')->register('article-text-container', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.article.text-container', [
                'content' => $content
            ])->render();
        });

        app('shortcode')->register('article-h2', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.article.h2', [
                'title' => $shortcode->title ?? $content
            ])->render();
        });

        app('shortcode')->register('article-p', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.article.p', [
                'text' => $content
            ])->render();
        });
        
        app('shortcode')->register('article-image-description', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.article.image-description', [
                'description' => $shortcode->description ?? $content
            ])->render();
        });
    }
}
