@extends ('admin.app')

@section ('title', 'Edit article')

@section ('content')
    <div class="bg-white shadow">
        @include ('admin.articles.form', [
            'options' => [
                'model' => $article,
                'button' => 'Create article',
                'action' => route('admin.articles.store'),
            ]
        ])
    </div>
@endsection