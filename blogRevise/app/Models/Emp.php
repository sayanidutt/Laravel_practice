<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    use HasFactory;
    public function getDetail(){
        return $this->hasMany('App\Models\Myemployee');
    }
}
