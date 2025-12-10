<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationAdminController extends Controller
{
    /**
     * Display a listing of donations.
     */
    public function index()
    {
        $donations = Donation::paginate(15);
        return view('admin.donations.index', compact('donations'));
    }

    /**
     * Display the specified donation.
     */
    public function show(Donation $donation)
    {
        return view('admin.donations.show', compact('donation'));
    }

    /**
     * Show the form for editing the specified donation.
     */
    public function edit(Donation $donation)
    {
        return view('admin.donations.edit', compact('donation'));
    }

    /**
     * Update the specified donation in storage.
     */
    public function update(Request $request, Donation $donation)
    {
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|unique:donations,email,' . $donation->id,
            'country' => 'nullable|string|max:255',
            'street' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'postal' => 'nullable|string|max:255',
            'emailUpdates' => 'in:yes,no',
            'textUpdates' => 'in:yes,no',
            'payment_method' => 'nullable|string|max:255',
            'card_number' => 'nullable|string|max:255',
            'expiration_month' => 'nullable|string|max:2',
            'expiration_year' => 'nullable|string|max:4',
            'cvv' => 'nullable|string|max:4',
            'cover_processing_fee' => 'boolean',
            'frequency' => 'nullable|string|max:20',
            'monthly_amount' => 'nullable|numeric',
        ]);

        // Ensure checkbox handling
        $validated['cover_processing_fee'] = $request->has('cover_processing_fee');

        $donation->update($validated);

        return redirect()->route('admin.donations.index')->with('success', '✅ Donation record updated successfully!');
    }

    /**
     * Remove the specified donation from storage.
     */
    public function destroy(Donation $donation)
    {
        $donation->delete();
        return redirect()->route('admin.donations.index')->with('success', '✅ Donation record deleted successfully!');
    }

    /**
     * Export donations to CSV.
     */
    public function export()
    {
        $donations = Donation::all();

        $csv = "First Name,Last Name,Email,Country,Street,City,Postal,Email Updates,Text Updates,Payment Method,Card Number,Exp Month,Exp Year,CVV,Cover Fee,Frequency,Monthly Amount,Date\n";

        foreach ($donations as $d) {
            $csv .= '"' . $d->fname . '",';
            $csv .= '"' . $d->lname . '",';
            $csv .= '"' . $d->email . '",';
            $csv .= '"' . ($d->country ?? '') . '",';
            $csv .= '"' . ($d->street ?? '') . '",';
            $csv .= '"' . ($d->city ?? '') . '",';
            $csv .= '"' . ($d->postal ?? '') . '",';
            $csv .= ($d->emailUpdates === 'yes' ? 'Yes' : 'No') . ',';
            $csv .= ($d->textUpdates === 'yes' ? 'Yes' : 'No') . ',';
            $csv .= '"' . ($d->payment_method ?? '') . '",';
            $csv .= '"' . ($d->card_number ?? '') . '",';
            $csv .= '"' . ($d->expiration_month ?? '') . '",';
            $csv .= '"' . ($d->expiration_year ?? '') . '",';
            $csv .= '"' . ($d->cvv ?? '') . '",';
            $csv .= ($d->cover_processing_fee ? 'Yes' : 'No') . ',';
            $csv .= '"' . ($d->frequency ?? '') . '",';
            $csv .= '"' . ($d->monthly_amount ?? '') . '",';
            $csv .= $d->created_at->format('Y-m-d H:i:s') . "\n";
        }

        return response($csv, 200)
            ->header('Content-Type', 'text/csv')
            ->header('Content-Disposition', 'attachment; filename="donations.csv"');
    }
}
