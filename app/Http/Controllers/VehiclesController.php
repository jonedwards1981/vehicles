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
        
        $data['vehicles'] = $vehicles;

        /*foreach ($vehicles as $vehicle) {
            $data['vehicles'][] = ['vehiclemodel_id' => $vehicle->vehiclemodel_id,
                        'manufacturer_id' => $vehicle->manufacturer_id,
                        'type' => $vehicle->type,
                        'usage' => $vehicle->usage,
                        'license_plate' => $vehicle->license_plate,
                        'weight_category' =>$vehicle->weight_category,
                        'no_seats' => $vehicle->no_seats,
                        'has_boot' => $vehicle->has_boot,
                        'has_trailer' =>$vehicle->has_trailer,
                        'owner_id' => $vehicle->owner_id,
                        'transmission' => $vehicle->transmission,
                        'colour_id' => $vehicle->colour_id,
                        'is_hgv' => $vehicle->is_hgv,
                        'no_doors' => $vehicle->no_doors,
                        'sunroof' => $vehicle->sunroof,
                        'has_gps' => $vehicle->has_ggps,
                        'no_wheels' => $vehicle->no_wheels,
                        'engine_cc' => $vehicle->engine_cc,
                        'fuel_type' => $vehicle->fuel_type];
        }*/
        
        
        return view('vehicles', $data);
    }
}
