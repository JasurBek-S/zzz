<x-app-layout token="{{ $token }}">
    @include('components.nav', ['page' => __('project.menu_pages')])
    @php
    $settings = DB::table('settings')->where(['project_token' => $token])->get();

    @endphp

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">{{ __('project.menu_pages') }} <a style="margin-left:10px;" class="badge badge-primary"
                            href="{{ route('project.pages.create', ['token' => $token]) }}">{{ __('project.pages_create') }}</a></h6>
                    @if(session()->get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('project.pages_table_name') }}</th>
                                    <th>{{ __('project.pages_table_status') }}</th>
                                    <th>**</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $data)
                                <tr>
                                    <td>{{ Str::limit($data->name, 15) }}</td>
                                    <td>{{  ('true' == $data->status) ? 'Action' : 'noAction'  }}</td>
                                    <td>
                                        <form action="{{route('project.pages.destroy',[$token, $data->id])}}"
                                            method="POST">
                                            <a class="btn btn-primary btn-icon"
                                                href="{{ route('project.pages.edit', ['token' => $token, 'id' => $data->id]) }}"
                                                role="button"> <i data-feather="edit"></i></a>
                                            @csrf
                                            <input type="hidden" name="project_token" value="{{ $token }}" />
                                            <input type="hidden" name="page_id" value="{{ $data->id }}" />
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
        {!! $pages->links() !!}
    </div>
</x-app-layout>