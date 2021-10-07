<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
$site_meta = DB::table('settings')->first();
$language = app()->getLocale();
$sitetitle = json_decode($site_meta->sitetitle, true);
$metadescription = json_decode($site_meta->metadescription, true);
@endphp

<head>
    <meta charset="utf-8">
    <title>{{ ($title) ? $title.' - ' : ''  }}{{ config('app.name', 'ZILLA') }}</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="{{ $sitetitle[$language] }} - {{ $metadescription[$language] }}">
    <meta name="keywords"
        content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="SardorBek">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('favicon-16x16.png') }}">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="{{ url('safari-pinned-tab.svg') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ url('css/vendor.min.css') }}">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" id="main-styles" href="{{ url('css/theme.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<!-- Body-->

<body>
    @guest
    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" href="#signin-tab" data-toggle="tab" role="tab"
                                aria-selected="true"><i
                                    class="czi-unlocked mr-2 mt-n1"></i>{{ __('app.header_signin_title') }}</a></li>
                        @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link" href="#signup-tab" data-toggle="tab" role="tab"
                                aria-selected="false"><i
                                    class="czi-user mr-2 mt-n1"></i>{{ __('app.header_signup_title') }}</a></li>
                        @endif
                    </ul>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body tab-content py-4">
                    <form class="needs-validation tab-pane fade show active" method="POST" action="{{ route('login') }}"
                        autocomplete="off" novalidate id="signin-tab">
                        @csrf
                        <div class="form-group">
                            <label for="si-email">{{ __('app.header_signin_email') }}</label>
                            <input class="form-control" type="email" id="si-email" name="email"
                                placeholder="administration@zilla.uz" required>
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="form-group">
                            <label for="si-password">{{ __('app.header_signin_password') }}</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="si-password" name="password" required>
                                <label class="password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox"><i
                                        class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show
                                        password</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group d-flex flex-wrap justify-content-between">
                            <div class="custom-control custom-checkbox mb-2">
                                <input class="custom-control-input" type="checkbox" id="si-remember">
                                <label class="custom-control-label"
                                    for="si-remember">{{ __('app.header_signin_remember_me') }}</label>
                            </div><a class="font-size-sm" href="#">{{ __('app.header_signin_forgot_password') }}</a>
                        </div>
                        <button class="btn btn-primary btn-block btn-shadow"
                            type="submit">{{ __('app.header_signin_title') }}</button>
                    </form>
                    @if (Route::has('register'))
                    <form class="needs-validation tab-pane fade" method="POST" action="{{ route('register') }}"
                        autocomplete="off" novalidate id="signup-tab">
                        @csrf
                        <div class="form-group">
                            <label for="su-name">{{ __('app.header_signup_full_name') }}</label>
                            <input class="form-control" type="text" id="su-name" name="first_name"
                                placeholder="John Doe" required>
                            <div class="invalid-feedback">Please fill in your name.</div>
                        </div>
                        <div class="form-group">
                            <label for="su-email">{{ __('app.header_signup_email') }}</label>
                            <input class="form-control" type="email" id="su-email" name="email"
                                placeholder="johndoe@example.com" required>
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="form-group">
                            <label for="su-password">{{ __('app.header_signup_password') }}</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password" name="password" required>
                                <label class="password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox"><i
                                        class="czi-eye password-toggle-indicator"></i><span
                                        class="sr-only">{{ __('app.header_signup_password_show') }}</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="su-password-confirm">{{ __('app.header_signup_password_confirm') }}</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password-confirm"
                                    name="password_confirmation" required>
                                <label class="password-toggle-btn">
                                    <input class="custom-control-input" type="checkbox"><i
                                        class="czi-eye password-toggle-indicator"></i><span
                                        class="sr-only">{{ __('app.header_signup_password_show') }}</span>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-shadow"
                            type="submit">{{ __('app.header_signup_title') }}</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endguest

    <!-- Quick View Modal-->
    <div class="modal-quick-view modal fade" id="quick-view-electro" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content" id="smallBody">
                <!-- the result to be displayed apply here -->
            </div>
        </div>
    </div>
    <x-header />

    {{ $slot }}

    <!-- Footer-->
    <footer class="bg-dark">
        <div class="pt-5 bg-darker">
            <div class="container">
                <div class="row pb-3">
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="media"><i class="czi-rocket text-primary" style="font-size: 2.25rem;"></i>
                            <div class="media-body pl-3">
                                <h6 class="font-size-base text-light mb-1">{{ __('app.footer_card_one_h') }}</h6>
                                <p class="mb-0 font-size-ms text-light opacity-50">{{ __('app.footer_card_one_p') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="media"><i class="czi-currency-exchange text-primary"
                                style="font-size: 2.25rem;"></i>
                            <div class="media-body pl-3">
                                <h6 class="font-size-base text-light mb-1">{{ __('app.footer_card_two_h') }}</h6>
                                <p class="mb-0 font-size-ms text-light opacity-50">{{ __('app.footer_card_two_p') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="media"><i class="czi-support text-primary" style="font-size: 2.25rem;"></i>
                            <div class="media-body pl-3">
                                <h6 class="font-size-base text-light mb-1">{{ __('app.footer_card_three_h') }}</h6>
                                <p class="mb-0 font-size-ms text-light opacity-50">{{ __('app.footer_card_three_p') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="media"><i class="czi-card text-primary" style="font-size: 2.25rem;"></i>
                            <div class="media-body pl-3">
                                <h6 class="font-size-base text-light mb-1">{{ __('app.footer_card_four_h') }}</h6>
                                <p class="mb-0 font-size-ms text-light opacity-50">{{ __('app.footer_card_four_p') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="hr-light pb-4 mb-3">
                <div class="row pb-2">
                    <div class="col-md-6 text-center text-md-left mb-4">
                        <div class="text-nowrap mb-4"><a class="d-inline-block align-middle mt-n1 mr-3"
                                href="{{ url('/') }}"><img class="d-block" width="117"
                                    src="{{ url('img') }}/footer-logo-light.png"
                                    alt="{{ config('app.name', 'ZILLA') }}" /></a>
                            <div class="btn-group dropdown disable-autohide">
                                <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2"
                                    type="button" data-toggle="dropdown"><img class="mr-2" width="20"
                                        src="{{ url('img/flags/') }}/{{Config::get('languages')[App::getLocale()]['flag-icon']}}.svg"
                                        alt="{{ Config::get('languages')[App::getLocale()]['display'] }}" />{{ Config::get('languages')[App::getLocale()]['display'] }}
                                </button>
                                <ul class="dropdown-menu">
                                    @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                    <li><a class="dropdown-item pb-1" href="{{ route('lang.switch', $lang) }}"><img
                                                class="mr-2" width="20"
                                                src="{{ url('img/flags/') }}/{{$language['flag-icon']}}.svg"
                                                alt="{{$language['display']}}" />{{$language['display']}}</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                            <div class="btn-group dropdown disable-autohide">
      
{{ $currency = currency()->getUserCurrency(); }}
{{ $str = currency(5.99, 'USD', currency()->getUserCurrency()); }}
                            </div>
                        </div>
                        <div class="widget widget-links widget-light">
                            <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                                @php
                                $menu_footer = DB::select('select * from menu_child where action = true and location =
                                ?', [2]);
                                @endphp
                                @foreach($menu_footer as $data_footer)
                                @php
                                $languag = app()->getLocale();
                                $footer_name = json_decode($data_footer->name, true);
                                @endphp
                                <li
                                    class="widget-list-item mr-4 {{ (request()->is($data_footer->link)) ? 'active' : '' }}">
                                    <a class="widget-list-link"
                                        href="{{ $data_footer->link }}">{{ $footer_name[$languag] }}</a></li>
                                @endforeach
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-right mb-4">
                        <div class="mb-3">
                            @php
                            $menu_social = DB::select('select * from menu_child where action = true and location = ?',
                            [3]);
                            @endphp
                            @foreach($menu_social as $data_social)
                            @php
                            $social_name = json_decode($data_social->name, true);
                            @endphp
                            <a class="social-btn sb-light sb-{{ strtolower($social_name['en']) }} ml-2 mb-2"
                                href="{{ $data_social->link }}"><i class="{{ $data_social->icon }}"></i></a>
                            @endforeach
                        </div><img class="d-inline-block" width="187" src="{{ url('img/cards-alt.png') }}"
                            alt="Payment methods" />
                    </div>
                </div>
                <div class="pb-4 font-size-xs text-light opacity-50 text-center text-md-left">
                    {{ __('app.footer_info') }}</div>
            </div>
        </div>
    </footer>
    <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
        <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item"
                href="account-wishlist.html"><span class="cz-handheld-toolbar-icon"><i
                        class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a
                class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse"
                onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i
                        class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a
                class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.html"><span
                    class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span
                        class="badge badge-primary badge-pill ml-1">4</span></span><span
                    class="cz-handheld-toolbar-label">$265.00</span></a>
        </div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span
            class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i
            class="btn-scroll-top-icon czi-arrow-up"> </i></a>
    <!-- JavaScript libraries, plugins and custom scripts-->
    <script src="{{ url('js/vendor.min.js') }}"></script>
    <script src="{{ url('js/theme.min.js') }}"></script>
</body>

</html>