<div class="admin__sidebar relative z-2 flex-no-shrink bg-white shadow-admin min-h-full">
    <a href="{{ route('homepage') }}">
        <img class="w-24 block mx-auto my-8" src="{{ asset('logo.svg') }}" />
    </a>
    <ul class="list-reset">
        @include ('admin._layouts.sidebar.link', [
            'url'    => route('admin.show'),
            'routes' => 'admin.show',
            'text'   => 'Dashboard',
            'icon'   => asset('icons/admin/dashboard.svg')
        ])
        @include ('admin._layouts.sidebar.link', [
            'url'   => route('admin.articles.index'),
            'routes' => ['admin.articles.index', 'admin.articles.edit'],
            'text'  => 'Articles',
            'icon'  => asset('icons/admin/articles.svg')
        ])
        @include ('admin._layouts.sidebar.link', [
            'url'   => route('admin.categories.index'),
            'routes' => ['admin.categories.index', 'admin.categories.edit'],
            'text' => 'Categories',
            'icon' => asset('icons/admin/categories.svg')
        ])
        @include ('admin._layouts.sidebar.link', [
            'url'   => route('admin.tags.index'),
            'routes' => ['admin.tags.index', 'admin.tags.edit'],
            'text' => 'Tags',
            'icon' => asset('icons/admin/tags.svg')
        ])
        @include ('admin._layouts.sidebar.link', [
            'url'  => route('admin.show'),
            'text' => 'Media Library',
            'icon' => asset('icons/admin/media.svg')
        ])
    </ul>
</div>