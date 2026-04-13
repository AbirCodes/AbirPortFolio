<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $settings->brand_name ?? 'Md. Abir Hossain' }} - About</title>
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
    @php($counters = collect($settings->about_counters ?? []))

    @if($aboutSkills->isEmpty())
        @php($aboutSkills = collect([
            ['title' => 'Laravel', 'image_path' => 'logo/figma.webp'],
            ['title' => 'Python', 'image_path' => 'logo/photoshop.webp'],
            ['title' => 'MySQL', 'image_path' => 'logo/sketch.webp'],
            ['title' => 'Power BI', 'image_path' => 'logo/xd.webp'],
        ]))
    @endif

    @if($codingSkills->isEmpty())
        @php($codingSkills = collect([
            ['name' => 'Laravel / PHP', 'level' => 92],
            ['name' => 'Python ML Stack', 'level' => 88],
            ['name' => 'MySQL / SQL', 'level' => 90],
            ['name' => 'JavaScript', 'level' => 82],
            ['name' => 'Data Visualization', 'level' => 84],
            ['name' => 'REST API Design', 'level' => 86],
        ]))
    @endif

    @if($experiences->isEmpty())
        @php($experiences = collect([
            ['period' => 'Jun 2025 - Jan 2026', 'title' => 'Student Tutor', 'organization' => 'BRAC University'],
            ['period' => '2026 - Present', 'title' => 'Open-Source Laravel Author', 'organization' => 'Independent'],
            ['period' => '2021 - Present', 'title' => 'Freelance Developer and Research Builder', 'organization' => 'Project-based'],
        ]))
    @endif

    @if($education->isEmpty())
        @php($education = collect([
            ['year' => '2022 - 2026', 'title' => 'BSc in CSE (CGPA: 3.87/4.00)', 'organization' => 'BRAC University'],
            ['year' => '2018 - 2020', 'title' => 'Higher Secondary Certificate (Science)', 'organization' => 'St. Gregory\'s High School and College'],
            ['year' => '2021', 'title' => 'Web Development in Laravel (6-Month Training)', 'organization' => 'Creative IT Institute'],
        ]))
    @endif

    @if($counters->isEmpty())
        @php($counters = collect([
            ['label' => 'Published Packages', 'value' => 2],
            ['label' => 'Major Portfolio Projects', 'value' => 10],
            ['label' => 'Students Mentored', 'value' => 20],
            ['label' => 'CGPA x100', 'value' => 387],
        ]))
    @endif

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
                    <h1 class="text-fit wow">About</h1>
                    <div class="d-menu-1 wow" data-wow-delay=".3s">
                        <ul>
                            <li><a href="{{ url('/' ) }}">Home</a></li>
                            <li class="active"><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/services') }}">Services</a></li>
                            <li><a href="{{ url('/works') }}">Projects</a></li>
                            <li><a href="{{ url('/blog') }}">Articles</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
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

                            <div class="row g-4 mt-2 align-items-center wow fadeInUp" data-wow-delay=".52s">
                                <div class="col-lg-5 col-md-6">
                                    <img src="{{ asset('assets/images/background/profile.png') }}" class="img-fluid rounded-1" alt="Profile image">
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="p-4 border rounded-1 h-100">
                                        <h5 class="mb-2">What I Build</h5>
                                        <p class="mb-0">Laravel applications, ML pipelines, analytics dashboards, and open-source packages built to ship, scale, and stay maintainable.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-4 mt-2 wow fadeInUp" data-wow-delay=".55s">
                                <div class="col-md-4">
                                    <div class="p-3 border rounded-1 h-100">
                                        <h5 class="mb-2">Primary Focus</h5>
                                        <p class="mb-0">Laravel systems, applied ML pipelines, and data-driven product engineering.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 border rounded-1 h-100">
                                        <h5 class="mb-2">Work Style</h5>
                                        <p class="mb-0">Independent ownership with strong collaboration across product, research, and engineering teams.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 border rounded-1 h-100">
                                        <h5 class="mb-2">Location</h5>
                                        <p class="mb-0">Dhaka, Bangladesh. Open to remote and hybrid opportunities.</p>
                                    </div>
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
                        <div class="col-lg-2"><div class="subtitle wow fadeInUp" data-wow-delay=".3s">Strengths</div></div>
                        <div class="col-lg-10">
                            <div class="row g-4">
                                <div class="col-md-6 wow fadeInRight" data-wow-delay=".35s">
                                    <div class="p-3 border rounded-1 h-100">
                                        <h5>Engineering Delivery</h5>
                                        <p class="mb-0">Designing and shipping robust Laravel applications, packages, and backend workflows with production-quality structure.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInRight" data-wow-delay=".4s">
                                    <div class="p-3 border rounded-1 h-100">
                                        <h5>Applied AI and Analytics</h5>
                                        <p class="mb-0">Building end-to-end ML and analytics pipelines from data preparation to evaluation, visualization, and decision-ready outputs.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInRight" data-wow-delay=".45s">
                                    <div class="p-3 border rounded-1 h-100">
                                        <h5>Problem Solving</h5>
                                        <p class="mb-0">Strong algorithmic and systems thinking, shaped by mentoring students and solving practical software constraints.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInRight" data-wow-delay=".5s">
                                    <div class="p-3 border rounded-1 h-100">
                                        <h5>Communication</h5>
                                        <p class="mb-0">Translating complex technical work into clear explanations for teammates, faculty, and non-technical stakeholders.</p>
                                    </div>
                                </div>
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

            <section class="no-top">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-2"><div class="subtitle wow fadeInUp" data-wow-delay=".3s">Languages</div></div>
                        <div class="col-lg-10">
                            <div class="row g-4">
                                <div class="col-md-6 wow fadeInRight" data-wow-delay=".35s">
                                    <div class="p-3 border rounded-1 h-100">
                                        <h5>Bangla</h5>
                                        <p class="mb-0">Native proficiency</p>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInRight" data-wow-delay=".4s">
                                    <div class="p-3 border rounded-1 h-100">
                                        <h5>English</h5>
                                        <p class="mb-0">Intermediate professional communication</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="no-top">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-2"><div class="subtitle wow fadeInUp" data-wow-delay=".3s">Links</div></div>
                        <div class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">
                            <p class="mb-1"><a href="https://github.com/Abir784" target="_blank" rel="noopener">GitHub: github.com/Abir784</a></p>
                            <p class="mb-3"><a href="https://linkedin.com/in/mdabirhossainabir" target="_blank" rel="noopener">LinkedIn: linkedin.com/in/mdabirhossainabir</a></p>
                            <a class="btn-line" href="{{ url('/contact') }}">Get In Touch</a>
                        </div>
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
                                    <li><a href="https://github.com/Abir784" target="_blank" rel="noopener">GitHub</a></li>
                                    <li><a href="https://linkedin.com/in/mdabirhossainabir" target="_blank" rel="noopener">LinkedIn</a></li>
                                    <li><a href="mailto:abirhossainofficial784@gmail.com">Email</a></li>
                                </ul>
                                <p class="no-bottom">All Right Reserved<br>{{ $settings->brand_name ?? 'Md. Abir Hossain' }}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <a href="{{ url('/contact') }}"><h2 class="fs-84 fw-800 pe-3 shuffle wow fadeInLeft" data-wow-delay=".3s">Let's Build</h2></a>
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
