<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class CategoryController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $articles = Article::withCategory($category->id)->latest()->get();

        return view('categories.show', [
            'category' => $category,
            'articles' => $articles
        ]);
    }
}
