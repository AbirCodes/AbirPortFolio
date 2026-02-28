<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title ?? ($settings->brand_name ?? 'Website') }}</title>
    <link rel="icon" href="{{ asset('assets/images/icon.webp') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/coloring.css') }}" rel="stylesheet" type="text/css">
    <link id="colors" href="{{ asset('assets/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">
    <style>
        .wow {
            visibility: visible !important;
            opacity: 1 !important;
        }
        #de-loader {
            display: none !important;
        }
    </style>
</head>
<body class="dark-scheme">
<div id="wrapper">
    <div class="float-text show-on-scroll">
        <span><a href="#">Scroll to top</a></span>
    </div>
    <div class="scrollbar-v show-on-scroll"></div>
    <div id="de-loader"></div>

    <div class="section-dark no-bottom no-top" id="content">
        <div id="top"></div>
        <section class="no-top">
            <div class="text-fit-wrapper">
                <h1 class="text-fit wow">{{ $pageHeading ?? strtoupper($settings->brand_name ?? 'NATHAN') }}</h1>
                <div class="d-menu-1 wow" data-wow-delay=".3s">
                    <ul>
                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                        <li class="{{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About Me</a></li>
                        <li class="{{ request()->routeIs('services') ? 'active' : '' }}"><a href="{{ route('services') }}">What I Do</a></li>
                        <li class="{{ request()->routeIs('works*') ? 'active' : '' }}"><a href="{{ route('works') }}">Works</a></li>
                        <li class="{{ request()->routeIs('blog*') ? 'active' : '' }}"><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Hire Me</a></li>
                    </ul>
                </div>
            </div>
        </section>

        @yield('content')
    </div>

    <footer>
        <div class="container-fluid">
            <div class="px-2">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <p class="no-bottom">All Right Reserved<br>{{ $settings->brand_name ?? 'Nathan' }}</p>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <a href="{{ route('contact') }}">
                            <h2 class="fs-84 fw-800 pe-3 shuffle wow fadeInLeft" data-wow-delay=".3s">Let's Talk</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="{{ asset('assets/js/site.js') }}"></script>
</body>
</html>
