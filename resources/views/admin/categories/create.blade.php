@extends ('admin.app')

@section ('title', 'Create a new category')

@section ('content')
    <div class="bg-white shadow">
        @include ('admin.categories.form', [
            'options' => [
                'model' => $category,
                'button' => 'Create category',
                'action' => route('admin.categories.store'),
            ]
        ])
    </div>
@endsection