<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson45MultipleDBModel extends Model
{
    use HasFactory;
    public $connection = "mysql2";
    public $table = "products";
}
