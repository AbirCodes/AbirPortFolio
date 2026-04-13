<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $settings->brand_name ?? 'Md. Abir Hossain' }} - Articles</title>
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
                <h1 class="text-fit wow">Articles</h1>
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
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="row g-4">
                            @forelse($posts as $post)
                                <div class="col-lg-6">
                                    <div class="relative">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-3">
                                                <div class="post-image">
                                                    <img alt="" src="{{ $post->image_path ? asset('assets/images/'.$post->image_path) : asset('assets/images/blog/1.webp') }}" class="lazy">
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="mb-2">
                                                    <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Engineering</div>
                                                    <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>{{ optional($post->published_at)->format('d M Y') }}</div>
                                                </div>
                                                <h4><a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-lg-6"><div class="p-4 border rounded-1"><h4>How I Built a Laravel Monitoring Package</h4><p>Designing SQL fingerprinting, N+1 burst detection, and percentile-based alerts for real systems.</p></div></div>
                                <div class="col-lg-6"><div class="p-4 border rounded-1"><h4>From TF-IDF to Ensemble NLP</h4><p>Lessons from benchmarking sentiment models on AI-to-AI social interactions.</p></div></div>
                                <div class="col-lg-6"><div class="p-4 border rounded-1"><h4>YOLOv8/YOLO11 Training Notes</h4><p>Practical workflow to build reproducible object detection experiments from raw frames.</p></div></div>
                                <div class="col-lg-6"><div class="p-4 border rounded-1"><h4>Data Storytelling for Product Teams</h4><p>Turning SQL and ML outputs into actionable dashboards for non-technical stakeholders.</p></div></div>
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
