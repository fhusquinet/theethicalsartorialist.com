@include ('admin.crud.form', array_merge([
    'model' => $article,
    'button' => 'Create article',
    'action' => route('admin.articles.store'),
    'fields' => [
        'title' => [
            'label' => 'Title',
            'type'  => 'text'
        ],
        'preview_text' => [
            'label' => 'Preview text',
            'type'  => 'textarea',
            'height' => 300
        ],
        'text' => [
            'label' => 'Text',
            'type'  => 'textarea',
            'height' => 600
        ],
        'categories' => [
            'label'   => 'Category',
            'type'    => 'select',
            'multiple' => true,
            'options' => $categories
        ],
        'tags' => [
            'label'         => 'Tags',
            'type'          => 'select',
            'multiple'      => true,
            'options'       => $tags,
            'option_column' => 'name',
            'option_value'  => 'name'
        ],
        'image' => [
            'label' => 'Image',
            'type'  => 'image',
            'current' => $article->getImageUrl()
        ],
        'is_published' => [
            'label' => 'Mark as published',
            'type'  => 'checkbox'
        ]
    ]
], $options))