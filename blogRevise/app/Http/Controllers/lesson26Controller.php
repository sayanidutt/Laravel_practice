<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lesson26Model;

class lesson26Controller extends Controller
{
    //
    function getData(){
        $data = lesson26Model::paginate(5);
        return view('lesson26',['members'=> $data]);
    }
}
