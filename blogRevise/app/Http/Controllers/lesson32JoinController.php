<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class lesson32JoinController extends Controller
{
    //
    function joining(){
        return DB::table('members')
        ->join('memberdetail','members.id','=','memberdetail.memberid')
        //->select('memberdetail.*')
        ->where('members.id',2)
        ->get();
    }
}
