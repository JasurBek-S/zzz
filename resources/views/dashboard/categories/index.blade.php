<x-dashboard-layout title="{{ __('navigation.menu_categories') }}">
    @include('dashboard.components.breadcrumb', ['page' => __('navigation.menu_categories')])
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">{{ __('navigation.menu_categories') }} <a style="margin-left:10px;"
                            class="badge badge-primary"
                            href="{{ route('dashboard.categories.create') }}">{{ __('dashboard.categories_create') }}</a>
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
                                    <th>{{ __('dashboard.categories_table_name') }}</th>
                                    <th>{{ __('dashboard.categories_table_status') }}</th>
                                    <th>**</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $data)
                                @php
                                $language = app()->getLocale();
                                $name = json_decode($data->name, true);
                                @endphp
                                <tr>
                                    <td>{{ $name[$language] }}</td>
                                    <td>{{  ('true' == $data->status) ? 'Action' : 'noAction'  }}</td>
                                    <td>
                                        <form action="{{route('dashboard.categories.destroy',[$data->id])}}"
                                            method="POST">
                                            <a class="btn btn-primary btn-icon"
                                                href="https://zilla.uz/{{ $data->link }}"
                                                role="button"> <i data-feather="eye"></i></a>
                                            <a class="btn btn-primary btn-icon"
                                                href="{{ route('dashboard.categories.edit', ['id' => $hashids->encode($data->id)]) }}"
                                                role="button"> <i data-feather="edit"></i></a>
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $data->id }}" />
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
        {!! $categories->links('dashboard.pagination.default') !!}
    </div>
</x-dashboard-layout>