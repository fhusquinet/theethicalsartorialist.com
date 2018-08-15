<table class="w-full">
    <thead>
        <tr>
            @foreach ( $attributes as $attribute => $column )
                <th class="bg-grey-lightest px-8 py-4 text-left uppercase text-grey-dark font-normal text-base ">{{ $column }}</th>
            @endforeach
            <th class="bg-grey-lightest px-8 py-4 text-left uppercase text-grey-dark font-normal text-base "></th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $models as $model )
            <tr class="border-b border-grey-lightest">
                @foreach ( $attributes as $attribute => $column )
                    @php ($value = $model->{$attribute})
                    <td class="px-8 py-4 text-grey-dark font-thin text-normal">
                        @if ( is_bool($value) )
                            @if ( $value )
                                <img src="{{ asset('icons/admin/bool-true.svg') }}" class="w-4 h-4 opacity-75" />
                            @else
                                <img src="{{ asset('icons/admin/bool-false.svg') }}" class="w-4 h-4 opacity-50" />
                            @endif
                        @elseif ( is_date($value) )
                            {{ $model->{$attribute}->format('M j Y H:m') }}
                        @else
                            {{ $model->{$attribute} }}
                        @endif
                    </td>
                @endforeach
                <td class="px-8 py-4 text-grey-dark font-thin text-normal">
                    <a href="{{ route($routes['edit'], $model) }}" class="group inline-block">
                        <img class="h-4 w-4 opacity-50 group-hover:opacity-100" src="{{ asset('icons/admin/edit.svg') }}" />
                    </a>
                    @if ( $model->trashed() )
                        <a href="{{ route($routes['restore'], $model) }}" class="group inline-block ml-2">
                            <img class="h-4 w-4 opacity-50 group-hover:opacity-100" src="{{ asset('icons/admin/restore.svg') }}" />
                        </a>
                    @else
                        <form class="group inline-block ml-2" action="{{ route($routes['delete'], $model) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="focus:outline-none">
                                <img class="h-4 w-4 opacity-50 group-hover:opacity-100" src="{{ asset('icons/admin/delete.svg') }}" />
                            </button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>