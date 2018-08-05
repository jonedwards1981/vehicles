<?php

namespace App\Http\Controllers;

use App\Vehicle;
use App\Http\Controllers\Controller;

class VehiclesController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        
        return view('vehicles', $data);
    }
    
    public function passport()
    {
        return view('passport');
    }
}
