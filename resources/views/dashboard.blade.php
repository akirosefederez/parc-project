<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div style="max-width:1100px;margin:40px auto;padding:20px;">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">
        <h1 style="margin:0;font-size:24px;">Admin Dashboard</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" style="background:#dc3545;color:#fff;padding:8px 12px;border-radius:6px;border:none;cursor:pointer;">Logout</button>
        </form>
    </div>
      <div style="background:#fff;padding:20px;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.08);">
        <p style="margin:0;font-size:16px;">Welcome back, <strong>{{ auth()->user()?->name ?? auth()->user()?->email }}</strong>!</p>
        <p style="color:#666;margin-top:8px;">Use the admin links to manage data or visit the site.</p>

        <div style="margin-top:18px;display:flex;gap:12px;flex-wrap:wrap;">
            <a href="/" style="display:inline-block;padding:8px 12px;background:#6c757d;color:#fff;border-radius:6px;text-decoration:none;">Visit Site</a>
        </div>
      </div>

    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:16px;">
        <a href="{{ route('admin.donations.index') }}" style="background:#fff;padding:18px;border-radius:8px;display:block;text-decoration:none;color:inherit;box-shadow:0 2px 6px rgba(0,0,0,0.06);">
            <div style="font-size:14px;color:#6b7280;margin-bottom:8px;">Donations</div>
        </a>

        <a href="{{ route('admin.adoptions.index') }}" style="background:#fff;padding:18px;border-radius:8px;display:block;text-decoration:none;color:inherit;box-shadow:0 2px 6px rgba(0,0,0,0.06);">
            <div style="font-size:14px;color:#6b7280;margin-bottom:8px;">Adoptions</div>
        </a>

        <a href="{{ route('admin.contact-letters.index') }}" style="background:#fff;padding:18px;border-radius:8px;display:block;text-decoration:none;color:inherit;box-shadow:0 2px 6px rgba(0,0,0,0.06);">
            <div style="font-size:14px;color:#6b7280;margin-bottom:8px;">Contact Letters</div>
        </a>

        <a href="{{ route('admin.users.index') }}" style="background:#fff;padding:18px;border-radius:8px;display:block;text-decoration:none;color:inherit;box-shadow:0 2px 6px rgba(0,0,0,0.06);">
            <div style="font-size:14px;color:#6b7280;margin-bottom:8px;">Users</div>
        </a>
    </div>

    <div style="margin-top:24px;">
        <p style="color:#6b7280">Quick Links</p>
        <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:8px;">
            <a href="{{ route('admin.donations.index') }}" style="padding:8px 12px;background:#007bff;color:#fff;border-radius:6px;text-decoration:none;">Manage Donations</a>
            <a href="{{ route('admin.adoptions.index') }}" style="padding:8px 12px;background:#17a2b8;color:#fff;border-radius:6px;text-decoration:none;">Manage Adoptions</a>
            <a href="{{ route('admin.contact-letters.index') }}" style="padding:8px 12px;background:#6f42c1;color:#fff;border-radius:6px;text-decoration:none;">Manage Contact Letters</a>
            <a href="{{ route('admin.users.index') }}" style="padding:8px 12px;background:#6c757d;color:#fff;border-radius:6px;text-decoration:none;">Manage Users</a>
        </div>
    </div>
</div>
</body>
</html>

