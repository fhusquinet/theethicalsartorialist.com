<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomepageController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $featuredArticle = Article::where('is_featured', true)->latest()->first();
        $articles = Article::latest()
                            ->limit(10)
                            ->get();
        
        return view('homepage', [
            'articles'        => $articles,
            'featuredArticle' => $featuredArticle
        ]);
    }
}
