@extends('admin.layouts.dashboard')

@section('title', 'Admin Dashboard')

@section('admin-content')
<div class="card">
    <h2>Overview</h2>
    <div class="body">
        <div class="stats">
            <div class="stat">
                <strong>{{ $portfolioCount }}</strong>
                <span>Portfolio Items</span>
            </div>
            <div class="stat">
                <strong>{{ $breakingNewsCount }}</strong>
                <span>Breaking News Items</span>
            </div>
            <div class="stat">
                <strong>{{ $blogPostCount }}</strong>
                <span>Blog Posts</span>
            </div>
            <div class="stat">
                <strong>{{ $recentPostCount }}</strong>
                <span>Recent Links</span>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <h2>Quick Navigation</h2>
    <div class="body">
        <p class="small">Use the left menu to edit each section. This dashboard now separates all forms into dedicated pages for cleaner content management.</p>
    </div>
</div>
@endsection
