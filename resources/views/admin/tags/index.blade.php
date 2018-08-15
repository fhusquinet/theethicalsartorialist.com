@extends ('admin.app')

@section ('title', 'Tags')

@section ('content')
    <a href="{{ route('admin.tags.create') }}" class="mb-8 inline-block no-underline px-6 py-4 rounded-lg bg-primary text-white hover:bg-primary-dark">
        Create a new tag
    </a>
    <div class="bg-white shadow">
        @include ('admin.crud.table', [
            'models' => $tags,
            'attributes' => [
                'id' => 'ID',
                'name' => 'Title',
                'created_at' => 'Creation date'
            ],
            'routes' => [
                'edit'   => 'admin.tags.edit',
                'delete' => 'admin.tags.destroy',
                'restore' => 'admin.tags.restore'
            ]
        ])
    </div>
@endsection