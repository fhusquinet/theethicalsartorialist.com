<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        if ( ! view()->exists('pages.'.$slug) ) {
            abort(404);
        }

        return view('pages.'.$slug);
    }
} 