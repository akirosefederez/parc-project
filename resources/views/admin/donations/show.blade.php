<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Details</title>
</head>
<body>

<div style="max-width:800px;margin:40px auto;padding:20px;">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:30px;">
        <h1 style="margin:0;font-size:28px;color:#333;">Donation Details</h1>
        <a href="{{ route('admin.donations.index') }}" style="padding:8px 12px;background:#6c757d;color:#fff;border-radius:6px;text-decoration:none;">← Back</a>
    </div>

    <div style="background:#fff;padding:30px;border-radius:8px;box-shadow:0 2px 4px rgba(0,0,0,0.1);">
        <p><strong>Name:</strong> {{ $donation->fname }} {{ $donation->lname }}</p>
        <p><strong>Email:</strong> {{ $donation->email }}</p>
        <p><strong>Country:</strong> {{ $donation->country ?? '—' }}</p>
        <p><strong>Street:</strong> {{ $donation->street ?? '—' }}</p>
        <p><strong>City:</strong> {{ $donation->city ?? '—' }}</p>
        <p><strong>Postal:</strong> {{ $donation->postal ?? '—' }}</p>
        <p><strong>Email Updates:</strong> {{ $donation->emailUpdates === 'yes' ? 'Yes' : 'No' }}</p>
        <p><strong>Text Updates:</strong> {{ $donation->textUpdates === 'yes' ? 'Yes' : 'No' }}</p>
        <p><strong>Payment Method:</strong> {{ $donation->payment_method ?? '—' }}</p>
        <p><strong>Frequency:</strong> {{ $donation->frequency ?? 'once' }}</p>
        <p><strong>Monthly Amount:</strong> {{ $donation->monthly_amount ?? '—' }}</p>
        <p><strong>Cover Fee:</strong> {{ $donation->cover_processing_fee ? 'Yes' : 'No' }}</p>
        <p><strong>Submitted:</strong> {{ $donation->created_at->format('Y-m-d H:i') }}</p>
    </div>
</div>

</body>
</html>
