<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lesson38OneToOneRelationModel1;

class lesson38OneToOneRelation extends Controller
{
    //
    function show(){
        return lesson38OneToOneRelationModel1::find(2)->getDetail;
    }
}
