<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    /**
     * Get the vehicles for this manufacturer.
     */
    public function vehicles()
    {
        return $this->hasMany('App\Vehicle');
    }
}
