<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    /**
     * Get the vehicles for this owner.
     */
    public function vehicles()
    {
        return $this->hasMany('App\Vehicle');
    }
}
