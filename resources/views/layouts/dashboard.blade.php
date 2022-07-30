<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', env('APP_NAME')) {{ env('APP_DESC') }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/brand/favi-color.svg') }}" />
    <link rel="stylesheet" href="../assets/css/core/libs.min.css" />
    <link rel="stylesheet" href="../assets/vendor/aos/dist/aos.css" />
    <link rel="stylesheet" href="../assets/css/hope-ui.min.css?v=1.2.0" />
    <link rel="stylesheet" href="../assets/css/custom.min.css?v=1.2.0" />
    <link rel="stylesheet" href="../assets/css/dark.min.css" />
    <link rel="stylesheet" href="../assets/css/rtl.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
</head>

<body class="  ">
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <aside class="sidebar sidebar-default navs-pill-all sidebar-white sidebar-boxed">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="{{ route('employee.dashboard.index') }}" class="navbar-brand">
                <img src="{{ asset('assets/brand/favi-color.svg') }}" alt="">
                <h4 class="logo-title">{{ env('APP_NAME') }}</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="sidebar-list">
                <x-nav />
            </div>
        </div>
        <div class="sidebar-footer"></div>
    </aside>
    <main class="main-content">
        <div class="position-relative iq-banner">
            <!--Nav Start-->
            <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
                <div class="container-fluid navbar-inner">
                    <a href="../dashboard/index.html" class="navbar-brand">
                        <img src="{{ asset('assets/brand/Logo-color.svg') }}" alt="">
                    </a>
                    <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                        <i class="icon">
                            <svg width="20px" height="20px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                            </svg>
                        </i>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <span class="mt-2 navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                            <li class="nav-item me-3">
                                <div class="input-group search-input">
                                    <span class="input-group-text" id="search-input">
                                        <svg width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                                            <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    <input type="search" class="form-control" placeholder="Search...">
                                </div>
                            </li>
                            <li class="nav-item border border-primary rounded px-2 me-3">
                                <a href="#" class="nav-link" id="notification-drop" data-bs-toggle="dropdown">
                                    <i class="bi bi-arrow-clockwise text-primary fs-4"></i>
                                    <span class="bg-danger dots"></span>
                                </a>
                            </li>
                            <li class="nav-item bg-primary rounded px-2  me-3">
                                <a href="#" class="nav-link text-white" id="notification-drop" data-bs-toggle="dropdown">
                                    <i class="bi bi-download fs-4"></i>
                                    <span class="bg-danger dots"></span>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/brand/profile.svg') }}" alt="User-Profile" class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                                    <div class="caption ms-3 d-none d-md-block ">
                                        <h6 class="mb-0 caption-title">Austin Robertson</h6>
                                        <p class="mb-0 caption-sub-title">Marketing Administrator</p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Profile</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Privacy Setting</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid my-4">
                @yield('content')
            </div>
        </div>
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div class="row">
            </div>
        </div>
        <!-- Footer Section Start -->
        <footer class="footer">
            <div class="footer-body">
                <ul class="left-panel list-inline mb-0 p-0">
                    <li class="list-inline-item"><a href="#">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item"><a href="#">Terms of Use</a>
                    </li>
                </ul>
                <div class="right-panel">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script> {{ env('APP_NAME') }} . All Rights Reserved</a>.
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->
    </main>
    <!-- Library Bundle Script -->
    <script src="../assets/js/core/libs.min.js"></script>

    <!-- External Library Bundle Script -->
    <script src="../assets/js/core/external.min.js"></script>

    <!-- Widgetchart Script -->
    <script src="../assets/js/charts/widgetcharts.js"></script>

    <!-- mapchart Script -->
    <script src="../assets/js/charts/vectore-chart.js"></script>
    <script src="../assets/js/charts/dashboard.js"></script>

    <!-- fslightbox Script -->
    <script src="../assets/js/plugins/fslightbox.js"></script>

    <!-- Settings Script -->
    <script src="../assets/js/plugins/setting.js"></script>

    <!-- Slider-tab Script -->
    <script src="../assets/js/plugins/slider-tabs.js"></script>

    <!-- Form Wizard Script -->
    <script src="../assets/js/plugins/form-wizard.js"></script>

    <!-- AOS Animation Plugin-->
    <script src="../assets/vendor/aos/dist/aos.js"></script>

    <!-- App Script -->
    <script src="../assets/js/hope-ui.js" defer></script>
</body>

</html>