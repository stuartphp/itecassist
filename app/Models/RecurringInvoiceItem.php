<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecurringInvoiceItem extends Model
{
    use HasFactory;
    protected $table = 'recurring_invoice_items';
    protected $fillable = [
        'customer_id',
        'product_id',
        'product_reference',
        'name',
        'description',
        'unit',
        'amount'
    ];
}
