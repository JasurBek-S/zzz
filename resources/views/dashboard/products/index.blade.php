<x-dashboard-layout title="{{ __('navigation.menu_products') }}">
    @include('dashboard.components.breadcrumb', ['page' => __('navigation.menu_products')])
    @php
    function customers($user_id, $customr) {
    foreach($customr as $datas){
    if($datas->id == $user_id){
    return $datas->first_name.' '.$datas->last_name;
    }
    }
    }
    function category($category_id, $category_data) {
        foreach($category_data as $categorys_data){
            if($categorys_data->id == $category_id){
                $language = app()->getLocale();
                $name = json_decode($categorys_data->name, true);
                return $name[$language];
            }
        }
    }
    function productimage($productimage_id, $productimage) {
        foreach($productimage as $pimage_data){
            if($pimage_data->id == $productimage_id){
                return $pimage_data->image;
            }
        }
    }
    @endphp
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">{{ __('navigation.menu_products') }} <a style="margin-left:10px;"
                            class="badge badge-primary"
                            href="{{ route('dashboard.products.create') }}">{{ __('dashboard.products_create') }}</a>
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
                                    <th>{{ __('dashboard.products_table_image') }}</th>
                                    <th>{{ __('dashboard.products_table_name') }}</th>
                                    <th>{{ __('dashboard.products_table_category') }}</th>
                                    <th>{{ __('dashboard.products_table_price') }}</th>
                                    <th>{{ __('dashboard.products_table_action') }}</th>
                                    <th>**</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $data)
                                @php
                                $language = app()->getLocale();
                                $name = json_decode($data->name, true);
                                @endphp
                                <tr>
                                    <td><img src="/storage/images/{{ productimage($data->images, $productimage) }}"></td>
                                    <td>{{ $name['uz'] }}</td>
                                    <td>{{ category($data->category_id, $category) }}</td>
                                    <td>{{ $data->price }}</td>
                                    <td>{{  ('true' == $data->status) ? 'Action' : 'noAction'  }}</td>
                                    <td>
                                        <form action="{{route('dashboard.products.destroy',[$data->id])}}"
                                            method="POST">
                                            <a class="btn btn-primary btn-icon"
                                                href="{{ route('dashboard.products.edit', ['id' => $hashids->encode($data->id)]) }}"
                                                role="button"> <i data-feather="edit"></i></a>
                                            @csrf
                                            <input type="hidden" name="product"
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
        {!! $product->links('dashboard.pagination.default') !!}
    </div>
</x-dashboard-layout>