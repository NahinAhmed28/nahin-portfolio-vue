@extends('layouts.app')

@section('content')
<div style="max-width: 900px; margin: 40px auto; font-family: sans-serif;">
    <h1>Portfolio Admin Dashboard</h1>
    <form method="POST" action="{{ route('admin.dashboard.update') }}">
        @csrf
        <label>Full Name</label>
        <input type="text" name="full_name" value="{{ old('full_name', $profile?->full_name) }}" style="width:100%;padding:8px;margin-bottom:12px;">

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', $profile?->email) }}" style="width:100%;padding:8px;margin-bottom:12px;">

        <label>Phone</label>
        <input type="text" name="phone" value="{{ old('phone', $profile?->phone) }}" style="width:100%;padding:8px;margin-bottom:12px;">

        <label>Address</label>
        <input type="text" name="address" value="{{ old('address', $profile?->address) }}" style="width:100%;padding:8px;margin-bottom:12px;">

        <label>Hero Title</label>
        <input type="text" name="hero_title" value="{{ old('hero_title', $profile?->hero_title) }}" style="width:100%;padding:8px;margin-bottom:12px;">

        <label>Hero Roles (comma separated)</label>
        <input type="text" name="hero_roles" value="{{ old('hero_roles', implode(', ', $profile?->hero_roles ?? [])) }}" style="width:100%;padding:8px;margin-bottom:12px;">

        <label>About Summary</label>
        <textarea name="about_summary" style="width:100%;padding:8px;margin-bottom:12px;" rows="3">{{ old('about_summary', $profile?->about_summary) }}</textarea>

        <label>Services (one per line: title|description)</label>
        <textarea name="services" style="width:100%;padding:8px;margin-bottom:12px;" rows="6">{{ old('services', collect($profile?->services ?? [])->map(fn($service) => $service['title'].'|'.$service['description'])->implode(PHP_EOL)) }}</textarea>

        <button type="submit">Save</button>
    </form>

    <form method="POST" action="{{ route('admin.logout') }}" style="margin-top:12px;">
        @csrf
        <button type="submit">Logout</button>
    </form>

    @if (session('status'))
        <p style="color:green;">{{ session('status') }}</p>
    @endif
</div>
@endsection
