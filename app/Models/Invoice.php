<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    protected $fillable = [
        'reference',
        'customer_id',
        'action_date',
        'due_date',
        'amount',
        'is_paid',
        'notes'
    ];
}
