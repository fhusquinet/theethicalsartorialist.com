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
        $articles = Article::latest()
                            ->limit(10)
                            ->get();
        
        return view('homepage', [
            'articles'        => $articles
        ]);
    }
}
