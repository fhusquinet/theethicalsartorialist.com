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
    ]
], $options))