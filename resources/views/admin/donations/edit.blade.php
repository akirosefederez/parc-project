<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Donation</title>
</head>
<body>

<div style="max-width:600px;margin:40px auto;padding:20px;">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:30px;">
        <h1 style="margin:0;font-size:28px;color:#333;">Edit Donation</h1>
        <a href="{{ route('admin.donations.index') }}" style="padding:8px 12px;background:#6c757d;color:#fff;border-radius:6px;text-decoration:none;">← Back</a>
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
        <form action="{{ route('admin.donations.update', $donation->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom:20px;">
                <label for="fname" style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">First Name <span style="color:#dc3545;">*</span></label>
                <input type="text" id="fname" name="fname" value="{{ old('fname', $donation->fname) }}" required style="width:100%;padding:10px;border:1px solid #ced4da;border-radius:4px;font-size:14px;font-family:inherit;">
            </div>

            <div style="margin-bottom:20px;">
                <label for="lname" style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">Last Name <span style="color:#dc3545;">*</span></label>
                <input type="text" id="lname" name="lname" value="{{ old('lname', $donation->lname) }}" required style="width:100%;padding:10px;border:1px solid #ced4da;border-radius:4px;font-size:14px;font-family:inherit;">
            </div>

            <div style="margin-bottom:20px;">
                <label for="email" style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">Email <span style="color:#dc3545;">*</span></label>
                <input type="email" id="email" name="email" value="{{ old('email', $donation->email) }}" required style="width:100%;padding:10px;border:1px solid #ced4da;border-radius:4px;font-size:14px;font-family:inherit;">
            </div>

            <div style="margin-bottom:20px;">
                <label for="payment_method" style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">Payment Method</label>
                <input type="text" id="payment_method" name="payment_method" value="{{ old('payment_method', $donation->payment_method) }}" style="width:100%;padding:10px;border:1px solid #ced4da;border-radius:4px;font-size:14px;font-family:inherit;">
            </div>

            <div style="margin-bottom:20px;">
                <label for="frequency" style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">Frequency</label>
                <select id="frequency" name="frequency" style="width:100%;padding:10px;border:1px solid #ced4da;border-radius:4px;">
                    <option value="once" {{ (old('frequency', $donation->frequency) === 'once') ? 'selected' : '' }}>Once</option>
                    <option value="monthly" {{ (old('frequency', $donation->frequency) === 'monthly') ? 'selected' : '' }}>Monthly</option>
                </select>
            </div>

            <div style="margin-bottom:20px;">
                <label for="monthly_amount" style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">Monthly Amount</label>
                <input type="text" id="monthly_amount" name="monthly_amount" value="{{ old('monthly_amount', $donation->monthly_amount) }}" style="width:100%;padding:10px;border:1px solid #ced4da;border-radius:4px;font-size:14px;font-family:inherit;">
            </div>

            <div style="margin-bottom:20px;">
                <label style="display:flex;align-items:center;font-weight:400;">
                    <input type="checkbox" name="cover_processing_fee" value="1" {{ $donation->cover_processing_fee ? 'checked' : '' }} style="margin-right:8px;"> Cover Processing Fee
                </label>
            </div>

            <div style="display:flex;gap:10px;margin-top:30px;padding-top:30px;border-top:1px solid #dee2e6;">
                <button type="submit" style="padding:10px 20px;background:#007bff;color:#fff;border:none;border-radius:4px;cursor:pointer;font-weight:600;">💾 Save</button>
                <a href="{{ route('admin.donations.index') }}" style="padding:10px 20px;background:#6c757d;color:#fff;border-radius:4px;text-decoration:none;font-weight:600;">Cancel</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
