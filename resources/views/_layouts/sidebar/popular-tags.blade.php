<div class="sidebar__popular-tags bg-white relative rounded-lg mb-8 p-6 shadow">
    <h3 class="text-xl text-grey-dark font-thin mb-6 text-center">Popular tags</h3>
    <div class="text-left flex flex-wrap">
        @for ( $i = 0; $i < 15; $i++ )
            <a href="{{ url('/tag-' . $i) }}" class="flex px-4 py-2 text-base md:text-sm lg:text-xs bg-grey-lighter mb-4 mr-4 rounded no-underline text-grey-dark hover:bg-primary hover:text-white hover:shadow transition--fast">Tag {{ $i + 1 }}</a>
        @endfor
    </div>
</div>