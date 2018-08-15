<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Article;
use Cache;

class CacheTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function getting_the_last_articles_will_cache_the_results()
    {
        $articles = factory(Article::class, 5)->create();
        $latest = get_latest_articles();

        $this->assertTrue(Cache::has('latest-articles'));
    }

    /**
     * @test
     */
    public function creating_a_new_article_will_clear_the_latest_articles_cache()
    {
        $articles = factory(Article::class, 5)->create();
        $latest = get_latest_articles();

        $this->assertTrue(Cache::has('latest-articles'));

        factory(Article::class)->create();

        $this->assertFalse(Cache::has('latest-articles'));
    }

    /**
     * @test
     */
    public function updating_the_is_published_status_will_clear_the_latest_articles_cache()
    {
        $article = factory(Article::class)->create(['is_published' => false]);
        $latest = get_latest_articles();

        $this->assertTrue(Cache::has('latest-articles'));

        $article->is_published = true;
        $article->save();

        $this->assertFalse(Cache::has('latest-articles'));

        $latest = get_latest_articles();

        $this->assertTrue(Cache::has('latest-articles'));

        $article->is_published = false;
        $article->save();

        $this->assertFalse(Cache::has('latest-articles'));
    }

    /**
     * @test
     */
    public function getting_an_image_will_cache_it()
    {
        $article = factory(Article::class)->create(['is_published' => false]);
        $article->addImage('https://wikipedia.org/static/images/project-logos/enwiki-2x.png');

        $image = get_image( $article->getImageId() );

        $this->assertNotNull($image->id);
        $this->assertTrue(Cache::has('image-'.$image->id));
    }
}
