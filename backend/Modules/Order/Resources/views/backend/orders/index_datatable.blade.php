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
            />

            <div class="row mt-4 mb-4">
                <div class="col-md-4">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-white-50 small">Total Orders</div>
                                    <div class="text-lg fw-bold h4 mb-0">{{ $analytics['total_orders'] }}</div>
                                </div>
                                <i class="fas fa-shopping-bag fa-2x text-white-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-success text-white shadow">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-white-50 small">Total Revenue</div>
                                    <div class="text-lg fw-bold h4 mb-0">${{ number_format($analytics['total_revenue'], 2) }}</div>
                                </div>
                                <i class="fas fa-dollar-sign fa-2x text-white-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-info text-white shadow">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-white-50 small">Avg Order Value</div>
                                    <div class="text-lg fw-bold h4 mb-0">${{ number_format($analytics['aov'], 2) }}</div>
                                </div>
                                <i class="fas fa-chart-line fa-2x text-white-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card bg-warning text-white shadow">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-white-50 small">Pending Orders</div>
                                    <div class="text-lg fw-bold h4 mb-0">{{ $analytics['pending_orders'] }}</div>
                                </div>
                                <i class="fas fa-clock fa-2x text-white-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-success text-white shadow">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-white-50 small">Completed Orders</div>
                                    <div class="text-lg fw-bold h4 mb-0">{{ $analytics['completed_orders'] }}</div>
                                </div>
                                <i class="fas fa-check-circle fa-2x text-white-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-danger text-white shadow">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-white-50 small">Cancelled Orders</div>
                                    <div class="text-lg fw-bold h4 mb-0">{{ $analytics['cancelled_orders'] }}</div>
                                </div>
                                <i class="fas fa-times-circle fa-2x text-white-50"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                                    <th>@lang("Status")</th>
                                    <th>@lang("Payment")</th>
                                    <th>@lang("Updated At")</th>
                                    <th class="text-end">@lang("Action")</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push("after-styles")
    <link href="{{ asset("vendor/datatable/datatables.min.css") }}" rel="stylesheet" />
@endpush

@push("after-scripts")
    <script type="module" src="{{ asset("vendor/datatable/datatables.min.js") }}"></script>
    <script type="module">
        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: '{{ route("backend.$module_name.index_data") }}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'order_number', name: 'order_number'},
                {data: 'user_id', name: 'user_id'},
                {data: 'total_amount', name: 'total_amount'},
                {data: 'status', name: 'status'},
                {data: 'payment_status', name: 'payment_status'},
                {data: 'updated_at', name: 'updated_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            order: [[0, 'desc']]
        });
    </script>
@endpush
