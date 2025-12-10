<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - PARC Admin</title>
</head>
<body style="margin:0;padding:0;background:#f5f5f5;font-family:Arial,sans-serif;">

<div style="max-width:1200px;margin:40px auto;padding:20px;">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:40px;">
        <h1 style="margin:0;font-size:32px;color:#333;">Dashboard</h1>
        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
            <button type="submit" style="background:#dc3545;color:#fff;padding:10px 20px;border-radius:6px;border:none;cursor:pointer;font-weight:600;">Logout</button>
        </form>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:20px;margin-bottom:40px;">
        <!-- Adoptions Card -->
        <div style="background:#fff;padding:25px;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.08);border-left:4px solid #007bff;">
            <p style="margin:0 0 10px 0;color:#666;font-size:14px;text-transform:uppercase;">Adoptions</p>
            <h3 style="margin:0;font-size:36px;font-weight:bold;color:#007bff;">{{ $adoptionCount }}</h3>
            <a href="{{ route('admin.adoptions.index') }}" style="display:inline-block;margin-top:15px;padding:8px 12px;background:#007bff;color:#fff;text-decoration:none;border-radius:4px;font-size:14px;">View All</a>
        </div>

        <!-- Donations Card -->
        <div style="background:#fff;padding:25px;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.08);border-left:4px solid #28a745;">
            <p style="margin:0 0 10px 0;color:#666;font-size:14px;text-transform:uppercase;">Donations</p>
            <h3 style="margin:0;font-size:36px;font-weight:bold;color:#28a745;">{{ $donationCount }}</h3>
            <a href="{{ route('admin.donations.index') }}" style="display:inline-block;margin-top:15px;padding:8px 12px;background:#28a745;color:#fff;text-decoration:none;border-radius:4px;font-size:14px;">View All</a>
        </div>

        <!-- Contact Letters Card -->
        <div style="background:#fff;padding:25px;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.08);border-left:4px solid #ffc107;">
            <p style="margin:0 0 10px 0;color:#666;font-size:14px;text-transform:uppercase;">Contact Letters</p>
            <h3 style="margin:0;font-size:36px;font-weight:bold;color:#ffc107;">{{ $contactLetterCount }}</h3>
            <a href="{{ route('admin.contact-letters.index') }}" style="display:inline-block;margin-top:15px;padding:8px 12px;background:#ffc107;color:#000;text-decoration:none;border-radius:4px;font-size:14px;">View All</a>
        </div>

        <!-- Users Card -->
        <div style="background:#fff;padding:25px;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.08);border-left:4px solid #17a2b8;">
            <p style="margin:0 0 10px 0;color:#666;font-size:14px;text-transform:uppercase;">Users</p>
            <h3 style="margin:0;font-size:36px;font-weight:bold;color:#17a2b8;">{{ $userCount }}</h3>
            <a href="#" style="display:inline-block;margin-top:15px;padding:8px 12px;background:#17a2b8;color:#fff;text-decoration:none;border-radius:4px;font-size:14px;">View All</a>
        </div>
    </div>

    <div style="background:#fff;padding:25px;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.08);">
        <h2 style="margin-top:0;margin-bottom:20px;font-size:22px;color:#333;">Quick Actions</h2>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:15px;">
            <a href="{{ route('admin.adoptions.index') }}" style="display:block;padding:15px;background:#f8f9fa;border:1px solid #dee2e6;border-radius:4px;text-decoration:none;color:#333;text-align:center;font-weight:600;transition:all 0.3s;">📋 Manage Adoptions</a>
            <a href="{{ route('admin.contact-letters.index') }}" style="display:block;padding:15px;background:#f8f9fa;border:1px solid #dee2e6;border-radius:4px;text-decoration:none;color:#333;text-align:center;font-weight:600;transition:all 0.3s;">📧 Manage Contact Letters</a>
            <a href="/" style="display:block;padding:15px;background:#f8f9fa;border:1px solid #dee2e6;border-radius:4px;text-decoration:none;color:#333;text-align:center;font-weight:600;transition:all 0.3s;">🏠 Visit Site</a>
        </div>
    </div>
</div>

</body>
</html>

