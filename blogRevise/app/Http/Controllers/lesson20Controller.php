<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lesson20Controller extends Controller
{
    //
    function index(Request $req){
        return $req->input();
    }
}
