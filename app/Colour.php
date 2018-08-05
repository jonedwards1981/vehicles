<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colour extends Model
{
    /**
     * Get the vehicles for this colour.
     */
    public function vehicles()
    {
        return $this->hasMany('App\Vehicle');
    }
}
