<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showLogin(): View
    {
        return view('admin.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $configuredUsername = (string) config('admin.username');
        $configuredPassword = (string) config('admin.password');

        $passwordIsValid = str_starts_with($configuredPassword, '$2y$')
            ? Hash::check($credentials['password'], $configuredPassword)
            : hash_equals($configuredPassword, $credentials['password']);

        if ($credentials['username'] !== $configuredUsername || ! $passwordIsValid) {
            return back()->withErrors(['username' => 'Invalid admin credentials.'])->withInput();
        }

        $request->session()->regenerate();
        $request->session()->put('is_admin_authenticated', true);

        return redirect()->route('admin.dashboard');
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->forget('is_admin_authenticated');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
