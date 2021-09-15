<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lesson36AccessorModel;

class lesson36AccessorController extends Controller
{
    //
    function index(){
        return lesson36AccessorModel::all();
    }
}
