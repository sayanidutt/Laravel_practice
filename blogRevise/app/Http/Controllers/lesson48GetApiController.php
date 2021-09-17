<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lesson48GetApiModel;

class lesson48GetApiController extends Controller
{
    //
    function index(){
        return lesson48GetApiModel::all();
    }
}
