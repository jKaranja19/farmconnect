<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class DriverController extends Controller
{
    public function view_vehicle()
    {
        $vehicle = Vehicle::all();
        return view('driver.show_vehicle', compact('vehicle'));
    }

}
