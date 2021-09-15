<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emp;

class lesson39OneToManyRelation extends Controller
{
    //
    function index(){
        return Emp::find(2)->getDetail;
    }
}
