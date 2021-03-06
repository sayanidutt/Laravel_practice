<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lesson27Model;

class lesson28ControllerDeleteData extends Controller
{
    //
    function show(){
        $data = lesson27Model::all();
        return view('lesson28',['members'=>$data]);
    }
    function delete($id){
        $data = lesson27Model::find($id);
        $data->delete();
        return redirect('memberslist');
    }
    function showData($id){
        $data = lesson27Model::find($id);
        return view('lesson29updatedata',['data'=>$data]);
    }
    function update(Request $req){
        $data = lesson27Model::find($req->id);
        $data->name = $req->name;
        $data->age = $req->age;
        $data->address = $req->address;
        $data->save();
        return redirect('memberslist');
    }
}
