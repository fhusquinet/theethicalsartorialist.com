@php
    $meta = [
        'title'    => 'Contact me',
        'og:title' => 'Contact me'
    ];
@endphp

@extends ('app')

@section ('top-content')
    @component ('_components.header')
        @slot ('title', 'Contact me')
        @slot ('text', 'If you have a question, a suggestion or simply want to chat do not hesite; just send me a message!')
    @endcomponent
@endsection

@section ('content')

    @if ( session()->has('success') )

        <div class="my-12 py-8 px-8 bg-white shadow transition--fast relative">
            <div class="text-center">
                <img class="w-full mb-8 m-auto block" src="{{ asset('icons/success_bubbles.svg') }}" style="max-width: 250px" /> 
                <h1 class="text-primary-dark inline-block mb-4 text-4xl font-bold">
                    Thank you!
                </h1>
                <p class="text-grey-dark text-xl font-thin leading-tight">
                    I will get back to you soon!
                </p>
            </div>
        </div>

    @else

        <div class="my-12 bg-white shadow transition--fast relative">
            <div class="p-10 md:p-12 lg:p-16">
                <form class="flex flex-wrap -mx-4" action="{{ route('contact') }}" method="POST">
                    @csrf
                    <div class="w-full md:w-1/2 mb-8 px-4">
                        <label for="contact-name" class="font-thin text-grey-dark mb-2 font-sm block w-full flex-no-shrink">Name</label>  
                        <input type="text" id="contact-name" name="name" class="block w-full flex-no-shrink border @if ($errors->has('name')) border-alert @else border-grey-light @endif px-6 py-4 font-normal font-thin hover:border-grey focus:border-primary focus:outline-none transition--fast" placeholder="Your name" value="{{ old('name') }}" autofocus />  
                        @if ($errors->has('name'))
                            <span class="mt-2 font-thin text-sm text-alert block" role="alert">
                                {{ $errors->first('name') }}
                            </span>
                        @endif
                    </div>
                    <div class="w-full md:w-1/2 mb-8 px-4">
                        <label for="contact-email" class="font-thin text-grey-dark mb-2 font-sm block w-full flex-no-shrink">Email address</label>  
                        <input type="email" id="contact-email" name="email" class="block w-full flex-no-shrink border @if ($errors->has('name')) border-alert @else border-grey-light @endif px-6 py-4 font-normal font-thin hover:border-grey focus:border-primary focus:outline-none transition--fast" placeholder="Your email address" value="{{ old('email') }}" />  
                        @if ($errors->has('email'))
                            <span class="mt-2 font-thin text-sm text-alert block" role="alert">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </div>
                    <div class="w-full mb-8 px-4">
                        <label for="contact-message" class="font-thin text-grey-dark mb-2 font-sm block w-full flex-no-shrink">Message</label>  
                        <textarea id="contact-message" name="message" class="block w-full flex-no-shrink border @if ($errors->has('name')) border-alert @else border-grey-light @endif px-6 py-4 font-normal font-thin hover:border-grey focus:border-primary focus:outline-none transition--fast h-32" placeholder="Your message" value="{{ old('message') }}"></textarea>
                        @if ($errors->has('message'))
                            <span class="mt-2 font-thin text-sm text-alert block" role="alert">
                                {{ $errors->first('message') }}
                            </span>
                        @endif
                    </div>
                    <div class="w-full px-4 text-center">
                        <button class="button button--primary sm:px-12 md:px-24 block sm:inline w-full sm:w-auto">Send</button>
                    </div>
                </form>
            </div>
        </div>
    
    @endif
@endsection