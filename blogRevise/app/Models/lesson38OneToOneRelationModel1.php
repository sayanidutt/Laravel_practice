<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson38OneToOneRelationModel1 extends Model
{
    use HasFactory;
    public $table = "members";
    public function getDetail(){
        return $this->hasOne('App\Models\lesson38OneToOneRelationModel2');
    }
}
