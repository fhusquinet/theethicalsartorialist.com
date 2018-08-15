@extends ('admin.app')

@section ('title', 'Edit article')

@section ('content')
    <div class="bg-white shadow">
        @include ('admin.articles.form', [
            'options' => [
                'model' => $article,
                'button' => 'Edit article',
                'action' => route('admin.articles.update', $article),
                'method' => 'PUT'
            ]
        ])
    </div>
@endsection