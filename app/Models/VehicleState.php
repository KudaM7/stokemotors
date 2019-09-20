<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleState extends Model
{
    protected $table = 'state_of_vehicles';

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
