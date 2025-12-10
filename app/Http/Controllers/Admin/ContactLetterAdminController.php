<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactLetter;
use Illuminate\Http\Request;

class ContactLetterAdminController extends Controller
{
    /**
     * Display a listing of contact letters.
     */
    public function index()
    {
        $letters = ContactLetter::paginate(15);
        return view('admin.contact-letters.index', compact('letters'));
    }

    /**
     * Display the specified contact letter.
     */
    public function show(ContactLetter $contactLetter)
    {
        return view('admin.contact-letters.show', ['contactLetter' => $contactLetter]);
    }

    /**
     * Show the form for editing the specified contact letter.
     */
    public function edit(ContactLetter $contactLetter)
    {
        return view('admin.contact-letters.edit', ['contactLetter' => $contactLetter]);
    }

    /**
     * Update the specified contact letter in storage.
     */
    public function update(Request $request, ContactLetter $contactLetter)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|unique:contact_letters,email,' . $contactLetter->id,
            'email_updates' => 'boolean',
            'text_updates'  => 'boolean',
        ]);

        $validated['email_updates'] = $request->has('email_updates');
        $validated['text_updates'] = $request->has('text_updates');

        $contactLetter->update($validated);

        return redirect()->route('admin.contact-letters.index')->with('success', '✅ Contact letter updated.');
    }

    /**
     * Remove the specified contact letter from storage.
     */
    public function destroy(ContactLetter $contactLetter)
    {
        $contactLetter->delete();
        return redirect()->route('admin.contact-letters.index')->with('success', '✅ Contact letter deleted.');
    }

    /**
     * Export contact letters to CSV.
     */
    public function export()
    {
        $letters = ContactLetter::all();

        $csv = "First Name,Last Name,Email,Email Updates,Text Updates,Date\n";

        foreach ($letters as $l) {
            $csv .= '"' . $l->first_name . '",';
            $csv .= '"' . $l->last_name . '",';
            $csv .= '"' . $l->email . '",';
            $csv .= ($l->email_updates ? 'Yes' : 'No') . ',';
            $csv .= ($l->text_updates ? 'Yes' : 'No') . ',';
            $csv .= $l->created_at->format('Y-m-d H:i:s') . "\n";
        }

        return response($csv, 200)
            ->header('Content-Type', 'text/csv')
            ->header('Content-Disposition', 'attachment; filename="contact_letters.csv"');
    }
}
