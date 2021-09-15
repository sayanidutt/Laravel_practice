<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lesson42Model;

class lesson42RouteModelBindingController extends Controller
{
    //
    function index(lesson42Model $key){
        return $key;
    }
}
