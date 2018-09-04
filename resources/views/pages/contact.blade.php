@extends ('app')

@section ('top-content')
    @component ('_components.header')
        @slot ('title', 'Contact me')
        @slot ('text', 'If you have a question, a suggestion or simply want to chat do not hesite; just send me a message!')
    @endcomponent
@endsection

@section ('content')
    <div class="my-12 bg-white shadow transition--fast relative">
        <div class="p-10 md:p-12 lg:p-16">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 mb-8 px-4">
                    <label for="contact-name" class="font-thin text-grey-dark mb-2 font-sm block w-full flex-no-shrink">Name</label>  
                    <input type="text" id="contact-name" name="name" class="block w-full flex-no-shrink border border-grey-light px-6 py-4 font-normal font-thin hover:border-grey focus:border-primary focus:outline-none transition--fast" placeholder="Your name" />  
                </div>
                <div class="w-full md:w-1/2 mb-8 px-4">
                    <label for="contact-email" class="font-thin text-grey-dark mb-2 font-sm block w-full flex-no-shrink">Email address</label>  
                    <input type="email" id="contact-email" name="email" class="block w-full flex-no-shrink border border-grey-light px-6 py-4 font-normal font-thin hover:border-grey focus:border-primary focus:outline-none transition--fast" placeholder="Your email address" />  
                </div>
                <div class="w-full mb-8 px-4">
                    <label for="contact-message" class="font-thin text-grey-dark mb-2 font-sm block w-full flex-no-shrink">Email address</label>  
                    <textarea id="contact-message" name="message" class="block w-full flex-no-shrink border border-grey-light px-6 py-4 font-normal font-thin hover:border-grey focus:border-primary focus:outline-none transition--fast" placeholder="Your message"></textarea>
                </div>
                <div class="w-full px-4 text-center">
                    <button class="button button--primary block md:inline w-full md:w-auto">Send</button>
                </div>
            </div>
        </div>
    </div>
@endsection