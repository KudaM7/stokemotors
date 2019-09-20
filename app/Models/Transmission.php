<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transmission extends Model
{
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
