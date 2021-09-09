<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myFirstController extends Controller
{
    //
    public function index($user){
        //echo $user;
        //echo " My first Controller";
        return ['name' => $user, 'age' => 24];
    }
}
