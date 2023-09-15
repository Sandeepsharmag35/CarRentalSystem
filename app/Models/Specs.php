<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specs extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function cars()
    {
        return $this->belongsTo(Cars::class,'car_id');
    }
    
}
