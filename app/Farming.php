<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Farming extends Model
{
    protected $fillable = ['farming_area', 'date'];
    
    public function tractor()
    {
        return $this->belongsTo(Tractor::class);
    }

    public function field()
    {
        return $this->belongsTo(Field::class);
    }
}
