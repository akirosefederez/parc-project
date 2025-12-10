<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use App\Models\ContactLetter;
use App\Models\Donation;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the dashboard with counts from all models.
     */
    public function index()
    {
        $adoptionCount = Adoption::count();
        $donationCount = Donation::count();
        $contactLetterCount = ContactLetter::count();
        $userCount = User::count();

        return view('dashboard', compact('adoptionCount', 'donationCount', 'contactLetterCount', 'userCount'));
    }
}
