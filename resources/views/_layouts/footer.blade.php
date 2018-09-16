<footer class="main-footer">
    <div class="bg-primary-darker">
        <a class="no-underline" href="http://www.instagram.com">
            <div class="container p-4 text-center">
                <img class="mx-auto mb-2 w-6 h-6" src="{{ asset('icons/instagram--white.svg') }}" alt="The Ethical Sartorialist instagram account" />
                <p class="text-white font-thin text-sm">
                    Discover more on
                    <span class="font-normal">Instagram</span>
                </p>
            </div>
        </a>
    </div>
    <div class="bg-white">
        <div class="container px-8 py-8">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full lg:w-1/3 mb-12 lg:md-0 px-4">
                    <h4 class="text-grey-darkest font-thin text-xl md:text-2xl mb-4">
                        The ethical sartorialist
                    </h4>
                    <p class="text-grey-darker font-thin text-base">
                        I will explore different options throughout my posts ranging from regular brands to second hand going into the details of what makes a garment ethical or not.
                    </p>
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/3 mb-12 sm:md-0 px-4">
                    <h4 class="text-grey-darkest font-thin text-xl md:text-2xl mb-4">
                        Latest posts
                    </h4>
                    @foreach ( get_latest_articles() as $article )
                        <a class="group flex flex-row w-full mb-4 no-underline" href="{{ $article->getUrl() }}">
                            <div class="flex-no-shrink w-12 h-12 relative">
                                <img class="img-cover b-lazy" src="{{ $article->getImageUrl('blur') }}" data-src="{{ $article->getImageUrl('thumbnail') }}" alt="{{ $article->title }}" />
                            </div>
                            <span class="pl-4 flex-grow w-full align-middle no-underline text-grey-darker font-thin group-hover:text-grey-dark">{{ $article->title }}</span>
                        </a>
                    @endforeach
                </div>
                <div class="w-full sm:w-1/2 lg:w-1/3 mb-12 sm:md-0 px-4">
                    <h4 class="text-grey-darkest font-thin text-xl md:text-2xl mb-4">
                        Navigation
                    </h4>
                    <ul class="list-reset">
                        @foreach ( navigation() as $link )
                            <li><a href="{{ $link['url'] }}" class="text-grey-darker hover:text-grey-darkest no-underline relative transition--fast font-thin mb-2 block">{{ $link['text'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>   