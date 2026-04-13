<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $settings->brand_name ?? 'Md. Abir Hossain' }} - Services</title>
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
                <h1 class="text-fit wow">Services</h1>
                <div class="d-menu-1 wow" data-wow-delay=".3s">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li class="active"><a href="{{ url('/services') }}">Services</a></li>
                        <li><a href="{{ url('/works') }}">Projects</a></li>
                        <li><a href="{{ url('/blog') }}">Articles</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="no-top">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-8 offset-lg-2">
                        <p class="lead">I help teams ship robust web products, practical AI solutions, and measurable analytics systems.</p>
                        <div class="row g-4">
                            @forelse($services as $service)
                                <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="relative">
                                        <h4>{{ $service->title }}</h4>
                                        <p>{{ $service->description }}</p>
                                    </div>
                                </div>
                            @empty
                                <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="relative">
                                        <h4>Laravel Full-Stack Development</h4>
                                        <p>Production-grade web applications with secure authentication, admin workflows, and optimized MySQL data models.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="relative">
                                        <h4>REST API and Package Engineering</h4>
                                        <p>Reusable Laravel package design with service providers, facades, tests, and clean integration docs.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="relative">
                                        <h4>Machine Learning Pipelines</h4>
                                        <p>NLP, computer vision, and forecasting workflows with reproducible training, evaluation, and reporting.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="relative">
                                        <h4>Data Analytics and BI Dashboards</h4>
                                        <p>SQL + Python analytics, feature engineering, and dashboards in Power BI/Tableau for decision support.</p>
                                    </div>
                                </div>
                            @endforelse
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
