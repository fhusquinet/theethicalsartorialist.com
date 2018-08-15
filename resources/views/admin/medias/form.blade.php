@include ('admin.crud.form', array_merge([
    'model' => $tag,
    'button' => 'Create tag',
    'action' => route('admin.tags.store'),
    'fields' => [
        'name' => [
            'label' => 'Title',
            'type'  => 'text'
        ]
    ]
], $options))