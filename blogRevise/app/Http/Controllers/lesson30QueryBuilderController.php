<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class lesson30QueryBuilderController extends Controller
{
    //
    function dbOperations(){
        $data = DB::table('members')
        ->where('id',26)->delete();
        /*
        ->update([
            'address'=>'Kerala'
        ]);*/
        //->where('address','Mumbai')
        //->get();
        return $data;
    }
}
