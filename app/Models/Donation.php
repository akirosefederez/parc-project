<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

protected $fillable = [
    'fname',
    'lname',
    'email',
    'country',
    'street',
    'city',
    'postal',
    'emailUpdates',
    'textUpdates',
    'payment_method',
    'card_number',
    'expiration_month',
    'expiration_year',
    'cvv',
    'cover_processing_fee',
    'frequency',          // <-- ADD THIS
    'monthly_amount',     // <-- ADD THIS
];

}

