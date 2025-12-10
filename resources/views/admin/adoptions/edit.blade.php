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
        <h1 style="margin:0;font-size:28px;color:#333;">Edit Adoption</h1>
        <a href="{{ route('admin.adoptions.index') }}" style="padding:8px 12px;background:#6c757d;color:#fff;border-radius:6px;text-decoration:none;">← Back</a>
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
        <form action="{{ route('admin.adoptions.update', $adoption->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom:20px;">
                <label for="fname" style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">First Name <span style="color:#dc3545;">*</span></label>
                <input type="text" id="fname" name="fname" value="{{ old('fname', $adoption->fname) }}" required style="width:100%;padding:10px;border:1px solid #ced4da;border-radius:4px;font-size:14px;font-family:inherit;">
            </div>

            <div style="margin-bottom:20px;">
                <label for="lname" style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">Last Name <span style="color:#dc3545;">*</span></label>
                <input type="text" id="lname" name="lname" value="{{ old('lname', $adoption->lname) }}" required style="width:100%;padding:10px;border:1px solid #ced4da;border-radius:4px;font-size:14px;font-family:inherit;">
            </div>

            <div style="margin-bottom:20px;">
                <label for="email" style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">Email <span style="color:#dc3545;">*</span></label>
                <input type="email" id="email" name="email" value="{{ old('email', $adoption->email) }}" required style="width:100%;padding:10px;border:1px solid #ced4da;border-radius:4px;font-size:14px;font-family:inherit;">
            </div>

            <div style="margin-bottom:20px;">
                <label for="country" style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">Country</label>
                <input type="text" id="country" name="country" value="{{ old('country', $adoption->country) }}" style="width:100%;padding:10px;border:1px solid #ced4da;border-radius:4px;font-size:14px;font-family:inherit;">
            </div>

            <div style="margin-bottom:20px;">
                <label for="street" style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">Street</label>
                <input type="text" id="street" name="street" value="{{ old('street', $adoption->street) }}" style="width:100%;padding:10px;border:1px solid #ced4da;border-radius:4px;font-size:14px;font-family:inherit;">
            </div>

            <div style="margin-bottom:20px;">
                <label for="city" style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">City</label>
                <input type="text" id="city" name="city" value="{{ old('city', $adoption->city) }}" style="width:100%;padding:10px;border:1px solid #ced4da;border-radius:4px;font-size:14px;font-family:inherit;">
            </div>

            <div style="margin-bottom:20px;">
                <label for="postal" style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">Postal Code</label>
                <input type="text" id="postal" name="postal" value="{{ old('postal', $adoption->postal) }}" style="width:100%;padding:10px;border:1px solid #ced4da;border-radius:4px;font-size:14px;font-family:inherit;">
            </div>

            <div style="margin-bottom:20px;">
                <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">Email Updates</label>
                <div style="display:flex;gap:20px;">
                    <label style="display:flex;align-items:center;margin-bottom:0;font-weight:400;">
                        <input type="radio" name="emailUpdates" value="yes" {{ $adoption->emailUpdates === 'yes' ? 'checked' : '' }} style="margin-right:8px;"> Yes
                    </label>
                    <label style="display:flex;align-items:center;margin-bottom:0;font-weight:400;">
                        <input type="radio" name="emailUpdates" value="no" {{ $adoption->emailUpdates === 'no' ? 'checked' : '' }} style="margin-right:8px;"> No
                    </label>
                </div>
            </div>

            <div style="margin-bottom:20px;">
                <label style="display:block;font-weight:600;color:#495057;margin-bottom:8px;font-size:14px;">Text Updates</label>
                <div style="display:flex;gap:20px;">
                    <label style="display:flex;align-items:center;margin-bottom:0;font-weight:400;">
                        <input type="radio" name="textUpdates" value="yes" {{ $adoption->textUpdates === 'yes' ? 'checked' : '' }} style="margin-right:8px;"> Yes
                    </label>
                    <label style="display:flex;align-items:center;margin-bottom:0;font-weight:400;">
                        <input type="radio" name="textUpdates" value="no" {{ $adoption->textUpdates === 'no' ? 'checked' : '' }} style="margin-right:8px;"> No
                    </label>
                </div>
            </div>

            <div style="margin-bottom:20px;">
                <label style="display:flex;align-items:center;font-weight:400;">
                    <input type="checkbox" name="cover_processing_fee" value="1" {{ $adoption->cover_processing_fee ? 'checked' : '' }} style="margin-right:8px;"> Cover Processing Fee
                </label>
            </div>

            <div style="display:flex;gap:10px;margin-top:30px;padding-top:30px;border-top:1px solid #dee2e6;">
                <button type="submit" style="padding:10px 20px;background:#007bff;color:#fff;border:none;border-radius:4px;cursor:pointer;font-weight:600;">💾 Save</button>
                <a href="{{ route('admin.adoptions.index') }}" style="padding:10px 20px;background:#6c757d;color:#fff;border-radius:4px;text-decoration:none;font-weight:600;">Cancel</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>