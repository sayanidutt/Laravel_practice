<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson37MutatorModel extends Model
{
    use HasFactory;
    public $table = "myemployees";
    public $timestamps = false;
    public function setAddressAttribute($value){
        $this->attributes['address'] = $value." ,Kolkata";
    }
}
