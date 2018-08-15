@extends ('admin.app')

@section ('title', 'Articles')

@section ('content')
    <a href="{{ route('admin.articles.create') }}" class="mb-8 inline-block no-underline px-6 py-4 rounded-lg bg-primary text-white hover:bg-primary-dark">
        Create a new article
    </a>
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