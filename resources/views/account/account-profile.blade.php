<x-app title="{{ __('app.profile_info_title') }}">
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
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">{{ __('app.profile_info_title') }}</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pr-lg-4 text-center text-lg-left">
                <h1 class="h3 text-light mb-0">{{ __('app.profile_info_title') }}</h1>
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
                <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
                    <h6 class="font-size-base text-light mb-0">{{ __('app.profile_info_desc') }}</h6><a
                        class="btn btn-primary btn-sm" href="{{ route('logout') }}"><i
                            class="czi-sign-out mr-2"></i>{{ __('app.profile_signout') }}</a>
                </div>
                <!-- Profile form-->
                @if(session()->get('success'))
                <div class="alert alert-dark" role="alert">
                    {{ session()->get('success') }}
                </div>
                @endif
                <form method="post" action="{{route('account.update')}}">
                    @csrf
                    <div class="bg-secondary rounded-lg p-4 mb-4">
                        <div class="media align-items-center"><img
                                src="https://ui-avatars.com/api/?name={{Auth()->user()->first_name}} {{Auth()->user()->last_name}}&color=7F9CF5&background=EBF4FF&size=128"
                                width="90" alt="{{Auth()->user()->name}}">
                            <div class="media-body pl-3">
                                <button class="btn btn-light btn-shadow btn-sm mb-2" type="button"><i
                                        class="czi-loading mr-2"></i>{{ __('app.profile_info_avator') }}</button>
                                <div class="p mb-0 font-size-ms text-muted">{{ __('app.profile_info_phone_desc') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="account-fn">{{ __('app.profile_info_input_first_name') }}</label>
                                <input class="form-control" type="text" name="first_name" id="account-fn"
                                    value="{{ $user->first_name }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="account-ln">{{ __('app.profile_info_input_last_name') }}</label>
                                <input class="form-control" type="text" name="last_name" id="account-ln"
                                    value="{{ $user->last_name }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="account-email">{{ __('app.profile_info_input_email') }}</label>
                                <input class="form-control" type="email" id="account-email"
                                    value="{{ $user->email }}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="account-phone">{{ __('app.profile_info_input_phone') }}</label>
                                <input class="form-control" type="text" name="phone_number" id="account-phone"
                                    value="{{ $user->phone_number }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="account-pass">{{ __('app.profile_info_input_new_password') }}</label>
                                <div class="password-toggle">
                                    <input class="form-control" type="password" name="new_password" id="account-pass">
                                    <label class="password-toggle-btn">
                                        <input class="custom-control-input" type="checkbox"><i
                                            class="czi-eye password-toggle-indicator"></i><span class="sr-only">{{ __('app.profile_info_input_show') }}</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="account-confirm-pass">{{ __('app.profile_info_input_confirm_password') }}</label>
                                <div class="password-toggle">
                                    <input class="form-control" type="password" name="confirm_password"
                                        id="account-confirm-pass">
                                    <label class="password-toggle-btn">
                                        <input class="custom-control-input" type="checkbox"><i
                                            class="czi-eye password-toggle-indicator"></i><span class="sr-only">{{ __('app.profile_info_input_show') }}</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr class="mt-2 mb-3">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <div class="custom-control custom-checkbox d-block">
                                    <input class="custom-control-input" type="checkbox" id="subscribe_me" checked>
                                    <label class="custom-control-label" for="subscribe_me">{{ __('app.profile_info_newsletter') }}</label>
                                </div>
                                <button class="btn btn-primary mt-3 mt-sm-0" type="submit">{{ __('app.profile_info_update') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</x-app>