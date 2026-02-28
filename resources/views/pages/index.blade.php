<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.madebydesignesia.com/themes/nathan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Feb 2026 09:48:56 GMT -->
<head>
    <title>{{ $settings->brand_name ?? 'Nathan' }} — Personal Portfolio Website</title>
    <link rel="icon" href="{{ asset('assets/images/icon.webp') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >
    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('assets/css/coloring.css') }}" rel="stylesheet" type="text/css" >
    <!-- color scheme -->
    <link id="colors" href="{{ asset('assets/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css" >

</head>

<body class="dark-scheme">
    <div id="wrapper">
        <div class="float-text show-on-scroll">
            <span><a href="#">Scroll to top</a></span>
        </div>
        <div class="scrollbar-v show-on-scroll"></div>

        <!-- page preloader begin -->
        <div id="de-loader"></div>
        <!-- page preloader close -->

        <!-- content begin -->
        <div class="section-dark no-bottom no-top" id="content">

            <div id="top"></div>

            <section class="no-top">

                <div class="text-fit-wrapper">
                    <h1 class="text-fit wow">{{ strtoupper($settings->brand_name ?? 'NATHAN') }}</h1>
                    <div class="d-menu-1 wow" data-wow-delay=".3s">
                        <ul>
                            <li class="active"><a href="{{ url('/' ) }}">Home</a></li>
                            <li><a href="{{ url('/about') }}">About Me</a></li>
                            <li><a href="{{ url('/services') }}">What I Do</a></li>
                            <li><a href="{{ url('/works') }}">Works</a></li>
                            <li><a href="{{ url('/blog') }}">Blog</a></li>
                            <li><a href="{{ url('/contact') }}">Hire Me</a></li>
                        </ul>
                    </div>
                </div>


                <div class="spacer-double"></div>

                <div class="container">
                    <div class="spacer-double d-lg-none d-sm-block"></div>
                    <div class="row align-items-center g-4 gx-5">
                        <div class="col-lg-6">
                            <div class="relative">
                                <div class="subtitle wow fadeInUp" data-wow-delay=".3s">Available for Work</div>
                                <h1 class="lh-1 wow fadeInUp" data-wow-delay=".4s">{{ $settings->hero_title }}</h1>
                            </div>
                            <p class="lead wow fadeInUp" data-wow-delay=".5s">
                                {{ $settings->hero_subtitle }}
                            </p>

                            <div class="spacer-10"></div>

                            <a class="w-150px btn-line wow fadeIn" data-wow-delay=".6s" href="{{ url('/about') }}">About Me</a>

                        </div>

                        <div class="col-lg-6">
                            <img src="{{ $settings->home_hero_image_path ? asset('storage/'.$settings->home_hero_image_path) : asset('assets/images/misc/1.webp') }}" class="w-100 wow fadeInUp" data-wow-delay=".6s" alt="">
                        </div>
                    </div>

                    <div class="spacer-double"></div>

                    <div class="row g-4">
                        {{-- <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count text-center fs-15 wow fadeInRight" data-wow-delay=".0s">
                                <h3 class="fs-48 mb-1"><span class="timer" data-to="8240" data-speed="3000">0</span></h3>
                                <div class="fs-15">Hours of Works</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count text-center fs-15 wow fadeInRight" data-wow-delay=".2s">
                                <h3 class="fs-48 mb-1"><span class="timer" data-to="315" data-speed="3000">0</span></h3>
                                <div class="fs-15">Projects Done</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count text-center fs-15 wow fadeInRight" data-wow-delay=".4s">
                                <h3 class="fs-48 mb-1"><span class="timer" data-to="250" data-speed="3000">0</span></h3>
                                <div class="fs-15">Satisfied Customers</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count text-center fs-15 wow fadeInRight" data-wow-delay=".6s">
                                <h3 class="fs-48 mb-1"><span class="timer" data-to="32" data-speed="3000">0</span></h3>
                                <div class="fs-15">Awards Winning</div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="subtitle wow fadeInUp" data-wow-delay=".3s">{{ $settings->about_title }}</div>
                        </div>
                        <div class="col-lg-10">
                            <h2 class="lh-1  wow fadeInUp" data-wow-delay=".4s">{{ $settings->hero_title }}</h2>
                            <div class="row g-4 wow fadeInUp" data-wow-delay=".5s">
                                <div class="col-sm-12">
                                    <p>{{ $settings->about_text }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-4  wow fadeInRight" data-wow-delay=".3s">
                            <div class="p-3 h-100 d-lg-block d-sm-none text-light jarallax">
                                <img src="{{ asset('assets/images/misc/2.webp') }}" class="jarallax-img" alt="">
                                <h3 class="abs-centered m-0">What I Do</h3>
                            </div>
                            <div class="subtitle d-lg-none d-sm-block">What I Do</div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row g-4">
                                @forelse($services as $service)
                                    <div class="col-lg-6 col-sm-6 wow fadeInRight">
                                        <div class="relative">
                                            <h4>{{ $service->title }}</h4>
                                            <p>{{ $service->description }}</p>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12">
                                        <p>No services added yet.</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="no-top">
                <div class="container">
                    <div class="row g-4 gx-5">
                        <div class="col-lg-2">
                            <div class="subtitle ms-3 wow fadeInUp" data-wow-delay=".3s">Works</div>
                        </div>
                        <div class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">
                             <h2>Explore the projects below to see how I bring ideas to life through thoughtful design and meticulous execution.</h2>
                        </div>
                    </div>

                    <div class="spacer-single"></div>
                </div>

                <div class="container">
                                        <div class="row g-4 wow fadeInRight" data-wow-delay=".5s">
                                                @forelse($works->take(3) as $work)
                                                        <div class="col-lg-4">
                                                                <div class="hover relative overflow-hidden text-light">
                                                                    <a href="{{ route('works.show', $work) }}" class="overflow-hidden d-block relative">
                                                                        <h2 class="fs-40 abs-centered z-index-1 hover-op-0">{{ $work->title }}</h2>
                                                                        <img src="{{ $work->image_path ? asset('assets/images/'.$work->image_path) : asset('assets/images/works/1.webp') }}" class="img-fluid hover-scale-1-2" alt="">

                                                                        <div class="absolute bottom-0 w-100 p-4 d-flex text-white justify-content-between">
                                                                                <div class="d-tag-s2">{{ $work->category }}</div>
                                                                                <div class="fw-bold">{{ $work->year }}</div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                        </div>
                                                @empty
                                                        <div class="col-12"><p>No work items added yet.</p></div>
                                                @endforelse
                                        </div>
                </div>
            </section>

            <section class="text-light no-top">
                <div class="wow fadeInRight d-flex">
                  <div class="de-marquee-list wow">
                    <div class="d-item">
                      <span class="d-item-txt">AI Solution</span>
                      <span class="d-item-txt">E-COMMERCE WEBSITE</span>
                      <span class="d-item-txt">BACK-END DEVELOPMENT</span>
                      <span class="d-item-txt">Machine Learning Issue</span>
                     </div>
                  </div>
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-2">
                            <div class="subtitle ms-3 wow fadeInUp" data-wow-delay=".3s">From the Blog</div>
                        </div>
                        <div class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">
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
                                                        <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Blog</div>
                                                        <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>{{ optional($post->published_at)->format('d M Y') }}</div>
                                                    </div>
                                                    <h4><a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12"><p>No blog posts published yet.</p></div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->

        <!-- footer begin -->
        <footer>
            <div class="container-fluid">
                <div class="px-2">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="d-menu-1 wow" data-wow-delay=".3s">
                                <ul>
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">Instagram</a></li>
                                </ul>

                                <p class="no-bottom">All Right Reserved<br>{{ $settings->brand_name ?? 'Nathan' }}</p>

                            </div>
                        </div>

                        <div class="col-lg-6 text-lg-end">
                            <a href="{{ url('/contact') }}">
                                <h2 class="fs-84 fw-800 pe-3 shuffle wow fadeInLeft" data-wow-delay=".3s">Let's Talk</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/designesia.js') }}"></script>
    <script src="{{ asset('assets/js/custom-marquee.js') }}"></script>

</body>

<!-- Mirrored from www.madebydesignesia.com/themes/nathan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Feb 2026 09:49:03 GMT -->
</html>
