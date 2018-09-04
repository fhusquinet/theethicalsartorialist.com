<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

use Cache;

class SearchController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $articles = Cache::remember('search-'.request()->get('query'), 1440, function ()
        {
            return Article::whereLike('title', request()->get('query'))
                            ->orWhereLike('text', request()->get('query'))
                            ->latest()
                            ->with('categories', 'tags', 'media')
                            ->paginate(12);
        });
        
        return view('search', [
            'query'    => request()->get('query'),
            'articles' => $articles
        ]);
    }
}
