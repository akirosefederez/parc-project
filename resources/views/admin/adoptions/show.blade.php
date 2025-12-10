<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div style="max-width:600px;margin:40px auto;padding:20px;">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:30px;">
        <h1 style="margin:0;font-size:28px;color:#333;">View Adoption</h1>
        <a href="{{ route('admin.adoptions.index') }}" style="padding:8px 12px;background:#6c757d;color:#fff;border-radius:6px;text-decoration:none;">← Back</a>
    </div>

    <div style="background:#fff;padding:30px;border-radius:8px;box-shadow:0 2px 4px rgba(0,0,0,0.1);">
        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">First Name</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $adoption->fname }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Last Name</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $adoption->lname }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Email</label>
            <p style="margin:0;color:#333;font-size:16px;"><a href="mailto:{{ $adoption->email }}" style="color:#007bff;text-decoration:none;">{{ $adoption->email }}</a></p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Country</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $adoption->country ?? '—' }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Street</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $adoption->street ?? '—' }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">City</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $adoption->city ?? '—' }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Postal Code</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $adoption->postal ?? '—' }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Email Updates</label>
            <p style="margin:0;">
                <span style="padding:6px 12px;border-radius:4px;font-size:12px;font-weight:600;background:{{ $adoption->emailUpdates === 'yes' ? '#28a745' : '#dc3545' }};color:#fff;">
                    {{ $adoption->emailUpdates === 'yes' ? 'Yes' : 'No' }}
                </span>
            </p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Text Updates</label>
            <p style="margin:0;">
                <span style="padding:6px 12px;border-radius:4px;font-size:12px;font-weight:600;background:{{ $adoption->textUpdates === 'yes' ? '#28a745' : '#dc3545' }};color:#fff;">
                    {{ $adoption->textUpdates === 'yes' ? 'Yes' : 'No' }}
                </span>
            </p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Payment Method</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $adoption->payment_method ?? '—' }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Card Number</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $adoption->card_number ? '**** **** **** ' . substr($adoption->card_number, -4) : '—' }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Processing Fee Coverage</label>
            <p style="margin:0;">
                <span style="padding:6px 12px;border-radius:4px;font-size:12px;font-weight:600;background:{{ $adoption->cover_processing_fee ? '#28a745' : '#dc3545' }};color:#fff;">
                    {{ $adoption->cover_processing_fee ? 'Yes' : 'No' }}
                </span>
            </p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Registered</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $adoption->created_at->format('Y-m-d H:i:s') }}</p>
        </div>

        <div style="display:flex;gap:10px;margin-top:30px;padding-top:30px;border-top:1px solid #dee2e6;">
            <a href="{{ route('admin.adoptions.edit', $adoption->id) }}" style="padding:10px 20px;background:#ffc107;color:#000;border-radius:4px;text-decoration:none;font-weight:600;">✏️ Edit</a>
            <form action="{{ route('admin.adoptions.destroy', $adoption->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" style="padding:10px 20px;background:#dc3545;color:#fff;border:none;border-radius:4px;cursor:pointer;font-weight:600;" onclick="return confirm('Delete this record?')">🗑️ Delete</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>