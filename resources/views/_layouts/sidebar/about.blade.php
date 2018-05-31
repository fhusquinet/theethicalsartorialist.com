<div class="sidebar__about relative mb-8 shadow hover:shadow-blur transition--fast">
    <a href="{{ url('/about') }}" class="absolute pin">About me</a>
    <div class="sidebar__about__background relative h-14">
        <img class="card__image__background absolute transition--fast b-lazy img-cover" data-src="{{ asset('images/about-me-bg.jpg') }}" src="{{ asset('images/about-me-bg-blur.jpg') }}" />
        <img class="sidebar__about__avatar absolute pin-center-b pin-top-100 border-2 border-white bg-grey-lightest rounded-full b-lazy" data-src="{{ asset('images/avatar.jpg') }}" src="{{ asset('images/avatar-blur.jpg') }}" alt="About me" />
    </div>
    <div class="sidebar__about__content bg-white text-center">
        <div class="p-6">
            <h3 class="text-xl text-grey-dark font-thin">About me</h3>
            <p class="text-base md:text-sm font-thin text-grey mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ipsum ad delectus sunt ex aliquam possimus soluta libero. Consectetur consequuntur et aliquam non vitae consequatur eveniet quidem nulla officia tempore, ut minus expedita odit repellendus sapiente distinctio harum minima labore mollitia, quis adipisci. Ducimus quibusdam ea excepturi, error qui, vitae.</p>
        </div>
    </div>
</div>