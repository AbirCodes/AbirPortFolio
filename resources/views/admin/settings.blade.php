@extends('admin.layouts.dashboard')

@section('title', 'Homepage Settings')

@section('admin-content')
<div class="card">
    <h2>Homepage Settings</h2>
    <div class="body">
        <form method="POST" action="{{ route('admin.content.settings.update') }}" enctype="multipart/form-data">
            @csrf
            <div class="grid">
                <div>
                    <label>Portfolio Title</label>
                    <input type="text" name="portfolio_title" value="{{ old('portfolio_title', $settings->portfolio_title) }}">
                </div>
                <div>
                    <label>Portfolio Image Path (public path)</label>
                    <input type="text" name="portfolio_image" value="{{ old('portfolio_image', $settings->portfolio_image) }}">
                    <label>Upload Portfolio Image</label>
                    <input type="file" name="portfolio_image_upload" accept="image/*">
                </div>
            </div>

            <label>Portfolio Description</label>
            <textarea name="portfolio_description">{{ old('portfolio_description', $settings->portfolio_description) }}</textarea>

            <div class="grid">
                <div>
                    <label>Sidebar Title</label>
                    <input type="text" name="sidebar_title" value="{{ old('sidebar_title', $settings->sidebar_title) }}">
                </div>
                <div>
                    <label>Sidebar Image Path (public path)</label>
                    <input type="text" name="sidebar_image" value="{{ old('sidebar_image', $settings->sidebar_image) }}">
                    <label>Upload Sidebar Image</label>
                    <input type="file" name="sidebar_image_upload" accept="image/*">
                </div>
            </div>

            <label>Sidebar Description</label>
            <textarea name="sidebar_description">{{ old('sidebar_description', $settings->sidebar_description) }}</textarea>

            <label>Profile Name</label>
            <input type="text" name="profile_name" value="{{ old('profile_name', $settings->profile_name) }}">

            <label>Profile Bio</label>
            <textarea name="profile_bio">{{ old('profile_bio', $settings->profile_bio) }}</textarea>

            <button type="submit" class="btn btn-primary">Save Settings</button>
        </form>
    </div>
</div>
@endsection
