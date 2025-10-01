<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function store(Request $request)
    {
        // Validate form
        $validated = $request->validate([
            'fname'   => 'required|string|max:255',
            'lname'   => 'required|string|max:255',
            'email'   => 'required|email|unique:donations,email',
            'country' => 'nullable|string|max:255',
            'street'  => 'nullable|string|max:255',
            'city'    => 'nullable|string|max:255',
            'postal'  => 'nullable|string|max:50',
            'emailUpdates' => 'nullable|in:yes,no',
            'textUpdates'  => 'nullable|in:yes,no',
            'card_number'  => 'nullable|string|max:255',
            'expiration_month' => 'nullable|string|max:10',
            'expiration_year'  => 'nullable|string|max:10',
            'cvv' => 'nullable|string|max:10',
            'cover_processing_fee' => 'nullable|boolean',
        ]);

        // Save donation
        Donation::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'country' => $request->input('country'),
            'street' => $request->input('street'),
            'city' => $request->input('city'),
            'postal' => $request->input('postal'),
            'emailUpdates' => $request->input('emailUpdates', 'no'),
            'textUpdates' => $request->input('textUpdates', 'no'),
            'card_number' => $request->input('card_number'),
            'expiration_month' => $request->input('expiration_month'),
            'expiration_year' => $request->input('expiration_year'),
            'cvv' => $request->input('cvv'),
            'cover_processing_fee' => $request->has('cover_processing_fee'),
        ]);

        return redirect()->back()->with('success', 'Thank you for your donation!');
    }
}
