<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $post->title ?? 'Article' }} - {{ $settings->brand_name ?? 'Md. Abir Hossain' }}</title>
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
                <h1 class="text-fit wow">Article</h1>
                <div class="d-menu-1 wow" data-wow-delay=".3s">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        <li><a href="{{ url('/works') }}">Projects</a></li>
                        <li class="active"><a href="{{ url('/blog') }}">Articles</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="no-top">
            <div class="container">
                <div class="row g-4 gx-5 align-items-center">
                    <div class="col-lg-7">
                        <div class="mb-2">
                            <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Engineering</div>
                            <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>{{ optional($post->published_at)->format('d M Y') }}</div>
                        </div>
                        <h2>{{ $post->title }}</h2>
                        <p class="lead">{{ $post->excerpt }}</p>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{ $post->image_path ? asset('assets/images/'.$post->image_path) : asset('assets/images/blog/single-1.webp') }}" class="img-fluid" alt="{{ $post->title }}">
                    </div>
                </div>

                <div class="spacer-single"></div>

                <div class="row g-4 gx-5">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="blog-read">
                            <div class="post-text">{!! nl2br(e($post->content)) !!}</div>
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
