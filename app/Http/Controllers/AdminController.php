<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vehicle;

class AdminController extends Controller
{
    public function vehicle_page()
    {
        return view('admin.vehicle_page');
    }

    public function add_vehicle(request $request)
    {
        $vehicle= new Vehicle;        
        $vehicle->vehicle_type = $request->vehicle_type;
        $vehicle->number_plate = $request->number_plate;
        $vehicle->assigned_driver = $request->assigned_driver;
        $vehicle->save();

        return redirect()->back();
    }

    public function show_vehicle()
    {
        $vehicle = Vehicle::all();
        return view('admin.show_vehicle', compact('vehicle'));
    }

    public function delete_vehicle($id)

    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        return redirect()->back()->with('message', 'Vehicle has been deleted successfully');

    }

    public function edit_vehicle($id)
    {
        $vehicle=Vehicle::find($id);

        return view('admin.edit_vehicle', compact('vehicle'));
    }

    public function update_vehicle(Request $request, $id)
    {
        $data=Vehicle::find($id);
        $data->vehicle_type=$request->vehicle_type;
        $data->number_plate=$request->number_plate;
        $data->assigned_driver=$request->assigned_driver;
        $data->save();
        return redirect()->back();
    }

}
