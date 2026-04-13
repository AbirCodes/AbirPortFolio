<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $settings->brand_name ?? 'Md. Abir Hossain' }} - Projects</title>
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
                <h1 class="text-fit wow">Projects</h1>
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
                <div class="row g-4 wow fadeInUp" data-wow-delay=".3s">
                    @forelse($works as $work)
                        <div class="col-lg-4">
                            <div class="hover relative overflow-hidden text-light">
                                <a href="{{ route('works.show', $work) }}" class="overflow-hidden d-block relative">
                                    <h2 class="fs-32 abs-centered z-index-1 hover-op-0">{{ $work->title }}</h2>
                                    <img src="{{ $work->image_path ? asset('assets/images/'.$work->image_path) : asset('assets/images/works/1.webp') }}" class="img-fluid hover-scale-1-2" alt="">
                                    <div class="absolute bottom-0 w-100 p-4 d-flex text-white justify-content-between">
                                        <div class="d-tag-s2">{{ strtoupper($work->category) }}</div>
                                        <div class="fw-bold">{{ $work->year }}</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-4"><div class="p-4 border rounded-1 h-100"><h4>laravel-smartvisual</h4><p>Open-source Laravel charting package with custom SVG rendering and export features.</p><small>Laravel Package | 2026</small><p class="mb-0 mt-2"><a href="https://github.com/Abir784" target="_blank" rel="noopener">View on GitHub</a></p></div></div>
                        <div class="col-lg-4"><div class="p-4 border rounded-1 h-100"><h4>laravel-query-watchdog</h4><p>Query observability package featuring SQL fingerprinting, N+1 detection, and percentile metrics.</p><small>Observability | 2026</small><p class="mb-0 mt-2"><a href="https://github.com/Abir784" target="_blank" rel="noopener">View on GitHub</a></p></div></div>
                        <div class="col-lg-4"><div class="p-4 border rounded-1 h-100"><h4>FosterPet</h4><p>Pet fostering and adoption platform with multi-role accounts and complete request workflows.</p><small>Full-Stack Web App | 2025</small><p class="mb-0 mt-2"><a href="https://github.com/Abir784" target="_blank" rel="noopener">View on GitHub</a></p></div></div>
                        <div class="col-lg-4"><div class="p-4 border rounded-1 h-100"><h4>RenewBiz</h4><p>E-commerce platform connecting households with scrap businesses using secure role-based flows.</p><small>Full-Stack Web App | 2025</small><p class="mb-0 mt-2"><a href="https://github.com/Abir784" target="_blank" rel="noopener">View on GitHub</a></p></div></div>
                        <div class="col-lg-4"><div class="p-4 border rounded-1 h-100"><h4>ClydePixel</h4><p>Secure client platform featuring backend authentication and encrypted login workflow support.</p><small>Web Platform | 2025</small><p class="mb-0 mt-2"><a href="https://github.com/Abir784" target="_blank" rel="noopener">Project Profile</a></p></div></div>
                        <div class="col-lg-4"><div class="p-4 border rounded-1 h-100"><h4>Jobs World 24</h4><p>Laravel-based job portal with multi-role authentication, postings, and advanced search filters.</p><small>Web Platform | 2025</small><p class="mb-0 mt-2"><a href="https://github.com/Abir784" target="_blank" rel="noopener">View on GitHub</a></p></div></div>
                        <div class="col-lg-4"><div class="p-4 border rounded-1 h-100"><h4>Sentiment Analysis of AI Agents</h4><p>3-class NLP benchmark with cross-validation, class balancing, and Streamlit analytics dashboard.</p><small>NLP Research | 2026</small><p class="mb-0 mt-2"><a href="https://github.com/Abir784" target="_blank" rel="noopener">View on GitHub</a></p></div></div>
                        <div class="col-lg-4"><div class="p-4 border rounded-1 h-100"><h4>Chess Piece Detection using YOLO</h4><p>End-to-end object detection pipeline for chessboard and 15 piece classes on image/video input.</p><small>Computer Vision | 2026</small><p class="mb-0 mt-2"><a href="https://github.com/Abir784" target="_blank" rel="noopener">View on GitHub</a></p></div></div>
                        <div class="col-lg-4"><div class="p-4 border rounded-1 h-100"><h4>Ozone Level Prediction</h4><p>Time-series forecasting with lag and rolling features using XGBoost and ensemble regressors.</p><small>Data Analytics | 2026</small><p class="mb-0 mt-2"><a href="https://github.com/Abir784" target="_blank" rel="noopener">View on GitHub</a></p></div></div>
                        <div class="col-lg-4"><div class="p-4 border rounded-1 h-100"><h4>Explainable Fire Detection</h4><p>TensorFlow/Keras CNN fire classifier with Grad-CAM visualization for explainable predictions.</p><small>Deep Learning | 2026</small><p class="mb-0 mt-2"><a href="https://www.kaggle.com" target="_blank" rel="noopener">View on Kaggle</a></p></div></div>
                        <div class="col-lg-4"><div class="p-4 border rounded-1 h-100"><h4>Personality Classification</h4><p>Behavioral data classification pipeline using Logistic Regression, Random Forest, and SVM.</p><small>Machine Learning | 2026</small><p class="mb-0 mt-2"><a href="https://www.kaggle.com" target="_blank" rel="noopener">View on Kaggle</a></p></div></div>
                    @endforelse
                </div>
            </div>
        </section>
    </div>
</div>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/designesia.js') }}"></script>
</body>
</html>
