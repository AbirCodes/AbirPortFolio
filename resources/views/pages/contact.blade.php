<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $settings->brand_name ?? 'Md. Abir Hossain' }} - Contact</title>
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
                <h1 class="text-fit wow">Contact</h1>
                <div class="d-menu-1 wow" data-wow-delay=".3s">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        <li><a href="{{ url('/works') }}">Projects</a></li>
                        <li><a href="{{ url('/blog') }}">Articles</a></li>
                        <li class="active"><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="no-top">
            <div class="container">
                <div class="row g-4 gx-5">
                    <div class="col-lg-8 offset-lg-2 wow fadeInUp" data-wow-delay=".3s">
                        <p class="lead">{{ $settings->contact_intro ?: 'Open to software engineering, Laravel, AI/ML, and data analytics opportunities.' }}</p>
                        <div class="p-4 border rounded-1 mb-4">
                            <h4>Email</h4>
                            <p class="mb-0"><a href="mailto:{{ $settings->contact_email ?: 'abirhossainofficial784@gmail.com' }}">{{ $settings->contact_email ?: 'abirhossainofficial784@gmail.com' }}</a></p>
                        </div>
                        <div class="p-4 border rounded-1 mb-4">
                            <h4>Phone</h4>
                            <p class="mb-0"><a href="tel:{{ $settings->contact_phone ?: '01400554400' }}">{{ $settings->contact_phone ?: '01400554400' }}</a></p>
                        </div>
                        <div class="p-4 border rounded-1">
                            <h4>Profiles</h4>
                            <p class="mb-1"><a href="https://github.com/Abir784" target="_blank" rel="noopener">github.com/Abir784</a></p>
                            <p class="mb-0"><a href="https://linkedin.com/in/mdabirhossainabir" target="_blank" rel="noopener">linkedin.com/in/mdabirhossainabir</a></p>
                        </div>
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
