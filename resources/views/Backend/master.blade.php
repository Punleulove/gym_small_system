<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('site-title')</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />
    <link rel="stylesheet"
        href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}" />
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin />

    <link
        href="{{ url('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap') }}"
        rel="stylesheet" />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ url('backends/vendor/fonts/boxicons.css') }}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('backends/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ url('backends/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ url('backends/css/demo.css') }}" />

    {{-- Select2 --}}
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css') }}">

    {{-- Jquery --}}
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js') }}">
    </script>
    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js') }}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ url('backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <script src="{{ url('backends/vendor/js/helpers.js') }}"></script>
    <script src="{{ url('backends/js/config.js') }}"></script>
    <script src="{{ url('https://code.jquery.com/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js') }}"></script>
    <script src="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <a href="{{ url('../pay/gym.jpg') }}"></a>
                        </span>
                        <span class="text-uppercase fs-3 demo menu-text fw-bolder ms-2">To Gym</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item">
                        <a href="/" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/search" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-search"></i>
                            <div data-i18n="Analytics">Search</div>
                        </a>
                    </li>

                    <!-- Layouts -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon bi bi-person-fill-add"></i>
                            <div data-i18n="Layouts"> Membership</div>

                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="/viewmebership" class="menu-link">
                                    <div data-i18n="Without menu">View Members</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="/addmebership" class="menu-link">
                                    <div data-i18n="Without menu">Add Members</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">

                            <i class="menu-icon bi bi-receipt"></i>
                            <div data-i18n="Layouts"> Report</div>

                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="/rp_search" class="menu-link">
                                    <div data-i18n="Without menu">Report </div>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <!-- Layouts -->


                    <!-- Layouts -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-bolt-circle"></i>
                            <div data-i18n="Layouts">Products</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="/viewProducts" class="menu-link">
                                    <div data-i18n="Without menu">View Post</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="/addproduct" class="menu-link">
                                    <div data-i18n="Without menu">Add Post</div>
                                </a>
                            </li>
                        </ul>
                    </li>



                    <li class="menu-item">
                        <div class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="Analytics">User</div>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon bi bi-person-fill-add"></i>
                            <div data-i18n="Layouts"> Users</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="/viewusers" class="menu-link">
                                    <div data-i18n="Without menu">View Users</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="/register" class="menu-link">
                                    <div data-i18n="Without menu">Add User</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Layouts -->

                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <h4 class="page-main-title m-0 fw-bold">
                                @yield('page-main-title')
                            </h4>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ url('Images/' . auth()->user()->profile) }}"
                                                            width="50px" height="50px" alt
                                                            class=" rounded-circle" />
                                        {{-- <img src="../uploads/{{ Auth::User()->profile }}" alt class="w-px-40 h-auto rounded-circle" /> --}}
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ url('images/' . auth()->user()->profile) }}"
                                                            width="50px" height="50px" alt
                                                            class=" rounded-circle" />
                                                        {{-- <img src="../uploads/{{ Auth::User()->profile }}" alt class="w-px-40 h-auto rounded-circle" /> --}}
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span
                                                        class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/logout">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                @yield('content')

            </div>
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    {{-- <script src="{{url('backend/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{url('backend/vendor/libs/popper/popper.js')}}"></script> --}}
    <script src="{{ url('backends/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ url('backends/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ url('backends/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->


    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ url('backends/js/main.js') }}"></script>
    <script src="{{ url('backends/js/theme.js') }}"></script>

    {{-- select2 --}}
    <script src="{{ url('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ url('backends/js/form-basic-inputs.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="{{ url('https://buttons.github.io/buttons.js') }}"></script>
</body>

</html>
