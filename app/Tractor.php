<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tractor extends Model
{
    protected $fillable = ['name'];

    public function farmings()
    {
        return $this->hasMany(Farmings::class);
    }
}
