<?php

namespace App\Http\Controllers;

use App\Vehicle;
use App\Http\Controllers\Controller;

class VehiclesController extends Controller
{
    /**
     * Show the vehicles stored in the database.
     *
     * @return Response
     */
    public function index()
    {

        $data = [];
        
        $vehicles = Vehicle::all();

        foreach ($vehicles as $vehicle) {
            $data['vehicles'][] = ['model_id' => $vehicle->model_id,
                       'manufacturer_id' => $vehicle->model_id,
                       'type' => $vehicle->type,
                       'usage' => $vehicle->usage,
                       'license_plate' => $vehicle->license_plate,];
        }
        
        
        return view('vehicles', $data);
    }
}
