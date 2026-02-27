<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\BreakingNews;
use App\Models\HomePageSetting;
use App\Models\PortfolioItem;
use App\Models\RecentPostLink;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $this->ensureDefaultContent();

        return view('pages.blog-home', [
            'settings' => HomePageSetting::query()->first(),
            'portfolioItems' => PortfolioItem::query()->orderBy('sort_order')->orderBy('id')->get(),
            'breakingNews' => BreakingNews::query()->orderBy('sort_order')->orderBy('id')->get(),
            'blogPosts' => BlogPost::query()->orderBy('sort_order')->orderBy('id')->get(),
            'recentPostLinks' => RecentPostLink::query()->orderBy('sort_order')->orderBy('id')->get(),
        ]);
    }

    private function ensureDefaultContent(): void
    {
        HomePageSetting::query()->firstOrCreate([], [
            'portfolio_title' => 'Portfolio',
            'portfolio_description' => 'I am a web developer focused on building modern, responsive, and user-friendly websites. Here are a few highlighted works before the blog section.',
            'portfolio_image' => 'assets/images/sample_images/blog_post1.jpg',
            'sidebar_title' => 'Portfolio Highlights',
            'sidebar_description' => 'Frontend, Backend, and Full-stack work samples.',
            'sidebar_image' => 'assets/images/sample_images/team7.jpg',
            'profile_name' => 'John Doe',
            'profile_bio' => 'A graphics designer, a web developer, a boyfriend, a friend, a son, a legend.',
        ]);

        if (PortfolioItem::query()->count() === 0) {
            PortfolioItem::query()->insert([
                ['title' => 'Project One - Business Website', 'url' => '#', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Project Two - E-commerce UI', 'url' => '#', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Project Three - Laravel Dashboard', 'url' => '#', 'sort_order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ]);
        }

        if (BreakingNews::query()->count() === 0) {
            BreakingNews::query()->insert([
                ['news_date' => 'October 28, 2013', 'title' => "Did 'White Widow' spy on Kenya mall?", 'url' => '#', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
                ['news_date' => 'October 26, 2013', 'title' => 'Report: Former drone operator shares his inner torment', 'url' => '#', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
                ['news_date' => 'October 23, 2013', 'title' => "'Blackfish' sparks debate over taking kids to animal parks", 'url' => '#', 'sort_order' => 3, 'created_at' => now(), 'updated_at' => now()],
            ]);
        }

        if (BlogPost::query()->count() === 0) {
            BlogPost::query()->insert([
                [
                    'title' => 'Example of image featured post',
                    'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                    'image_path' => 'assets/images/sample_images/blog_post1.jpg',
                    'author' => 'Don Kuzenko',
                    'published_at' => 'May 18, 2013',
                    'tags' => 'Gallery, Photo, Art',
                    'comments_label' => '3 Comments',
                    'button_text' => 'Learn more',
                    'sort_order' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Example of image featured post',
                    'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                    'image_path' => 'assets/images/sample_images/blog_post2.jpg',
                    'author' => 'Don Kuzenko',
                    'published_at' => 'May 18, 2013',
                    'tags' => 'Gallery, Photo, Art',
                    'comments_label' => '3 Comments',
                    'button_text' => 'Learn more',
                    'sort_order' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'Example of image featured post',
                    'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                    'image_path' => 'assets/images/sample_images/blog_post3.jpg',
                    'author' => 'Don Kuzenko',
                    'published_at' => 'May 18, 2013',
                    'tags' => 'Gallery, Photo, Art',
                    'comments_label' => '3 Comments',
                    'button_text' => 'Learn more',
                    'sort_order' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }

        if (RecentPostLink::query()->count() === 0) {
            RecentPostLink::query()->insert([
                ['title' => 'Late 2013 iMac Review', 'url' => '#', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Where Things Come From', 'url' => '#', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'WordPress Themes by Indonez', 'url' => '#', 'sort_order' => 3, 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'The Camera Collection', 'url' => '#', 'sort_order' => 4, 'created_at' => now(), 'updated_at' => now()],
                ['title' => 'Coffee in the Bay Area', 'url' => '#', 'sort_order' => 5, 'created_at' => now(), 'updated_at' => now()],
            ]);
        }
    }
}
