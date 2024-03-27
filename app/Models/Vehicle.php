<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeVehicleSearch($query, array $filters)
    {
        $query
        ->when($filters['type'] ?? false, function($query, $vehicleType) {
            return $query->whereHas('vehicleType', function($query) use ($vehicleType) {
                $query->where('type', $vehicleType);
            });
        })
        ->when($filters['brand'] ?? false, function($query, $vehicleBrand) {
            return $query->whereHas('vehicleBrand', function($query) use ($vehicleBrand) {
                $query->where('brand', $vehicleBrand);
            });
        })
        ->when($filters['location'] ?? false, function($query, $location) {
            return $query->where('location', $location);
        })
        ->when($filters['id'] ?? false, function($query, $id) {
            return $query->where('id', $id);
        });
    }
    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }

    public function vehicleBrand()
    {
        return $this->belongsTo(VehicleBrand::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
