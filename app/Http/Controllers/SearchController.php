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
            return Article::search( request()->get('query') )
                ->paginate(12)
                ->load('categories', 'tags', 'media');
        });
        
        return view('search', [
            'query'    => request()->get('query'),
            'articles' => $articles
        ]);
    }
}
