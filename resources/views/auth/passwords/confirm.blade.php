<x-app title="Password reset">

    <!-- Page Content-->
    <div class="container py-4 py-lg-5 my-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <h2 class="h3 mb-4">{{ __('Reset Password') }}</h2>
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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app>