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
        <h1 style="margin:0;font-size:28px;color:#333;">View Donations</h1>
        <a href="{{ route('admin.donations.index') }}" style="padding:8px 12px;background:#6c757d;color:#fff;border-radius:6px;text-decoration:none;">← Back</a>
    </div>

    <div style="background:#fff;padding:30px;border-radius:8px;box-shadow:0 2px 4px rgba(0,0,0,0.1);">
        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">First Name</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $donation->fname }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Last Name</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $donation->lname }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Email</label>
            <p style="margin:0;color:#333;font-size:16px;"><a href="mailto:{{ $donation->email }}" style="color:#007bff;text-decoration:none;">{{ $donation->email }}</a></p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Country</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $donation->country ?? '—' }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Street</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $donation->street ?? '—' }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">City</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $donation->city ?? '—' }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Postal Code</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $donation->postal ?? '—' }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Email Updates</label>
            <p style="margin:0;">
                <span style="padding:6px 12px;border-radius:4px;font-size:12px;font-weight:600;background:{{ $donation->emailUpdates === 'yes' ? '#28a745' : '#dc3545' }};color:#fff;">
                    {{ $donation->emailUpdates === 'yes' ? 'Yes' : 'No' }}
                </span>
            </p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Text Updates</label>
            <p style="margin:0;">
                <span style="padding:6px 12px;border-radius:4px;font-size:12px;font-weight:600;background:{{ $donation->textUpdates === 'yes' ? '#28a745' : '#dc3545' }};color:#fff;">
                    {{ $donation->textUpdates === 'yes' ? 'Yes' : 'No' }}
                </span>
            </p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Payment Method</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $donation->payment_method ?? '—' }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Frequency</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $donation->frequency ?? 'once' }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Amount</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $donation->monthly_amount ?? '—' }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Card Number</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $donation->card_number ? '**** **** **** ' . substr($donation->card_number, -4) : '—' }}</p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Processing Fee Coverage</label>
            <p style="margin:0;">
                <span style="padding:6px 12px;border-radius:4px;font-size:12px;font-weight:600;background:{{ $donation->cover_processing_fee ? '#28a745' : '#dc3545' }};color:#fff;">
                    {{ $donation->cover_processing_fee ? 'Yes' : 'No' }}
                </span>
            </p>
        </div>

        <div style="margin-bottom:25px;">
            <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;text-transform:uppercase;">Registered</label>
            <p style="margin:0;color:#333;font-size:16px;">{{ $donation->created_at->format('Y-m-d H:i:s') }}</p>
        </div>

        <div style="display:flex;gap:10px;margin-top:30px;padding-top:30px;border-top:1px solid #dee2e6;">
            <a href="{{ route('admin.donations.edit', $donation->id) }}" style="padding:10px 20px;background:#ffc107;color:#000;border-radius:4px;text-decoration:none;font-weight:600;">✏️ Edit</a>
            <form action="{{ route('admin.donations.destroy', $donation->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" style="padding:10px 20px;background:#dc3545;color:#fff;border:none;border-radius:4px;cursor:pointer;font-weight:600;" onclick="return confirm('Delete this record?')">🗑️ Delete</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>