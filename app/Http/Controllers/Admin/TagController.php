<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Spatie\Tags\Tag;

class TagController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = tag::latest()->get();

        return view('admin.tags.index', [
            'tags' => $tags
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create', [
            'tag' => new Tag()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = $this->save(new Tag(), $request->all());

        return redirect()->route('admin.tags.index')
                         ->with('success', 'The tag #'.$tag->id.' has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Spatie\Tags\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Spatie\Tags\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', [
            'tag' => $tag
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Spatie\Tags\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $tag = $this->save($tag, $request->all());

        return redirect()->route('admin.tags.index')
                         ->with('success', 'The tag #'.$tag->id.' has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Spatie\Tags\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->back()
                         ->with('success', 'The tag #'.$tag->id.' has been deleted.');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  Spatie\Tags\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function restore(Tag $tag)
    {
        $tag->restore();

        return redirect()->back()
                         ->with('success', 'The tag #'.$tag->id.' has been restored.');
    }

    public function save($tag, $data)
    {
        $tag->fill($data);
        $tag->save();

        return $tag;
    }
}
