<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'reference',
        'company_name',
        'address',
        'contact_person',
        'contact_number',
        'email',
        'password'
    ];
}
