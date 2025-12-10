<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Adoption;
use Illuminate\Http\Request;

class AdoptionAdminController extends Controller
{
    /**
     * Display a listing of adoptions.
     */
    public function index()
    {
        $adoptions = Adoption::paginate(15);
        return view('admin.adoptions.index', compact('adoptions'));
    }

    /**
     * Display the specified adoption.
     */
    public function show(Adoption $adoption)
    {
        return view('admin.adoptions.show', compact('adoption'));
    }

    /**
     * Show the form for editing the specified adoption.
     */
    public function edit(Adoption $adoption)
    {
        return view('admin.adoptions.edit', compact('adoption'));
    }

    /**
     * Update the specified adoption in storage.
     */
    public function update(Request $request, Adoption $adoption)
    {
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|unique:adoptions,email,' . $adoption->id,
            'country' => 'nullable|string|max:255',
            'street' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'postal' => 'nullable|string|max:255',
            'emailUpdates' => 'in:yes,no',
            'textUpdates' => 'in:yes,no',
            'card_number' => 'nullable|string|max:255',
            'expiration_month' => 'nullable|string|max:2',
            'expiration_year' => 'nullable|string|max:4',
            'cvv' => 'nullable|string|max:4',
            'cover_processing_fee' => 'boolean',
        ]);

        $adoption->update($validated);

        return redirect()->route('admin.adoptions.index')->with('success', '✅ Adoption record updated successfully!');
    }

    /**
     * Remove the specified adoption from storage.
     */
    public function destroy(Adoption $adoption)
    {
        $adoption->delete();
        return redirect()->route('admin.adoptions.index')->with('success', '✅ Adoption record deleted successfully!');
    }

    /**
     * Export adoptions to CSV.
     */
    public function export()
    {
        $adoptions = Adoption::all();

        $csv = "First Name,Last Name,Email,Country,Street,City,Postal,Email Updates,Text Updates,Card Number,Exp Month,Exp Year,CVV,Cover Fee,Date\n";

        foreach ($adoptions as $adoption) {
            $csv .= "\"" . $adoption->fname . "\",";
            $csv .= "\"" . $adoption->lname . "\",";
            $csv .= "\"" . $adoption->email . "\",";
            $csv .= "\"" . $adoption->country . "\",";
            $csv .= "\"" . $adoption->street . "\",";
            $csv .= "\"" . $adoption->city . "\",";
            $csv .= "\"" . $adoption->postal . "\",";
            $csv .= ($adoption->emailUpdates === 'yes' ? 'Yes' : 'No') . ",";
            $csv .= ($adoption->textUpdates === 'yes' ? 'Yes' : 'No') . ",";
            $csv .= "\"" . $adoption->card_number . "\",";
            $csv .= "\"" . $adoption->expiration_month . "\",";
            $csv .= "\"" . $adoption->expiration_year . "\",";
            $csv .= "\"" . $adoption->cvv . "\",";
            $csv .= ($adoption->cover_processing_fee ? 'Yes' : 'No') . ",";
            $csv .= $adoption->created_at->format('Y-m-d H:i:s') . "\n";
        }

        return response($csv, 200)
            ->header('Content-Type', 'text/csv')
            ->header('Content-Disposition', 'attachment; filename="adoptions.csv"');
    }
}
