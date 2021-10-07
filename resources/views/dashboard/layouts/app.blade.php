<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title.' - ' }}{{ config('app.name', 'SATIF') }}</title>

    <!-- core:css -->
    <link rel="stylesheet" href="{{ url('/assets/vendors/core/core.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ url('/assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/vendors/jquery-tags-input/jquery.tagsinput.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/vendors/dropzone/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/vendors/dropify/dist/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet"
        href="{{ url('/assets/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}">

    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('/assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ url('/assets/css/demo_1/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ url('/assets/images/favicon.png') }}" />

    <script>
    tinymce.init({
        selector: '#tinymceExample',
        height: 500,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen table',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
    </script>
    <style>
    @media print {
        .noPrint {
            display: none;
        }
    }
    </style>

</head>

<body>

    <div class="main-wrapper">

        <nav class="sidebar noPrint">
            <div class="sidebar-header">
                <a href="{{ url('/') }}" class="sidebar-brand">
                    SAT<span>IF</span>
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            @include('dashboard.components.navigation-menu')
        </nav>
        <div class="page-wrapper">

            <nav class="navbar noPrint">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}} mt-1"
                                    title="{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></i> <span
                                    class="font-weight-medium ml-1 mr-1">{{ Config::get('languages')[App::getLocale()]['display'] }}</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="languageDropdown">
                                @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                <a href="{{ route('lang.switch', $lang) }}" class="dropdown-item py-2"><i
                                        class="flag-icon flag-icon-{{$language['flag-icon']}}"
                                        title="{{$language['flag-icon']}}" id="{{$language['flag-icon']}}"></i>
                                    <span class="ml-1"> {{$language['display']}} </span></a>
                                @endif
                                @endforeach
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-notifications">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
                                <div class="indicator">
                                    <div class="circle"></div>
                                </div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">6 New Notifications</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="dropdown-body">
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="user-plus"></i>
                                        </div>
                                        <div class="content">
                                            <p>New customer registered</p>
                                            <p class="sub-text text-muted">2 sec ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="gift"></i>
                                        </div>
                                        <div class="content">
                                            <p>New Order Recieved</p>
                                            <p class="sub-text text-muted">30 min ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="alert-circle"></i>
                                        </div>
                                        <div class="content">
                                            <p>Server Limit Reached!</p>
                                            <p class="sub-text text-muted">1 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="layers"></i>
                                        </div>
                                        <div class="content">
                                            <p>Apps are ready for update</p>
                                            <p class="sub-text text-muted">5 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="download"></i>
                                        </div>
                                        <div class="content">
                                            <p>Download completed</p>
                                            <p class="sub-text text-muted">6 hrs ago</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-profile">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&color=7F9CF5&background=EBF4FF"
                                    alt="profile">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&color=7F9CF5&background=EBF4FF"
                                            alt="">
                                    </div>
                                    <div class="info text-center">
                                        <p class="name font-weight-bold mb-0">{{ Auth::user()->name }}</p>
                                        <p class="email text-muted mb-3">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="" class="nav-link">
                                                <i data-feather="user"></i>
                                                <span>{{__('auth.profile')}}</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="" class="nav-link">
                                                <i data-feather="edit"></i>
                                                <span>{{__('auth.profile-edit')}}</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('logout') }}" class="nav-link">
                                                <i data-feather="log-out"></i>
                                                <span>{{__('auth.logout')}}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->

            <div class="page-content">
                {{ $slot }}
            </div>

            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left">Copyright © {{ date('Y') }} <a
                        href="https://www.team.satif.uz/" target="_blank">SATIF</a>. All rights reserved</p>
            </footer>
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src="{{ url('/assets/vendors/core/core.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ url('/assets/vendors/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/inputmask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/dropify/dist/dropify.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/moment/moment.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js') }}"></script>
    <script src="{{ url('/assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ url('/assets/vendors/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ url('/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ url('/assets/vendors/tinymce/tinymce.min.js') }}"></script>
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ url('/assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ url('/assets/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- custom js for this page -->
    <script src="{{ url('/assets/js/tinymce.js') }}"></script>
    <script src="{{ url('/assets/js/form-validation.js') }}"></script>
    <script src="{{ url('/assets/js/bootstrap-maxlength.js') }}"></script>
    <script src="{{ url('/assets/js/inputmask.js') }}"></script>
    <script src="{{ url('/assets/js/typeahead.js') }}"></script>
    <script src="{{ url('/assets/js/tags-input.js') }}"></script>
    <script src="{{ url('/assets/js/dropify.js') }}"></script>
    <script src="{{ url('/assets/js/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ url('/assets/js/timepicker.js') }}"></script>
    <script src="{{ url('/assets/js/dropzone.js') }}"></script>
    <script src="{{ url('/assets/js/dashboard.js') }}"></script>
    <script src="{{ url('/assets/js/datepicker.js') }}"></script>
    <script src="{{ url('/assets/js/select2.js') }}"></script>
    <script src="{{ url('/assets/js/file-upload.js') }}"></script>
    <!-- end custom js for this page -->
</body>

</html>