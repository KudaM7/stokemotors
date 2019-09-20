<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function test_drives()
    {
        return $this->hasMany(TestDrive::class);
    }
    public function enquiries()
    {
        return $this->hasMany(Enquiry::class);
    }
    public function addresses()
    {
        return $this->belongsTo(Customer::class);
    }
}
