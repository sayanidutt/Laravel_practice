<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lesson25Model;

class lesson25Controller extends Controller
{
    //
    function getData(){
        $data = lesson25Model::all();
        return view('lesson25',['members'=> $data]);
    }
}
