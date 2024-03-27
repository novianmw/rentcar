<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleBrand;
use Illuminate\Http\Request;

class DetailController extends Controller
{
        public function show(Vehicle $vehicle) 
    {
        // dd($vehicle);
        return view('detail', [
            'title' => 'DETAIL | Broom.id',
            'vehicles' => $vehicle->vehicleSearch(request(['id', 'type', 'brand', 'location']))->firstOrFail()
        ]);
    }
}
