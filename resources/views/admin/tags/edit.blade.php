@extends ('admin.app')

@section ('title', 'Edit tag')

@section ('content')
    <div class="bg-white shadow">
        @include ('admin.tags.form', [
            'options' => [
                'model' => $tag,
                'button' => 'Edit tag',
                'action' => route('admin.tags.update', $tag),
                'method' => 'PUT'
            ]
        ])
    </div>
@endsection