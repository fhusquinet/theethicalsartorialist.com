<div class="sidebar__about relative mb-8">
    <a href="{{ url('/about') }}" class="absolute pin">About me</a>
    <div class="sidebar__about__background relative h-14">
        <div class="absolute pin bg-center bg-cover" style="background-image: url({{ asset('images/about-me-bg.jpg') }})"></div>
        <img class="sidebar__about__avatar absolute pin-center-b pin-top-100 border-2 border-white bg-grey-lightest rounded-full" src="{{ asset('images/avatar.jpg') }}" />
    </div>
    <div class="sidebar__about__content bg-white text-center">
        <div class="p-6">
            <h3 class="text-lg text-grey-dark font-thin">About me</h3>
            <p class="text-sm font-thin text-grey mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ipsum ad delectus sunt ex aliquam possimus soluta libero. Consectetur consequuntur et aliquam non vitae consequatur eveniet quidem nulla officia tempore, ut minus expedita odit repellendus sapiente distinctio harum minima labore mollitia, quis adipisci. Ducimus quibusdam ea excepturi, error qui, vitae.</p>
        </div>
    </div>
</div>