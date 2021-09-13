<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lesson23Controller extends Controller
{
    //
    function index(Request $req){
        return $req->file('file')->store('docs');
    }
}
