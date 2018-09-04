@extends ('admin.app')

@section ('title', 'Add a new media')

@section ('content')
    <div class="bg-white shadow">
        <form action="{{ route('admin.medias.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="p-8">
                <div>
                    <label class="block mb-6 text-grey font-normal text-base inline-block">
                        Your image(s)
                    </label>
                </div>
                <div>
                    <input type="file" name="medias[]" multiple/> 
                </div>
            </div>
            <div class="bg-grey-lighter py-4 px-6 text-right">
                <button class="py-4 px-6 bg-primary hover:bg-primary-dark text-white font-thin rounded-lg">
                    Create
                </button>
            </div>
        </form>
    </div>
@endsection