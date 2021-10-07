<x-app-layout token="{{ $token }}">
    @include('components.nav', ['page' => __('project.menu_customers')])
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">{{ __('project.menu_customers') }} <a style="margin-left:10px;" class="badge badge-primary"
                            href="{{ route('project.customers.create', ['token' => $token]) }}">{{ __('project.customers_create') }}</a></h6>
                    @if(session()->get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('project.customers_table_firstname') }}</th>
                                    <th>{{ __('project.customers_table_lastname') }}</th>
                                    <th>{{ __('project.customers_table_name') }}</th>
                                    <th>{{ __('project.customers_table_email') }}</th>
                                    <th>{{ __('project.customers_table_status') }}</th>
                                    <th>**</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customer as $data)
                                <tr>
                                    <td>{{ Str::limit($data->first_name, 15) }}</td>
                                    <td>{{ Str::limit($data->last_name, 15) }}</td>
                                    <td>{{ Str::limit($data->username, 15) }}</td>
                                    <td data-toggle="tooltip" data-html="true" title="{{ $data->email }}">{{ Str::limit($data->email, 15) }}</td>
                                    <td>{{  ('true' == $data->status) ? 'Action' : 'noAction'  }}</td>
                                    <td>
                                        <form action="{{route('project.customers.destroy',[$token, $data->id])}}"
                                            method="POST">
                                            <a class="btn btn-primary btn-icon"
                                                href="{{ route('project.customers.edit', ['token' => $token, 'id' => $hashids->encode($data->id)]) }}"
                                                role="button"> <i data-feather="edit"></i></a>
                                            @csrf
                                            <input type="hidden" name="project_token" value="{{ $token }}" />
                                            <input type="hidden" name="customer" value="{{ $data->id }}" />
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
        {!! $customer->links() !!}
    </div>
</x-app-layout>