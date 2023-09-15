<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Features extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'features' => 'array'
    ];
    public function cars()
    {
        return $this->belongsTo(Cars::class, 'car_id');
    }
    
}
