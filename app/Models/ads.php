<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ads extends Model
{
    use HasFactory;

    public function package(){
        return $this->belongsTo(package::class,"packageId");
    }

    public function customer(){
        return $this->belongsTo(customer::class,"customerId");
    }


}
