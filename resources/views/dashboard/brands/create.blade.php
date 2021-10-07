<x-dashboard-layout title="{{ __('navigation.menu_brand') }}">
    @include('dashboard.components.breadcrumb', ['page' => __('dashboard.brand_create_title')])
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    @if(session()->get('success'))
                    <div class="alert alert-warning" role="alert">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('dashboard.brand.story') }}">
                        <h6 class="card-title">{{ __('dashboard.brand_create_title') }}</h6>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">{{ __('dashboard.brand_create_input_name') }}</label>
                            <input class="form-control" maxlength="70" maxlength="70" name="name"
                            id="defaultconfig" autocomplete="off" />
                        </div>
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $hashids->encode(Auth::user()->id) }}" />
                        <input class="btn btn-primary" type="submit" value="{{ __('dashboard.pages_create_submit') }}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>