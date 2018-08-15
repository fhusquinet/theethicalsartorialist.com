@extends ('admin.app')

@section ('title', 'Edit media')

@section ('content')
    <div class="bg-white shadow">
        <form action="{{ route('admin.medias.edit', $media) }}" method="POST">
            @csrf
            @method ('PUT')
            <div class="p-8">
                <div class="mb-6">
                    <label class="block mb-2 text-grey font-normal text-base">
                        ID
                    </label>
                    {{ $media->id }}  
                </div> 
                <div class="mb-6">
                    <label class="block mb-2 text-grey font-normal text-base">
                        Shortcode
                    </label>
                    [image id="{{ $media->id }}"]
                </div> 
                <div class="mb-6">
                    <label class="block mb-2 text-grey font-normal text-base">
                        Current Image
                    </label>
                    <img src="{{ $media->getUrl() }}" class="w-full" />   
                </div> 
            </div>
        </form>
    </div>
@endsection