<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="FitNexus is a modern, responsive fitness and gym admin dashboard template built with Bootstrap 5. Perfect for fitness apps, gym management, and health tracking.">
    <meta name="keywords"
        content="FitNexus, fitness admin template, gym dashboard, workout tracker, health app UI, bootstrap 5 admin, responsive admin template, gym management">
    <meta name="author" content="CodExperts">
    <title>Phần mềm chấm công | Thương Hiệu Việt</title>

    <!-- shortcut icon-->
    <link rel="icon" href="../assets/images/logo/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/logo/logo.png" type="image/x-icon">

    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slider/slick-slider/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slider/slick-slider/slick-theme.css') }}">

    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.css') }}">
    <!-- Tabler Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/tabler-icons.css') }}">
    <!-- Tabler Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap-icons.css') }}">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.css') }}">
    <!-- Scrollbar-->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/simplebar.css') }}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.css') }}">
    <!-- Custom css-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

    <!-- Loader Start-->
    <div class="codex-loader">
        <img src=../assets/images/loader.gif alt="" class="img-fluid">
    </div>
    <!-- Loader End-->
    <!-- Header Start-->
    <header class="codex-header">
        <div class="header-contian d-flex justify-content-between align-items-center">
            <div class="header-left d-flex align-items-center">
                <div class="codex-brand me-3">
                    <div class="sidebar-action navicon-wrap d-xl-none me-3">
                        <i class="ti ti-layout-grid"></i>
                    </div>
                    <a class="d-flex align-items-center" href="index.html">
                        <img class="img-fluid" src="../assets/images/logo/logo.png" alt="theeme-logo">
                        <span class="fs-3 align-middle ms-2">FitNexus</span>
                    </a>
                </div>
                <div class="sidebar-action navicon-wrap d-xl-none me-3">
                    <i class="ti ti-layout-grid"></i>
                </div>
                <div class="input-group">
                    <span class="input-group-text pe-0">
                        <i class="ti ti-search"></i>
                    </span>
                    <input type="text" placeholder="Search Here" class="form-control">
                </div>
            </div>
            <div class="header-right d-flex align-items-center justify-content-end">
                <ul class="nav-iconlist">
                    <li>
                        <div class="navicon-wrap action-dark">
                            <i class="ti ti-moon icon-dark"></i>
                        </div>
                    </li>
                    <li class="action-menu dropdown">
                        <div class="navicon-wrap notiicon-iconwrap" data-bs-toggle="dropdown">
                            <i class="ti ti-bell-ringing"></i>
                            <div class="noti-count"></div>
                        </div>
                        <div class="navnotification-drop action-dropdown dropdown-menu">
                            <div class="drop-header">
                                <h5>notification<span class="float-end">05</span>
                                </h5>
                            </div>
                            <div data-simplebar>
                                <ul>
                                    <li>
                                        <a href="#!">
                                            <div class="d-flex align-items-center">
                                                <div class="icon-nav">
                                                    <img src="../assets/images/navnotification1.png" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="media-body">
                                                    <h6>Full Body Yoga</h6>
                                                    <span class="badge badge-success">08:30</span>
                                                </div>
                                            </div>
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <div class="d-flex align-items-center">
                                                <div class="icon-nav">
                                                    <img src="../assets/images/navnotification2.png" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="media-body">
                                                    <h6>Functional Workout</h6>
                                                    <span class="badge badge-success">08:30</span>
                                                </div>
                                            </div>
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <div class="d-flex align-items-center">
                                                <div class="icon-nav">
                                                    <img src="../assets/images/navnotification3.png" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="media-body">
                                                    <h6>Lower Body Express</h6>
                                                    <span class="badge badge-success">08:30</span>
                                                </div>
                                            </div>
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <div class="d-flex align-items-center">
                                                <div class="icon-nav">
                                                    <img src="../assets/images/navnotification4.png" alt=""
                                                        class="img-fluid">
                                                </div>
                                                <div class="media-body">
                                                    <h6>Glutes & Abs</h6>
                                                    <span class="badge badge-success">08:30</span>
                                                </div>
                                            </div>
                                            <i class="ti ti-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="drop-footer">
                                <a href="javascript:void(0)">See All Notification</a>
                            </div>
                        </div>
                    </li>
                    <li class="action-menu dropdown">
                        <div class="navicon-wrap" data-bs-target="#customizer" data-bs-toggle="offcanvas">
                            <i class="ti ti-settings"></i>
                        </div>
                    </li>
                    <li class="nav-profile action-menu dropdown">
                        <div class="user-icon action-toggle" data-bs-toggle="dropdown">
                            <img class="img-fluid" src="../assets/images/avtar/profile.png" alt="User Logo">
                        </div>
                        <div class="navprofile-drop action-dropdown dropdown-menu">
                            <ul>
                                <li>
                                    <div class="media-body">
                                        <img class="img-fluid rounded-circle" src="../assets/images/avtar/profile.png"
                                            alt="logo">
                                        <h6 class="mt-2 fw-bold">Hello Thomas</h6>
                                    </div>
                                </li>
                                <li>
                                    <a href="profile.html">
                                        <i class="me-2 align-middle ti ti-settings"></i>
                                        setting
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="me-2 align-middle ti ti-logout"></i>
                                        log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- Header End-->

    <!-- sidebar start -->
    <aside class="codex-sidebar">
        <div class="codex-brand">
            <a class="d-flex align-items-center" href="index.html">
                <img class="img-fluid" src="../assets/images/logo/logo.png" alt="theeme-logo">
                <span class="fs-3 align-middle ms-2 lh-1">FitNexus</span>
            </a>
            <div class="sidebar-action">
                <i class="ti ti-chevron-left"></i>
            </div>
        </div>
        <span class="menu-preve">
            <i class="ti ti-chevron-left"></i>
        </span>
        <div class="codex-menuwrapper custom-scroll" data-simplebar>
            <ul class="codex-menu">
                <li class="menu-item">
                    <a href="index.html">
                        <div class="icon-item">
                            <i class="ti ti-layout-dashboard"></i>
                        </div>
                        <span>Overview</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#!">
                        <div class="icon-item">
                            <i class="ti ti-barbell"></i>
                        </div>
                        <span>Workout</span>
                        <i class="fa fa-angle-right menu-dropwdown"></i>
                    </a>
                    <ul class="submenu-list">
                        <li>
                            <a href="workout-filter.html">Workout Filter</a>
                        </li>
                        <li>
                            <a href="workout-topfilter.html">Workout Top Filter</a>
                        </li>
                        <li>
                            <a href="upperbody-workout.html">Body workout</a>
                        </li>
                        <li>
                            <a href="create-workout.html">Create workout</a>
                        </li>
                        <li>
                            <a href="workout-summary.html">Workout Summary</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="#!">
                        <div class="icon-item">
                            <i class="ti ti-calendar"></i>
                        </div>
                        <span>Diet Plan</span>
                        <i class="fa fa-angle-right menu-dropwdown"></i>
                    </a>
                    <ul class="submenu-list">
                        <li>
                            <a href="dietplan.html">Diet Menu</a>
                        </li>
                        <li>
                            <a href="diet-detail.html">Diet Detail</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="goals.html">
                        <div class="icon-item">
                            <i class="ti ti-target-arrow"></i>
                        </div>
                        <span>Goals</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="schedule.html">
                        <div class="icon-item">
                            <i class="ti ti-calendar-event"></i>
                        </div>
                        <span>My Schedule</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="progress.html">
                        <div class="icon-item">
                            <i class="ti ti-chart-bar"></i>
                        </div>
                        <span>Progress</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="profile.html">
                        <div class="icon-item">
                            <i class="ti ti-layout-dashboard"></i>
                        </div>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#!">
                        <div class="icon-item">
                            <i class="ti ti-key"></i>
                        </div>
                        <span>Authentication</span>
                        <i class="fa fa-angle-right menu-dropwdown"></i>
                    </a>
                    <ul class="submenu-list">
                        <li>
                            <a href="login.html">Sign In</a>
                        </li>
                        <li>
                            <a href="register.html">Sign Up</a>
                        </li>
                        <li>
                            <a href="forgot-password.html">Forgot Password</a>
                        </li>
                        <li>
                            <a href="reset-password.html">Reset Password</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="onboding-step.html">
                        <div class="icon-item">
                            <i class="ti ti-stairs-down"></i>
                        </div>
                        <span>Step</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#!">
                        <div class="icon-item">
                            <i class="ti ti-notebook"></i>
                        </div>
                        <span>Form</span>
                        <i class="fa fa-angle-right menu-dropwdown"></i>
                    </a>
                    <ul class="submenu-list">
                        <li>
                            <a href="element-input.html">form element</a>
                        </li>
                        <li>
                            <a href="element-checkbox-radio.html">checkbox & radio</a>
                        </li>
                        <li>
                            <a href="element-datepicker.html">datepicker</a>
                        </li>
                        <li>
                            <a href="element-uidatepicker.html">ui datepicker</a>
                        </li>
                        <li>
                            <a href="element-datetimepicker.html">datetimepicker</a>
                        </li>
                        <li>
                            <a href="form.html">basic form</a>
                        </li>
                        <li>
                            <a href="form-validation.html">validation</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="#!">
                        <div class="icon-item">
                            <i class="ti ti-layout"></i>
                        </div>
                        <span>Advance element</span>
                        <i class="fa fa-angle-right menu-dropwdown"></i>
                    </a>
                    <ul class="submenu-list">
                        <li>
                            <a href="element-select2.html">select 2</a>
                        </li>
                        <li>
                            <a href="element-switch.html">switch</a>
                        </li>
                        <li>
                            <a href="element-dropzone.html">dropzone</a>
                        </li>
                        <li>
                            <a href="bootstrap-notify.html">bootstrap notify</a>
                        </li>
                        <li>
                            <a href="element-sweetalert2.html">sweetalert2</a>
                        </li>
                        <li>
                            <a href="element-scrollbar.html">scrollbar</a>
                        </li>
                        <li>
                            <a href="element-lightbox.html">light box</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="#!">
                        <div class="icon-item">
                            <i class="ti ti-table-import"></i>
                        </div>
                        <span>Bootstrap</span>
                        <i class="fa fa-angle-right menu-dropwdown"></i>
                    </a>
                    <ul class="submenu-list">
                        <li>
                            <a href="element-accordion.html">Accordion</a>
                        </li>
                        <li>
                            <a href="element-alert.html">Alert</a>
                        </li>
                        <li>
                            <a href="element-badge.html">badge</a>
                        </li>
                        <li>
                            <a href="element-breadcrumb.html">Breadcrumb</a>
                        </li>
                        <li>
                            <a href="element-button.html">Button</a>
                        </li>
                        <li>
                            <a href="element-card.html">card</a>
                        </li>
                        <li>
                            <a href="element-collapse.html">Collapse</a>
                        </li>
                        <li>
                            <a href="element-dropdown.html">Dropdown</a>
                        </li>
                        <li>
                            <a href="element-modal.html">modal</a>
                        </li>
                        <li>
                            <a href="element-tab.html">tabs</a>
                        </li>
                        <li>
                            <a href="element-pagination.html">pagination</a>
                        </li>
                        <li>
                            <a href="element-popover.html">popover</a>
                        </li>
                        <li>
                            <a href="element-progressbar.html">progress bar</a>
                        </li>
                        <li>
                            <a href="element-tooltip.html">tooltip</a>
                        </li>
                        <li>
                            <a href="element-typography.html">typography</a>
                        </li>
                        <li>
                            <a href="element-color.html">color</a>
                        </li>
                        <li>
                            <a href="element-themeclass.html">helper class</a>
                        </li>
                        <li>
                            <a href="element-avtar.html">Avtar</a>
                        </li>
                        <li>
                            <a href="element-grid.html">grid</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="#!">
                        <div class="icon-item">
                            <i class="ti ti-brand-slack"></i>
                        </div>
                        <span>Icons</span>
                        <i class="fa fa-angle-right menu-dropwdown"></i>
                    </a>
                    <ul class="submenu-list">
                        <li>
                            <a href="element-fontaw-icon.html">Font Awesome Icons</a>
                        </li>
                        <li>
                            <a href="element-feather-icon.html">Feather Icons</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <span class="menu-next">
            <i class="ti ti-chevron-right"></i>
        </span>
        <div class="sidebarpro-sec">
            <img class="img-fluid" src="../assets/images/pro-sec.png" alt="">
            <h6 class="mb-2 fw-bold text-black">Premium Membership</h6>
            <p>Monitor progress, set goals, and achieve results faster!</p>
            <a class="btn btn-primary btn-sm" href="#!">Upgrade</a>
        </div>
    </aside>
    <!-- sidebar end -->


    <main class="themebody-wrap">

        <div class="theme-body">
            @yield('content')
        </div>

    </main>


    <!-- Scroll To Top Start -->
    <div class="scroll-top">
        <i class="fa fa-angle-double-up"></i>
    </div>
    <!-- Scroll To Top End -->
    <!-- footer start-->
    <footer class="codex-footer">
        <p>Copyright 2025 © FitNexus All rights reserved.</p>
    </footer>
    <!-- footer end-->

    <!-- Latest Jquery-->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/modernizr.min.js') }}"></script>
    <!-- Theme Customizer-->
    <script src="{{ asset('assets/js/app-config.js') }}"></script>
    <script src="{{ asset('assets/js/customizer.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <!-- Scrollbar -->
    <script src="{{ asset('assets/js/vendors/simplebar.js') }}"></script>
    <!-- Feather icons js-->
    <script src="{{ asset('assets/js/icons/feather.js') }}"></script>
    <!-- Custom script-->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Slick Slider -->
    <script src="{{ asset('assets/js/vendors/slider/slick-sldier/slick.min.js') }}"></script>
    <!-- Apex Chart-->
    <script src="{{ asset('assets/js/vendors/chart/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/chart/echarts.min.js') }}"></script>

</body>

</html>