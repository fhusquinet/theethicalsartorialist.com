<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

abstract class AdminController extends Controller
{
    
    public function setSeo($model, $data)
    {
        $model->setMeta('title', $data['seo_meta_title']);
        unset($data['seo_meta_title']);
        $model->setMeta('description', $data['seo_meta_description']);
        unset($data['seo_meta_description']);
        $model->setMeta('keywords', $data['seo_meta_keywords']);
        unset($data['seo_meta_keywords']);
        $model->setMeta('og:title', $data['seo_meta_og_title']);
        unset($data['seo_meta_og_title']);
        $model->setMeta('og:description', $data['seo_meta_og_description']);
        unset($data['seo_meta_og_description']);

        return ['model' => $model, 'data' => $data];
    }
    
}
