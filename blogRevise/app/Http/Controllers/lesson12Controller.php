<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lesson12Controller extends Controller
{
    //
    function saveData(Request $req){
        $req->validate([
            'username' => 'required | max:10',
            'password' => 'required | min:5'
        ]);
        return $req->input();
    }
}
