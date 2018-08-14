<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class SearchController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $articles = Article::whereLike('title', request()->get('query'))
                            ->orWhereLike('text', request()->get('query'))
                            ->latest()
                            ->paginate(12);
        
        return view('search', [
            'query'    => request()->get('query'),
            'articles' => $articles
        ]);
    }
}
