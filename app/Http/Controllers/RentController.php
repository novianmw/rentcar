<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleBrand;
use App\Models\VehicleType;

class RentController extends Controller
{
    public function index() 
    {
        return view ('rent', [
            'title' => 'RENT | Broom.id',
            'types' => VehicleType::select()->get(),
            'brands' => VehicleBrand::select()->get(),
            'vehicles' => Vehicle::select()->vehicleSearch(request(['type', 'brand', 'location']))->paginate(12)->withQueryString()
        ]);
    }
}
