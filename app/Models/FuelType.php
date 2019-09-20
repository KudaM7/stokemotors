<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FuelType extends Model
{
    protected $table = 'fuel_types';

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
