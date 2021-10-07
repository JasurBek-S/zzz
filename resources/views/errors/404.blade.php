<x-app title="404">
    <!-- Page Content-->
    <div class="container py-5 mb-lg-3">
        <div class="row justify-content-center pt-lg-4 text-center">
            <div class="col-lg-5 col-md-7 col-sm-9"><img class="d-block mx-auto mb-5" src="{{ url('img/pages/404.png') }}"
                    width="340" alt="404 Error">
                <h1 class="h3">{{ __('error.title') }}</h1>
                <h3 class="h5 font-weight-normal mb-4">{{ __('error.desc') }}</h3>
                <p class="font-size-md mb-4">
                    <u>{{ __('error.h1') }}</u>
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="row">
                    <div class="col-sm-4 mb-3"><a class="card h-100 border-0 box-shadow-sm" href="{{ url('/') }}">
                            <div class="card-body">
                                <div class="media align-items-center"><i class="czi-home text-primary h4 mb-0"></i>
                                    <div class="media-body pl-3">
                                        <h5 class="font-size-sm mb-0">{{ __('error.card_owe_title') }}</h5><span
                                            class="text-muted font-size-ms">{{ __('error.card_owe_desc') }}</span>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div class="col-sm-4 mb-3"><a class="card h-100 border-0 box-shadow-sm" href="{{ url('/search') }}">
                            <div class="card-body">
                                <div class="media align-items-center"><i class="czi-search text-success h4 mb-0"></i>
                                    <div class="media-body pl-3">
                                        <h5 class="font-size-sm mb-0">{{ __('error.card_two_title') }}</h5><span
                                            class="text-muted font-size-ms">{{ __('error.card_two_desc') }}</span>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                    <div class="col-sm-4 mb-3"><a class="card h-100 border-0 box-shadow-sm" href="{{ url('/help-topics') }}">
                            <div class="card-body">
                                <div class="media align-items-center"><i class="czi-help text-info h4 mb-0"></i>
                                    <div class="media-body pl-3">
                                        <h5 class="font-size-sm mb-0">{{ __('error.card_tree_title') }}</h5><span
                                            class="text-muted font-size-ms">{{ __('error.card_tree_desc') }}</span>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</x-app>