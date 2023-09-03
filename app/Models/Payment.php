<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'transfer_date' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function formatPrice()
    {
        return 'Rp ' . number_format($this->amount, 2, ',', '.');
    }
}
