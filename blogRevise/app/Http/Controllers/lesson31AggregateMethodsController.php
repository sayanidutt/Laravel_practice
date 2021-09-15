<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class lesson31AggregateMethodsController extends Controller
{
    //
    function operation(){
        $data = DB::table('members')
        ->avg('age');
        return $data;
    }
}
