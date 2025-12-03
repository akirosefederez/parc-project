<?php

namespace App\Http\Controllers;

use App\Models\ContactLetter;
use Illuminate\Http\Request;

class ContactLetterController extends Controller
{
    /**
     * Store a new contact letter subscription in the database.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|unique:contact_letters,email',
            'email_updates' => 'in:yes,no',
            'text_updates' => 'in:yes,no',
        ]);

        // Convert radio button values to boolean
        $validated['email_updates'] = $request->input('email_updates') === 'yes';
        $validated['text_updates'] = $request->input('text_updates') === 'yes';

        // Save into DB
        ContactLetter::create($validated);

        // Redirect back with success message
        return redirect()->back()->with('success', '✅ Thank you for signing up! Check your email for updates.');
    }
}
