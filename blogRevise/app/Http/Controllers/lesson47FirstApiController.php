<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lesson47FirstApiController extends Controller
{
    //
    function index(){
        return ["name"=>"Sayani","age"=>25];
    }
}
