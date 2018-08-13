<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = ['name', 'culture', 'area'];

    public function farmings()
    {
        return $this->hasMany(Farmings::class);
    }
}
