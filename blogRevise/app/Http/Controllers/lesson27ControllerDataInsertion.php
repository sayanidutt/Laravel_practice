<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lesson27Model;

class lesson27ControllerDataInsertion extends Controller
{
    //
    function addData(Request $req){
        $member = new lesson27Model;
        $member->name = $req->name;
        $member->age = $req->age;
        $member->address = $req->address;
        $member->save();
        return redirect('adddata');
    }
}
