<div class="cz-sidebar-static rounded-lg box-shadow-lg px-0 pb-0 mb-5 mb-lg-0">
    <div class="px-4 mb-4">
        <div class="media align-items-center">
            <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;"><img
                    class="rounded-circle" src="https://ui-avatars.com/api/?name={{Auth()->user()->first_name}} {{Auth()->user()->last_name}}&color=7F9CF5&background=EBF4FF&size=128" alt="{{Auth()->user()->name}}"></div>
            <div class="media-body pl-3">
                <h3 class="font-size-base mb-0">{{Auth()->user()->first_name}} {{Auth()->user()->last_name}}</h3><span
                    class="text-accent font-size-sm">{{Auth()->user()->email}}</span>
            </div>
        </div>
    </div>
    <div class="bg-secondary px-4 py-3">
        <h3 class="font-size-sm mb-0 text-muted">{{ __('app.profile_dashboard') }}</h3>
    </div>
    <ul class="list-unstyled mb-0">
        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 {{ (request()->is('account-orders')) ? 'active' : '' }}"
                href="{{ route('account.orders') }}"><i class="czi-bag opacity-60 mr-2"></i>{{ __('app.profile_orders') }}<span
                    class="font-size-sm text-muted ml-auto">1</span></a></li>
        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 {{ (request()->is('account-wishlist')) ? 'active' : '' }}"
                href="{{ route('account.wishlist') }}"><i class="czi-heart opacity-60 mr-2"></i>{{ __('app.profile_wishlist') }}<span
                    class="font-size-sm text-muted ml-auto">3</span></a></li>
    </ul>
    <div class="bg-secondary px-4 py-3">
        <h3 class="font-size-sm mb-0 text-muted">{{ __('app.profile_settings') }}</h3>
    </div>
    <ul class="list-unstyled mb-0">
        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 {{ (request()->is('account')) ? 'active' : '' }}"
                href="{{ route('account') }}"><i class="czi-user opacity-60 mr-2"></i>{{ __('app.profile_info') }}</a>
        </li>
        <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 {{ (request()->is('account-address')) ? 'active' : '' }}"
                href="{{ route('account.address') }}"><i class="czi-location opacity-60 mr-2"></i>{{ __('app.profile_addresses') }}</a>
        </li>
        <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 {{ (request()->is('account-payment')) ? 'active' : '' }}" href="{{ route('account.payment') }}"><i
                    class="czi-card opacity-60 mr-2"></i>{{ __('app.profile_paymantmethods') }}</a>
        </li>
        <li class="d-lg-none border-top mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3"
                href="{{ route('logout') }}"><i class="czi-sign-out opacity-60 mr-2"></i>{{ __('app.profile_signout') }}</a></li>
    </ul>
</div>