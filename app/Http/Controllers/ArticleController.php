<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $otherArticles = Article::where('id', '!=', $article->id)->limit(3)->get();

        return view('articles.show', [
            'article'       => $article,
            'otherArticles' => $otherArticles
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->paginate(2);

        return view('articles.index', [
            'articles' => $articles
        ]);
    }
}
