<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lesson37MutatorModel;

class lesson37MutatorController extends Controller
{
    //
    function index(){
        $emp = new lesson37MutatorModel;
        $emp->Job = "Developer";
        $emp->address = "Tollygunge";
        $emp->emp_id = 2;
        $emp->save();
    }
}
