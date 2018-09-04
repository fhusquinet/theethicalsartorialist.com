@include ('admin.crud.form', array_merge([
    'model' => $media,
    'button' => 'Create media',
    'action' => route('admin.medias.store'),
    'fields' => [
        'name' => [
            'label' => 'Title',
            'type'  => 'text'
        ]
    ]
], $options))