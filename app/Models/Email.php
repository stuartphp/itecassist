<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    protected $table = 'emails';
    protected $fillable = [
        'customer_id',
        'email_address',
        'email_username',
        'email_password',
        'email_incoming',
        'email_smtp',
        'email_smtp_auth',
        'email_smtp_port',
    ];
}
