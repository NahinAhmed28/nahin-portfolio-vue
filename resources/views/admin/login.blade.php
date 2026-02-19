@extends('layouts.app')

@section('content')
<div style="max-width: 420px; margin: 80px auto; font-family: sans-serif;">
    <h1>Admin Login</h1>
    <form method="POST" action="{{ route('admin.login.attempt') }}">
        @csrf
        <label>Email</label>
        <input type="email" name="email" required style="width:100%;padding:8px;margin-bottom:12px;">
        <label>Password</label>
        <input type="password" name="password" required style="width:100%;padding:8px;margin-bottom:12px;">
        <button type="submit">Login</button>
    </form>
    @if ($errors->any())
        <p style="color:red;">{{ $errors->first() }}</p>
    @endif
</div>
@endsection
