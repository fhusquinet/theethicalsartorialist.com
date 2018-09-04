@extends ('admin.app')

@section ('title', 'Edit media')

@section ('content')
    <div class="bg-white shadow">
        <form action="{{ route('admin.medias.update', $media) }}" method="POST">
            @csrf
            @method ('PUT')
             <table class="w-full table-fixed">
                <tbody>
                    <tr class="border-b border-b-grey-lighter">
                        <td class="py-4 px-6" style="width: 150px;">
                            <label class="text-grey font-normal text-base inline-block">
                                ID
                            </label>
                        </td>
                        <td class="py-4 px-6">
                            $media->id
                        </td>
                    </tr>
                    <tr class="border-b border-b-grey-lighter">
                        <td class="py-4 px-6" style="width: 150px;">
                            <label class="text-grey font-normal text-base inline-block">
                                Shortcode
                            </label>
                        </td>
                        <td class="py-4 px-6">
                            [image id="{{ $media->id }}"]
                        </td>
                    </tr>
                    <tr class="border-b border-b-grey-lighter">
                        <td class="py-4 px-6" style="width: 150px;">
                            <label class="text-grey font-normal text-base inline-block">
                                Current image
                            </label>
                        </td>
                        <td class="py-4 px-6">
                            <img src="{{ $media->getUrl() }}" class="w-full" />   
                        </td>
                    </tr>
                    <tr class="border-b border-b-grey-lighter">
                        <td class="py-4 px-6" style="width: 150px;">
                            <label class="text-grey font-normal text-base inline-block">
                                Alt {{$media->getCustomProperty('alt')}}
                            </label>
                        </td>
                        <td class="py-4 px-6">
                            @include ('admin.crud.form.fields.text', [
                                'attribute' => 'alt',
                                'value' => $media->getCustomProperty('alt', ''),
                                'field' => [
                                    'placeholder' => 'Your custom SEO alt'
                                ]
                            ])
                        </td>
                    </tr>
                </tbody>
                <tfooter>
                    <tr class="bg-grey-lighter">
                        <td></td>
                        <td class="py-4 px-6 text-right">
                            <button class="py-4 px-6 bg-primary hover:bg-primary-dark text-white font-thin rounded-lg">
                                {{ 'Edit' }}
                            </button>
                        </td>
                    </tr>
                </tfooter>
            </table>
        </form>
    </div>
@endsection