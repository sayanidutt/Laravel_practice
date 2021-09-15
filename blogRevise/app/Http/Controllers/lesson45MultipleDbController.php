<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\lesson45MultipleDBModel;

class lesson45MultipleDbController extends Controller
{
    //
    function index(){
        //return DB::connection('mysql2')->table('products')->get();
        return lesson45MultipleDBModel::all();
    }
}
