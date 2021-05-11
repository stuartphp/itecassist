<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    protected $primaryKey = 'id';
    protected $table="layouts";
    protected $fillable = [
        'name', 'content'
    ];
    public function variables()
    {
        return $this->hasMany(LayoutVariable::class);
    }
}
