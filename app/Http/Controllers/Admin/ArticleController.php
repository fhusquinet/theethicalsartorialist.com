<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Article;
use App\Models\Category;
use Spatie\Tags\Tag;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::withoutGlobalScopes()->latest()->get();

        return view('admin.articles.index', [
            'articles' => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create', [
            'article' => new Article(),
            'categories' => Category::all(),
            'tags' => Tag::all()
        ])->withoutShortcodes();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = $this->save(new Article(), $request->all());

        return redirect()->route('admin.articles.index')
                         ->with('success', 'The article #'.$article->id.' has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit', [
            'article' => $article,
            'categories' => Category::all(),
            'tags' => Tag::all()
        ])->withoutShortcodes();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article = $this->save($article, $request->all());

        return redirect()->route('admin.articles.index')
                         ->with('success', 'The article #'.$article->id.' has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->back()
                         ->with('success', 'The article #'.$article->id.' has been deleted.');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  App\Models\Article $article
     * @return \Illuminate\Http\Response
     */
    public function restore(Article $article)
    {
        $article->restore();

        return redirect()->back()
                         ->with('success', 'The article #'.$article->id.' has been restored.');
    }

    public function save($article, $data)
    {
        $data['is_published'] = isset($data['is_published']) ? true : false;

        $header = $data['header_image'] ?? null;
        unset($data['header_image']);
        $preview = $data['preview_image'] ?? null;
        unset($data['preview_image']);

        $categories = $data['categories'] ?? [];
        unset($data['categories']);

        $tags = $data['tags'] ?? [];
        unset($data['tags']);

        $article->fill($data);
        $article->save();

        if ( $header ) {
            $article->replaceHeaderImage($header);
        }
        if ( $preview ) {
            $article->replacePreviewImage($preview);
        }

        $article->categories()->sync($categories);

        $article->syncTags($tags);

        return $article;
    }
}
