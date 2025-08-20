<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_name',
        'description',
        'brand',
        'model',
        'year',
        'price',
        'main_image',
        'main_image_public_id',
    ];

    public function images(){
        return $this->hasMany(VehicleImage::class);
    }
}
