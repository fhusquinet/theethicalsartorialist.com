<?php

namespace Tests\Unit;

use Faker\Factory;
use Tests\TestCase;
use App\Models\Article;
use App\Models\Category;
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

    /**
     * @test
     */
    public function an_article_can_retrieve_its_category()
    {
        $article = factory(Article::class)->create();
        $category = factory(Category::class)->create();

        $article->categories()->attach($category->id);
        
        $this->assertEquals(
            $article->fresh()->category()->id,
            $category->id
        );
    }

    /**
     * @test
     */
    public function the_articles_can_be_retrieve_by_category()
    {
        $articles1 = factory(Article::class, 5)->create();
        $articles2 = factory(Article::class, 2)->create();
        $category1 = factory(Category::class)->create();
        $category2 = factory(Category::class)->create();

        $articles1->each(function($article) use ($category1) {
            $article->categories()->attach($category1->id);
        });
        $articles2->each(function($article) use ($category2) {
            $article->categories()->attach($category2->id);
        });
        
        $this->assertCount(
            5,
            Article::withCategory($category1->id)->get()
        );
        $this->assertCount(
            2,
            Article::withCategory($category2->id)->get()
        );
    }
}
