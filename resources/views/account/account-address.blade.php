<x-app title="">
    <!-- Add New Address-->
    <form class="needs-validation modal fade" method="post" action="{{route('account.address.store')}}" id="add-address"
        tabindex="-1" novalidate>
        @csrf
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('app.profile_address_new_title') }}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address-fn">{{ __('app.profile_address_new_first_name') }}</label>
                                <input class="form-control" type="text" name="first_name" id="address-fn" required>
                                <div class="invalid-feedback">{{ __('app.Please fill in you first name!') }}</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address-ln">{{ __('app.profile_address_new_last_name') }}</label>
                                <input class="form-control" type="text" name="last_name" id="address-ln" required>
                                <div class="invalid-feedback">{{ __('app.profile_address_new_last_name_feedback') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address-company">{{ __('app.profile_address_new_campany') }}</label>
                                <input class="form-control" type="text" name="company" id="address-company">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address-country">{{ __('app.profile_address_new_country') }}</label>
                                <select class="custom-select" name="country" id="address-country" required>
                                    <option value>Select country</option>
                                    @foreach($countries as $data_countries)
                                    <option value="{{ $data_countries->code }}">{{ $data_countries->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">{{ __('app.profile_address_new_country_feedback') }}</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address-city">{{ __('app.profile_address_new_city') }}</label>
                                <input class="form-control" type="text" name="city" id="address-city" required>
                                <div class="invalid-feedback">{{ __('app.profile_address_new_city_feedback') }}</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address-line1">{{ __('app.profile_address_new_line') }}</label>
                                <input class="form-control" type="text" name="line_one" id="address-line1" required>
                                <div class="invalid-feedback">{{ __('app.profile_address_new_line_feedback') }}</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address-line2">{{ __('app.profile_address_new_linetwo') }}</label>
                                <input class="form-control" type="text" name="line_two" id="address-line2">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address-zip">{{ __('app.profile_address_new_zipcode') }}</label>
                                <input class="form-control" type="text" name="zipcode" id="address-zip" required>
                                <div class="invalid-feedback">{{ __('app.profile_address_new_zipcode_feedback') }}</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="status" id="address-primary">
                                <label class="custom-control-label"
                                    for="address-primary">{{ __('app.profile_address_new_primary') }}</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="customer_id" value="{{ $user->id }}">
                    <button class="btn btn-secondary" type="button"
                        data-dismiss="modal">{{ __('app.profile_address_new_close') }}</button>
                    <button class="btn btn-primary btn-shadow"
                        type="submit">{{ __('app.profile_address_new_add') }}</button>
                </div>
            </div>
        </div>
    </form>
    <!-- Page Title (Shop)-->
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol
                        class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-star">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i
                                    class="czi-home"></i>Home</a></li>
                        <li class="breadcrumb-item text-nowrap"><a href="#">Account</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">
                            {{ __('app.profile_address_title') }}</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                <h1 class="h3 text-light mb-0">{{ __('app.profile_address_title') }}</h1>
            </div>
        </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-3">
        <div class="row">
            <!-- Sidebar-->
            <aside class="col-lg-4 pt-4 pt-lg-0">
                @include('components.account-sidebar')
            </aside>
            <!-- Content  -->
            <section class="col-lg-8">
                <!-- Toolbar-->
                <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-4">
                    <h6 class="font-size-base text-light mb-0">{{ __('app.profile_address_desc') }}</h6><a
                        class="btn btn-primary btn-sm" href="account-signin.html"><i
                            class="czi-sign-out mr-2"></i>{{ __('app.profile_signout') }}</a>
                </div>
                <!-- Addresses list-->
                @if(session()->get('success'))
                <div class="alert alert-dark" role="alert">
                    {{ session()->get('success') }}
                </div>
                @endif
                <div class="table-responsive font-size-md">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>{{ __('app.profile_address_table_address') }}</th>
                                <th>{{ __('app.profile_address_table_actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user_address as $data)
                            <tr>
                                <td class="py-3 align-middle">{{ $data->county }}<span
                                        class="align-middle badge badge-info ml-2">Primary</span></td>
                                <td class="py-3 align-middle">

                                    <form action="{{route('account.address.destroy')}}" method="POST">

                                        <a class="nav-link-style mr-2"
                                            href="{{ route('account.address.edit', ['id' => $hashids->encode($data->id)]) }}"
                                            data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a>
                                        @csrf
                                        <input type="hidden" name="address" value="{{ $data->id }}" />
                                        <button style="border: none;background: none;padding: 0;"> <a
                                                class="nav-link-style text-danger" href="#" data-toggle="tooltip"
                                                title="Remove">
                                                <div class="czi-trash"></div>
                                            </a></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td class="py-3 align-middle">769, Industrial, West Chicago, IL 60185, USA</td>
                                <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#"
                                        data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a
                                        class="nav-link-style text-danger" href="#" data-toggle="tooltip"
                                        title="Remove">
                                        <div class="czi-trash"></div>
                                    </a></td>
                            </tr>
                            <tr>
                                <td class="py-3 align-middle">514 S. Magnolia St. Orlando, FL 32806, USA</td>
                                <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#"
                                        data-toggle="tooltip" title="Edit"><i class="czi-edit"></i></a><a
                                        class="nav-link-style text-danger" href="#" data-toggle="tooltip"
                                        title="Remove">
                                        <div class="czi-trash"></div>
                                    </a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr class="pb-4">
                <div class="text-sm-right"><a class="btn btn-primary" href="#add-address"
                        data-toggle="modal">{{ __('app.profile_address_add_new_address') }}</a></div>
            </section>

        </div>
    </div>
</x-app>