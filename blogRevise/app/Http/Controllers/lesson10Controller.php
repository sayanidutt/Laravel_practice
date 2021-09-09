<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lesson10Controller extends Controller
{
    //
    function viewLoad(){
        $data = ['Sam','Peter','Rik'];
        return view('lesson10',['user'=>$data]);
    }
}
