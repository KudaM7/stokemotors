<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $table = 'enquiries';

    public function enquiry_sources()
    {
        return $this->belongsTo(EnquirySource::class);
    }
    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
    public function salespersons()
    {
        return $this->belongsTo(Salesperson::class);
    }
    public function vehicles()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
