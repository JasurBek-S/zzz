<x-app title="{{ __('app.orderstatus_title') }}">
    <!-- Page Content-->
    <div class="container py-4 py-lg-5 my-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <h2 class="h3 mb-4">{{ __('app.orderstatus_title') }}</h2>
                <p class="font-size-md">{{ __('app.orderstatus_desc') }}</p>
                <div class="card py-2 mt-4">
                    <form class="card-body needs-validation" novalidate>
                        <div class="form-group">
                            <label for="input-id">{{ __('app.orderstatus_input_owe') }}</label>
                            <input class="form-control" type="text" id="input-id" required>
                            <div class="invalid-feedback">{{ __('app.orderstatus_input_owe_error') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="input-tel">{{ __('app.orderstatus_input_two') }}</label>
                            <input class="form-control" type="tel" id="input-tel" required>
                            <div class="invalid-feedback">{{ __('app.orderstatus_input_two_error') }}</div>
                        </div>
                        <button class="btn btn-primary" type="submit">{{ __('app.orderstatus_button') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>