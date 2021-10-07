<x-app-layout token="{{ $token }}">
    @include('components.nav', ['page' => __('project.menu_orders')])
    @php
    function customers($user_id, $customr) {
    foreach($customr as $datas){
    if($datas->id == $user_id){
    return $datas->first_name.' '.$datas->last_name;
    }
    }
    }
    function status($status_id, $stus) {
    foreach($stus as $datas){
    if($datas->id == $status_id){
    if ($status_id == 1) {
    echo '<span class="badge badge-warning">'.$datas->name.'</span>';
    } elseif ($status_id == 2) {
    echo '<span class="badge badge-success">'.$datas->name.'</span>';
    } elseif ($status_id == 3) {
    echo '<span class="badge badge-danger">'.$datas->name.'</span>';
    } elseif ($status_id == 4) {
    echo '<span class="badge badge-info">'.$datas->name.'</span>';
    } elseif ($status_id == 5) {
    echo '<span class="badge badge-light">'.$datas->name.'</span>';
    } elseif ($status_id == 6) {
    echo '<span class="badge badge-secondary">'.$datas->name.'</span>';
    } elseif ($status_id == 7) {
    echo '<span class="badge badge-dark">'.$datas->name.'</span>';
    }
    }
    }
    }

    @endphp
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">{{ __('project.menu_orders') }} <a style="margin-left:10px;"
                            class="badge badge-primary"
                            href="{{ route('project.orders.create', ['token' => $token]) }}">{{ __('project.orders_create') }}</a>
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
                                    <th>{{ __('project.orders_table_order') }}</th>
                                    <th>{{ __('project.orders_table_date') }}</th>
                                    <th>{{ __('project.orders_table_status') }}</th>
                                    <th>{{ __('project.orders_table_billing') }}</th>
                                    <th>{{ __('project.orders_table_total') }}</th>
                                    <th>**</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $data)
                                <tr>
                                    <td><a
                                            href="{{ route('project.orders.show', ['token' => $token, 'id' => $hashids->encode($data->id)]) }}">#{{ $data->id }}
                                            - {{ customers($data->customer_id, $customer) }}</a></td>
                                    <td>{{ $data->created_at->format('d-m-Y') }}</td>
                                    <td>{{ status($data->status, $status) }}</td>
                                    <td data-toggle="tooltip" data-html="true" title="{{ $data->email }}">
                                        {{ Str::limit($data->email, 15) }}</td>
                                    <td>{{  ('true' == $data->status) ? 'Action' : 'noAction'  }}</td>
                                    <td>
                                        <form action="{{route('project.orders.destroy',[$token, $data->id])}}"
                                            method="POST">
                                            <a class="btn btn-primary btn-icon"
                                                href="{{ route('project.orders.edit', ['token' => $token, 'id' => $hashids->encode($data->id)]) }}"
                                                role="button"> <i data-feather="edit"></i></a>
                                            @csrf
                                            <input type="hidden" name="project_token" value="{{ $token }}" />
                                            <input type="hidden" name="customer"
                                                value="{{ $hashids->encode($data->id) }}" />
                                            <button type="submit" class="btn btn-danger btn-icon">
                                                <i data-feather="delete"></i>
                                            </button>
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
        {!! $order->links() !!}
    </div>
</x-app-layout>