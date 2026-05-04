@extends("backend.layouts.app")

@section("title")
    {{ __($module_action) }} {{ __($module_title) }}
@endsection

@section("breadcrumbs")
    <x-backend.breadcrumbs>
        <x-backend.breadcrumb-item type="active" icon="{{ $module_icon }}">
            {{ __($module_title) }}
        </x-backend.breadcrumb-item>
    </x-backend.breadcrumbs>
@endsection

@section("content")
    <div class="card">
        <div class="card-body">
            <x-backend.section-header
                :module_name="$module_name"
                :module_title="$module_title"
                :module_icon="$module_icon"
                :module_action="$module_action"
            >
                <x-slot name="toolbar">
                    <x-backend.buttons.return-back />

                    @if (auth()->user()->can("add_" . $module_name) && Route::has("backend." . $module_name . ".create"))
                        <x-backend.buttons.create
                            title="{{ __('Create') }} {{ ucwords(Str::singular($module_name)) }}"
                            small="true"
                            route='{{ route("backend.$module_name.create") }}'
                        />
                    @endif

                    @if (auth()->user()->can("view_categories"))
                        <a
                            class="btn btn-sm btn-info ms-1 text-white"
                            data-toggle="tooltip"
                            href="{{ route("backend.categories.index", ["group_name" => "Product"]) }}"
                            title="Manage Categories"
                        >
                            <i class="fa-solid fa-diagram-project"></i>
                            {{ __("Manage Categories") }}
                        </a>
                    @endif

                    @if (auth()->user()->can("restore_" . $module_name) && Route::has("backend." . $module_name . ".create"))
                        <div class="btn-group">
                            <button
                                class="btn btn-secondary btn-sm dropdown-toggle"
                                data-coreui-toggle="dropdown"
                                type="button"
                                aria-expanded="false"
                            >
                                <i class="fas fa-cog"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route("backend.$module_name.trashed") }}">
                                        <i class="fas fa-eye-slash"></i>
                                        @lang("View trash")
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </x-slot>
            </x-backend.section-header>

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table-bordered table-hover table" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>
                                        @lang("product::text.name")
                                    </th>
                                    <th>
                                        @lang("Price")
                                    </th>
                                    <th>
                                        @lang("Stock")
                                    </th>
                                    <th>
                                        @lang("product::text.updated_at")
                                    </th>
                                    <th class="text-end">
                                        @lang("product::text.action")
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-7">
                    <div class="float-left"></div>
                </div>
                <div class="col-5">
                    <div class="float-end"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push("after-styles")
    <!-- DataTables Core and Extensions -->
    <link href="{{ asset("vendor/datatable/datatables.min.css") }}" rel="stylesheet" />
@endpush

@push("after-scripts")
    <!-- DataTables Core and Extensions -->
    <script type="module" src="{{ asset("vendor/datatable/datatables.min.js") }}"></script>

    <script type="module">
        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: '{{ route("backend.$module_name.index_data") }}',
            columns: [
                {
                    data: 'id',
                    name: 'id',
                },
                {
                    data: 'name',
                    name: 'name',
                },
                {
                    data: 'price',
                    name: 'price',
                },
                {
                    data: 'stock',
                    name: 'stock',
                },
                {
                    data: 'updated_at',
                    name: 'updated_at',
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                },
            ],
        });
    </script>
@endpush
