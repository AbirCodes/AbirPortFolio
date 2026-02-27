<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; background: #f3f4f6; color: #111827; }
        .wrapper { min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 16px; }
        .card { width: 100%; max-width: 420px; background: #fff; border: 1px solid #e5e7eb; border-radius: 10px; padding: 20px; }
        h1 { margin-top: 0; margin-bottom: 16px; font-size: 24px; }
        label { display: block; font-weight: 700; font-size: 13px; margin-bottom: 6px; }
        input { width: 100%; box-sizing: border-box; border: 1px solid #d1d5db; border-radius: 6px; padding: 10px; margin-bottom: 12px; }
        .btn { border: none; border-radius: 6px; padding: 10px 12px; cursor: pointer; width: 100%; background: #2563eb; color: #fff; }
        .error { background: #fee2e2; color: #991b1b; border: 1px solid #fecaca; border-radius: 6px; padding: 10px; margin-bottom: 12px; }
        .hint { margin-top: 12px; font-size: 12px; color: #6b7280; }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="card">
        <h1>Admin Login</h1>

        @if ($errors->has('login'))
            <div class="error">{{ $errors->first('login') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <label>Username</label>
            <input type="text" name="username" value="{{ old('username') }}" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit" class="btn">Sign In</button>
        </form>

        <p class="hint">Set ADMIN_USERNAME and ADMIN_PASSWORD in your .env file.</p>
    </div>
</div>
</body>
</html>
