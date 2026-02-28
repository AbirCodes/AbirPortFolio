<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/coloring.css') }}" rel="stylesheet" type="text/css">
</head>
<body class="dark-scheme">
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Admin Dashboard</h2>
        <form method="POST" action="{{ route('admin.logout') }}">@csrf <button class="btn btn-outline-light">Logout</button></form>
    </div>

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="card bg-dark text-light mb-4"><div class="card-body">
        <h4>Site Settings</h4>
        <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">@csrf
            <div class="row g-3">
                <div class="col-md-6"><input class="form-control" name="brand_name" placeholder="Brand name" value="{{ old('brand_name', $settings->brand_name) }}" required></div>
                <div class="col-md-6"><input class="form-control" name="hero_title" placeholder="Hero title" value="{{ old('hero_title', $settings->hero_title) }}" required></div>
                <div class="col-12"><textarea class="form-control" name="hero_subtitle" placeholder="Hero subtitle">{{ old('hero_subtitle', $settings->hero_subtitle) }}</textarea></div>
                <div class="col-md-6">
                    <label class="form-label">Index Hero Image (Upload)</label>
                    <input class="form-control" type="file" name="home_hero_image" accept="image/*">
                    @if($settings->home_hero_image_path)
                        <small class="text-muted d-block mt-2">Current: {{ asset('storage/'.$settings->home_hero_image_path) }}</small>
                    @endif
                </div>
                <div class="col-md-6"><input class="form-control" name="about_title" placeholder="About title" value="{{ old('about_title', $settings->about_title) }}" required></div>
                <div class="col-md-6"><input class="form-control" name="contact_email" placeholder="Contact email" value="{{ old('contact_email', $settings->contact_email) }}"></div>
                <div class="col-md-6"><input class="form-control" name="contact_phone" placeholder="Contact phone" value="{{ old('contact_phone', $settings->contact_phone) }}"></div>
                <div class="col-12"><textarea class="form-control" name="about_text" placeholder="About text">{{ old('about_text', $settings->about_text) }}</textarea></div>
                <div class="col-12"><textarea class="form-control" name="contact_intro" placeholder="Contact intro">{{ old('contact_intro', $settings->contact_intro) }}</textarea></div>

                <div class="col-12 mt-3"><h5>About Page Structured Content (JSON Arrays)</h5></div>
                <div class="col-12">
                    <label class="form-label">About Skills JSON</label>
                    <textarea class="form-control" rows="6" name="about_skills_json" placeholder='[{"title":"Figma","image_path":"logo/figma.webp"}]'>{{ old('about_skills_json', json_encode($settings->about_skills ?? [], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)) }}</textarea>
                </div>
                <div class="col-12">
                    <label class="form-label">Coding Skills JSON</label>
                    <textarea class="form-control" rows="6" name="about_coding_skills_json" placeholder='[{"name":"HTML","level":80}]'>{{ old('about_coding_skills_json', json_encode($settings->about_coding_skills ?? [], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)) }}</textarea>
                </div>
                <div class="col-12">
                    <label class="form-label">Experiences JSON</label>
                    <textarea class="form-control" rows="6" name="about_experiences_json" placeholder='[{"period":"2022-Present","title":"Lead Designer","organization":"Tech Co"}]'>{{ old('about_experiences_json', json_encode($settings->about_experiences ?? [], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)) }}</textarea>
                </div>
                <div class="col-12">
                    <label class="form-label">Education JSON</label>
                    <textarea class="form-control" rows="6" name="about_education_json" placeholder='[{"year":"2018","title":"Master in Design","organization":"University"}]'>{{ old('about_education_json', json_encode($settings->about_education ?? [], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)) }}</textarea>
                </div>
                <div class="col-12">
                    <label class="form-label">Testimonials JSON</label>
                    <textarea class="form-control" rows="6" name="about_testimonials_json" placeholder='[{"name":"John","role":"CEO","quote":"Great work","image_path":"testimonial/1.webp"}]'>{{ old('about_testimonials_json', json_encode($settings->about_testimonials ?? [], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)) }}</textarea>
                </div>
                <div class="col-12">
                    <label class="form-label">Counters JSON</label>
                    <textarea class="form-control" rows="6" name="about_counters_json" placeholder='[{"label":"Hours of Works","value":8240}]'>{{ old('about_counters_json', json_encode($settings->about_counters ?? [], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)) }}</textarea>
                </div>

                <div class="col-12"><button class="btn btn-light">Save Settings</button></div>
            </div>
        </form>
    </div></div>

    <div class="card bg-dark text-light mb-4"><div class="card-body">
        <h4>Services</h4>
        <form method="POST" action="{{ route('admin.services.store') }}" class="row g-2 mb-3">@csrf
            <div class="col-md-3"><input class="form-control" name="title" placeholder="Title" required></div>
            <div class="col-md-5"><input class="form-control" name="description" placeholder="Description"></div>
            <div class="col-md-2"><input class="form-control" type="number" name="sort_order" placeholder="Order" value="0"></div>
            <div class="col-md-1"><input class="form-check-input mt-2" type="checkbox" name="is_active" value="1" checked></div>
            <div class="col-md-1"><button class="btn btn-light w-100">Add</button></div>
        </form>
        @foreach($services as $service)
            <form method="POST" action="{{ route('admin.services.update', $service) }}" class="row g-2 mb-2">
                @csrf @method('PUT')
                <div class="col-md-3"><input class="form-control" name="title" value="{{ $service->title }}" required></div>
                <div class="col-md-4"><input class="form-control" name="description" value="{{ $service->description }}"></div>
                <div class="col-md-1"><input class="form-control" type="number" name="sort_order" value="{{ $service->sort_order }}"></div>
                <div class="col-md-1"><input class="form-check-input mt-2" type="checkbox" name="is_active" value="1" {{ $service->is_active ? 'checked' : '' }}></div>
                <div class="col-md-2"><button class="btn btn-outline-light w-100">Update</button></div>
            </form>
            <form method="POST" action="{{ route('admin.services.delete', $service) }}" class="mb-3">@csrf @method('DELETE')<button class="btn btn-sm btn-danger">Delete</button></form>
        @endforeach
    </div></div>

    <div class="card bg-dark text-light mb-4"><div class="card-body">
        <h4>Works</h4>
        <form method="POST" action="{{ route('admin.works.store') }}" class="row g-2 mb-3">@csrf
            <div class="col-md-2"><input class="form-control" name="title" placeholder="Title" required></div>
            <div class="col-md-2"><input class="form-control" name="category" placeholder="Category"></div>
            <div class="col-md-1"><input class="form-control" type="number" name="year" placeholder="Year"></div>
            <div class="col-md-2"><input class="form-control" name="image_path" placeholder="works/1.webp"></div>
            <div class="col-md-3"><input class="form-control" name="summary" placeholder="Summary"></div>
            <div class="col-md-1"><input class="form-check-input mt-2" type="checkbox" name="is_active" value="1" checked></div>
            <div class="col-md-1"><button class="btn btn-light w-100">Add</button></div>
            <div class="col-12"><textarea class="form-control" name="details" placeholder="Details"></textarea></div>
        </form>
        @foreach($works as $work)
            <form method="POST" action="{{ route('admin.works.update', $work) }}" class="row g-2 mb-2">@csrf @method('PUT')
                <div class="col-md-2"><input class="form-control" name="title" value="{{ $work->title }}" required></div>
                <div class="col-md-2"><input class="form-control" name="category" value="{{ $work->category }}"></div>
                <div class="col-md-1"><input class="form-control" type="number" name="year" value="{{ $work->year }}"></div>
                <div class="col-md-2"><input class="form-control" name="image_path" value="{{ $work->image_path }}"></div>
                <div class="col-md-3"><input class="form-control" name="summary" value="{{ $work->summary }}"></div>
                <div class="col-md-1"><input class="form-check-input mt-2" type="checkbox" name="is_active" value="1" {{ $work->is_active ? 'checked' : '' }}></div>
                <div class="col-md-1"><button class="btn btn-outline-light w-100">Update</button></div>
                <div class="col-12"><textarea class="form-control" name="details">{{ $work->details }}</textarea></div>
            </form>
            <form method="POST" action="{{ route('admin.works.delete', $work) }}" class="mb-3">@csrf @method('DELETE')<button class="btn btn-sm btn-danger">Delete</button></form>
        @endforeach
    </div></div>

    <div class="card bg-dark text-light mb-4"><div class="card-body">
        <h4>Blog Posts</h4>
        <form method="POST" action="{{ route('admin.posts.store') }}" class="row g-2 mb-3">@csrf
            <div class="col-md-3"><input class="form-control" name="title" placeholder="Title" required></div>
            <div class="col-md-2"><input class="form-control" name="slug" placeholder="optional-slug"></div>
            <div class="col-md-2"><input class="form-control" name="image_path" placeholder="blog/1.webp"></div>
            <div class="col-md-2"><input class="form-control" type="datetime-local" name="published_at"></div>
            <div class="col-md-1"><input class="form-check-input mt-2" type="checkbox" name="is_published" value="1" checked></div>
            <div class="col-md-2"><button class="btn btn-light w-100">Add</button></div>
            <div class="col-12"><input class="form-control" name="excerpt" placeholder="Excerpt"></div>
            <div class="col-12"><textarea class="form-control" name="content" placeholder="Content"></textarea></div>
        </form>
        @foreach($posts as $post)
            <form method="POST" action="{{ route('admin.posts.update', $post) }}" class="row g-2 mb-2">@csrf @method('PUT')
                <div class="col-md-3"><input class="form-control" name="title" value="{{ $post->title }}" required></div>
                <div class="col-md-2"><input class="form-control" name="slug" value="{{ $post->slug }}"></div>
                <div class="col-md-2"><input class="form-control" name="image_path" value="{{ $post->image_path }}"></div>
                <div class="col-md-2"><input class="form-control" type="datetime-local" name="published_at" value="{{ optional($post->published_at)->format('Y-m-d\TH:i') }}"></div>
                <div class="col-md-1"><input class="form-check-input mt-2" type="checkbox" name="is_published" value="1" {{ $post->is_published ? 'checked' : '' }}></div>
                <div class="col-md-2"><button class="btn btn-outline-light w-100">Update</button></div>
                <div class="col-12"><input class="form-control" name="excerpt" value="{{ $post->excerpt }}"></div>
                <div class="col-12"><textarea class="form-control" name="content">{{ $post->content }}</textarea></div>
            </form>
            <form method="POST" action="{{ route('admin.posts.delete', $post) }}" class="mb-3">@csrf @method('DELETE')<button class="btn btn-sm btn-danger">Delete</button></form>
        @endforeach
    </div></div>
</div>
</body>
</html>
