<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <style>
        :root {
            --brand-dark: #4a4a4a;
            --brand-accent: #fd6d52;
            --text-main: #2b2b2b;
            --muted: #767676;
            --border: #e4e4e4;
            --bg: #f5f5f5;
            --panel: #ffffff;
        }
        * { box-sizing: border-box; }
        body { margin: 0; font-family: "Open Sans", Arial, sans-serif; background: var(--bg); color: var(--text-main); }
        .topbar {
            background: var(--brand-dark);
            color: #fff;
            padding: 12px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid var(--brand-accent);
        }
        .topbar h1 { margin: 0; font-size: 18px; letter-spacing: .3px; }
        .top-actions { display: flex; gap: 8px; align-items: center; }
        .btn {
            border: none;
            border-radius: 4px;
            padding: 8px 12px;
            cursor: pointer;
            font-size: 13px;
            text-decoration: none;
            display: inline-block;
        }
        .btn-primary { background: var(--brand-accent); color: #fff; }
        .btn-muted { background: #6b6b6b; color: #fff; }
        .btn-danger { background: #cc3a3a; color: #fff; }
        .shell { display: grid; grid-template-columns: 250px 1fr; min-height: calc(100vh - 57px); }
        .sidebar { background: #fff; border-right: 1px solid var(--border); padding: 18px 0; }
        .nav-title { font-size: 11px; text-transform: uppercase; letter-spacing: .8px; color: var(--muted); padding: 0 18px 8px; }
        .nav-link {
            display: block;
            padding: 10px 18px;
            color: #444;
            text-decoration: none;
            border-left: 3px solid transparent;
        }
        .nav-link:hover { background: #f8f8f8; }
        .nav-link.active { background: #fff5f3; border-left-color: var(--brand-accent); color: #111; font-weight: 700; }
        .content { padding: 22px; }
        .card { background: var(--panel); border: 1px solid var(--border); border-radius: 6px; margin-bottom: 16px; }
        .card h2 { margin: 0; padding: 14px 16px; border-bottom: 1px solid var(--border); font-size: 18px; }
        .card .body { padding: 16px; }
        .alert { background: #e8f8ee; color: #1f6a36; border: 1px solid #b8e3c8; border-radius: 6px; padding: 10px 12px; margin-bottom: 14px; }
        .error { background: #fdecec; color: #8a2020; border: 1px solid #f4c2c2; border-radius: 6px; padding: 10px 12px; margin-bottom: 14px; }
        .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
        .item { border: 1px solid var(--border); border-radius: 6px; padding: 12px; margin-bottom: 10px; }
        label { display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; }
        input, textarea { width: 100%; border: 1px solid #d8d8d8; border-radius: 4px; padding: 8px; margin-bottom: 10px; font: inherit; }
        textarea { min-height: 90px; resize: vertical; }
        .row-actions { display: flex; gap: 8px; align-items: center; }
        .small { font-size: 12px; color: var(--muted); }
        .stats { display: grid; grid-template-columns: repeat(4, minmax(120px, 1fr)); gap: 12px; }
        .stat { border: 1px solid var(--border); border-radius: 6px; padding: 14px; background: #fff; }
        .stat strong { display: block; font-size: 22px; color: var(--brand-dark); }
        .stat span { font-size: 12px; color: var(--muted); }
        @media (max-width: 960px) {
            .shell { grid-template-columns: 1fr; }
            .sidebar { border-right: 0; border-bottom: 1px solid var(--border); }
            .grid, .stats { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="topbar">
        <h1>Content Admin Dashboard</h1>
        <div class="top-actions">
            <a href="{{ url('/') }}" class="btn btn-muted">View Site</a>
            <form method="POST" action="{{ route('admin.logout') }}" style="margin:0;">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>

    <div class="shell">
        <aside class="sidebar">
            <div class="nav-title">Navigation</div>
            <a class="nav-link {{ ($activeNav ?? '') === 'dashboard' ? 'active' : '' }}" href="{{ route('admin.content.index') }}">Dashboard</a>
            <a class="nav-link {{ ($activeNav ?? '') === 'settings' ? 'active' : '' }}" href="{{ route('admin.content.settings.page') }}">Homepage Settings</a>
            <a class="nav-link {{ ($activeNav ?? '') === 'portfolio' ? 'active' : '' }}" href="{{ route('admin.content.portfolio-items.page') }}">Portfolio Items</a>
            <a class="nav-link {{ ($activeNav ?? '') === 'breaking-news' ? 'active' : '' }}" href="{{ route('admin.content.breaking-news.page') }}">Breaking News</a>
            <a class="nav-link {{ ($activeNav ?? '') === 'blog-posts' ? 'active' : '' }}" href="{{ route('admin.content.blog-posts.page') }}">Blog Posts</a>
            <a class="nav-link {{ ($activeNav ?? '') === 'recent-links' ? 'active' : '' }}" href="{{ route('admin.content.recent-post-links.page') }}">Recent Links</a>
        </aside>

        <main class="content">
            @if (session('status'))
                <div class="alert">{{ session('status') }}</div>
            @endif

            @if ($errors->any())
                <div class="error">
                    <strong>Validation errors:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('admin-content')
        </main>
    </div>
</body>
</html>
