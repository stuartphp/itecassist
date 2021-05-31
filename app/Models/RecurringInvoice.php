<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecurringInvoice extends Model
{
    use HasFactory;
    protected $table='recurring_invoices';
    protected $fillable = [
        'customer_id'
    ];
}