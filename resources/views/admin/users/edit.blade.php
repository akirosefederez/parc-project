<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>

<div style="max-width:600px;margin:40px auto;padding:20px;">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:30px;">
        <h1 style="margin:0;font-size:28px;color:#333;">Edit User</h1>
        <a href="{{ route('admin.users.index') }}" style="padding:8px 12px;background:#6c757d;color:#fff;border-radius:6px;text-decoration:none;">← Back</a>
    </div>

    @if($errors->any())
        <div style="padding:15px;margin-bottom:20px;background:#f8d7da;color:#721c24;border:1px solid #f5c6cb;border-radius:4px;">
            <h4 style="margin-top:0;">Please fix the following errors:</h4>
            <ul style="margin-bottom:0;padding-left:20px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div style="background:#fff;padding:30px;border-radius:8px;box-shadow:0 2px 4px rgba(0,0,0,0.1);">
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom:20px;">
                <label for="name" style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">Name <span style="color:#dc3545;">*</span></label>
                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required style="width:100%;padding:10px;border:1px solid #ced4da;border-radius:4px;font-size:14px;font-family:inherit;">
            </div>

            <div style="margin-bottom:20px;">
                <label for="email" style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">Email <span style="color:#dc3545;">*</span></label>
                <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required style="width:100%;padding:10px;border:1px solid #ced4da;border-radius:4px;font-size:14px;font-family:inherit;">
            </div>

            <div style="margin-bottom:20px;">
                <label for="password" style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">Password (leave blank to keep)</label>
                <input type="password" id="password" name="password" style="width:100%;padding:10px;border:1px solid #ced4da;border-radius:4px;font-size:14px;font-family:inherit;">
            </div>

            <div style="display:flex;gap:10px;margin-top:30px;padding-top:30px;border-top:1px solid #dee2e6;">
                <button type="submit" style="padding:10px 20px;background:#007bff;color:#fff;border:none;border-radius:4px;cursor:pointer;font-weight:600;">💾 Save</button>
                <a href="{{ route('admin.users.index') }}" style="padding:10px 20px;background:#6c757d;color:#fff;border-radius:4px;text-decoration:none;font-weight:600;">Cancel</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
