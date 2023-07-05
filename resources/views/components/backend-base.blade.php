<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="amobyng Nig Ltd">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('frontend/images/favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('frontend/images/favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/images/favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/images/favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/images/favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend/images/favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontend/images/favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('frontend/images/favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('frontend/images/favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/images/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('frontend/images/favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/images/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('frontend/images/favicons/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('frontend/images/favicons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    {{--
    <link href="{{ asset('backend/img/logo/logo.png')}}" rel="icon"> --}}
    <title>@yield('title') Amo Vendors Payment Tracking System </title>
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/vendor/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/vendor/clock-picker/clockpicker.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/css/ruang-admin.min.css')}}" rel="stylesheet">

    <link href="{{ asset('backend/css/modify-modal-positions.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/css/dashboardstyle.css')}}" rel="stylesheet">
    @livewireStyles
    @stack('otherstyle')
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <x-dashboard-sidebar />
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <x-dashboard-topbar></x-dashboard-topbar>
                <!-- Topbar -->
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="border-bottom d-sm-flex align-items-center justify-content-between mb-1">
                        <x-breadcum-title>
                            @yield('breadcumTitle')
                        </x-breadcum-title>
                        <x-breadcum-list>
                            <slot>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                                @yield('othermenulist')
                            </slot>
                        </x-breadcum-list>
                    </div>
                    <div class="row">
                        {{ $slot }}
                        {{-- @yield('content') --}}
                    </div>
                    <!-- Modal Logout -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to logout?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary"
                                        data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>copyright &copy; <script>
                                document.write(new Date().getFullYear());
                            </script> Developed by
                            <b><a href="/" target="_blank">Amo group IT Desk</a></b>
                        </span>
                    </div>
                </div>
            </footer>
            <!-- Footer -->
        </div>
    </div>
    @once
    <livewire:add-bank-modal />
    @endonce

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="{{ asset('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('backend/vendor/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{ asset('backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('backend/vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{ asset('backend/vendor/clock-picker/clockpicker.js')}}"></script>
    <script src="{{ asset('backend/js/ruang-admin.min.js')}}"></script>
    <script src="{{ asset('backend/js/dashboardScript.js')}}"></script>
    @livewireScripts
    {{-- <script type="module">
        import * as Turbo from "../../livewire-turbolinks/dist/livewire-turbolinks.js";
    </script> --}}
    @yield('script')
    @stack('otherscript')

</body>

</html>