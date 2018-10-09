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
        app('shortcode')->register('i', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.italic', [
                'content' => $content
            ])->render();
        });

        app('shortcode')->register('b', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.bold', [
                'content' => $content
            ])->render();
        });

        app('shortcode')->register('xb', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.extra-bold', [
                'content' => $content
            ])->render();
        });

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
                'class'      => $shortcode->class,
                'imageClass' => $shortcode->imgclass ?? 'b-lazy',
            ])->render();
        });

        app('shortcode')->register('image', function($shortcode, $content, $compiler, $name, $viewData) {
            $image = get_image($shortcode->id);
            return view('_shortcodes.image', [
                'image' => $image,
                'class' => $shortcode->class ?? 'b-lazy'
            ])->render();
        });

        app('shortcode')->register('article-section', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.article.section', [
                'id'      => $shortcode->id,
                'content' => $content
            ])->render();
        });

        app('shortcode')->register('article-note', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.article.note', [
                'id'      => $shortcode->id,
                'content' => $content
            ])->render();
        });

        app('shortcode')->register('article-text-container', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.article.text-container', [
                'content' => $content,
                'class'   => $shortcode->class ?? 'mb-10'
            ])->render();
        });

        app('shortcode')->register('article-h2', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.article.h2', [
                'title' => $shortcode->title ?? $content
            ])->render();
        });

        app('shortcode')->register('article-h3', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.article.h3', [
                'title' => $shortcode->title ?? $content
            ])->render();
        });

        app('shortcode')->register('article-p', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.article.p', [
                'text' => $content
            ])->render();
        });

        app('shortcode')->register('article-p-darker', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.article.p-darker', [
                'text' => $content
            ])->render();
        });

        app('shortcode')->register('article-p-darkest', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.article.p-darkest', [
                'text' => $content
            ])->render();
        });

        app('shortcode')->register('article-list', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.article.list', [
                'content' => $content
            ])->render();
        });

        app('shortcode')->register('article-list-item', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.article.list-item', [
                'content' => $content
            ])->render();
        });
        
        app('shortcode')->register('article-image-description', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.article.image-description', [
                'description' => $shortcode->description ?? $content
            ])->render();
        });

        app('shortcode')->register('article-link', function($shortcode, $content, $compiler, $name, $viewData) {
            return view('_shortcodes.article.link', [
                'content' => $content,
                'link'    => $shortcode->link ?? '#'
            ])->render();
        });
    }
}
