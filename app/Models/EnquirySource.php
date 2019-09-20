<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnquirySource extends Model
{
    protected $table = 'enquiry_sources';

    public function enquiries()
    {
        return $this->hasMany(Enquiry::class);
    }
}
