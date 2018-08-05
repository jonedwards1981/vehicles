<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    
    public function index()
    {
        $vehicles = [];
        
        $rawVehicles = Vehicle::all();
        foreach ($rawVehicles as $vehicle) {
            $vehicles[] = $this->getVehicleData($vehicle);
        }
        
        return $vehicles;
    }
 
    public function find($id)
    {
        $vehicle = Vehicle::find($id);
        
        if($vehicle) {
            return $this->getVehicleData($vehicle);
        }
        
        return response()->json(['message' => 'Not Found!'], 404);       
    }
    
    private function getVehicleData(Vehicle $vehicle) {
        $vehicleRow = ['vehiclemodel' => $vehicle->vehiclemodel->vehiclemodel,
                        'manufacturer' => $vehicle->manufacturer->manufacturer,
                        'type' => $vehicle->type,
                        'usage' => $vehicle->usage,
                        'license_plate' => $vehicle->license_plate,
                        'weight_category' =>$vehicle->weight_category,
                        'no_seats' => $vehicle->no_seats,
                        'has_boot' => $vehicle->has_boot,
                        'has_trailer' =>$vehicle->has_trailer,
                        'owner_name' => $vehicle->owner->name,
                        'owner_company' => $vehicle->owner->company,
                        'owner_profession' => $vehicle->owner->profession,
                        'transmission' => $vehicle->transmission,
                        'colour' => $vehicle->colour->colour,
                        'is_hgv' => $vehicle->is_hgv,
                        'no_doors' => $vehicle->no_doors,
                        'sunroof' => $vehicle->sunroof,
                        'has_gps' => $vehicle->has_gps,
                        'no_wheels' => $vehicle->no_wheels,
                        'engine_cc' => $vehicle->engine_cc,
                        'fuel_type' => $vehicle->fuel_type];
        
        return $vehicleRow;
    }
}
