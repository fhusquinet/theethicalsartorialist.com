<?php

namespace Tests\Unit;

use Faker\Factory;
use Tests\TestCase;
use App\Models\Article;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_can_return_its_url()
    {
        $article = factory(Article::class)->make(['slug' => 'my-article']);

        $this->assertEquals(
            $article->getUrl(),
            route('articles.show', 'my-article')
        );
    }

    /**
     * @test
     */
    public function creating_an_article_will_calculate_the_time_it_takes_to_read_it()
    {
        $faker = Factory::create('en_US');
        $article = factory(Article::class)->create(['text' => $faker->sentence(500, false)]);

        $this->assertEquals(
            $article->reading_time,
            2
        );
    }

    /**
     * @test
     */
    public function updating_an_article_will_calculate_again_the_time_it_takes_to_read_it()
    {
        $faker = Factory::create('en_US');
        $article = factory(Article::class)->create(['text' => 'test']);
        
        $article->text = $faker->sentence(500, false);
        $article->save();

        $this->assertEquals(
            $article->reading_time,
            2
        );
    }
}
