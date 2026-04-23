<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    use HasFactory;

    protected $fillable = ['loan_id','amount','reason','status','paid_at'];

    protected $casts = [
        'amount' => 'decimal:2',
        'paid_at' => 'datetime',
    ];

    // Relación: una multa pertenece a un préstamo
    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }

    // Accessor: ¿está pendiente?
    public function getIsPendingAttribute(): bool
    {
        return $this->status === 'pending';
    }
}
