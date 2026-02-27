<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\BreakingNews;
use App\Models\HomePageSetting;
use App\Models\PortfolioItem;
use App\Models\RecentPostLink;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AdminContentController extends Controller
{
    public function index(): View
    {
        $this->ensureDefaultSettings();

        return view('admin.dashboard', [
            'activeNav' => 'dashboard',
            'portfolioCount' => PortfolioItem::query()->count(),
            'breakingNewsCount' => BreakingNews::query()->count(),
            'blogPostCount' => BlogPost::query()->count(),
            'recentPostCount' => RecentPostLink::query()->count(),
        ]);
    }

    public function settingsPage(): View
    {
        $this->ensureDefaultSettings();

        return view('admin.settings', [
            'activeNav' => 'settings',
            'settings' => HomePageSetting::query()->first(),
        ]);
    }

    public function portfolioPage(): View
    {
        $this->ensureDefaultSettings();

        return view('admin.portfolio-items', [
            'activeNav' => 'portfolio',
            'portfolioItems' => PortfolioItem::query()->orderBy('sort_order')->orderBy('id')->get(),
        ]);
    }

    public function breakingNewsPage(): View
    {
        $this->ensureDefaultSettings();

        return view('admin.breaking-news', [
            'activeNav' => 'breaking-news',
            'breakingNews' => BreakingNews::query()->orderBy('sort_order')->orderBy('id')->get(),
        ]);
    }

    public function blogPostsPage(): View
    {
        $this->ensureDefaultSettings();

        return view('admin.blog-posts', [
            'activeNav' => 'blog-posts',
            'blogPosts' => BlogPost::query()->orderBy('sort_order')->orderBy('id')->get(),
        ]);
    }

    public function recentLinksPage(): View
    {
        $this->ensureDefaultSettings();

        return view('admin.recent-post-links', [
            'activeNav' => 'recent-links',
            'recentPostLinks' => RecentPostLink::query()->orderBy('sort_order')->orderBy('id')->get(),
        ]);
    }

    private function ensureDefaultSettings(): void
    {
        HomePageSetting::query()->firstOrCreate([], [
            'portfolio_title' => 'Portfolio',
            'portfolio_description' => 'Update this text from admin panel.',
            'portfolio_image' => 'assets/images/sample_images/blog_post1.jpg',
            'sidebar_title' => 'Portfolio Highlights',
            'sidebar_description' => 'Update this text from admin panel.',
            'sidebar_image' => 'assets/images/sample_images/team7.jpg',
            'profile_name' => 'John Doe',
            'profile_bio' => 'Update this text from admin panel.',
        ]);
    }

    public function updateSettings(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'portfolio_title' => ['required', 'string', 'max:255'],
            'portfolio_description' => ['nullable', 'string'],
            'portfolio_image' => ['nullable', 'string', 'max:255'],
            'portfolio_image_upload' => ['nullable', 'image', 'max:5120'],
            'sidebar_title' => ['required', 'string', 'max:255'],
            'sidebar_description' => ['nullable', 'string'],
            'sidebar_image' => ['nullable', 'string', 'max:255'],
            'sidebar_image_upload' => ['nullable', 'image', 'max:5120'],
            'profile_name' => ['required', 'string', 'max:255'],
            'profile_bio' => ['nullable', 'string'],
        ]);

        if ($request->hasFile('portfolio_image_upload')) {
            $data['portfolio_image'] = $this->storeUploadedImage($request->file('portfolio_image_upload'));
        }

        if ($request->hasFile('sidebar_image_upload')) {
            $data['sidebar_image'] = $this->storeUploadedImage($request->file('sidebar_image_upload'));
        }

        unset($data['portfolio_image_upload'], $data['sidebar_image_upload']);

        $settings = HomePageSetting::query()->firstOrCreate([]);
        $settings->update($data);

        return back()->with('status', 'Homepage settings updated.');
    }

    public function storePortfolioItem(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'url' => ['nullable', 'string', 'max:255'],
            'image_path' => ['nullable', 'string', 'max:255'],
            'image_upload' => ['nullable', 'image', 'max:5120'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        if ($request->hasFile('image_upload')) {
            $data['image_path'] = $this->storeUploadedImage($request->file('image_upload'));
        }

        unset($data['image_upload']);

        PortfolioItem::query()->create($data + ['sort_order' => $data['sort_order'] ?? 0]);

        return back()->with('status', 'Portfolio item added.');
    }

    public function updatePortfolioItem(Request $request, PortfolioItem $portfolioItem): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'url' => ['nullable', 'string', 'max:255'],
            'image_path' => ['nullable', 'string', 'max:255'],
            'image_upload' => ['nullable', 'image', 'max:5120'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        if ($request->hasFile('image_upload')) {
            $data['image_path'] = $this->storeUploadedImage($request->file('image_upload'));
        }

        unset($data['image_upload']);

        $portfolioItem->update($data + ['sort_order' => $data['sort_order'] ?? 0]);

        return back()->with('status', 'Portfolio item updated.');
    }

    public function deletePortfolioItem(PortfolioItem $portfolioItem): RedirectResponse
    {
        $portfolioItem->delete();

        return back()->with('status', 'Portfolio item deleted.');
    }

    public function storeBreakingNews(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'news_date' => ['nullable', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'url' => ['nullable', 'string', 'max:255'],
            'image_path' => ['nullable', 'string', 'max:255'],
            'image_upload' => ['nullable', 'image', 'max:5120'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        if ($request->hasFile('image_upload')) {
            $data['image_path'] = $this->storeUploadedImage($request->file('image_upload'));
        }

        unset($data['image_upload']);

        BreakingNews::query()->create($data + ['sort_order' => $data['sort_order'] ?? 0]);

        return back()->with('status', 'Breaking news added.');
    }

    public function updateBreakingNews(Request $request, BreakingNews $breakingNews): RedirectResponse
    {
        $data = $request->validate([
            'news_date' => ['nullable', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'url' => ['nullable', 'string', 'max:255'],
            'image_path' => ['nullable', 'string', 'max:255'],
            'image_upload' => ['nullable', 'image', 'max:5120'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        if ($request->hasFile('image_upload')) {
            $data['image_path'] = $this->storeUploadedImage($request->file('image_upload'));
        }

        unset($data['image_upload']);

        $breakingNews->update($data + ['sort_order' => $data['sort_order'] ?? 0]);

        return back()->with('status', 'Breaking news updated.');
    }

    public function deleteBreakingNews(BreakingNews $breakingNews): RedirectResponse
    {
        $breakingNews->delete();

        return back()->with('status', 'Breaking news deleted.');
    }

    public function storeBlogPost(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string'],
            'image_path' => ['nullable', 'string', 'max:255'],
            'image_upload' => ['nullable', 'image', 'max:5120'],
            'author' => ['required', 'string', 'max:255'],
            'published_at' => ['nullable', 'string', 'max:255'],
            'tags' => ['nullable', 'string', 'max:255'],
            'comments_label' => ['nullable', 'string', 'max:255'],
            'button_text' => ['nullable', 'string', 'max:255'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        if ($request->hasFile('image_upload')) {
            $data['image_path'] = $this->storeUploadedImage($request->file('image_upload'));
        }

        unset($data['image_upload']);

        BlogPost::query()->create($data + [
            'sort_order' => $data['sort_order'] ?? 0,
            'comments_label' => $data['comments_label'] ?? '0 Comments',
            'button_text' => $data['button_text'] ?? 'Learn more',
        ]);

        return back()->with('status', 'Blog post added.');
    }

    public function updateBlogPost(Request $request, BlogPost $blogPost): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string'],
            'image_path' => ['nullable', 'string', 'max:255'],
            'image_upload' => ['nullable', 'image', 'max:5120'],
            'author' => ['required', 'string', 'max:255'],
            'published_at' => ['nullable', 'string', 'max:255'],
            'tags' => ['nullable', 'string', 'max:255'],
            'comments_label' => ['nullable', 'string', 'max:255'],
            'button_text' => ['nullable', 'string', 'max:255'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        if ($request->hasFile('image_upload')) {
            $data['image_path'] = $this->storeUploadedImage($request->file('image_upload'));
        }

        unset($data['image_upload']);

        $blogPost->update($data + [
            'sort_order' => $data['sort_order'] ?? 0,
            'comments_label' => $data['comments_label'] ?? '0 Comments',
            'button_text' => $data['button_text'] ?? 'Learn more',
        ]);

        return back()->with('status', 'Blog post updated.');
    }

    public function deleteBlogPost(BlogPost $blogPost): RedirectResponse
    {
        $blogPost->delete();

        return back()->with('status', 'Blog post deleted.');
    }

    public function storeRecentPostLink(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'url' => ['nullable', 'string', 'max:255'],
            'image_path' => ['nullable', 'string', 'max:255'],
            'image_upload' => ['nullable', 'image', 'max:5120'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        if ($request->hasFile('image_upload')) {
            $data['image_path'] = $this->storeUploadedImage($request->file('image_upload'));
        }

        unset($data['image_upload']);

        RecentPostLink::query()->create($data + ['sort_order' => $data['sort_order'] ?? 0]);

        return back()->with('status', 'Recent post link added.');
    }

    public function updateRecentPostLink(Request $request, RecentPostLink $recentPostLink): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'url' => ['nullable', 'string', 'max:255'],
            'image_path' => ['nullable', 'string', 'max:255'],
            'image_upload' => ['nullable', 'image', 'max:5120'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        if ($request->hasFile('image_upload')) {
            $data['image_path'] = $this->storeUploadedImage($request->file('image_upload'));
        }

        unset($data['image_upload']);

        $recentPostLink->update($data + ['sort_order' => $data['sort_order'] ?? 0]);

        return back()->with('status', 'Recent post link updated.');
    }

    public function deleteRecentPostLink(RecentPostLink $recentPostLink): RedirectResponse
    {
        $recentPostLink->delete();

        return back()->with('status', 'Recent post link deleted.');
    }

    private function storeUploadedImage(UploadedFile $file): string
    {
        $directory = public_path('assets/images/uploads');
        File::ensureDirectoryExists($directory);

        $extension = $file->extension() ?: 'jpg';
        $filename = Str::uuid()->toString().'.'.$extension;
        $file->move($directory, $filename);

        return 'assets/images/uploads/'.$filename;
    }
}
