@extends ('admin.app')

@section ('title', 'Create a new tag')

@section ('content')
    <div class="bg-white shadow">
        @include ('admin.tags.form', [
            'options' => [
                'model' => $tag,
                'button' => 'Create tag',
                'action' => route('admin.tags.store'),
            ]
        ])
    </div>
@endsection