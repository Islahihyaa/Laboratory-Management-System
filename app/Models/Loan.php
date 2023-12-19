<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $table = 'loan';

    protected $fillable = [
        'user_id',
        'lab',
        'date',
        'time_rent',
        'time_return',
        'status',
        'booking_purpose',

    ];
}
