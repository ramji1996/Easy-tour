<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $fillable = [
        'name','description', 'costpd', 'availability',
    ];

    public function eqpregisters(){
        return $this->belongsTo(eqpregisters::class);
    }
}
