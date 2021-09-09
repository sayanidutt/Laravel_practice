<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lesson8Controller extends Controller
{
    //
    public function loadView($user){
        return view("lesson8",['user' => $user]);
    }
}
