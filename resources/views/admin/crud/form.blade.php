<form action="{{ $action }}" method="POST">
    
    @isset ($method)
        @method ($method)
    @endisset
    
    @csrf
    
    <table class="w-full table-fixed">
        <tbody>
            @foreach ( $fields as $attribute => $field )
                <tr class="border-b border-b-grey-lighter">
                    <td class="py-4 px-6" style="width: 150px;">
                        <label class="text-grey font-normal text-base inline-block">
                            {{ $field['label'] }}
                        </label>
                    </td>
                    <td class="py-4 px-6">
                        @include ('admin.crud.form.fields.'.$field['type'], ['model' => $model, 'attribute' => $attribute, 'field' => $field])
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfooter>
            <tr class="bg-grey-lighter">
                <td></td>
                <td class="py-4 px-6 text-right">
                    <button class="py-4 px-6 bg-primary hover:bg-primary-dark text-white font-thin rounded-lg">
                        {{ $button ?? 'Create' }}
                    </button>
                </td>
            </tr>
        </tfooter>
    </table>
</form>