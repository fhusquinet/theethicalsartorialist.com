<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Spatie\MediaLibrary\Models\Media;

class MediaController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = site()->getImages();

        return view('admin.medias.index', [
            'medias' => $medias
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.medias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ( $request->medias as $media ) {
            site()->addImage($media);
        }

        return redirect()->route('admin.medias.index')
                         ->with('success', 'The media(s) have been created.');
    }

    /**
     * Display the form to edit the specified resource.
     *
     * @param  Spatie\MediaLibrary\Models $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        return view('admin.medias.edit', [
            'media' => $media
        ])->withoutShortcodes();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Spatie\MediaLibrary\Models $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        $media->setCustomProperty('alt', $request->alt);
        $media->save();

        return redirect()->route('admin.medias.edit', $media)
                         ->with('success', 'The media #'.$media->id.' has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Spatie\MediaLibrary\Models $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        $media->delete();

        return redirect()->back()
                         ->with('success', 'The media #'.$media->id.' has been deleted.');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  Spatie\MediaLibrary\Models $media
     * @return \Illuminate\Http\Response
     */
    public function restore(Media $media)
    {
        $media->restore();

        return redirect()->back()
                         ->with('success', 'The media #'.$media->id.' has been restored.');
    }

    public function save($media, $data)
    {
        $media->fill($data);
        $media->save();

        return $media;
    }
}
