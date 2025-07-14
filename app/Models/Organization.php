<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function module(){
        return $this->belongsTo(Module::class);
    }
    
}
