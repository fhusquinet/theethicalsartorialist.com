<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Spatie\Tags\Tag;

class TagController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \Spatie\Tags\Tag
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $tag = Tag::where('slug->en', $slug)->firstOrFail();
        $articles = Article::withAnyTags([$tag->name])
                            ->latest()
                            ->paginate(12);
        
        return view('tags.show', [
            'tag'      => $tag,
            'articles' => $articles
        ]);
    }
}
