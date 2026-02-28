<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.madebydesignesia.com/themes/nathan/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Feb 2026 09:49:12 GMT -->
<head>
    <title>Nathan — Personal Portfolio Website</title>
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
                    <h1 class="text-fit wow">My Blog</h1>
                    <div class="d-menu-1 wow" data-wow-delay=".3s">
                        <ul>
                            <li><a href="{{ url('/' ) }}">Home</a></li>
                            <li><a href="{{ url('/about') }}">About Me</a></li>
                            <li><a href="{{ url('/services') }}">What I Do</a></li>
                            <li><a href="{{ url('/works') }}">Works</a></li>
                            <li class="active"><a href="{{ url('/blog') }}">Blog</a></li>
                            <li><a href="{{ url('/contact') }}">Hire Me</a></li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                            <div class="row g-4">

                                <div class="col-lg-6">
                                    <div class="relative">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-3">
                                                <div class="post-image">
                                                    <img alt="" src="{{ asset('assets/images/blog/1.webp') }}" class="lazy">
                                                </div>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="mb-2">
                                                    <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Tips &amp; Tricks</div>
                                                    <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>18 Mar 2025</div>
                                                </div>
                                                <h4><a href="{{ url('/blog-single') }}">Mastering Modern Web Design: Trends and Techniques for 2024</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="relative">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-3">
                                                <div class="post-image">
                                                    <img alt="" src="{{ asset('assets/images/blog/2.webp') }}" class="lazy">
                                                </div>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="mb-2">
                                                    <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Tips &amp; Tricks</div>
                                                    <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>18 Mar 2025</div>
                                                </div>
                                                <h4><a href="{{ url('/blog-single') }}">The Art of User Experience: Designing Websites That Delight</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="relative">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-3">
                                                <div class="post-image">
                                                    <img alt="" src="{{ asset('assets/images/blog/3.webp') }}" class="lazy">
                                                </div>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="mb-2">
                                                    <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Tips &amp; Tricks</div>
                                                    <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>18 Mar 2025</div>
                                                </div>
                                                <h4><a href="{{ url('/blog-single') }}">Responsive Design Best Practices: Making Your Website Mobile-Friendly</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="relative">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-3">
                                                <div class="post-image">
                                                    <img alt="" src="{{ asset('assets/images/blog/4.webp') }}" class="lazy">
                                                </div>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="mb-2">
                                                    <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Tips &amp; Tricks</div>
                                                    <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>18 Mar 2025</div>
                                                </div>
                                                <h4><a href="{{ url('/blog-single') }}">Typography in Web Design: Choosing Fonts That Make an Impact</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="relative">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-3">
                                                <div class="post-image">
                                                    <img alt="" src="{{ asset('assets/images/blog/5.webp') }}" class="lazy">
                                                </div>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="mb-2">
                                                    <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Tips &amp; Tricks</div>
                                                    <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>18 Mar 2025</div>
                                                </div>
                                                <h4><a href="{{ url('/blog-single') }}">Web Design Mistakes to Avoid: Common Pitfalls and How to Fix Them</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="relative">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm-3">
                                                <div class="post-image">
                                                    <img alt="" src="{{ asset('assets/images/blog/6.webp') }}" class="lazy">
                                                </div>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="mb-2">
                                                    <div class="d-inline fs-14 fw-bold me-3"><i class="icofont-tag text-white me-2"></i>Tips &amp; Tricks</div>
                                                    <div class="d-inline fs-14 fw-600"><i class="icofont-ui-calendar text-white me-2"></i>18 Mar 2025</div>
                                                </div>
                                                <h4><a href="{{ url('/blog-single') }}">Creating Accessible Websites: Why Inclusive Design Matters</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- pagination begin -->
                                <div class="col-lg-12 pt-3 text-center">
                                    <div class="d-inline-block">
                                        <nav aria-label="Page navigation example">
                                          <ul class="pagination">
                                            <li class="page-item">
                                              <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                                              </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                              <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                                              </a>
                                            </li>
                                          </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- pagination end -->

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

                                <p class="no-bottom">All Right Reserved<br>Template By Designesia</p>

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

</body>

<!-- Mirrored from www.madebydesignesia.com/themes/nathan/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Feb 2026 09:49:12 GMT -->
</html>
