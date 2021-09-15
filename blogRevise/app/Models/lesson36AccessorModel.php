<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson36AccessorModel extends Model
{
    use HasFactory;
    public $table = "myemployees";
    public function getAddressAttribute($value){
        return $value.' ,India';
    }
}
