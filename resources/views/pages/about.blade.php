<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $settings->brand_name ?? 'Nathan' }} — Personal Portfolio Website</title>
    <link rel="icon" href="{{ asset('assets/images/icon.webp') }}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <meta content="" name="description" >
    <meta content="" name="keywords" >
    <meta content="" name="author" >
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('assets/css/coloring.css') }}" rel="stylesheet" type="text/css" >
    <link id="colors" href="{{ asset('assets/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css" >
</head>

<body class="dark-scheme">
    @php($aboutSkills = collect($settings->about_skills ?? []))
    @php($codingSkills = collect($settings->about_coding_skills ?? []))
    @php($experiences = collect($settings->about_experiences ?? []))
    @php($education = collect($settings->about_education ?? []))
    @php($testimonials = collect($settings->about_testimonials ?? []))
    @php($counters = collect($settings->about_counters ?? []))

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
                    <h1 class="text-fit wow">About Me</h1>
                    <div class="d-menu-1 wow" data-wow-delay=".3s">
                        <ul>
                            <li><a href="{{ url('/' ) }}">Home</a></li>
                            <li class="active"><a href="{{ url('/about') }}">About Me</a></li>
                            <li><a href="{{ url('/services') }}">What I Do</a></li>
                            <li><a href="{{ url('/works') }}">Works</a></li>
                            <li><a href="{{ url('/blog') }}">Blog</a></li>
                            <li><a href="{{ url('/contact') }}">Hire Me</a></li>
                        </ul>
                    </div>
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
                                <div class="col-sm-6">
                                    <p>{{ $settings->about_text }}</p>
                                </div>
                                <div class="col-sm-6">
                                    <p>{{ $settings->hero_subtitle }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-2">
                            <div class="subtitle wow fadeInUp" data-wow-delay=".3s">My Skills</div>
                        </div>
                        <div class="col-lg-10">
                            <div class="row g-4 gx-5">
                                @forelse($aboutSkills as $skill)
                                    <div class="col-sm-3 col-6 wow fadeInRight">
                                        <div class="text-center">
                                            <img src="{{ asset('assets/images/'.($skill['image_path'] ?? 'logo/figma.webp')) }}" class="w-80px mb-3" alt="">
                                            <h4>{{ $skill['title'] ?? 'Skill' }}</h4>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-sm-12"><p>No skills configured yet.</p></div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-2">
                            <div class="subtitle wow fadeInUp" data-wow-delay=".3s">Coding Skills</div>
                        </div>
                        <div class="col-lg-10">
                            <div class="row g-4 gx-5">
                                <div class="col-md-6 wow fadeInRight" data-wow-delay=".4s">
                                    <div class="d-skills-bar"><div class="d-bar">
                                        @foreach($codingSkills->take(3) as $skill)
                                            <div class="d-skill" data-value="{{ $skill['level'] ?? 70 }}%">
                                                <div class="d-info"><span>{{ strtoupper($skill['name'] ?? 'Skill') }}</span></div>
                                                <div class="d-progress-line"><span class="d-fill-line"></span></div>
                                            </div>
                                        @endforeach
                                    </div></div>
                                </div>
                                <div class="col-md-6 wow fadeInRight" data-wow-delay=".5s">
                                    <div class="d-skills-bar"><div class="d-bar">
                                        @foreach($codingSkills->slice(3, 3) as $skill)
                                            <div class="d-skill" data-value="{{ $skill['level'] ?? 70 }}%">
                                                <div class="d-info"><span>{{ strtoupper($skill['name'] ?? 'Skill') }}</span></div>
                                                <div class="d-progress-line"><span class="d-fill-line"></span></div>
                                            </div>
                                        @endforeach
                                    </div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-2"><div class="subtitle wow fadeInUp" data-wow-delay=".3s">Experiences</div></div>
                        <div class="col-lg-10">
                            <div class="row g-4">
                                @forelse($experiences as $item)
                                    <div class="col-md-4 wow fadeInRight">
                                        <h6>{{ $item['period'] ?? '-' }}</h6>
                                        <h3>{{ $item['title'] ?? '-' }}</h3>
                                        <p>{{ $item['organization'] ?? '-' }}</p>
                                    </div>
                                @empty
                                    <div class="col-12"><p>No experiences configured yet.</p></div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-2"><div class="subtitle wow fadeInUp" data-wow-delay=".3s">Education</div></div>
                        <div class="col-lg-10">
                            <div class="row g-4">
                                @forelse($education as $item)
                                    <div class="col-md-4 wow fadeInRight">
                                        <h6>{{ $item['year'] ?? '-' }}</h6>
                                        <h3>{{ $item['title'] ?? '-' }}</h3>
                                        <p>{{ $item['organization'] ?? '-' }}</p>
                                    </div>
                                @empty
                                    <div class="col-12"><p>No education configured yet.</p></div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-2"><div class="subtitle wow fadeInUp" data-wow-delay=".3s">What They Says</div></div>
                        <div class="col-lg-10">
                            <div class="owl-3-cols-dots owl-carousel owl-theme wow fadeInUp" data-wow-delay=".4s">
                                @forelse($testimonials as $item)
                                    <div class="item">
                                        <div class="de_testi s2">
                                            <blockquote>
                                                <div class="de_testi_by">
                                                    <img class="circle" alt="" src="{{ asset('assets/images/'.($item['image_path'] ?? 'testimonial/1.webp')) }}">
                                                    <div>{{ $item['name'] ?? 'Client' }}<span>{{ $item['role'] ?? '' }}</span></div>
                                                </div>
                                                <p>"{{ $item['quote'] ?? '' }}"</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                @empty
                                    <div class="item"><p>No testimonials configured yet.</p></div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-4">
                        @forelse($counters as $index => $counter)
                            <div class="col-md-3 col-sm-6 mb-sm-30">
                                <div class="de_count text-center fs-15 wow fadeInRight" data-wow-delay=".{{ $index * 2 }}s">
                                    <h3 class="fs-48 mb-1"><span class="timer" data-to="{{ $counter['value'] ?? 0 }}" data-speed="3000">0</span></h3>
                                    <div class="fs-15">{{ $counter['label'] ?? '-' }}</div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12"><p>No counters configured yet.</p></div>
                        @endforelse
                    </div>
                </div>
            </section>
        </div>

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
                            <a href="{{ url('/contact') }}"><h2 class="fs-84 fw-800 pe-3 shuffle wow fadeInLeft" data-wow-delay=".3s">Let's Talk</h2></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/designesia.js') }}"></script>
</body>
</html>
