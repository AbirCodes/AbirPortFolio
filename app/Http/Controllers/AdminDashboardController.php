<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\Work;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AdminDashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard', [
            'settings' => SiteSetting::query()->firstOrCreate([], [
                'brand_name' => 'Nathan',
                'hero_title' => 'A Website Designer from New York',
                'about_skills' => [],
                'about_coding_skills' => [],
                'about_experiences' => [],
                'about_education' => [],
                'about_testimonials' => [],
                'about_counters' => [],
            ]),
            'services' => Service::query()->orderBy('sort_order')->get(),
            'works' => Work::query()->latest()->get(),
            'posts' => BlogPost::query()->latest()->get(),
        ]);
    }

    public function updateSettings(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'brand_name' => ['required', 'string', 'max:255'],
            'hero_title' => ['required', 'string', 'max:255'],
            'hero_subtitle' => ['nullable', 'string'],
            'home_hero_image' => ['nullable', 'image', 'max:5120'],
            'about_title' => ['required', 'string', 'max:255'],
            'about_text' => ['nullable', 'string'],
            'contact_intro' => ['nullable', 'string'],
            'contact_email' => ['nullable', 'email', 'max:255'],
            'contact_phone' => ['nullable', 'string', 'max:255'],
            'about_skills_json' => ['nullable', 'string'],
            'about_coding_skills_json' => ['nullable', 'string'],
            'about_experiences_json' => ['nullable', 'string'],
            'about_education_json' => ['nullable', 'string'],
            'about_testimonials_json' => ['nullable', 'string'],
            'about_counters_json' => ['nullable', 'string'],
        ]);

        $settingsPayload = Arr::only($validated, [
            'brand_name',
            'hero_title',
            'hero_subtitle',
            'about_title',
            'about_text',
            'contact_intro',
            'contact_email',
            'contact_phone',
        ]);

        $settingsPayload['about_skills'] = $this->decodeJsonArrayField($validated['about_skills_json'] ?? null, 'about_skills_json');
        $settingsPayload['about_coding_skills'] = $this->decodeJsonArrayField($validated['about_coding_skills_json'] ?? null, 'about_coding_skills_json');
        $settingsPayload['about_experiences'] = $this->decodeJsonArrayField($validated['about_experiences_json'] ?? null, 'about_experiences_json');
        $settingsPayload['about_education'] = $this->decodeJsonArrayField($validated['about_education_json'] ?? null, 'about_education_json');
        $settingsPayload['about_testimonials'] = $this->decodeJsonArrayField($validated['about_testimonials_json'] ?? null, 'about_testimonials_json');
        $settingsPayload['about_counters'] = $this->decodeJsonArrayField($validated['about_counters_json'] ?? null, 'about_counters_json');

        $settings = SiteSetting::query()->firstOrCreate([]);

        if ($request->hasFile('home_hero_image')) {
            $newPath = $request->file('home_hero_image')->store('site-settings', 'public');

            if ($settings->home_hero_image_path) {
                Storage::disk('public')->delete($settings->home_hero_image_path);
            }

            $settingsPayload['home_hero_image_path'] = $newPath;
        }

        $settings->update($settingsPayload);

        return back()->with('status', 'Site settings updated.');
    }

    public function storeService(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        Service::query()->create([
            ...$validated,
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active' => $request->boolean('is_active'),
        ]);

        return back()->with('status', 'Service created.');
    }

    public function updateService(Request $request, Service $service): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $service->update([
            ...$validated,
            'sort_order' => $validated['sort_order'] ?? 0,
            'is_active' => $request->boolean('is_active'),
        ]);

        return back()->with('status', 'Service updated.');
    }

    public function deleteService(Service $service): RedirectResponse
    {
        $service->delete();

        return back()->with('status', 'Service deleted.');
    }

    public function storeWork(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:255'],
            'year' => ['nullable', 'integer', 'between:1900,2100'],
            'summary' => ['nullable', 'string'],
            'image_path' => ['nullable', 'string', 'max:255'],
            'details' => ['nullable', 'string'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        Work::query()->create([
            ...$validated,
            'is_active' => $request->boolean('is_active'),
        ]);

        return back()->with('status', 'Work item created.');
    }

    public function updateWork(Request $request, Work $work): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:255'],
            'year' => ['nullable', 'integer', 'between:1900,2100'],
            'summary' => ['nullable', 'string'],
            'image_path' => ['nullable', 'string', 'max:255'],
            'details' => ['nullable', 'string'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $work->update([
            ...$validated,
            'is_active' => $request->boolean('is_active'),
        ]);

        return back()->with('status', 'Work item updated.');
    }

    public function deleteWork(Work $work): RedirectResponse
    {
        $work->delete();

        return back()->with('status', 'Work item deleted.');
    }

    public function storePost(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:blog_posts,slug'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['nullable', 'string'],
            'image_path' => ['nullable', 'string', 'max:255'],
            'published_at' => ['nullable', 'date'],
            'is_published' => ['nullable', 'boolean'],
        ]);

        BlogPost::query()->create([
            ...$validated,
            'slug' => $validated['slug'] ?: Str::slug($validated['title']),
            'published_at' => $validated['published_at'] ?? Carbon::now(),
            'is_published' => $request->boolean('is_published'),
        ]);

        return back()->with('status', 'Blog post created.');
    }

    public function updatePost(Request $request, BlogPost $post): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:blog_posts,slug,'.$post->id],
            'excerpt' => ['nullable', 'string'],
            'content' => ['nullable', 'string'],
            'image_path' => ['nullable', 'string', 'max:255'],
            'published_at' => ['nullable', 'date'],
            'is_published' => ['nullable', 'boolean'],
        ]);

        $post->update([
            ...$validated,
            'slug' => $validated['slug'] ?: Str::slug($validated['title']),
            'published_at' => $validated['published_at'] ?? $post->published_at ?? Carbon::now(),
            'is_published' => $request->boolean('is_published'),
        ]);

        return back()->with('status', 'Blog post updated.');
    }

    public function deletePost(BlogPost $post): RedirectResponse
    {
        $post->delete();

        return back()->with('status', 'Blog post deleted.');
    }

    private function decodeJsonArrayField(?string $value, string $field): array
    {
        if ($value === null || trim($value) === '') {
            return [];
        }

        $decoded = json_decode($value, true);

        if (json_last_error() !== JSON_ERROR_NONE || ! is_array($decoded)) {
            throw ValidationException::withMessages([
                $field => 'Invalid JSON format. Please provide a valid JSON array.',
            ]);
        }

        return $decoded;
    }
}
