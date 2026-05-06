<div class="row">
    <div class="col-12 col-sm-5 mb-3">
        <div class="form-group">
            <?php
            $field_name = "name";
            $field_lable = __("product::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "required";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class("form-control")->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = "slug";
            $field_lable = __("product::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class("form-control")->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = "created_by_alias";
            $field_lable = __("product::$module_name.$field_name");
            $field_placeholder = "Hide Author User's Name and use Alias";
            $required = "";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class("form-control")->attributes(["$required"]) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = "price";
            $field_lable = __("Price");
            $field_placeholder = $field_lable;
            $required = "";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class("form-control")->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = "sale_price";
            $field_lable = __("Sale Price");
            $field_placeholder = $field_lable;
            $required = "";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class("form-control")->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = "sku";
            $field_lable = __("SKU");
            $field_placeholder = $field_lable;
            $required = "";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class("form-control")->attributes(["$required"]) }}
        </div>
    </div>

    <div class="col-12 col-sm-3 mb-3">
        <div class="form-group">
            <?php
            $field_name = "stock";
            $field_lable = __("Stock");
            $field_placeholder = $field_lable;
            $required = "";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class("form-control")->attributes(["$required"]) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = "intro";
            $field_lable = __("product::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "required";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class("form-control")->attributes(["$required"]) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = "content";
            $field_lable = __("product::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "required";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class("form-control")->attributes(["$required"]) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = "image";
            $field_lable = __("product::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "required";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            <div class="input-group mb-3">
                {{ html()->text($field_name)->placeholder($field_placeholder)->class("form-control")->attributes(["$required", "aria-label" => "Image", "aria-describedby" => "button-image"]) }}
                <button class="btn btn-outline-info" id="button-image" data-input="{{ $field_name }}" type="button">
                    <i class="fas fa-folder-open"></i>
                    &nbsp;
                    @lang("Browse")
                </button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = "category_id";
            $field_lable = __("product::$module_name.$field_name");
            $field_options = ! empty($data) ? optional($data->category())->pluck("name", "id") : "";
            $selected = ! empty($data)
                ? optional($data->category())
                    ->pluck("id")
                    ->toArray()
                : "";
            $field_placeholder = __("Select an option");
            $required = "required";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->select($field_name, $field_options, $selected)->placeholder($field_placeholder)->class("form-select select2-category")->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = "type";
            $field_lable = __("product::$module_name.$field_name");
            $field_placeholder = __("Select an option");
            $required = "required";
            $select_options = \Modules\Product\Enums\ProductType::toArray();
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->select($field_name, $select_options)->class("form-select")->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = "is_featured";
            $field_lable = __("product::$module_name.$field_name");
            $field_placeholder = __("Select an option");
            $required = "required";
            $select_options = [
                "0" => "No",
                "1" => "Yes",
            ];
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->select($field_name, $select_options)->class("form-select")->attributes(["$required"]) }}
        </div>
    </div>
</div>
<div class="row" id="digital_fields" style="display: none;">
    <div class="col-12 mb-3">
        <div class="form-group border p-3 rounded bg-light">
            <h5 class="mb-3 text-info"><i class="fas fa-download"></i> Digital Download Details</h5>
            <?php
            $field_name = "file_url";
            $field_lable = __("Digital File URL");
            $field_placeholder = "Enter URL or browse for a file";
            $required = "";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            <div class="input-group mb-3">
                {{ html()->text($field_name)->placeholder($field_placeholder)->id($field_name)->class("form-control")->attributes(["aria-label" => "File URL", "aria-describedby" => "button-file"]) }}
                <button class="btn btn-outline-info" id="button-file" data-input="{{ $field_name }}" type="button">
                    <i class="fas fa-folder-open"></i>
                    &nbsp;
                    @lang("Browse")
                </button>
            </div>
        </div>
    </div>
</div>
<div class="row" id="subscription_fields" style="display: none;">
    <div class="col-12 mb-3">
        <div class="form-group border p-3 rounded bg-light">
            <h5 class="mb-3 text-info"><i class="fas fa-calendar-alt"></i> Subscription Details</h5>
            <div class="row">
                <div class="col-12 col-sm-6 mb-3">
                    <?php
                    $field_name = "subscription_duration";
                    $field_lable = __("Subscription Duration");
                    $field_placeholder = "e.g. 1, 6, 12";
                    ?>
                    {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
                    {{ html()->number($field_name)->placeholder($field_placeholder)->class("form-control") }}
                </div>
                <div class="col-12 col-sm-6 mb-3">
                    <?php
                    $field_name = "subscription_period";
                    $field_lable = __("Subscription Period");
                    $select_options = [
                        "Day" => "Day(s)",
                        "Week" => "Week(s)",
                        "Month" => "Month(s)",
                        "Year" => "Year(s)",
                    ];
                    ?>
                    {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
                    {{ html()->select($field_name, $select_options)->placeholder("Select Period")->class("form-select") }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = "tags_list[]";
            $field_lable = __("product::$module_name.tags");
            $field_options = ! empty($data) ? optional($data->tags)->pluck("name", "id") : "";
            $selected = ! empty($data)
                ? optional($data->tags)
                    ->pluck("id")
                    ->toArray()
                : "";
            $field_placeholder = __("Select an option");
            $required = "";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->multiselect($field_name, $field_options, $selected)->class("form-control select2-tags")->attributes(["$required"]) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = "status";
            $field_lable = __("product::$module_name.$field_name");
            $field_placeholder = __("Select an option");
            $required = "required";
            $select_options = \Modules\Product\Enums\ProductStatus::toArray();
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class("form-select")->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = "published_at";
            $field_lable = __("product::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "required";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->datetime($field_name)->placeholder($field_placeholder)->class("form-control")->attributes(["$required"]) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-5 mb-3">
        <div class="form-group">
            <?php
            $field_name = "meta_title";
            $field_lable = __("product::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class("form-control")->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-5 mb-3">
        <div class="form-group">
            <?php
            $field_name = "meta_keywords";
            $field_lable = __("product::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class("form-control")->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-2 mb-3">
        <div class="form-group">
            <?php
            $field_name = "order";
            $field_lable = __("product::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class("form-control")->attributes(["$required"]) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = "meta_description";
            $field_lable = __("product::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class("form-control")->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-6 mb-3">
        <div class="form-group">
            <?php
            $field_name = "meta_og_image";
            $field_lable = __("product::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>

            {{ html()->label($field_lable, $field_name)->class("form-label")->for($field_name) }}
            {!! field_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class("form-control")->attributes(["$required"]) }}
        </div>
    </div>
</div>

@push("after-styles")
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet" />
    <style>
        .note-editor.note-frame :after {
            display: none;
        }

        .note-editor .note-toolbar .note-dropdown-menu,
        .note-popover .popover-content .note-dropdown-menu {
            min-width: 180px;
        }
    </style>
@endpush

@push("after-scripts")
    <script
        type="module"
        src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"
    ></script>
    <script type="module">
        // Define function to open filemanager window
        var lfm = function (options, cb) {
            var route_prefix = options && options.prefix ? options.prefix : '/laravel-filemanager';
            window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
            window.SetUrl = cb;
        };

        // Define LFM summernote button
        var LFMButton = function (context) {
            var ui = $.summernote.ui;
            var button = ui.button({
                contents: '<i class="note-icon-picture"></i> ',
                tooltip: 'Insert image with filemanager',
                click: function () {
                    lfm(
                        {
                            type: 'image',
                            prefix: '/laravel-filemanager',
                        },
                        function (lfmItems, path) {
                            lfmItems.forEach(function (lfmItem) {
                                context.invoke('insertImage', lfmItem.url);
                            });
                        },
                    );
                },
            });
            return button.render();
        };

        $('#content').summernote({
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['fontname', 'fontsize', 'bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'lfm', 'video']],
                ['view', ['codeview', 'undo', 'redo', 'help']],
            ],
            buttons: {
                lfm: LFMButton,
            },
        });
    </script>

    <script type="module" src="{{ asset("vendor/laravel-filemanager/js/stand-alone-button.js") }}"></script>
    <script type="module">
        $('#button-image').filemanager('image');
    </script>

    <!-- Select2 Library -->
    <x-library.select2 />
    <script type="module">
        $(document).ready(function () {
            $('#button-file').filemanager('file');

            function toggleProductTypeFields() {
                var productType = $('select[name="type"]').val();
                if (productType === 'Digital') {
                    $('#digital_fields').show();
                    $('#subscription_fields').hide();
                } else if (productType === 'Subscription') {
                    $('#digital_fields').hide();
                    $('#subscription_fields').show();
                } else {
                    $('#digital_fields').hide();
                    $('#subscription_fields').hide();
                }
            }

            $('select[name="type"]').on('change', function() {
                toggleProductTypeFields();
            });

            // Run on load
            toggleProductTypeFields();

            $(document).on('select2:open', () => {
                document.querySelector('.select2-search__field').focus();
                document.querySelector('.select2-container--open .select2-search__field').focus();
            });

            $('.select2-category').select2({
                theme: 'bootstrap-5',
                placeholder: '@lang("Select an option")',
                minimumInputLength: 0,
                allowClear: true,
                ajax: {
                    url: '{{ route("backend.categories.index_list") }}',
                    dataType: 'json',
                    data: function (params) {
                        return {
                            q: $.trim(params.term),
                            group_name: 'Product'
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: data,
                        };
                    },
                    cache: false,
                },
            });

            $('.select2-tags').select2({
                theme: 'bootstrap-5',
                placeholder: '@lang("Select an option")',
                minimumInputLength: 2,
                allowClear: true,
                ajax: {
                    url: '{{ route("backend.tags.index_list") }}',
                    dataType: 'json',
                    data: function (params) {
                        return {
                            q: $.trim(params.term),
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: data,
                        };
                    },
                    cache: true,
                },
            });
        });
    </script>
@endpush
