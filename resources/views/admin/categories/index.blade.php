@extends ('admin.app')

@section ('title', 'Categories')

@section ('content')
    <div class="bg-white shadow">
        @include ('admin.crud.table', [
            'models' => $categories,
            'attributes' => [
                'id' => 'ID',
                'title' => 'Title',
                'created_at' => 'Creation date'
            ],
            'routes' => [
                'edit'   => 'admin.categories.edit',
                'delete' => 'admin.categories.destroy',
                'restore' => 'admin.categories.restore'
            ]
        ])
    </div>
@endsection