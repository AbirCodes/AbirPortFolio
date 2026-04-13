<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\Work;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('pages.index', [
            'settings' => $this->settings(),
            'services' => Service::query()->where('is_active', true)->orderBy('sort_order')->limit(6)->get(),
            'works' => Work::query()->where('is_active', true)->latest()->limit(6)->get(),
            'posts' => BlogPost::query()->where('is_published', true)->latest('published_at')->limit(6)->get(),
        ]);
    }

    public function about(): View
    {
        return view('pages.about', ['settings' => $this->settings()]);
    }

    public function services(): View
    {
        return view('pages.services', [
            'settings' => $this->settings(),
            'services' => Service::query()->where('is_active', true)->orderBy('sort_order')->get(),
        ]);
    }

    public function works(): View
    {
        return view('pages.works', [
            'settings' => $this->settings(),
            'works' => Work::query()->where('is_active', true)->latest()->get(),
        ]);
    }

    public function workSingle(Work $work): View
    {
        return view('pages.work-single', [
            'settings' => $this->settings(),
            'work' => $work,
        ]);
    }

    public function blog(): View
    {
        return view('pages.blog', [
            'settings' => $this->settings(),
            'posts' => BlogPost::query()->where('is_published', true)->latest('published_at')->get(),
        ]);
    }

    public function blogSingle(BlogPost $blogPost): View
    {
        return view('pages.blog-single', [
            'settings' => $this->settings(),
            'post' => $blogPost,
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact', ['settings' => $this->settings()]);
    }

    private function settings(): SiteSetting
    {
        $settings = SiteSetting::query()->firstOrCreate([], [
            'brand_name' => 'Md. Abir Hossain',
            'hero_title' => 'Laravel Developer | ML Engineer | Data Analyst',
            'hero_subtitle' => 'Computer Science graduate with hands-on experience in full-stack Laravel development, machine learning pipelines, and data analytics dashboards.',
            'about_title' => 'About Me',
            'about_text' => 'I build practical software products from backend APIs to ML-driven tools. My work combines secure web engineering, applied AI, and data-driven decision support.',
            'about_skills' => [
                ['title' => 'Laravel', 'image_path' => 'logo/figma.webp'],
                ['title' => 'Python', 'image_path' => 'logo/photoshop.webp'],
                ['title' => 'MySQL', 'image_path' => 'logo/sketch.webp'],
                ['title' => 'Power BI', 'image_path' => 'logo/xd.webp'],
            ],
            'about_coding_skills' => [
                ['name' => 'Laravel / PHP', 'level' => 92],
                ['name' => 'Python ML Stack', 'level' => 88],
                ['name' => 'MySQL / SQL', 'level' => 90],
                ['name' => 'JavaScript', 'level' => 82],
                ['name' => 'Data Visualization', 'level' => 84],
                ['name' => 'REST API Design', 'level' => 86],
            ],
            'about_experiences' => [
                ['period' => 'Jun 2025 – Jan 2026', 'title' => 'Student Tutor', 'organization' => 'BRAC University'],
                ['period' => '2026 – Present', 'title' => 'Open-Source Laravel Author', 'organization' => 'Independent'],
                ['period' => '2021 – Present', 'title' => 'Freelance Developer & Research Builder', 'organization' => 'Project-based'],
            ],
            'about_education' => [
                ['year' => '2022 - 2026', 'title' => 'BSc in CSE (CGPA: 3.87/4.00)', 'organization' => 'BRAC University'],
                ['year' => '2018 - 2020', 'title' => 'Higher Secondary Certificate (Science)', 'organization' => 'St. Gregory\'s High School and College'],
                ['year' => '2021', 'title' => 'Web Development in Laravel (6-Month Training)', 'organization' => 'Creative IT Institute'],
            ],
            'about_testimonials' => [
                ['name' => 'Faculty Team', 'role' => 'BRAC University', 'quote' => 'Abir consistently translated difficult concepts into practical outcomes for students and teams.', 'image_path' => 'testimonial/1.webp'],
                ['name' => 'Open Source Users', 'role' => 'Laravel Community', 'quote' => 'His packages are practical, well-structured, and easy to integrate into production workflows.', 'image_path' => 'testimonial/2.webp'],
                ['name' => 'Project Collaborators', 'role' => 'Research & Product Teams', 'quote' => 'Strong ownership mindset with reliable execution from idea to deployment.', 'image_path' => 'testimonial/3.webp'],
            ],
            'about_counters' => [
                ['label' => 'Published Packages', 'value' => 2],
                ['label' => 'Major Portfolio Projects', 'value' => 10],
                ['label' => 'Students Mentored', 'value' => 20],
                ['label' => 'CGPA x100', 'value' => 387],
            ],
            'contact_intro' => 'Open to software engineering, Laravel, AI/ML, and data analytics opportunities. Let\'s build something useful.',
            'contact_email' => 'abirhossainofficial784@gmail.com',
            'contact_phone' => '01400554400',
        ]);

        if (blank($settings->home_hero_image_path)) {
            $settings->home_hero_image_path = 'assets/images/background/profile.png';
            $settings->save();
        }

        return $settings;
    }
}
