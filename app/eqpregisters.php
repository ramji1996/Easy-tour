<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Eqpregisters;
class eqpregisters extends Model
{
    protected $fillable =['name','email','contact','area'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function equipment(){
        return $this->hasMany(Equipment::class);
    }
}
