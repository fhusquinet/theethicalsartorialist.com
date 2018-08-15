@extends ('admin.app')

@section ('title', 'Categories')

@section ('content')
    <a href="{{ route('admin.categories.create') }}" class="mb-8 inline-block no-underline px-6 py-4 rounded-lg bg-primary text-white hover:bg-primary-dark">
        Create a new category
    </a>
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