@extends("backend.layouts.app")

@section("title")
    {{ __($module_action) }} {{ __($module_title) }}
@endsection

@section("breadcrumbs")
    <x-backend.breadcrumbs>
        <x-backend.breadcrumb-item route='{{ route("backend.$module_name.index") }}' icon="{{ $module_icon }}">
            {{ __($module_title) }}
        </x-backend.breadcrumb-item>
        <x-backend.breadcrumb-item type="active">{{ __($module_action) }}</x-backend.breadcrumb-item>
    </x-backend.breadcrumbs>
@endsection

@section("content")
    <x-backend.layouts.create
        :module_name="$module_name"
        :module_path="$module_path"
        :module_title="$module_title"
        :module_icon="$module_icon"
        :module_action="$module_action"
    >
        <x-slot name="toolbar">
            <a
                class="btn btn-secondary btn-sm ms-1"
                data-toggle="tooltip"
                href="{{ route("backend.$module_name.index") }}"
                title="{{ __($module_title) }} List"
            >
                <i class="fas fa-list-ul"></i>
                List
            </a>

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
        </x-slot>
    </x-backend.layouts.create>
@endsection
