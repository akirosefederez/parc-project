@extends('layouts.app')

@section('content')
<div style="max-width:900px;margin:40px auto;padding:20px;">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">
        <h1 style="margin:0;font-size:24px;">Dashboard</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" style="background:#dc3545;color:#fff;padding:8px 12px;border-radius:6px;border:none;cursor:pointer;">Logout</button>
        </form>
    </div>

    <div style="background:#fff;padding:20px;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.08);">
        <p style="margin:0;font-size:16px;">Welcome back, <strong>{{ auth()->user()?->name ?? auth()->user()?->email }}</strong>!</p>
        <p style="color:#666;margin-top:8px;">Use the admin links to manage data or visit the site.</p>

        <div style="margin-top:18px;display:flex;gap:12px;flex-wrap:wrap;">
            <a href="{{ route('admin.contact-letters.index') }}" style="display:inline-block;padding:8px 12px;background:#007bff;color:#fff;border-radius:6px;text-decoration:none;">Manage Contact Letters</a>
            <a href="/" style="display:inline-block;padding:8px 12px;background:#6c757d;color:#fff;border-radius:6px;text-decoration:none;">Visit Site</a>
        </div>
    </div>
</div>
@endsection
