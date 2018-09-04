@extends ('admin.app')

@section ('title', 'Medias')

@section ('content')
    <a href="{{ route('admin.medias.create') }}" class="mb-8 inline-block no-underline px-6 py-4 rounded-lg bg-primary text-white hover:bg-primary-dark">
        Add a new media
    </a>
    <div class="bg-white shadow p-8">
        <div class="flex flex-wrap -mx-4">
            @foreach ( $medias as $media )
                <div class="w-full sm:w-1/2 md:w-1/4 lg:w-1/6 px-4">
                    <a href="{{ route('admin.medias.edit', $media) }}">
                        <img src="{{ $media->getUrl('thumbnail') }}" />
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection