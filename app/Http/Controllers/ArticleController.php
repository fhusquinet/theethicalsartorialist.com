<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

use Cache;

class ArticleController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->paginate(12);

        return view('articles.index', [
            'articles' => $articles
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $otherArticles = Cache::remember('article-'.$article->id.'-related-articles', 1440, function () use ($article) {
            return Article::where('id', '!=', $article->id)
                        ->with('categories', 'tags', 'media')
                        ->limit(3)
                        ->get();
        });

        return view('articles.show', [
            'article'       => $article,
            'otherArticles' => $otherArticles
        ]);
    }
}
