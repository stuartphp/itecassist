<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LayoutVariable extends Model
{
    protected $primaryKey = 'id';
    protected $table="layout_variables";
    protected $fillable = [
        'layout_id', 'name', 'value'
    ];
    public function layout()
    {
        return $this->belongsTo(Layout::class);
    }
}
