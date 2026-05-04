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
    <div class="card">
        <div class="card-body">
            <x-backend.section-header
                :module_name="$module_name"
                :module_title="$module_title"
                :module_icon="$module_icon"
                :module_action="$module_action"
            />

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table-bordered table-hover table" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>@lang("Order Number")</th>
                                    <th>@lang("Customer")</th>
                                    <th>@lang("Total")</th>
                                    <th>@lang("Deleted At")</th>
                                    <th class="text-end">@lang("Action")</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($$module_name as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->order_number }}</td>
                                    <td>{{ $item->user ? $item->user->name : 'Guest' }}</td>
                                    <td>${{ number_format($item->total_amount, 2) }}</td>
                                    <td>{{ $item->deleted_at->diffForHumans() }}</td>
                                    <td class="text-end">
                                        <form action="{{ route('backend.orders.restore', $item->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-sm btn-success" title="Restore"><i class="fas fa-undo"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            {{ $$module_name->links() }}
        </div>
    </div>
@endsection
