<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function Enquiry()
    {
        return $this->belongsTo(Enquiry::class);
    }
}
