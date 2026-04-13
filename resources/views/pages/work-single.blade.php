<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $work->title ?? 'Project' }} - {{ $settings->brand_name ?? 'Md. Abir Hossain' }}</title>
    <link rel="icon" href="{{ asset('assets/images/icon.webp') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/coloring.css') }}" rel="stylesheet" type="text/css">
    <link id="colors" href="{{ asset('assets/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">
</head>
<body class="dark-scheme">
<div id="wrapper">
    <div id="de-loader"></div>
    <div class="section-dark no-bottom no-top" id="content">
        <section class="no-top">
            <div class="text-fit-wrapper">
                <h1 class="text-fit wow">{{ strtoupper($work->title) }}</h1>
                <div class="d-menu-1 wow" data-wow-delay=".3s">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        <li class="active"><a href="{{ url('/works') }}">Projects</a></li>
                        <li><a href="{{ url('/blog') }}">Articles</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="no-top">
            <div class="container">
                <div class="row g-4 gx-5 align-items-center">
                    <div class="col-lg-6">
                        <h3>{{ $work->title }}</h3>
                        <p>{{ $work->summary ?: 'Project details are being refined. Please contact me for architecture, implementation notes, and source links.' }}</p>
                        @if($work->details)
                            <p>{{ $work->details }}</p>
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ $work->image_path ? asset('assets/images/'.$work->image_path) : asset('assets/images/works/1.webp') }}" class="img-fluid" alt="{{ $work->title }}">
                    </div>
                </div>

                <div class="spacer-double"></div>

                <div class="row g-4 gx-5">
                    <div class="col-lg-4 col-sm-6">
                        <h6>Category</h6>
                        <p>{{ $work->category }}</p>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <h6>Year</h6>
                        <p>{{ $work->year }}</p>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <h6>More</h6>
                        <p><a href="https://github.com/Abir784" target="_blank" rel="noopener">GitHub Profile</a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/designesia.js') }}"></script>
</body>
</html>
