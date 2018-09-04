@extends ('app')

@section ('top-content')
    @component ('_components.header')
        
        @slot ('title')
            The Ethical Sartorialist
        @endslot
        
        @slot ('text')
            Discover how you can change your wardrobe
        @endslot
        
    @endcomponent
@endsection

@section ('content')
    @include ('_partials.articles-list')
@endsection