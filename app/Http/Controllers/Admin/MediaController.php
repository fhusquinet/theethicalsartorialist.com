<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Spatie\MediaLibrary\Models\Media;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::latest()->get();

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
        site()->addImage($request->media);

        return redirect()->route('admin.medias.index')
                         ->with('success', 'The media has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Spatie\MediaLibrary\Models $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        return view('admin.medias.show', [
            'media' => $media
        ])->withoutShortcodes();
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
