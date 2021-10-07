<x-app title="Password reset">

    <!-- Page Content-->
    <div class="container py-4 py-lg-5 my-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <h2 class="h3 mb-4">{{ __('Reset Password') }}</h2>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card py-2 mt-4">
                    <form class="card-body needs-validation" method="POST" action="{{ route('password.email') }}">
                            @csrf
                        <div class="form-group">
                            <label for="input-id">{{ __('E-Mail Address') }}</label>
                            <input class="form-control" type="text" id="input-id" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">{{ __('Send Password Reset Link') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>