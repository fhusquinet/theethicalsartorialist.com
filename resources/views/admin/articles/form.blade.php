@include ('admin.crud.form', array_merge([
    'model' => $article,
    'button' => 'Create article',
    'action' => route('admin.articles.store'),
    'fields' => [
        'title' => [
            'label' => 'Title',
            'type'  => 'text'
        ],
        'preview_text' => [
            'label' => 'Preview text',
            'type'  => 'textarea',
            'height' => 300
        ],
        'text' => [
            'label' => 'Text',
            'type'  => 'editor',
        ],
        'categories' => [
            'label'   => 'Category',
            'type'    => 'select',
            'multiple' => true,
            'options' => $categories
        ],
        'tags' => [
            'label'         => 'Tags',
            'type'          => 'select',
            'multiple'      => true,
            'options'       => $tags,
            'option_column' => 'name',
            'option_value'  => 'name'
        ],
        'header_image' => [
            'label' => 'Header Image',
            'type'  => 'image',
            'current' => $article->getHeaderImageUrl()
        ],
        'preview_image' => [
            'label' => 'Preview Image',
            'type'  => 'image',
            'current' => $article->getPreviewImageUrl()
        ],
        'seo_meta_title' => [
            'label' => 'SEO Meta title',
            'type'  => 'text',
            'value' => $article->getMeta('title')
        ],
        'seo_meta_description' => [
            'label' => 'SEO Meta description',
            'type'  => 'text',
            'value' => $article->getMeta('description')
        ],
        'seo_meta_keywords' => [
            'label' => 'SEO Meta keywords',
            'type'  => 'text',
            'value' => $article->getMeta('keywords')
        ],
        'seo_meta_og_title' => [
            'label' => 'SEO Meta OG title',
            'type'  => 'text',
            'value' => $article->getMeta('og:title')
        ],
        'seo_meta_og_description' => [
            'label' => 'SEO Meta OG description',
            'type'  => 'text',
            'value' => $article->getMeta('og:description')
        ],
        'is_published' => [
            'label' => 'Mark as published',
            'type'  => 'checkbox'
        ]
    ]
], $options))

@push ('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/ace.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/theme-monokai.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/mode-html.js"></script>
    <script>
        var editor = ace.edit("editor");
        editor.setTheme("ace/theme/monokai");
        editor.session.setMode("ace/mode/html");
        var input = document.getElementById('editor-value');
        editor.getSession().on("change", function () {
            input.value = editor.getSession().getValue();
        });
    </script>
@endpush

@push ('styles')
    <style>
        #editor { 
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
    </style>
@endpush