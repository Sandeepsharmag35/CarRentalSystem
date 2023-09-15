<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function specs()
{
    return $this->hasOne(Specs::class, 'car_id');
}

    public function features()
    {
        return $this->hasOne(Features::class, 'car_id');
    }
    public function images()
    {
        return $this->hasMany(Images::class);
    }
    
}
