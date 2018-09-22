@include ('admin.crud.form', array_merge([
    'model' => $category,
    'button' => 'Create category',
    'action' => route('admin.categories.store'),
    'fields' => [
        'title' => [
            'label' => 'Title',
            'type'  => 'text'
        ],
        'image' => [
            'label' => 'Image',
            'type'  => 'image',
            'current' => $category->getImageUrl()
        ],
        'seo_meta_title' => [
            'label' => 'SEO Meta title',
            'type'  => 'text',
            'value' => $article->getMeta('title')
        ],
        'seo_meta_description' => [
            'label' => 'SEO Meta description',
            'type'  => 'text',
            'value' => $article->getMeta('description')
        ],
        'seo_meta_keywords' => [
            'label' => 'SEO Meta keywords',
            'type'  => 'text',
            'value' => $article->getMeta('keywords')
        ],
        'seo_meta_og_title' => [
            'label' => 'SEO Meta OG title',
            'type'  => 'text',
            'value' => $article->getMeta('og:title')
        ],
        'seo_meta_og_description' => [
            'label' => 'SEO Meta OG description',
            'type'  => 'text',
            'value' => $article->getMeta('og:description')
        ],
    ]
], $options))