<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleBrand extends Model
{
    use HasFactory;
    public function vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }
    public function vehicleType()
    {
        return $this->hasMany(VehicleType::class);
    }
}
