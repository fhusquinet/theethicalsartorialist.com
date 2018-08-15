<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();

        return view('admin.categories.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create', [
            'category' => new Category()
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
        $category = $this->save(new Category(), $request->all());

        return redirect()->route('admin.categories.index')
                         ->with('success', 'The category #'.$category->id.' has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category = $this->save($category, $request->all());

        return redirect()->route('admin.categories.index')
                         ->with('success', 'The category #'.$category->id.' has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->back()
                         ->with('success', 'The category #'.$category->id.' has been deleted.');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function restore(Category $category)
    {
        $category->restore();

        return redirect()->back()
                         ->with('success', 'The category #'.$category->id.' has been restored.');
    }

    public function save($category, $data)
    {
        $image = $data['image'] ?? null;
        unset($data['image']);

        $category->fill($data);
        $category->save();

        if ( $image ) {
            $category->replaceImage($image);
        }

        return $category;
    }
}
