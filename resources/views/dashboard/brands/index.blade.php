<x-dashboard-layout title="{{ __('navigation.menu_brand') }}">
    @include('dashboard.components.breadcrumb', ['page' => __('navigation.menu_brand')])
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">{{ __('navigation.menu_brand') }} <a style="margin-left:10px;"
                            class="badge badge-primary"
                            href="{{ route('dashboard.brand.create') }}">{{ __('dashboard.brand_create') }}</a>
                    </h6>
                    @if(session()->get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('dashboard.brand_table_name') }}</th>
                                    <th>{{ __('dashboard.brand_table_action') }}</th>
                                    <!-- <th>**</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brand as $data)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{  ('true' == $data->status) ? 'Action' : 'noAction'  }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {!! $brand->links('dashboard.pagination.default') !!}
    </div>
</x-dashboard-layout>