<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleBrand;
use App\Models\VehicleType;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        return view('home',[
            'title' => 'HOME | Broom.id',
            'testimonials' => Testimonial::with('user')->get(),
            'types' => VehicleType::select()->get(),
            'brands' => VehicleBrand::select()->get(),
            'vehicles' => Vehicle::select()->get(),
        ]);
    }
}
