<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    // Table name (optional, Laravel will guess 'donations' from the model name)
    protected $table = 'donations';

    // Which columns can be mass-assigned
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'country',
        'street',
        'city',
        'postal',
        'email_updates',
        'text_updates',
        'payment_method',
        'card_number',
        'expiration_month',
        'expiration_year',
        'cvv',
        'cover_processing_fee',
    ];
}
