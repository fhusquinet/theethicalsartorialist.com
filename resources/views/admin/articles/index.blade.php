@extends ('admin.app')

@section ('title', 'Articles')

@section ('content')
    <div class="bg-white shadow">
        @include ('admin.crud.table', [
            'models' => $articles,
            'attributes' => [
                'id' => 'ID',
                'title' => 'Title',
                'is_published' => 'Published',
                'created_at' => 'Creation date'
            ],
            'routes' => [
                'edit'   => 'admin.articles.edit',
                'delete' => 'admin.articles.destroy',
                'restore' => 'admin.articles.restore'
            ]
        ])
    </div>
@endsection