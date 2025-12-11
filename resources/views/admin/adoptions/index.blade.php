<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoptions</title>
</head>
<body>

<div style="max-width:1200px;margin:40px auto;padding:20px;">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:30px;">
        <h1 style="margin:0;font-size:28px;color:#333;">Adoptions</h1>
        <div style="display:flex;gap:10px;">
            <a href="{{ route('admin.adoptions.export') }}" style="padding:8px 12px;background:#28a745;color:#fff;border-radius:6px;text-decoration:none;">📥 Export CSV</a>
            <a href="{{ route('dashboard') }}" style="padding:8px 12px;background:#6c757d;color:#fff;border-radius:6px;text-decoration:none;">← Back</a>
        </div>
    </div>

    @if(session('success'))
        <div style="padding:15px;margin-bottom:20px;background:#d4edda;color:#155724;border:1px solid #c3e6cb;border-radius:4px;">
            {{ session('success') }}
        </div>
    @endif

    <div style="overflow-x:auto;margin-bottom:20px;">
        <table style="width:100%;border-collapse:collapse;background:#fff;box-shadow:0 2px 4px rgba(0,0,0,0.1);">
            <thead style="background:#f8f9fa;border-bottom:2px solid #dee2e6;">
                <tr>
                    <th style="padding:15px;text-align:left;font-weight:600;color:#495057;">ID</th>
                    <th style="padding:15px;text-align:left;font-weight:600;color:#495057;">First Name</th>
                    <th style="padding:15px;text-align:left;font-weight:600;color:#495057;">Last Name</th>
                    <th style="padding:15px;text-align:left;font-weight:600;color:#495057;">Email</th>
                    <th style="padding:15px;text-align:left;font-weight:600;color:#495057;">Country</th>
                    <th style="padding:15px;text-align:left;font-weight:600;color:#495057;">Email Updates</th>
                    <th style="padding:15px;text-align:left;font-weight:600;color:#495057;">Text Updates</th>
                    <th style="padding:15px;text-align:left;font-weight:600;color:#495057;">Date</th>
                    <th style="padding:15px;text-align:left;font-weight:600;color:#495057;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($adoptions as $adoption)
                    <tr style="border-bottom:1px solid #dee2e6;">
                        <td style="padding:12px 15px;">{{ $adoption->id }}</td>
                        <td style="padding:12px 15px;">{{ $adoption->fname }}</td>
                        <td style="padding:12px 15px;">{{ $adoption->lname }}</td>
                        <td style="padding:12px 15px;">{{ $adoption->email }}</td>
                        <td style="padding:12px 15px;">{{ $adoption->country ?? '—' }}</td>
                        <td style="padding:12px 15px;">
                            <span style="padding:4px 8px;border-radius:4px;font-size:12px;font-weight:600;background:{{ $adoption->emailUpdates === 'yes' ? '#28a745' : '#dc3545' }};color:#fff;">
                                {{ $adoption->emailUpdates === 'yes' ? 'Yes' : 'No' }}
                            </span>
                        </td>
                        <td style="padding:12px 15px;">
                            <span style="padding:4px 8px;border-radius:4px;font-size:12px;font-weight:600;background:{{ $adoption->textUpdates === 'yes' ? '#28a745' : '#dc3545' }};color:#fff;">
                                {{ $adoption->textUpdates === 'yes' ? 'Yes' : 'No' }}
                            </span>
                        </td>
                        <td style="padding:12px 15px;">{{ $adoption->created_at->format('Y-m-d H:i') }}</td>
                        <td style="padding:12px 15px;">
                            <div style="display:flex;gap:5px;">
                                <a href="{{ route('admin.adoptions.show', $adoption->id) }}" style="padding:4px 8px;background:#17a2b8;color:#fff;border-radius:4px;text-decoration:none;font-size:12px;">👁️ View</a>
                                <a href="{{ route('admin.adoptions.edit', $adoption->id) }}" style="padding:4px 8px;background:#ffc107;color:#000;border-radius:4px;text-decoration:none;font-size:12px;">✏️ Edit</a>
                                <form action="{{ route('admin.adoptions.destroy', $adoption->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="padding:4px 8px;background:#dc3545;color:#fff;border:none;border-radius:4px;cursor:pointer;font-size:12px;" onclick="return confirm('Delete this record?')">🗑️ Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" style="text-align:center;color:#999;padding:40px 0;">No adoptions found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div style="text-align:center;margin-top:20px;">
        {{ $adoptions->links() }}
    </div>
</div>


</body>
</html>