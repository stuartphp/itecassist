<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayoutVariable extends Model
{
    use HasFactory;
    protected $table="layout_variables";
    public function layout()
    {
        return $this->belongsTo(Layout::class);
    }
}
