@extends ('admin.app')

@section ('title', 'Edit category')

@section ('content')
    <div class="bg-white shadow">
        @include ('admin.categories.form', [
            'options' => [
                'model' => $category,
                'button' => 'Edit category',
                'action' => route('admin.categories.update', $category),
                'method' => 'PUT'
            ]
        ])
    </div>
@endsection