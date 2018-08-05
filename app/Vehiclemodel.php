<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiclemodel extends Model
{
    /**
     * Get the vehicles for this model.
     */
    public function vehicles()
    {
        return $this->hasMany('App\Vehicle');
    }
}
