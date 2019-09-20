<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleImage extends Model
{
    protected $table = 'vehicle_images';

    public function vehicles()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
