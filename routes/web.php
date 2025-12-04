<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\ContactLetterController;
use App\Http\Controllers\Admin\ContactLetterAdminController;
use App\Http\Controllers\Auth\LoginController;
use Stripe\Stripe;
use Stripe\PaymentIntent;

// =====================
// Login Page
// =====================
Route::get('/login', function () {
    return view('login');
})->name('login');

// Handle POST login
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard (protected)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// =====================
// Frontend Pages
// =====================
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('original');
})->name('home');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/adopt', function () {
    return view('adopt');
})->name('adopt');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/pages', function () {
    return view('pages');
})->name('pages');

Route::get('/donateform', function () {
    return view('donateform');
})->name('donateform');

Route::get('/adoptform', function () {
    return view('adoptform');
})->name('adoptform');

// =====================
// Donation Controller
// =====================
Route::get('/donations', [DonationController::class, 'create'])->name('donations.create');
Route::post('/donations', [DonationController::class, 'store'])->name('donations.store');

// =====================
// Adoption Controller
// =====================
Route::get('/adoptions', [AdoptionController::class, 'create'])->name('adoptions.create');
Route::post('/adoptions', [AdoptionController::class, 'store'])->name('adoptions.store');

// =====================
// Contact Letter Controller
// =====================
Route::post('/contact-letter', [ContactLetterController::class, 'store'])->name('contact-letter.store');

// =====================
// Admin Routes - Contact Letters
// =====================
Route::prefix('admin/contact-letters')->name('admin.contact-letters.')->group(function () {
    Route::get('/', [ContactLetterAdminController::class, 'index'])->name('index');
    Route::get('{contactLetter}', [ContactLetterAdminController::class, 'show'])->name('show');
    Route::get('{contactLetter}/edit', [ContactLetterAdminController::class, 'edit'])->name('edit');
    Route::put('{contactLetter}', [ContactLetterAdminController::class, 'update'])->name('update');
    Route::delete('{contactLetter}', [ContactLetterAdminController::class, 'destroy'])->name('destroy');
    Route::get('export/csv', [ContactLetterAdminController::class, 'export'])->name('export');
});

// =====================
// Stripe Payment Route
// =====================
Route::post('/stripe-payment', function (Request $request) {
    Stripe::setApiKey(env('STRIPE_SECRET'));

    try {
        $paymentIntent = PaymentIntent::create([
            'amount' => 1000, // $10 in cents
            'currency' => 'usd',
            'payment_method' => $request->payment_method_id,
            'confirmation_method' => 'manual',
            'confirm' => true,
            'automatic_payment_methods' => [
                'enabled' => true,
                'allow_redirects' => 'never', // prevents redirect-based errors
            ],
        ]);

        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => $e->getMessage()
        ]);
    }
});

