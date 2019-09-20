<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExteriorColour extends Model
{
    protected $table = 'exterior_colours';

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
