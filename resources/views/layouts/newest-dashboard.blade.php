<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_WestAfrica" />
    <meta property="og:type" content="article" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="amobyng Nig Ltd">
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
    <title>@yield('title') Amo Vendors Payment Tracking System </title>
    @livewireStyles
    @stack('otherstyle')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{asset('application-dashboard/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}"
        rel="stylesheet" type="text/css" />
    <link href="{{asset('application-dashboard/assets/plugins/custom/datatables/datatables.bundle.css')}}"
        rel="stylesheet" type="text/css" />
    <link href="{{asset('application-dashboard/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('application-dashboard/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed">
    <script>
        var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }
    </script>
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:'80px', '300px': '100px'}" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                <div class="aside-logo py-8" id="kt_aside_logo">
                    <a href="#" class="d-flex align-items-center">
                        <img alt="Logo" src="/application-dashboard/assets/media/logos/demo6.svg" class="h-45px logo" />
                    </a>
                </div>
                <x-backend.sidebar />
                <!--end::Aside menu-->
                <!--begin::Footer-->
                <x-backend.static-quick-link />
                <!--end::Footer-->
            </div>
            <!--end::Aside-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <div id="kt_header" style="" class="header align-items-stretch">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between p-3">
                        <!--begin::Aside mobile toggle-->
                        <x-backend.mobile-toggle />
                        <!--end::Aside mobile toggle-->
                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                            <!--begin::Navbar-->
                            <x-backend.topbar-menu />
                            <!--end::Navbar-->
                            <!--begin::Toolbar wrapper-->
                            <x-backend.topbar-tool-icon />
                            <!--end::Toolbar wrapper-->
                        </div>
                    </div>
                    <!--end::Container-->
                </div>
                <!--begin::Toolbar-->
                <div class="toolbar py-2" id="kt_toolbar">
                    <!--begin::Container-->
                    <div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
                        <!--begin::Page title-->
                        <div class="flex-grow-1 flex-shrink-0 me-5">
                            <!--begin::Page title-->
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <h1 class="d-flex align-items-center text-dark fw-bold my-1 fs-3">Dashboard
                                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                                    <small class="text-muted fs-7 fw-semibold my-1 ms-1">#XRS-45670</small>
                                </h1>
                            </div>
                            <!--end::Page title-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Action group-->
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="flex-shrink-0 me-2">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light active fw-semibold fs-7 px-4 me-1"
                                            data-bs-toggle="tab" href="#">Day</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-semibold fs-7 px-4 me-1"
                                            data-bs-toggle="tab" href="">Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-semibold fs-7 px-4"
                                            data-bs-toggle="tab" href="#">Year</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center">
                                <!--begin::Daterangepicker-->
                                <a href="#"
                                    class="btn btn-sm btn-bg-light btn-color-gray-500 btn-active-color-primary me-2"
                                    id="kt_dashboard_daterangepicker" data-bs-toggle="tooltip" data-bs-dismiss="click"
                                    data-bs-trigger="hover" title="Select dashboard daterange">
                                    <span class="fw-semibold me-1" id="kt_dashboard_daterangepicker_title">Range:</span>
                                    <span class="fw-bold" id="kt_dashboard_daterangepicker_date">August 18</span>
                                </a>
                                <!--end::Daterangepicker-->
                                <div class="d-flex align-items-center">
                                    <button type="button"
                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light btn-active-color-primary"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
                                        <span class="svg-icon svg-icon-2x">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z"
                                                    fill="currentColor" />
                                                <rect x="11" y="19" width="10" height="2" rx="1"
                                                    transform="rotate(-90 11 19)" fill="currentColor" />
                                                <rect x="7" y="13" width="10" height="2" rx="1" fill="currentColor" />
                                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--end::Action group-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Container-->
                    <div id="kt_content_container" class="container-xxl p-2">
                        <div class="row g-5 g-xl-8">
                            <div class="col-xl-4">
                                <a href="#" class="card bg-danger hoverable card-xl-stretch mb-xl-8">
                                    <div class="card-body">
                                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                    fill="currentColor" />
                                                <path opacity="0.3"
                                                    d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                    fill="currentColor" />
                                                <path opacity="0.3"
                                                    d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <div class="text-white fw-bold fs-2 mb-2 mt-5">Shopping Cart</div>
                                        <div class="fw-semibold text-white">Lands, Houses, Ranchos, Farms</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-4">
                                <a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                                    <div class="card-body">
                                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <div class="text-white fw-bold fs-2 mb-2 mt-5">Appartments</div>
                                        <div class="fw-semibold text-white">Flats, Shared Rooms, Duplex</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-4">
                                <a href="#" class="card bg-success hoverable card-xl-stretch mb-5 mb-xl-8">
                                    <div class="card-body">
                                        <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M14 12V21H10V12C10 11.4 10.4 11 11 11H13C13.6 11 14 11.4 14 12ZM7 2H5C4.4 2 4 2.4 4 3V21H8V3C8 2.4 7.6 2 7 2Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M21 20H20V16C20 15.4 19.6 15 19 15H17C16.4 15 16 15.4 16 16V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <div class="text-white fw-bold fs-2 mb-2 mt-5">Sales Stats</div>
                                        <div class="fw-semibold text-white">50% Increased for FY20</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row gy-5 g-xl-8">
                            <div class="col-xl-4">
                                <!--begin::Mixed Widget 3-->
                                <div class="card card-xl-stretch mb-xl-8">
                                    <!--begin::Beader-->
                                    <div class="card-header border-0 py-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold fs-3 mb-1">Sales Overview</span>
                                            <span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5" rx="1"
                                                                fill="currentColor" />
                                                            <rect x="14" y="5" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                            <rect x="5" y="14" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                            <rect x="14" y="14" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                                data-kt-menu="true" id="kt_menu_62fe7627045bc">
                                                <div class="px-7 py-5">
                                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                </div>
                                                <!--begin::Menu separator-->
                                                <div class="separator border-gray-200"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Form-->
                                                <div class="px-7 py-5">
                                                    <div class="mb-10">
                                                        <label class="form-label fw-semibold">Status:</label>
                                                        <div>
                                                            <select class="form-select form-select-solid"
                                                                data-kt-select2="true" data-placeholder="Select option"
                                                                data-dropdown-parent="#kt_menu_62fe7627045bc"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="1">Approved</option>
                                                                <option value="2">Pending</option>
                                                                <option value="2">In Process</option>
                                                                <option value="2">Rejected</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mb-10">
                                                        <label class="form-label fw-semibold">Member Type:</label>
                                                        <!--begin::Options-->
                                                        <div class="d-flex">
                                                            <!--begin::Options-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="1" />
                                                                <span class="form-check-label">Author</span>
                                                            </label>
                                                            <!--end::Options-->
                                                            <!--begin::Options-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="2" checked="checked" />
                                                                <span class="form-check-label">Customer</span>
                                                            </label>
                                                            <!--end::Options-->
                                                        </div>
                                                        <!--end::Options-->
                                                    </div>
                                                    <div class="mb-10">
                                                        <label class="form-label fw-semibold">Notifications:</label>
                                                        <!--begin::Switch-->
                                                        <div
                                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                name="notifications" checked="checked" />
                                                            <label class="form-check-label">Enabled</label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset"
                                                            class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-dismiss="true">Reset</button>
                                                        <button type="submit" class="btn btn-sm btn-primary"
                                                            data-kt-menu-dismiss="true">Apply</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Menu 1-->
                                        </div>
                                    </div>
                                    <div class="card-body p-0 d-flex flex-column">
                                        <!--begin::Stats-->
                                        <div class="card-p pt-5 bg-body flex-grow-1">
                                            <div class="row g-0">
                                                <div class="col mr-8">
                                                    <div class="fs-7 text-muted fw-bold">Average Sale</div>
                                                    <!--begin::Stat-->
                                                    <div class="d-flex align-items-center">
                                                        <div class="fs-4 fw-bold">$650</div>
                                                        >
                                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                                    rx="1" transform="rotate(90 13 6)"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <!--end::Stat-->
                                                </div>
                                                <div class="col">
                                                    <div class="fs-7 text-muted fw-bold">Commission</div>
                                                    <!--begin::Stat-->
                                                    <div class="fs-4 fw-bold">$233,600</div>
                                                    <!--end::Stat-->
                                                </div>
                                            </div>
                                            <div class="row g-0 mt-8">
                                                <div class="col mr-8">
                                                    <div class="fs-7 text-muted fw-bold">Annual Taxes 2019</div>
                                                    <!--begin::Stat-->
                                                    <div class="fs-4 fw-bold">$29,004</div>
                                                    <!--end::Stat-->
                                                </div>
                                                <div class="col">
                                                    <div class="fs-7 text-muted fw-bold">Annual Income</div>
                                                    <!--begin::Stat-->
                                                    <div class="d-flex align-items-center">
                                                        <div class="fs-4 fw-bold">$1,480,00</div>
                                                        >
                                                        <span class="svg-icon svg-icon-5 svg-icon-danger ms-1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="11" y="18" width="13" height="2"
                                                                    rx="1" transform="rotate(-90 11 18)"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <!--end::Stat-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Stats-->
                                        <!--begin::Chart-->
                                        <div class="mixed-widget-3-chart card-rounded-bottom"
                                            data-kt-chart-color="primary" style="height: 150px"></div>
                                        <!--end::Chart-->
                                    </div>
                                </div>
                                <!--end::Mixed Widget 3-->
                            </div>
                            <div class="col-xl-4">
                                <!--begin::Mixed Widget 4-->
                                <div class="card card-xl-stretch">
                                    <!--begin::Beader-->
                                    <div class="card-header border-0 py-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold fs-3 mb-1">Action Needed</span>
                                            <span class="text-muted fw-semibold fs-7">Complete your profile setup</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5" rx="1"
                                                                fill="currentColor" />
                                                            <rect x="14" y="5" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                            <rect x="5" y="14" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                            <rect x="14" y="14" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                                data-kt-menu="true" id="kt_menu_62fe762704a7f">
                                                <div class="px-7 py-5">
                                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                </div>
                                                <!--begin::Menu separator-->
                                                <div class="separator border-gray-200"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Form-->
                                                <div class="px-7 py-5">
                                                    <div class="mb-10">
                                                        <label class="form-label fw-semibold">Status:</label>
                                                        <div>
                                                            <select class="form-select form-select-solid"
                                                                data-kt-select2="true" data-placeholder="Select option"
                                                                data-dropdown-parent="#kt_menu_62fe762704a7f"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="1">Approved</option>
                                                                <option value="2">Pending</option>
                                                                <option value="2">In Process</option>
                                                                <option value="2">Rejected</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mb-10">
                                                        <label class="form-label fw-semibold">Member Type:</label>
                                                        <!--begin::Options-->
                                                        <div class="d-flex">
                                                            <!--begin::Options-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="1" />
                                                                <span class="form-check-label">Author</span>
                                                            </label>
                                                            <!--end::Options-->
                                                            <!--begin::Options-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="2" checked="checked" />
                                                                <span class="form-check-label">Customer</span>
                                                            </label>
                                                            <!--end::Options-->
                                                        </div>
                                                        <!--end::Options-->
                                                    </div>
                                                    <div class="mb-10">
                                                        <label class="form-label fw-semibold">Notifications:</label>
                                                        <!--begin::Switch-->
                                                        <div
                                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                name="notifications" checked="checked" />
                                                            <label class="form-check-label">Enabled</label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset"
                                                            class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-dismiss="true">Reset</button>
                                                        <button type="submit" class="btn btn-sm btn-primary"
                                                            data-kt-menu-dismiss="true">Apply</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Menu 1-->
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-column">
                                        <div class="flex-grow-1">
                                            <div class="mixed-widget-4-chart" data-kt-chart-color="primary"
                                                style="height: 225px"></div>
                                        </div>
                                        <div class="pt-5">
                                            <p class="text-center fs-6 pb-5">
                                                <span class="badge badge-light-danger fs-8">Notes:</span>&nbsp; Current
                                                sprint requires stakeholders
                                                <br />to approve newly amended policies
                                            </p>
                                            <a href="#" class="btn btn-primary w-100 py-3">Take Action</a>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Mixed Widget 4-->
                            </div>
                            <div class="col-xl-4">
                                <!--begin::Mixed Widget 5-->
                                <div class="card card-xl-stretch mb-5 mb-xl-8">
                                    <!--begin::Beader-->
                                    <div class="card-header border-0 py-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold fs-3 mb-1">Trends</span>
                                            <span class="text-muted fw-semibold fs-7">Latest trends</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5" rx="1"
                                                                fill="currentColor" />
                                                            <rect x="14" y="5" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                            <rect x="5" y="14" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                            <rect x="14" y="14" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                data-kt-menu="true">
                                                <div class="menu-item px-3">
                                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                        Payments</div>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Create Invoice</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Specify a target name for future usage and reference"></i></a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Generate Bill</a>
                                                </div>
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-end">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Subscription</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Plans</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Billing</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Statements</a>
                                                        </div>
                                                        <!--begin::Menu separator-->
                                                        <div class="separator my-2"></div>
                                                        <!--end::Menu separator-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3">
                                                                <!--begin::Switch-->
                                                                <label
                                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                                    <input class="form-check-input w-30px h-20px"
                                                                        type="checkbox" value="1" checked="checked"
                                                                        name="notifications" />
                                                                    <span
                                                                        class="form-check-label text-muted fs-6">Recuring</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-item px-3 my-1">
                                                    <a href="#" class="menu-link px-3">Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-column">
                                        <!--begin::Chart-->
                                        <div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="danger"
                                            style="height: 150px"></div>
                                        <!--end::Chart-->
                                        <div class="mt-5">
                                            <div class="d-flex flex-stack mb-5">
                                                <div class="d-flex align-items-center me-2">
                                                    <div class="symbol symbol-50px me-3">
                                                        <div class="symbol-label bg-light">
                                                            <img src="{{asset('application-dashboard/assets/media/svg/brand-logos/plurk.svg')}}"
                                                                class="h-50" alt="" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bold">Top
                                                            Authors</a>
                                                        <div class="fs-7 text-muted fw-semibold mt-1">Ricky Hunt, Sandra
                                                            Trepp</div>
                                                    </div>
                                                </div>
                                                <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                                            </div>
                                            <div class="d-flex flex-stack mb-5">
                                                <div class="d-flex align-items-center me-2">
                                                    <div class="symbol symbol-50px me-3">
                                                        <div class="symbol-label bg-light">
                                                            <img src="{{asset('application-dashboard/assets/media/svg/brand-logos/figma-1.svg')}}"
                                                                class="h-50" alt="" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bold">Top
                                                            Sales</a>
                                                        <div class="fs-7 text-muted fw-semibold mt-1">PitStop Emails
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                                            </div>
                                            <div class="d-flex flex-stack">
                                                <div class="d-flex align-items-center me-2">
                                                    <div class="symbol symbol-50px me-3">
                                                        <div class="symbol-label bg-light">
                                                            <img src="{{asset('application-dashboard/assets/media/svg/brand-logos/vimeo.svg')}}"
                                                                class="h-50" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="py-1">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-bold">Top
                                                            Engagement</a>
                                                        <div class="fs-7 text-muted fw-semibold mt-1">KT.com</div>
                                                    </div>
                                                </div>
                                                <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Mixed Widget 5-->
                            </div>
                        </div>
                        <div class="row gy-5 g-xl-8">
                            <div class="col-xxl-4">
                                <!--begin::List Widget 9-->
                                <div class="card card-xxl-stretch">
                                    <div class="card-header align-items-center border-0 mt-3">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="fw-bold text-dark fs-3">My Competitors</span>
                                            <span class="text-gray-400 mt-2 fw-semibold fs-6">More than 400+ new
                                                members</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <button type="button"
                                                class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <span class="svg-icon svg-icon-3 svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5" rx="1"
                                                                fill="currentColor" />
                                                            <rect x="14" y="5" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                            <rect x="5" y="14" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                            <rect x="14" y="14" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                data-kt-menu="true">
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick
                                                        Actions</div>
                                                </div>
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Customer</a>
                                                </div>
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-start">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">New Group</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Member Group</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">New Contact</a>
                                                </div>
                                                <!--begin::Menu separator-->
                                                <div class="separator mt-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3 py-3">
                                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                            Reports</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-5">
                                        <div class="d-flex mb-7">
                                            <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                                                <img src="{{ asset('/application-dashboard/assets/media/stock/600x400/img-3.jpg')}}"
                                                    class="mw-100" alt="" />
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                                    <a href="#"
                                                        class="fs-5 text-gray-800 text-hover-primary fw-bold">Cup &
                                                        Green</a>
                                                    <span class="text-gray-400 fw-semibold fs-7 my-1">Study highway
                                                        types</span>
                                                    <span class="text-gray-400 fw-semibold fs-7">By:
                                                        <a href="#" class="text-primary fw-bold">CoreAd</a></span>
                                                </div>
                                                <div class="text-end py-lg-0 py-2">
                                                    <span class="text-gray-800 fw-bolder fs-3">24,900</span>
                                                    <span class="text-gray-400 fs-7 fw-semibold d-block">Sales</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-7">
                                            <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                                                <img src="{{ asset('/application-dashboard/assets/media/stock/600x400/img-4.jpg')}}"
                                                    class="mw-100" alt="" />
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                                    <a href="#"
                                                        class="fs-5 text-gray-800 text-hover-primary fw-bold">Yellow
                                                        Hearts</a>
                                                    <span class="text-gray-400 fw-semibold fs-7 my-1">Study highway
                                                        types</span>
                                                    <span class="text-gray-400 fw-semibold fs-7">By:
                                                        <a href="#" class="text-primary fw-bold">KeenThemes</a></span>
                                                </div>
                                                <div class="text-end py-lg-0 py-2">
                                                    <span class="text-gray-800 fw-bolder fs-3">70,380</span>
                                                    <span class="text-gray-400 fs-7 fw-semibold d-block">Sales</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-7">
                                            <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                                                <img src="{{ asset('/application-dashboard/assets/media/stock/600x400/img-5.jpg')}}"
                                                    class="mw-100" alt="" />
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                                    <a href="#"
                                                        class="fs-5 text-gray-800 text-hover-primary fw-bold">Nike &
                                                        Blue</a>
                                                    <span class="text-gray-400 fw-semibold fs-7 my-1">Study highway
                                                        types</span>
                                                    <span class="text-gray-400 fw-semibold fs-7">By:
                                                        <a href="#" class="text-primary fw-bold">Invision
                                                            Inc.</a></span>
                                                </div>
                                                <div class="text-end py-lg-0 py-2">
                                                    <span class="text-gray-800 fw-bolder fs-3">7,200</span>
                                                    <span class="text-gray-400 fs-7 fw-semibold d-block">Sales</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-7">
                                            <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                                                <img src="{{ asset('/application-dashboard/assets/media/stock/600x400/img-6.jpg')}}"
                                                    class="mw-100" alt="" />
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                                    <a href="#"
                                                        class="fs-5 text-gray-800 text-hover-primary fw-bold">Red
                                                        Boots</a>
                                                    <span class="text-gray-400 fw-semibold fs-7 my-1">Study highway
                                                        types</span>
                                                    <span class="text-gray-400 fw-semibold fs-7">By:
                                                        <a href="#" class="text-primary fw-bold">Figma Studio</a></span>
                                                </div>
                                                <div class="text-end py-lg-0 py-2">
                                                    <span class="text-gray-800 fw-bolder fs-3">36,450</span>
                                                    <span class="text-gray-400 fs-7 fw-semibold d-block">Sales</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="symbol symbol-60px symbol-2by3 flex-shrink-0 me-4">
                                                <img src="{{ asset('/application-dashboard/assets/media/stock/600x400/img-7.jpg')}}"
                                                    class="mw-100" alt="" />
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap flex-grow-1 mt-n2 mt-lg-n1">
                                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
                                                    <a href="#"
                                                        class="fs-5 text-gray-800 text-hover-primary fw-bold">Desserts
                                                        platter</a>
                                                    <span class="text-gray-400 fw-semibold fs-7 my-1">Food trends &
                                                        reviews</span>
                                                    <span class="text-gray-400 fw-semibold fs-7">By:
                                                        <a href="#" class="text-primary fw-bold">Figma Studio</a></span>
                                                </div>
                                                <div class="text-end py-lg-0 py-2">
                                                    <span class="text-gray-800 fw-bolder fs-3">64,753</span>
                                                    <span class="text-gray-400 fs-7 fw-semibold d-block">Sales</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::List Widget 9-->
                            </div>
                            <div class="col-xxl-8">
                                <!--begin::Tables Widget 9-->
                                <div class="card card-xxl-stretch mb-5 mb-xl-8">
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold fs-3 mb-1">Members Statistics</span>
                                            <span class="text-muted mt-1 fw-semibold fs-7">Over 500 members</span>
                                        </h3>
                                        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-trigger="hover" title="Click to add a user">
                                            <a href="#" class="btn btn-sm btn-light btn-active-primary"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                                <span class="svg-icon svg-icon-3">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                                            rx="1" transform="rotate(-90 11.364 20.364)"
                                                            fill="currentColor" />
                                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                New Member
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body py-3">
                                        <div class="table-responsive">
                                            <table
                                                class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                                <thead>
                                                    <tr class="fw-bold text-muted">
                                                        <th class="w-25px">
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="1" data-kt-check="true"
                                                                    data-kt-check-target=".widget-9-check" />
                                                            </div>
                                                        </th>
                                                        <th class="min-w-200px">Authors</th>
                                                        <th class="min-w-150px">Company</th>
                                                        <th class="min-w-150px">Progress</th>
                                                        <th class="min-w-100px text-end">Actions</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-9-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-45px me-5">
                                                                    <img src="{{asset('application-dashboard/assets/media/avatars/300-14.jpg')}}"
                                                                        alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="#"
                                                                        class="text-dark fw-bold text-hover-primary fs-6">Ana
                                                                        Simmons</a>
                                                                    <span
                                                                        class="text-muted fw-semibold text-muted d-block fs-7">HTML,
                                                                        JS, ReactJS</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bold text-hover-primary d-block fs-6">Intertico</a>
                                                            <span
                                                                class="text-muted fw-semibold text-muted d-block fs-7">Web,
                                                                UI/UX Design</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span
                                                                        class="text-muted me-2 fs-7 fw-bold">50%</span>
                                                                </div>
                                                                <div class="progress h-6px w-100">
                                                                    <div class="progress-bar bg-primary"
                                                                        role="progressbar" style="width: 50%"
                                                                        aria-valuenow="50" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end flex-shrink-0">
                                                                <a href="#"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3"
                                                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                fill="currentColor" />
                                                                            <path
                                                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.5"
                                                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.5"
                                                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-9-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-45px me-5">
                                                                    <img src="{{asset('application-dashboard/assets/media/avatars/300-2.jpg')}}"
                                                                        alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="#"
                                                                        class="text-dark fw-bold text-hover-primary fs-6">Jessie
                                                                        Clarcson</a>
                                                                    <span
                                                                        class="text-muted fw-semibold text-muted d-block fs-7">C#,
                                                                        ASP.NET, MS SQL</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bold text-hover-primary d-block fs-6">Agoda</a>
                                                            <span
                                                                class="text-muted fw-semibold text-muted d-block fs-7">Houses
                                                                & Hotels</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span
                                                                        class="text-muted me-2 fs-7 fw-bold">70%</span>
                                                                </div>
                                                                <div class="progress h-6px w-100">
                                                                    <div class="progress-bar bg-danger"
                                                                        role="progressbar" style="width: 70%"
                                                                        aria-valuenow="70" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end flex-shrink-0">
                                                                <a href="#"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3"
                                                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                fill="currentColor" />
                                                                            <path
                                                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.5"
                                                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.5"
                                                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-9-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-45px me-5">
                                                                    <img src="{{asset('application-dashboard/assets/media/avatars/300-5.jpg')}}"
                                                                        alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="#"
                                                                        class="text-dark fw-bold text-hover-primary fs-6">Lebron
                                                                        Wayde</a>
                                                                    <span
                                                                        class="text-muted fw-semibold text-muted d-block fs-7">PHP,
                                                                        Laravel, VueJS</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bold text-hover-primary d-block fs-6">RoadGee</a>
                                                            <span
                                                                class="text-muted fw-semibold text-muted d-block fs-7">Transportation</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span
                                                                        class="text-muted me-2 fs-7 fw-bold">60%</span>
                                                                </div>
                                                                <div class="progress h-6px w-100">
                                                                    <div class="progress-bar bg-success"
                                                                        role="progressbar" style="width: 60%"
                                                                        aria-valuenow="60" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end flex-shrink-0">
                                                                <a href="#"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3"
                                                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                fill="currentColor" />
                                                                            <path
                                                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.5"
                                                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.5"
                                                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-9-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-45px me-5">
                                                                    <img src="{{asset('application-dashboard/assets/media/avatars/300-20.jpg')}}"
                                                                        alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="#"
                                                                        class="text-dark fw-bold text-hover-primary fs-6">Natali
                                                                        Goodwin</a>
                                                                    <span
                                                                        class="text-muted fw-semibold text-muted d-block fs-7">Python,
                                                                        PostgreSQL, ReactJS</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bold text-hover-primary d-block fs-6">The
                                                                Hill</a>
                                                            <span
                                                                class="text-muted fw-semibold text-muted d-block fs-7">Insurance</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span
                                                                        class="text-muted me-2 fs-7 fw-bold">50%</span>
                                                                </div>
                                                                <div class="progress h-6px w-100">
                                                                    <div class="progress-bar bg-warning"
                                                                        role="progressbar" style="width: 50%"
                                                                        aria-valuenow="50" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end flex-shrink-0">
                                                                <a href="#"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3"
                                                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                fill="currentColor" />
                                                                            <path
                                                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.5"
                                                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.5"
                                                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input widget-9-check"
                                                                    type="checkbox" value="1" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-45px me-5">
                                                                    <img src="{{asset('application-dashboard/assets/media/avatars/300-23.jpg')}}"
                                                                        alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="#"
                                                                        class="text-dark fw-bold text-hover-primary fs-6">Kevin
                                                                        Leonard</a>
                                                                    <span
                                                                        class="text-muted fw-semibold text-muted d-block fs-7">HTML,
                                                                        JS, ReactJS</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                                class="text-dark fw-bold text-hover-primary d-block fs-6">RoadGee</a>
                                                            <span
                                                                class="text-muted fw-semibold text-muted d-block fs-7">Art
                                                                Director</span>
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="d-flex flex-column w-100 me-2">
                                                                <div class="d-flex flex-stack mb-2">
                                                                    <span
                                                                        class="text-muted me-2 fs-7 fw-bold">90%</span>
                                                                </div>
                                                                <div class="progress h-6px w-100">
                                                                    <div class="progress-bar bg-info" role="progressbar"
                                                                        style="width: 90%" aria-valuenow="90"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-end flex-shrink-0">
                                                                <a href="#"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3"
                                                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                                fill="currentColor" />
                                                                            <path
                                                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.5"
                                                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.5"
                                                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table container-->
                                    </div>
                                </div>
                                <!--end::Tables Widget 9-->
                            </div>
                        </div>
                        <div class="row g-5 g-xl-8">
                            <div class="col-xl-4">
                                <!--begin::List Widget 4-->
                                <div class="card card-xl-stretch mb-xl-8">
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-dark">Trends</span>
                                            <span class="text-muted mt-1 fw-semibold fs-7">Latest tech trends</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5" rx="1"
                                                                fill="currentColor" />
                                                            <rect x="14" y="5" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                            <rect x="5" y="14" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                            <rect x="14" y="14" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                data-kt-menu="true">
                                                <div class="menu-item px-3">
                                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                        Payments</div>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Create Invoice</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Specify a target name for future usage and reference"></i></a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Generate Bill</a>
                                                </div>
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-end">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Subscription</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Plans</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Billing</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Statements</a>
                                                        </div>
                                                        <!--begin::Menu separator-->
                                                        <div class="separator my-2"></div>
                                                        <!--end::Menu separator-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3">
                                                                <!--begin::Switch-->
                                                                <label
                                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                                    <input class="form-check-input w-30px h-20px"
                                                                        type="checkbox" value="1" checked="checked"
                                                                        name="notifications" />
                                                                    <span
                                                                        class="form-check-label text-muted fs-6">Recuring</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-item px-3 my-1">
                                                    <a href="#" class="menu-link px-3">Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-5">
                                        <div class="d-flex align-items-sm-center mb-7">
                                            <div class="symbol symbol-50px me-5">
                                                <span class="symbol-label">
                                                    <img src="{{asset('application-dashboard/assets/media/svg/brand-logos/plurk.svg')}}"
                                                        class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fs-6 fw-bold">Top
                                                        Authors</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Mark, Rowling,
                                                        Esther</span>
                                                </div>
                                                <span class="badge badge-light fw-bold my-2">+82$</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-sm-center mb-7">
                                            <div class="symbol symbol-50px me-5">
                                                <span class="symbol-label">
                                                    <img src="{{asset('application-dashboard/assets/media/svg/brand-logos/telegram.svg')}}"
                                                        class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fs-6 fw-bold">Popular
                                                        Authors</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Randy, Steve,
                                                        Mike</span>
                                                </div>
                                                <span class="badge badge-light fw-bold my-2">+280$</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-sm-center mb-7">
                                            <div class="symbol symbol-50px me-5">
                                                <span class="symbol-label">
                                                    <img src="{{asset('application-dashboard/assets/media/svg/brand-logos/vimeo.svg')}}"
                                                        class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fs-6 fw-bold">New
                                                        Users</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">John, Pat,
                                                        Jimmy</span>
                                                </div>
                                                <span class="badge badge-light fw-bold my-2">+4500$</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-sm-center mb-7">
                                            <div class="symbol symbol-50px me-5">
                                                <span class="symbol-label">
                                                    <img src="{{asset('application-dashboard/assets/media/svg/brand-logos/bebo.svg')}}"
                                                        class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fs-6 fw-bold">Active
                                                        Customers</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Mark, Rowling,
                                                        Esther</span>
                                                </div>
                                                <span class="badge badge-light fw-bold my-2">+686$</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-sm-center mb-7">
                                            <div class="symbol symbol-50px me-5">
                                                <span class="symbol-label">
                                                    <img src="{{asset('application-dashboard/assets/media/svg/brand-logos/kickstarter.svg')}}"
                                                        class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fs-6 fw-bold">Bestseller
                                                        Theme</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Disco, Retro,
                                                        Sports</span>
                                                </div>
                                                <span class="badge badge-light fw-bold my-2">+726$</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-sm-center">
                                            <div class="symbol symbol-50px me-5">
                                                <span class="symbol-label">
                                                    <img src="{{asset('application-dashboard/assets/media/svg/brand-logos/fox-hub.svg')}}"
                                                        class="h-50 align-self-center" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                <div class="flex-grow-1 me-2">
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fs-6 fw-bold">Fox Broker
                                                        App</a>
                                                    <span class="text-muted fw-semibold d-block fs-7">Finance,
                                                        Corporate, Apps</span>
                                                </div>
                                                <span class="badge badge-light fw-bold my-2">+145$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::List Widget 4-->
                            </div>
                            <div class="col-xl-4">
                                <!--begin::List Widget 5-->
                                <div class="card card-xl-stretch mb-xl-8">
                                    <div class="card-header align-items-center border-0 mt-4">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="fw-bold mb-2 text-dark">Activities</span>
                                            <span class="text-muted fw-semibold fs-7">890,344 Sales</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5" rx="1"
                                                                fill="currentColor" />
                                                            <rect x="14" y="5" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                            <rect x="5" y="14" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                            <rect x="14" y="14" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                                data-kt-menu="true" id="kt_menu_62fe76270636a">
                                                <div class="px-7 py-5">
                                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                                </div>
                                                <!--begin::Menu separator-->
                                                <div class="separator border-gray-200"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Form-->
                                                <div class="px-7 py-5">
                                                    <div class="mb-10">
                                                        <label class="form-label fw-semibold">Status:</label>
                                                        <div>
                                                            <select class="form-select form-select-solid"
                                                                data-kt-select2="true" data-placeholder="Select option"
                                                                data-dropdown-parent="#kt_menu_62fe76270636a"
                                                                data-allow-clear="true">
                                                                <option></option>
                                                                <option value="1">Approved</option>
                                                                <option value="2">Pending</option>
                                                                <option value="2">In Process</option>
                                                                <option value="2">Rejected</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mb-10">
                                                        <label class="form-label fw-semibold">Member Type:</label>
                                                        <!--begin::Options-->
                                                        <div class="d-flex">
                                                            <!--begin::Options-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="1" />
                                                                <span class="form-check-label">Author</span>
                                                            </label>
                                                            <!--end::Options-->
                                                            <!--begin::Options-->
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="2" checked="checked" />
                                                                <span class="form-check-label">Customer</span>
                                                            </label>
                                                            <!--end::Options-->
                                                        </div>
                                                        <!--end::Options-->
                                                    </div>
                                                    <div class="mb-10">
                                                        <label class="form-label fw-semibold">Notifications:</label>
                                                        <!--begin::Switch-->
                                                        <div
                                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                name="notifications" checked="checked" />
                                                            <label class="form-check-label">Enabled</label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset"
                                                            class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                            data-kt-menu-dismiss="true">Reset</button>
                                                        <button type="submit" class="btn btn-sm btn-primary"
                                                            data-kt-menu-dismiss="true">Apply</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Menu 1-->
                                        </div>
                                    </div>
                                    <div class="card-body pt-5">
                                        <!--begin::Timeline-->
                                        <div class="timeline-label">
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
                                                <!--begin::Badge-->
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-warning fs-1"></i>
                                                </div>
                                                <!--end::Badge-->
                                                <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep
                                                    you honest. And keep structure</div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
                                                <!--begin::Badge-->
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-success fs-1"></i>
                                                </div>
                                                <!--end::Badge-->
                                                <!--begin::Content-->
                                                <div class="timeline-content d-flex">
                                                    <span class="fw-bold text-gray-800 ps-3">AEOL meeting</span>
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
                                                <!--begin::Badge-->
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-danger fs-1"></i>
                                                </div>
                                                <!--end::Badge-->
                                                <div class="timeline-content fw-bold text-gray-800 ps-3">Make deposit
                                                    <a href="#" class="text-primary">USD 700</a>. to ESL
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                                                <!--begin::Badge-->
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-primary fs-1"></i>
                                                </div>
                                                <!--end::Badge-->
                                                <div class="timeline-content fw-mormal text-muted ps-3">Indulging in
                                                    poorly driving and keep structure keep great</div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
                                                <!--begin::Badge-->
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-danger fs-1"></i>
                                                </div>
                                                <!--end::Badge-->
                                                <div class="timeline-content fw-semibold text-gray-800 ps-3">New order
                                                    placed
                                                    <a href="#" class="text-primary">#XF-2356</a>.
                                                </div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                                                <!--begin::Badge-->
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-primary fs-1"></i>
                                                </div>
                                                <!--end::Badge-->
                                                <div class="timeline-content fw-mormal text-muted ps-3">Indulging in
                                                    poorly driving and keep structure keep great</div>
                                            </div>
                                            <div class="timeline-item">
                                                <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
                                                <!--begin::Badge-->
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-danger fs-1"></i>
                                                </div>
                                                <!--end::Badge-->
                                                <div class="timeline-content fw-semibold text-gray-800 ps-3">New order
                                                    placed
                                                    <a href="#" class="text-primary">#XF-2356</a>.
                                                </div>
                                            </div>
                                            <div class="timeline-item mb-9">
                                                <div class="timeline-label fw-bold text-gray-800 fs-6">10:30</div>
                                                <!--begin::Badge-->
                                                <div class="timeline-badge">
                                                    <i class="fa fa-genderless text-success fs-1"></i>
                                                </div>
                                                <!--end::Badge-->
                                                <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI
                                                    Mobile app launch preparion meeting</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <!--begin::List Widget 3-->
                                <div class="card card-xl-stretch mb-5 mb-xl-8">
                                    <div class="card-header border-0">
                                        <h3 class="card-title fw-bold text-dark">Todo</h3>
                                        <div class="card-toolbar">
                                            <button type="button"
                                                class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5" rx="1"
                                                                fill="currentColor" />
                                                            <rect x="14" y="5" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                            <rect x="5" y="14" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                            <rect x="14" y="14" width="5" height="5" rx="1"
                                                                fill="currentColor" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                data-kt-menu="true">
                                                <div class="menu-item px-3">
                                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                        Payments</div>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Create Invoice</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip"
                                                            title="Specify a target name for future usage and reference"></i></a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Generate Bill</a>
                                                </div>
                                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                    data-kt-menu-placement="right-end">
                                                    <a href="#" class="menu-link px-3">
                                                        <span class="menu-title">Subscription</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <!--begin::Menu sub-->
                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Plans</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Billing</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Statements</a>
                                                        </div>
                                                        <!--begin::Menu separator-->
                                                        <div class="separator my-2"></div>
                                                        <!--end::Menu separator-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3">
                                                                <!--begin::Switch-->
                                                                <label
                                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                                    <input class="form-check-input w-30px h-20px"
                                                                        type="checkbox" value="1" checked="checked"
                                                                        name="notifications" />
                                                                    <span
                                                                        class="form-check-label text-muted fs-6">Recuring</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu-item px-3 my-1">
                                                    <a href="#" class="menu-link px-3">Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-2">
                                        <div class="d-flex align-items-center mb-8">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-vertical h-40px bg-success"></span>
                                            <!--end::Bullet-->
                                            <div class="form-check form-check-custom form-check-solid mx-5">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold fs-6">Create
                                                    FireStone Logo</a>
                                                <span class="text-muted fw-semibold d-block">Due in 2 Days</span>
                                            </div>
                                            <span class="badge badge-light-success fs-8 fw-bold">New</span>
                                        </div>
                                        <!--end:Item-->
                                        <div class="d-flex align-items-center mb-8">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                            <!--end::Bullet-->
                                            <div class="form-check form-check-custom form-check-solid mx-5">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Stakeholder
                                                    Meeting</a>
                                                <span class="text-muted fw-semibold d-block">Due in 3 Days</span>
                                            </div>
                                            <span class="badge badge-light-primary fs-8 fw-bold">New</span>
                                        </div>
                                        <!--end:Item-->
                                        <div class="d-flex align-items-center mb-8">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-vertical h-40px bg-warning"></span>
                                            <!--end::Bullet-->
                                            <div class="form-check form-check-custom form-check-solid mx-5">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Scoping &
                                                    Estimations</a>
                                                <span class="text-muted fw-semibold d-block">Due in 5 Days</span>
                                            </div>
                                            <span class="badge badge-light-warning fs-8 fw-bold">New</span>
                                        </div>
                                        <!--end:Item-->
                                        <div class="d-flex align-items-center mb-8">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                            <!--end::Bullet-->
                                            <div class="form-check form-check-custom form-check-solid mx-5">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold fs-6">KPI
                                                    App Showcase</a>
                                                <span class="text-muted fw-semibold d-block">Due in 2 Days</span>
                                            </div>
                                            <span class="badge badge-light-primary fs-8 fw-bold">New</span>
                                        </div>
                                        <!--end:Item-->
                                        <div class="d-flex align-items-center mb-8">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-vertical h-40px bg-danger"></span>
                                            <!--end::Bullet-->
                                            <div class="form-check form-check-custom form-check-solid mx-5">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Project
                                                    Meeting</a>
                                                <span class="text-muted fw-semibold d-block">Due in 12 Days</span>
                                            </div>
                                            <span class="badge badge-light-danger fs-8 fw-bold">New</span>
                                        </div>
                                        <!--end:Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-vertical h-40px bg-success"></span>
                                            <!--end::Bullet-->
                                            <div class="form-check form-check-custom form-check-solid mx-5">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fw-bold fs-6">Customers
                                                    Update</a>
                                                <span class="text-muted fw-semibold d-block">Due in 1 week</span>
                                            </div>
                                            <span class="badge badge-light-success fs-8 fw-bold">New</span>
                                        </div>
                                        <!--end:Item-->
                                    </div>
                                </div>
                                <!--end:List Widget 3-->
                            </div>
                        </div>
                        <div class="g-5 gx-xxl-8">
                            <!--begin::Tables Widget 10-->
                            <div class="card">
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold fs-3 mb-1">New Products</span>
                                        <span class="text-muted mt-1 fw-semibold fs-7">Over 500 new products</span>
                                    </h3>
                                    <div class="card-toolbar">
                                        <button type="button"
                                            class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                    viewBox="0 0 24 24">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                                            fill="currentColor" />
                                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                                            fill="currentColor" opacity="0.3" />
                                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                                            fill="currentColor" opacity="0.3" />
                                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                                            fill="currentColor" opacity="0.3" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions
                                                </div>
                                            </div>
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-3">
                                    <div class="table-responsive">
                                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                            <thead>
                                                <tr class="border-0">
                                                    <th class="p-0"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-200px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-100px text-end"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-45px me-5">
                                                                <img alt="Pic"
                                                                    src="{{asset('application-dashboard/assets/media/avatars/300-6.jpg')}}" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Emma
                                                                    Smith</a>
                                                                <a href="#"
                                                                    class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                                                    <span class="text-dark">Email</span>:
                                                                    smith@kpmg.com</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$560,000</a>
                                                        <span
                                                            class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                                    </td>
                                                    <td class="text-muted fw-semibold text-end">Laravel, Metronic</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-success">Approved</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.3"
                                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-45px me-5">
                                                                <span
                                                                    class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Melody
                                                                    Macy</a>
                                                                <a href="#"
                                                                    class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                                                    <span class="text-dark">Email</span>:
                                                                    melody@altbox.com</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$2,000,000</a>
                                                        <span
                                                            class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                                    </td>
                                                    <td class="text-muted fw-semibold text-end">ReactJs, HTML</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-warning">In Progress</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.3"
                                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-45px me-5">
                                                                <img alt="Pic"
                                                                    src="{{asset('application-dashboard/assets/media/avatars/300-1.jpg')}}" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Max
                                                                    Smith</a>
                                                                <a href="#"
                                                                    class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                                                    <span class="text-dark">Email</span>: max@kt.com</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$760,000</a>
                                                        <span
                                                            class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                                    </td>
                                                    <td class="text-muted fw-semibold text-end">Python, MySQL</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-danger">Success</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.3"
                                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-45px me-5">
                                                                <img alt="Pic"
                                                                    src="{{asset('application-dashboard/assets/media/avatars/300-5.jpg')}}" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Sean
                                                                    Bean</a>
                                                                <a href="#"
                                                                    class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                                                    <span class="text-dark">Email</span>:
                                                                    sean@dellito.com</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$257,000</a>
                                                        <span
                                                            class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                                    </td>
                                                    <td class="text-muted fw-semibold text-end">ReactJS, Ruby</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-info">Rejected</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.3"
                                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-45px me-5">
                                                                <img alt="Pic"
                                                                    src="{{asset('application-dashboard/assets/media/avatars/300-25.jpg')}}" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brian
                                                                    Cox</a>
                                                                <a href="#"
                                                                    class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                                                    <span class="text-dark">Email</span>:
                                                                    brian@exchange.com</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$560,000</a>
                                                        <span
                                                            class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                                    </td>
                                                    <td class="text-muted fw-semibold text-end">AngularJS, C#</td>
                                                    <td class="text-end">
                                                        <span class="badge badge-light-primary">In Progress</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.3"
                                                                        d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3"
                                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                        fill="currentColor" />
                                                                    <path
                                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.5"
                                                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                            </div>
                            <!--end::Tables Widget 10-->
                        </div>
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <x-backend.footer />
                <!--end::Footer-->
            </div>
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Drawers-->
    <!--begin::Activities drawer-->
    <div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
        <div class="card shadow-none border-0 rounded-0">
            <div class="card-header" id="kt_activities_header">
                <h3 class="card-title fw-bold text-dark">Activity Logs</h3>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                        id="kt_activities_close">
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="currentColor" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
            <div class="card-body position-relative" id="kt_activities_body">
                <!--begin::Content-->
                <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body"
                    data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
                    data-kt-scroll-offset="5px">
                    <!--begin::Timeline items-->
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-line w-40px"></div>
                            <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                <div class="symbol-label bg-light">
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z"
                                                fill="currentColor" />
                                            <path
                                                d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content mb-10 mt-n1">
                                <div class="pe-3 mb-5">
                                    <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile
                                        App” project:</div>
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="{{asset('application-dashboard/assets/media/avatars/300-14.jpg')}}"
                                                alt="img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-auto pb-5">
                                    <!--begin::Record-->
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                        <a href="../../demo6/dist/apps/projects/project.html"
                                            class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting
                                            with customer</a>
                                        <div class="min-w-175px pe-2">
                                            <span class="badge badge-light text-muted">Application Design</span>
                                        </div>
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="{{asset('application-dashboard/assets/media/avatars/300-2.jpg')}}"
                                                    alt="img" />
                                            </div>
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="{{asset('application-dashboard/assets/media/avatars/300-14.jpg')}}"
                                                    alt="img" />
                                            </div>
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div
                                                    class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">
                                                    A</div>
                                            </div>
                                        </div>
                                        <!--begin::Progress-->
                                        <div class="min-w-125px pe-2">
                                            <span class="badge badge-light-primary">In Progress</span>
                                        </div>
                                        <a href="../../demo6/dist/apps/projects/project.html"
                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                    </div>
                                    <!--begin::Record-->
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                        <a href="../../demo6/dist/apps/projects/project.html"
                                            class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project
                                            Delivery Preparation</a>
                                        <div class="min-w-175px">
                                            <span class="badge badge-light text-muted">CRM System Development</span>
                                        </div>
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="{{asset('application-dashboard/assets/media/avatars/300-20.jpg')}}"
                                                    alt="img" />
                                            </div>
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div
                                                    class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">
                                                    B</div>
                                            </div>
                                        </div>
                                        <div class="min-w-125px">
                                            <span class="badge badge-light-success">Completed</span>
                                        </div>
                                        <a href="../../demo6/dist/apps/projects/project.html"
                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-line w-40px"></div>
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z"
                                                fill="currentColor" />
                                            <path
                                                d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content mb-10 mt-n2">
                                <div class="overflow-auto pe-3">
                                    <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that
                                        speak human workshop</div>
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                            <img src="{{asset('application-dashboard/assets/media/avatars/300-1.jpg')}}"
                                                alt="img" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-line w-40px"></div>
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content mb-10 mt-n1">
                                <div class="mb-5 pe-3">
                                    <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New
                                        Incoming Project Files:</a>
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                            <img src="{{asset('application-dashboard/assets/media/avatars/300-23.jpg')}}"
                                                alt="img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-auto pb-5">
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <img alt="" class="w-30px me-3"
                                                src="{{asset('application-dashboard/assets/media/svg/files/pdf.svg')}}" />
                                            <div class="ms-1 fw-semibold">
                                                <a href="../../demo6/dist/apps/projects/project.html"
                                                    class="fs-6 text-hover-primary fw-bold">Finance KPI App
                                                    Guidelines</a>
                                                <div class="text-gray-400">1.9mb</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <img alt="../../demo6/dist/apps/projects/project.html" class="w-30px me-3"
                                                src="{{asset('application-dashboard/assets/media/svg/files/doc.svg')}}" />
                                            <div class="ms-1 fw-semibold">
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing
                                                    Results</a>
                                                <div class="text-gray-400">18kb</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-aligns-center">
                                            <img alt="../../demo6/dist/apps/projects/project.html" class="w-30px me-3"
                                                src="{{asset('application-dashboard/assets/media/svg/files/css.svg')}}" />
                                            <div class="ms-1 fw-semibold">
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                <div class="text-gray-400">20mb</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-line w-40px"></div>
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                fill="currentColor" />
                                            <path
                                                d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content mb-10 mt-n1">
                                <div class="pe-3 mb-5">
                                    <div class="fs-5 fw-semibold mb-2">Task
                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin
                                        Dashboard project:
                                    </div>
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="{{asset('application-dashboard/assets/media/avatars/300-14.jpg')}}"
                                                alt="img" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-line w-40px"></div>
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                fill="currentColor" />
                                            <path
                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content mb-10 mt-n1">
                                <div class="pe-3 mb-5">
                                    <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                            <img src="{{asset('application-dashboard/assets/media/avatars/300-2.jpg')}}"
                                                alt="img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-auto pb-5">
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" /
                                                    src="{{ asset('application-dashboard/assets/media/stock/600x400/img-29.jpg')}}" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" /
                                                    src="{{ asset('application-dashboard/assets/media/stock/600x400/img-31.jpg')}}" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <div class="overlay">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" /
                                                    src="{{ asset('application-dashboard/assets/media/stock/600x400/img-40.jpg')}}" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-line w-40px"></div>
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content mb-10 mt-n1">
                                <div class="pe-3 mb-5">
                                    <div class="fs-5 fw-semibold mb-2">New case
                                        <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in
                                        Multi-platform Database Design project
                                    </div>
                                    <div class="overflow-auto pb-5">
                                        <div class="d-flex align-items-center mt-1 fs-6">
                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                            <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-line w-40px"></div>
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                fill="currentColor" />
                                            <path
                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content mb-10 mt-n1">
                                <div class="pe-3 mb-5">
                                    <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                            <img src="{{asset('application-dashboard/assets/media/avatars/300-4.jpg')}}"
                                                alt="img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow-auto pb-5">
                                    <!--begin::Notice-->
                                    <div
                                        class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <!--begin::Content-->
                                            <div class="mb-3 mb-md-0 fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!
                                                </h4>
                                                <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make
                                                    sure the data integrity is OK</div>
                                            </div>
                                            <!--end::Content-->
                                            <a href="#"
                                                class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
                                        </div>
                                    </div>
                                    <!--end::Notice-->
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-line w-40px"></div>
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="timeline-content mt-n1">
                                <div class="pe-3 mb-5">
                                    <div class="fs-5 fw-semibold mb-2">New order
                                        <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow
                                        Planning & Budget Estimation
                                    </div>
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                        <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Timeline items-->
                </div>
                <!--end::Content-->
            </div>
            <!--begin::Footer-->
            <div class="card-footer py-5 text-center" id="kt_activities_footer">
                <a href="../../demo6/dist/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View
                    All Activities
                    on svg-icon-3 svg-icon-primary">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)"
                            fill="currentColor" />
                        <path
                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                            fill="currentColor" />
                    </svg>
                    </span>
                </a>
            </div>
            <!--end::Footer-->
        </div>
    </div>
    <!--end::Activities drawer-->
    <!--begin::Chat drawer-->
    <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
        <!--begin::Messenger-->
        <div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
            <!--begin::Card header-->
            <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                <div class="card-title">
                    <div class="d-flex justify-content-center flex-column me-3">
                        <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
                        <div class="mb-0 lh-1">
                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                            <span class="fs-7 fw-semibold text-muted">Active</span>
                        </div>
                    </div>
                </div>
                <div class="card-toolbar">
                    <div class="me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="bi bi-three-dots fs-3"></i>
                        </button>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                            data-kt-menu="true">
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_users_search">Add Contact</a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_invite_friends">Invite Contacts
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        title="Specify a contact email to send an invitation"></i></a>
                            </div>
                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-start">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Groups</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="Coming soon">Create Group</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="Coming soon">Invite Members</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="Coming soon">Settings</a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                    title="Coming soon">Settings</a>
                            </div>
                        </div>
                    </div>
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                        <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body" id="kt_drawer_chat_messenger_body">
                <!--begin::Messages-->
                <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                    data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                    data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                    data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                    <div class="d-flex justify-content-start mb-10">
                        <div class="d-flex flex-column align-items-start">
                            <div class="d-flex align-items-center mb-2">
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                        src="{{asset('application-dashboard/assets/media/avatars/300-25.jpg')}}" />
                                </div>
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">2 mins</span>
                                </div>
                            </div>
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">How likely are you to recommend our company to your
                                friends and family ?</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-10">
                        <div class="d-flex flex-column align-items-end">
                            <div class="d-flex align-items-center mb-2">
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">5 mins</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                        src="{{asset('application-dashboard/assets/media/avatars/300-1.jpg')}}" />
                                </div>
                            </div>
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve
                                been subscribed to a repository on GitHub.</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-10">
                        <div class="d-flex flex-column align-items-start">
                            <div class="d-flex align-items-center mb-2">
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                        src="{{asset('application-dashboard/assets/media/avatars/300-25.jpg')}}" />
                                </div>
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                                </div>
                            </div>
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">Ok, Understood!</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-10">
                        <div class="d-flex flex-column align-items-end">
                            <div class="d-flex align-items-center mb-2">
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                        src="{{asset('application-dashboard/assets/media/avatars/300-1.jpg')}}" />
                                </div>
                            </div>
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">You’ll receive notifications for all issues, pull
                                requests!</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-10">
                        <div class="d-flex flex-column align-items-start">
                            <div class="d-flex align-items-center mb-2">
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                        src="{{asset('application-dashboard/assets/media/avatars/300-25.jpg')}}" />
                                </div>
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                                </div>
                            </div>
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">You can unwatch this repository immediately by clicking
                                here:
                                <a href="https://keenthemes.com">Keenthemes.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-10">
                        <div class="d-flex flex-column align-items-end">
                            <div class="d-flex align-items-center mb-2">
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                        src="{{asset('application-dashboard/assets/media/avatars/300-1.jpg')}}" />
                                </div>
                            </div>
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">Most purchased Business courses during this sale!</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-10">
                        <div class="d-flex flex-column align-items-start">
                            <div class="d-flex align-items-center mb-2">
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                        src="{{asset('application-dashboard/assets/media/avatars/300-25.jpg')}}" />
                                </div>
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                                </div>
                            </div>
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and
                                goals. Food and drinks provided</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                        <div class="d-flex flex-column align-items-end">
                            <div class="d-flex align-items-center mb-2">
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                        src="{{asset('application-dashboard/assets/media/avatars/300-1.jpg')}}" />
                                </div>
                            </div>
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text"></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                        <div class="d-flex flex-column align-items-start">
                            <div class="d-flex align-items-center mb-2">
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic"
                                        src="{{asset('application-dashboard/assets/media/avatars/300-25.jpg')}}" />
                                </div>
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                </div>
                            </div>
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">Right before vacation season we have the next Big Deal
                                for you.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                    placeholder="Type a message"></textarea>
                <div class="d-flex flex-stack">
                    <div class="d-flex align-items-center me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                            <i class="bi bi-paperclip fs-3"></i>
                        </button>
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                            <i class="bi bi-upload fs-3"></i>
                        </button>
                    </div>
                    <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                </div>
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>

    <!--begin::Help drawer-->

    <!--end::Help drawer-->
    <!--end::Engage drawers-->
    <!--begin::Engage toolbar-->

    <!--end::Engage toolbar-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                    fill="currentColor" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="currentColor" />
            </svg>
        </span>

    </div>
    <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content rounded">
                <div class="modal-header justify-content-end border-0 pb-0">
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
                <!--end::Modal header-->
                <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Upgrade a Plan</h1>
                        <div class="text-muted fw-semibold fs-5">If you need more info, please check
                            <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
                        </div>
                    </div>
                    <!--begin::Plans-->
                    <div class="d-flex flex-column">
                        <!--begin::Nav group-->
                        <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                            <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"
                                data-kt-plan="month">Monthly</button>
                            <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
                                data-kt-plan="annual">Annual</button>
                        </div>
                        <!--end::Nav group-->
                        <div class="row mt-10">
                            <div class="col-lg-6 mb-10 mb-lg-0">
                                <!--begin::Tabs-->
                                <div class="nav flex-column">
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    checked="checked" value="startup" />
                                            </div>
                                            <!--end::Radio-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup
                                                </div>
                                                <div class="fw-semibold opacity-75">Best for startups</div>
                                            </div>
                                        </div>
                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="39"
                                                data-kt-plan-price-annual="399">39</span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span></span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="advanced" />
                                            </div>
                                            <!--end::Radio-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced
                                                </div>
                                                <div class="fw-semibold opacity-75">Best for 100+ team size</div>
                                            </div>
                                        </div>
                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="339"
                                                data-kt-plan-price-annual="3399">339</span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span></span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="enterprise" />
                                            </div>
                                            <!--end::Radio-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
                                                    <span
                                                        class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
                                                </div>
                                                <div class="fw-semibold opacity-75">Best value for 1000+ team</div>
                                            </div>
                                        </div>
                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="999"
                                                data-kt-plan-price-annual="9999">999</span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span></span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="custom" />
                                            </div>
                                            <!--end::Radio-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom
                                                </div>
                                                <div class="fw-semibold opacity-75">Requet a custom license</div>
                                            </div>
                                        </div>
                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <a href="#" class="btn btn-sm btn-success">Contact Us</a>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                </div>
                                <!--end::Tabs-->
                            </div>
                            <div class="col-lg-6">
                                <div class="tab-content rounded h-100 bg-light p-10">
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
                                            <div class="text-muted fw-semibold">Optimal for 10+ team size and new
                                                startup</div>
                                        </div>
                                        <div class="pt-1">
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
                                                    Users</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30
                                                    Project Integrations</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
                                                    Module</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Finance
                                                    Module</span>
                                                <span class="svg-icon svg-icon-1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <rect x="7" y="15.3137" width="12" height="2" rx="1"
                                                            transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                        <rect x="8.41422" y="7" width="12" height="2" rx="1"
                                                            transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting
                                                    Module</span>
                                                <span class="svg-icon svg-icon-1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <rect x="7" y="15.3137" width="12" height="2" rx="1"
                                                            transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                        <rect x="8.41422" y="7" width="12" height="2" rx="1"
                                                            transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Network
                                                    Platform</span>
                                                <span class="svg-icon svg-icon-1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <rect x="7" y="15.3137" width="12" height="2" rx="1"
                                                            transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                        <rect x="8.41422" y="7" width="12" height="2" rx="1"
                                                            transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud
                                                    Space</span>
                                                <span class="svg-icon svg-icon-1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <rect x="7" y="15.3137" width="12" height="2" rx="1"
                                                            transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                        <rect x="8.41422" y="7" width="12" height="2" rx="1"
                                                            transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
                                            <div class="text-muted fw-semibold">Optimal for 100+ team size and grown
                                                company</div>
                                        </div>
                                        <div class="pt-1">
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
                                                    Users</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30
                                                    Project Integrations</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
                                                    Module</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
                                                    Module</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
                                                    Module</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Network
                                                    Platform</span>
                                                <span class="svg-icon svg-icon-1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <rect x="7" y="15.3137" width="12" height="2" rx="1"
                                                            transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                        <rect x="8.41422" y="7" width="12" height="2" rx="1"
                                                            transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud
                                                    Space</span>
                                                <span class="svg-icon svg-icon-1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <rect x="7" y="15.3137" width="12" height="2" rx="1"
                                                            transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                        <rect x="8.41422" y="7" width="12" height="2" rx="1"
                                                            transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
                                            <div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
                                                    Users</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30
                                                    Project Integrations</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
                                                    Module</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
                                                    Module</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
                                                    Module</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network
                                                    Platform</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud
                                                    Space</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade" id="kt_upgrade_plan_custom">
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
                                            <div class="text-muted fw-semibold">Optimal for corporations</div>
                                        </div>
                                        <div class="pt-1">
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
                                                    Users</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
                                                    Project Integrations</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
                                                    Module</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
                                                    Module</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
                                                    Module</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network
                                                    Platform</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud
                                                    Space</span>
                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Tab Pane-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-center flex-row-fluid pt-12">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Upgrade Plan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="kt_modal_create_campaign" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen p-9">
            <div class="modal-content modal-rounded">
                <div class="modal-header py-7 d-flex justify-content-between">
                    <h2>Create Campaign</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body scroll-y m-5">
                    <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">
                        <div class="stepper-nav justify-content-center py-2">
                            <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Campaign Details</h3>
                            </div> me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Creative Uploads</h3>
                        </div>
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Audiences</h3>
                        </div>
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Budget Estimates</h3>
                        </div>
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Completed</h3>
                        </div>
                    </div>
                    <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate"
                        id="kt_modal_create_campaign_stepper_form">
                        <div class="current" data-kt-stepper-element="content">
                            <div class="w-100">
                                <div class="pb-10 pb-lg-15">
                                    <h2 class="fw-bold d-flex align-items-center text-dark">Setup Campaign Details
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Campaign name will be used as reference within your campaign reports"></i>
                                    </h2>
                                    <div class="text-muted fw-semibold fs-6">If you need more info, please check out
                                        <a href="#" class="link-primary fw-bold">Help Page</a>.
                                    </div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label mb-3">Campaign Name</label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                        name="campaign_name" placeholder="" value="" />
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="d-block fw-semibold fs-6 mb-5">
                                        <span class="required">Company Logo</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="E.g. Select a logo to represent the company that's running the campaign."></i>
                                    </label>
                                    <style>
                                        .image-input-placeholder {
                                            background-image: url('application-dashboard/assets/media/svg/files/blank-image.svg');
                                        }

                                        [data-theme="dark"] .image-input-placeholder {
                                            background-image: url('application-dashboard/assets/media/svg/files/blank-image-dark.svg');
                                        }
                                    </style>
                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder"
                                        data-kt-image-input="true">
                                        <div class="image-input-wrapper w-125px h-125px"></div>
                                        <label
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                            title="Change avatar">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <input type="file" name="avatar" accept=".png, .jpg')}}, .jpeg" />
                                            <input type="hidden" name="avatar_remove" />
                                        </label>
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                            title="Cancel avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                            title="Remove avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                    </div>
                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                </div>
                                <div class="mb-10">
                                    <label class="required fw-semibold fs-6 mb-5">Campaign Goal</label>
                                    <div class="d-flex fv-row">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="0"
                                                id="kt_modal_update_role_option_0" checked='checked' />
                                            <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                <div class="fw-bold text-gray-800">Get more visitors</div>
                                                <div class="text-gray-600">Increase impression traffic onto the
                                                    platform</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex fv-row">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="1"
                                                id="kt_modal_update_role_option_1" />
                                            <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                <div class="fw-bold text-gray-800">Get more messages on chat</div>
                                                <div class="text-gray-600">Increase community interaction and
                                                    communication</div>
                                            </label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex fv-row">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="2"
                                                id="kt_modal_update_role_option_2" />
                                            <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                <div class="fw-bold text-gray-800">Get more calls</div>
                                                <div class="text-gray-600">Boost telecommunication feedback to
                                                    provide precise and accurate information</div>
                                            </label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex fv-row">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="3"
                                                id="kt_modal_update_role_option_3" />
                                            <label class="form-check-label" for="kt_modal_update_role_option_3">
                                                <div class="fw-bold text-gray-800">Get more likes</div>
                                                <div class="text-gray-600">Increase positive interactivity on social
                                                    media platforms</div>
                                            </label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex fv-row">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="4"
                                                id="kt_modal_update_role_option_4" />
                                            <label class="form-check-label" for="kt_modal_update_role_option_4">
                                                <div class="fw-bold text-gray-800">Lead generation</div>
                                                <div class="text-gray-600">Collect contact information for potential
                                                    customers</div>
                                            </label>
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <!--end::Roles-->
                                </div>
                            </div>
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div data-kt-stepper-element="content">
                            <div class="w-100">
                                <div class="pb-10 pb-lg-12">
                                    <h1 class="fw-bold text-dark">Upload Files</h1>
                                    <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                        <a href="#" class="link-primary">Campaign Guidelines</a>
                                    </div>
                                </div>
                                <div class="fv-row mb-10">
                                    <!--begin::Dropzone-->
                                    <div class="dropzone" id="kt_modal_create_campaign_files_upload">
                                        <!--begin::Message-->
                                        <div class="dz-message needsclick">
                                            <span class="svg-icon svg-icon-3hx svg-icon-primary">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z"
                                                        fill="currentColor" />
                                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <div class="ms-4">
                                                <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop campaign files
                                                    here or click to upload.</h3>
                                                <span class="fw-semibold fs-4 text-muted">Upload up to 10
                                                    files</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Dropzone-->
                                </div>
                                <div class="mb-10">
                                    <label class="fs-6 fw-semibold mb-2">Uploaded File</label>
                                    <!--begin::Files-->
                                    <div class="mh-300px scroll-y me-n7 pe-7">
                                        <!--begin::File-->
                                        <div
                                            class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-35px">
                                                    <img src="{{asset('application-dashboard/assets/media/svg/files/pdf.svg')}}"
                                                        alt="icon" />
                                                </div>
                                                <div class="ms-6">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Product
                                                        Specifications</a>
                                                    <div class="fw-semibold text-muted">230kb</div>
                                                </div>
                                            </div>
                                            <div class="min-w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Edit">
                                                    <option></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--begin::File-->
                                        <div
                                            class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-35px">
                                                    <img src="{{asset('application-dashboard/assets/media/svg/files/tif.svg')}}"
                                                        alt="icon" />
                                                </div>
                                                <div class="ms-6">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
                                                        Creative Poster</a>
                                                    <div class="fw-semibold text-muted">2.4mb</div>
                                                </div>
                                            </div>
                                            <div class="min-w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Edit">
                                                    <option></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--begin::File-->
                                        <div
                                            class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-35px">
                                                    <img src="{{asset('application-dashboard/assets/media/svg/files/folder-document.svg')}}"
                                                        alt="icon" />
                                                </div>
                                                <div class="ms-6">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
                                                        Landing Page Source</a>
                                                    <div class="fw-semibold text-muted">1.12mb</div>
                                                </div>
                                            </div>
                                            <div class="min-w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Edit">
                                                    <option></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--begin::File-->
                                        <div
                                            class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-35px">
                                                    <img src="{{asset('application-dashboard/assets/media/svg/files/css.svg')}}"
                                                        alt="icon" />
                                                </div>
                                                <div class="ms-6">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Landing
                                                        Page Styling</a>
                                                    <div class="fw-semibold text-muted">85kb</div>
                                                </div>
                                            </div>
                                            <div class="min-w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Edit">
                                                    <option></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--begin::File-->
                                        <div
                                            class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-35px">
                                                    <img src="{{asset('application-dashboard/assets/media/svg/files/ai.svg')}}"
                                                        alt="icon" />
                                                </div>
                                                <div class="ms-6">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design
                                                        Source Files</a>
                                                    <div class="fw-semibold text-muted">48mb</div>
                                                </div>
                                            </div>
                                            <div class="min-w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Edit">
                                                    <option></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--begin::File-->
                                        <div class="d-flex flex-stack py-4">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-35px">
                                                    <img src="{{asset('application-dashboard/assets/media/svg/files/doc.svg')}}"
                                                        alt="icon" />
                                                </div>
                                                <div class="ms-6">
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
                                                        Plan Document</a>
                                                    <div class="fw-semibold text-muted">27kb</div>
                                                </div>
                                            </div>
                                            <div class="min-w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Edit">
                                                    <option></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div data-kt-stepper-element="content">
                            <div class="w-100">
                                <div class="pb-10 pb-lg-12">
                                    <h1 class="fw-bold text-dark">Configure Audiences</h1>
                                    <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                        <a href="#" class="link-primary">Campaign Guidelines</a>
                                    </div>
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="fs-6 fw-semibold mb-2">Gender
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Show your ads to either men or women, or select 'All' for both"></i></label>
                                    <div class="row g-9" data-kt-buttons="true"
                                        data-kt-buttons-target="[data-kt-button='true']">
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
                                                data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span
                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="campaign_gender"
                                                        value="1" checked="checked" />
                                                </span>
                                                <!--end::Radio-->
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bold text-gray-800 d-block">All</span>
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span
                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="campaign_gender"
                                                        value="2" />
                                                </span>
                                                <!--end::Radio-->
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bold text-gray-800 d-block">Male</span>
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span
                                                    class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="campaign_gender"
                                                        value="3" />
                                                </span>
                                                <!--end::Radio-->
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bold text-gray-800 d-block">Female</span>
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                    </div>
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="fs-6 fw-semibold mb-2">Age
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Select the minimum and maximum age of the people who will find your ad relevant."></i></label>
                                    <!--begin::Slider-->
                                    <div class="d-flex flex-stack">
                                        <div id="kt_modal_create_campaign_age_min" class="fs-7 fw-semibold text-muted">
                                        </div>
                                        <div id="kt_modal_create_campaign_age_slider" class="noUi-sm w-100 ms-5 me-8">
                                        </div>
                                        <div id="kt_modal_create_campaign_age_max" class="fs-7 fw-semibold text-muted">
                                        </div>
                                    </div>
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="fs-6 fw-semibold mb-2">Location
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Enter one or more location points for more specific targeting."></i></label>
                                    <!--begin::Tagify-->
                                    <input class="form-control d-flex align-items-center" value=""
                                        id="kt_modal_create_campaign_location"
                                        data-kt-flags-path="assets/media/flags/" />
                                    <!--end::Tagify-->
                                </div>
                            </div>
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Step 4-->
                        <div data-kt-stepper-element="content">
                            <div class="w-100">
                                <div class="pb-10 pb-lg-12">
                                    <h1 class="fw-bold text-dark">Budget Estimates</h1>
                                    <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                        <a href="#" class="link-primary">Campaign Guidelines</a>
                                    </div>
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="fs-6 fw-semibold mb-2">Campaign Duration
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Choose how long you want your ad to run for"></i></label>
                                    <!--begin::Duration option-->
                                    <div class="d-flex gap-9 mb-7">
                                        <!--begin::Button-->
                                        <button type="button"
                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary active"
                                            id="kt_modal_create_campaign_duration_all">Continuous duration
                                            <br />
                                            <span class="fs-7">Your ad will run continuously for a daily
                                                budget.</span></button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="button"
                                            class="btn btn-outline btn-outline-dashed btn-active-light-primary btn-outline-default"
                                            id="kt_modal_create_campaign_duration_fixed">Fixed duration
                                            <br />
                                            <span class="fs-7">Your ad will run on the specified dates
                                                only.</span></button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Duration option-->
                                    <!--begin::Datepicker-->
                                    <input class="form-control form-control-solid d-none" placeholder="Pick date & time"
                                        id="kt_modal_create_campaign_datepicker" />
                                    <!--end::Datepicker-->
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="fs-6 fw-semibold mb-2">Daily Budget
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Choose the budget allocated for each day. Higher budget will generate better results"></i></label>
                                    <!--begin::Slider-->
                                    <div class="d-flex flex-column text-center">
                                        <div class="d-flex align-items-start justify-content-center mb-7">
                                            <span class="fw-bold fs-4 mt-1 me-2">$</span>
                                            <span class="fw-bold fs-3x"
                                                id="kt_modal_create_campaign_budget_label"></span>
                                            <span class="fw-bold fs-3x">.00</span>
                                        </div>
                                        <div id="kt_modal_create_campaign_budget_slider" class="noUi-sm"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-kt-stepper-element="content">
                            <div class="w-100">
                                <div class="pb-12 text-center">
                                    <h1 class="fw-bold text-dark">Campaign Created!</h1>
                                    <div class="fw-semibold text-muted fs-4">You will receive an email with with the
                                        summary of your newly created campaign!</div>
                                </div>
                                <div class="d-flex flex-center pb-20">
                                    <button id="kt_modal_create_campaign_create_new" type="button"
                                        class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create
                                        New Campaign</button>
                                    <a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip"
                                        title="Coming Soon">View Campaign</a>
                                </div>
                                <!--begin::Illustration-->
                                <div class="text-center px-4">
                                    <img src="{{asset('application-dashboard/assets/media/illustrations/sketchy-1/9.png')}}"
                                        alt="" class="mww-100 mh-350px" />
                                </div>
                            </div>
                        </div>
                        <!--end::Step 5-->
                        <div class="d-flex flex-stack pt-10">
                            <div class="me-2">
                                <button type="button" class="btn btn-lg btn-light-primary me-3"
                                    data-kt-stepper-action="previous">
                                    on svg-icon-3 me-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1"
                                            fill="currentColor" />
                                        <path
                                            d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                            fill="currentColor" />
                                    </svg>
                                    </span>
                                    Back
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                    <span class="indicator-label">Submit
                                        <span class="svg-icon svg-icon-3 ms-2 me-0">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                    transform="rotate(-180 18 13)" fill="currentColor" />
                                                <path
                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <button type="button" class="btn btn-lg btn-primary"
                                    data-kt-stepper-action="next">Continue
                                    on svg-icon-3 ms-1 me-0">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                            transform="rotate(-180 18 13)" fill="currentColor" />
                                        <path
                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                            fill="currentColor" />
                                    </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end::Stepper-->
            </div>
        </div>
    </div>
    </div>
    <!--end::Modal - Create Campaign-->
    <!--begin::Modal - Invite Friends-->
    <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-650px">
            <div class="modal-content">
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <div class="text-center mb-13">
                        <h1 class="mb-3">Invite a Friend</h1>
                        <div class="text-muted fw-semibold fs-5">If you need more info, please check out
                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                        </div>
                    </div>
                    <!--begin::Google Contacts Invite-->
                    <div class="btn btn-light-primary fw-bold w-100 mb-8">
                        <img alt="Logo"
                            src="{{asset('application-dashboard/assets/media/svg/brand-logos/google-icon.svg')}}"
                            class="h-20px me-3" />Invite
                        Gmail Contacts
                    </div>
                    <!--end::Google Contacts Invite-->
                    <div class="separator d-flex flex-center mb-8">
                        <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                    </div>
                    <!--begin::Textarea-->
                    <textarea class="form-control form-control-solid mb-8" rows="3"
                        placeholder="Type or paste emails here"></textarea>
                    <!--end::Textarea-->
                    <div class="mb-10">
                        <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                        <!--begin::List-->
                        <div class="mh-300px scroll-y me-n7 pe-7">
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic"
                                            src="{{asset('application-dashboard/assets/media/avatars/300-6.jpg')}}" />
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                            Smith</a>
                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                    </div>
                                </div>
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                            Macy</a>
                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    </div>
                                </div>
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                        <option value="1" selected="selected">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic"
                                            src="{{asset('application-dashboard/assets/media/avatars/300-1.jpg')}}" />
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                            Smith</a>
                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                    </div>
                                </div>
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">Can Edit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic"
                                            src="{{asset('application-dashboard/assets/media/avatars/300-5.jpg')}}" />
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                            Bean</a>
                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                    </div>
                                </div>
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic"
                                            src="{{asset('application-dashboard/assets/media/avatars/300-25.jpg')}}" />
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                            Cox</a>
                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                    </div>
                                </div>
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">Can Edit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                            Collins</a>
                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                    </div>
                                </div>
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic"
                                            src="{{asset('application-dashboard/assets/media/avatars/300-9.jpg')}}" />
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                            Mitcham</a>
                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    </div>
                                </div>
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">Can Edit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                            Wild</a>
                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                    </div>
                                </div>
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                            Owen</a>
                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                    </div>
                                </div>
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                        <option value="1" selected="selected">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic"
                                            src="{{asset('application-dashboard/assets/media/avatars/300-23.jpg')}}" />
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                            Wilson</a>
                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    </div>
                                </div>
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">Can Edit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                            Bold</a>
                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                    </div>
                                </div>
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic"
                                            src="{{asset('application-dashboard/assets/media/avatars/300-12.jpg')}}" />
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                            Crown</a>
                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                    </div>
                                </div>
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                        <option value="1" selected="selected">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                            Doe</a>
                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                    </div>
                                </div>
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">Can Edit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic"
                                            src="{{asset('application-dashboard/assets/media/avatars/300-13.jpg')}}" />
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                            Miller</a>
                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                    </div>
                                </div>
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">Can Edit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                            Kunic</a>
                                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                    </div>
                                </div>
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic"
                                            src="{{asset('application-dashboard/assets/media/avatars/300-21.jpg')}}" />
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                            Wilder</a>
                                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                    </div>
                                </div>
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                        <option value="1" selected="selected">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic"
                                            src="{{asset('application-dashboard/assets/media/avatars/300-5.jpg')}}" />
                                    </div>
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                            Bean</a>
                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                    </div>
                                </div>
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">Can Edit</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--end::List-->
                    </div>
                    <!--begin::Notice-->
                    <div class="d-flex flex-stack">
                        <div class="me-5 fw-semibold">
                            <label class="fs-6">Adding Users by Team Members</label>
                            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                            <span class="form-check-label fw-semibold text-muted">Allowed</span>
                        </label>
                    </div>
                    <!--end::Notice-->
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal - Invite Friend-->
    <!--begin::Modal - Users Search-->
    <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Content-->
                    <div class="text-center mb-13">
                        <h1 class="mb-3">Search Users</h1>
                        <div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
                    </div>
                    <!--end::Content-->
                    <!--begin::Search-->
                    <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2"
                        data-kt-search-enter="enter" data-kt-search-layout="inline">
                        <!--begin::Form-->
                        <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                            <input type="hidden" />
                            <!--end::Hidden input-->
                            class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5
                            translate-middle-y">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                    transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="currentColor" />
                            </svg>
                            </span>
                            <input type="text" class="form-control form-control-lg form-control-solid px-15"
                                name="search" value="" placeholder="Search by username, full name or email..."
                                data-kt-search-element="input" />
                            <!--begin::Spinner-->
                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                data-kt-search-element="spinner">
                                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                            </span>
                            <!--end::Spinner-->
                            <!--begin::Reset-->
                            <span
                                class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                data-kt-search-element="clear">
                                <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                            transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                            transform="rotate(45 7.41422 6)" fill="currentColor" />
                                    </svg>
                                </span>
                            </span>
                        </form>
                        <div class="py-5">
                            <div data-kt-search-element="suggestions">
                                <h3 class="fw-semibold mb-5">Recently searched:</h3>
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic"
                                                src="{{asset('application-dashboard/assets/media/avatars/300-6.jpg')}}" />
                                        </div>
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                            <span class="badge badge-light">Art Director</span>
                                        </div>
                                    </a>
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                        </div>
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                            <span class="badge badge-light">Marketing Analytic</span>
                                        </div>
                                    </a>
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic"
                                                src="{{asset('application-dashboard/assets/media/avatars/300-1.jpg')}}" />
                                        </div>
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                            <span class="badge badge-light">Software Enginer</span>
                                        </div>
                                    </a>
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic"
                                                src="{{asset('application-dashboard/assets/media/avatars/300-5.jpg')}}" />
                                        </div>
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                            <span class="badge badge-light">Web Developer</span>
                                        </div>
                                    </a>
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic"
                                                src="{{asset('application-dashboard/assets/media/avatars/300-25.jpg')}}" />
                                        </div>
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                            <span class="badge badge-light">UI/UX Designer</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div data-kt-search-element="results" class="d-none">
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                    value="0" />
                                            </label>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic"
                                                    src="{{asset('application-dashboard/assets/media/avatars/300-6.jpg')}}" />
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                    Smith</a>
                                                <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                            </div>
                                        </div>
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                    value="1" />
                                            </label>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                                    Macy</a>
                                                <div class="fw-semibold text-muted">melody@altbox.com</div>
                                            </div>
                                        </div>
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                    value="2" />
                                            </label>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic"
                                                    src="{{asset('application-dashboard/assets/media/avatars/300-1.jpg')}}" />
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                    Smith</a>
                                                <div class="fw-semibold text-muted">max@kt.com</div>
                                            </div>
                                        </div>
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                    value="3" />
                                            </label>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic"
                                                    src="{{asset('application-dashboard/assets/media/avatars/300-5.jpg')}}" />
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                                    Bean</a>
                                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                                            </div>
                                        </div>
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                    value="4" />
                                            </label>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic"
                                                    src="{{asset('application-dashboard/assets/media/avatars/300-25.jpg')}}" />
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                                    Cox</a>
                                                <div class="fw-semibold text-muted">brian@exchange.com</div>
                                            </div>
                                        </div>
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                    value="5" />
                                            </label>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                    Collins</a>
                                                <div class="fw-semibold text-muted">mik@pex.com</div>
                                            </div>
                                        </div>
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                    value="6" />
                                            </label>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic"
                                                    src="{{asset('application-dashboard/assets/media/avatars/300-9.jpg')}}" />
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                                    Mitcham</a>
                                                <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                            </div>
                                        </div>
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                    value="7" />
                                            </label>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                                    Wild</a>
                                                <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                            </div>
                                        </div>
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                    value="8" />
                                            </label>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                    Owen</a>
                                                <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                            </div>
                                        </div>
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                    value="9" />
                                            </label>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic"
                                                    src="{{asset('application-dashboard/assets/media/avatars/300-23.jpg')}}" />
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                                    Wilson</a>
                                                <div class="fw-semibold text-muted">dam@consilting.com</div>
                                            </div>
                                        </div>
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='10']"
                                                    value="10" />
                                            </label>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                    Bold</a>
                                                <div class="fw-semibold text-muted">emma@intenso.com</div>
                                            </div>
                                        </div>
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='11']"
                                                    value="11" />
                                            </label>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic"
                                                    src="{{asset('application-dashboard/assets/media/avatars/300-12.jpg')}}" />
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                                    Crown</a>
                                                <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                            </div>
                                        </div>
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='12']"
                                                    value="12" />
                                            </label>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                                    Doe</a>
                                                <div class="fw-semibold text-muted">robert@benko.com</div>
                                            </div>
                                        </div>
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='13']"
                                                    value="13" />
                                            </label>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic"
                                                    src="{{asset('application-dashboard/assets/media/avatars/300-13.jpg')}}" />
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                                    Miller</a>
                                                <div class="fw-semibold text-muted">miller@mapple.com</div>
                                            </div>
                                        </div>
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='14']"
                                                    value="14" />
                                            </label>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                    Kunic</a>
                                                <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                            </div>
                                        </div>
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='15']"
                                                    value="15" />
                                            </label>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic"
                                                    src="{{asset('application-dashboard/assets/media/avatars/300-21.jpg')}}" />
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                                    Wilder</a>
                                                <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                            </div>
                                        </div>
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                        <div class="d-flex align-items-center">
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='16']"
                                                    value="16" />
                                            </label>
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                            </div>
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                    Owen</a>
                                                <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                            </div>
                                        </div>
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected">Can Edit</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-center mt-15">
                                    <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
                                        class="btn btn-active-light me-3">Cancel</button>
                                    <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add
                                        Selected Users</button>
                                </div>
                            </div>
                            <div data-kt-search-element="empty" class="text-center d-none">
                                <div class="fw-semibold py-10">
                                    <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                    <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                                </div>
                                <div class="text-center px-5">
                                    <img src="{{asset('application-dashboard/assets/media/illustrations/sketchy-1/1.png')}}"
                                        alt="" class="w-100 h-200px h-sm-325px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var hostUrl = "/application-dashboard/assets/";
    </script>
    <script src="{{ asset('application-dashboard/assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{ asset('application-dashboard/assets/js/scripts.bundle.js')}}"></script>
    <script src="{{ asset('application-dashboard/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}">
    </script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{asset('application-dashboard/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="{{ asset('application-dashboard/assets/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('application-dashboard/assets/js/custom/widgets.js')}}"></script>
    <script src="{{ asset('application-dashboard/assets/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{ asset('application-dashboard/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
    <script src="{{ asset('application-dashboard/assets/js/custom/utilities/modals/create-campaign.js')}}"></script>
    <script src="{{ asset('application-dashboard/assets/js/custom/utilities/modals/users-search.js')}}"></script>
</body>

</html>