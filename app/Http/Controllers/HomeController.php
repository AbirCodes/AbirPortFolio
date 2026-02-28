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
        return SiteSetting::query()->firstOrCreate([], [
            'brand_name' => 'Nathan',
            'hero_title' => 'A Website Designer from New York',
            'hero_subtitle' => 'Transforming your vision into a dynamic web experience.',
            'about_title' => 'Who I Am',
            'about_text' => 'I am a web designer focused on clean design and strong user experience.',
            'about_skills' => [
                ['title' => 'Figma', 'image_path' => 'logo/figma.webp'],
                ['title' => 'Photoshop', 'image_path' => 'logo/photoshop.webp'],
                ['title' => 'Sketch', 'image_path' => 'logo/sketch.webp'],
                ['title' => 'Adobe XD', 'image_path' => 'logo/xd.webp'],
            ],
            'about_coding_skills' => [
                ['name' => 'HTML', 'level' => 80],
                ['name' => 'CSS', 'level' => 70],
                ['name' => 'Bootstrap', 'level' => 82],
                ['name' => 'JavaScript', 'level' => 62],
                ['name' => 'PHP', 'level' => 90],
                ['name' => 'React', 'level' => 85],
            ],
            'about_experiences' => [
                ['period' => '2022 – Present', 'title' => 'Lead Website Designer', 'organization' => 'Tech Solutions Inc'],
                ['period' => '2018 - 2022', 'title' => 'Mid-Level Website Designer', 'organization' => 'Creativo Web Agency'],
                ['period' => '2016 - 2018', 'title' => 'Junior Website Designer', 'organization' => 'Rocket Web Services'],
            ],
            'about_education' => [
                ['year' => '2018', 'title' => 'Master in Design', 'organization' => 'New York University'],
                ['year' => '2014', 'title' => 'Bachelor of Arts', 'organization' => 'University of London'],
                ['year' => '2011', 'title' => 'Artist of College', 'organization' => 'University of Sydney'],
            ],
            'about_testimonials' => [
                ['name' => 'John Reynolds', 'role' => 'CEO of Boutique Bliss', 'quote' => 'Our e-commerce website needed a complete overhaul, and Nathan delivered beyond our expectations.', 'image_path' => 'testimonial/1.webp'],
                ['name' => 'David Kim', 'role' => 'Freelance Photographer', 'quote' => 'Nathan helped me design a personal portfolio website that truly highlights my work as a photographer.', 'image_path' => 'testimonial/2.webp'],
                ['name' => 'Dr. Robert Harris', 'role' => 'Founder of Harris Clinic', 'quote' => 'The new site is visually appealing and highly functional for our patients.', 'image_path' => 'testimonial/3.webp'],
            ],
            'about_counters' => [
                ['label' => 'Hours of Works', 'value' => 8240],
                ['label' => 'Projects Done', 'value' => 315],
                ['label' => 'Satisfied Customers', 'value' => 250],
                ['label' => 'Awards Winning', 'value' => 32],
            ],
            'contact_intro' => 'Get in touch to discuss your next project.',
        ]);
    }
}
