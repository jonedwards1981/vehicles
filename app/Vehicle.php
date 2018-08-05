<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public $timestamps = false;
    
    /**
     * Get the vehiclemodel associated with the vehicle.
     */
    public function vehiclemodel()
    {
        return $this->belongsTo('App\Vehiclemodel');
    }
    
    /**
     * Get the manufacturer associated with the vehicle.
     */
    public function manufacturer()
    {
        return $this->belongsTo('App\Manufacturer');
    }
    
    /**
     * Get the owner associated with the vehicle.
     */
    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }
    
    /**
     * Get the colour associated with the vehicle.
     */
    public function colour()
    {
        return $this->belongsTo('App\Colour');
    }

}
