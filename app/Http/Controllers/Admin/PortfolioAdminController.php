<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioProfile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PortfolioAdminController extends Controller
{
    public function showLogin(): View
    {
        return view('admin.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($credentials)) {
            return back()->withErrors(['email' => 'Invalid credentials.']);
        }

        $request->session()->regenerate();

        return redirect()->route('admin.dashboard');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function dashboard(): View
    {
        $profile = PortfolioProfile::query()->latest()->first();

        return view('admin.dashboard', compact('profile'));
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'hero_title' => ['required', 'string', 'max:255'],
            'hero_roles' => ['required', 'string'],
            'about_summary' => ['required', 'string'],
            'services' => ['required', 'string'],
        ]);

        $profile = PortfolioProfile::query()->latest()->first() ?? new PortfolioProfile();
        $profile->fill([
            ...$validated,
            'hero_roles' => array_values(array_filter(array_map('trim', explode(',', $validated['hero_roles'])))),
            'services' => collect(explode(PHP_EOL, $validated['services']))
                ->map(fn (string $line): array => array_pad(array_map('trim', explode('|', $line, 2)), 2, ''))
                ->filter(fn (array $row): bool => ! empty($row[0]))
                ->map(fn (array $row): array => ['title' => $row[0], 'description' => $row[1]])
                ->values()
                ->all(),
        ]);
        $profile->save();

        return back()->with('status', 'Portfolio updated successfully.');
    }
}
