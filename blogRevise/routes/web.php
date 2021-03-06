<?php

use App\Http\Controllers\lesson20Controller;
use App\Http\Controllers\lesson19Controller;
use App\Http\Controllers\lesson18Controller;
use App\Http\Controllers\lesson10Controller;
use App\Http\Controllers\lesson12Controller;
use App\Http\Controllers\lesson17Controller;
use App\Http\Controllers\lesson21;
use App\Http\Controllers\lesson22Controller;
use App\Http\Controllers\lesson23Controller;
use App\Http\Controllers\lesson25Controller;
use App\Http\Controllers\lesson26Controller;
use App\Http\Controllers\lesson27ControllerDataInsertion;
use App\Http\Controllers\lesson28ControllerDeleteData;
use App\Http\Controllers\lesson30QueryBuilderController;
use App\Http\Controllers\lesson31AggregateMethodsController;
use App\Http\Controllers\lesson32JoinController;
use App\Http\Controllers\lesson36AccessorController;
use App\Http\Controllers\lesson37MutatorController;
use App\Http\Controllers\lesson38OneToOneRelation;
use App\Http\Controllers\lesson39OneToManyRelation;
use App\Http\Controllers\lesson42RouteModelBindingController;
use App\Http\Controllers\lesson45MultipleDbController;
use App\Http\Controllers\lesson48GetApiController;
use App\Http\Controllers\lesson8Controller;
use App\Http\Controllers\myFirstController;
use App\Models\lesson36AccessorModel;
use App\Models\lesson37MutatorModel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Mail\SampleMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome',['name'=>$name]);
    //return redirect('contact');
    return new SampleMail();
});

Route:: view("about",'about');
Route:: view("contact","contact");
Route:: get("users/{user}",[myFirstController::class,'index']);
/*
Route::get('/lesson8/{name}',function($name){
    return view('lesson8',['name' => $name]);
});*/

Route::get("lesson8/{user}",[lesson8Controller::class,'loadView']);
Route::get("lesson10",[lesson10Controller::class,'viewLoad']);

Route::post("savedata",[lesson12Controller::class,'saveData']);
Route:: view("login","lesson12");

Route::view('home14',"lesson14home");
Route::view('noaccess14',"lesson14noaccess");
Route::view('users14',"lesson14users");

Route::view('home15',"lesson15home");
Route::view('noaccess15',"lesson15noaccess");


Route::group(['middleware' => ['protectedPage']],function(){
    Route::view('users15',"lesson15users");
});

Route::view('home16',"lesson16home")->middleware('protectedPage');
Route::view('noaccess16',"lesson16noaccess");
Route::view('users16',"lesson16users");

Route::get("data",[lesson17Controller::class,'index']);

Route::get("datawithmodel",[lesson18Controller::class,'index']);

Route::get("httpclient",[lesson19Controller::class,'index']);

Route::delete("methods",[lesson20Controller::class,'index']);
Route::view("login20","lesson20");

//Route::view("userlogin","lesson21session");
Route::post("userauth",[lesson21::class,'userLogin']);
Route::view("profile","lesson21profile");
Route::get('/userlogin', function () {
    if(session()->has('user')){
        return redirect('profile');
    }
    return view('lesson21session');    
});
Route::get('/logout', function () {
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('userlogin');
});


Route::view("flashsession","lesson22flashsession");
Route::post("add",[lesson22Controller::class,'addMember']);

Route::view("uploadfile","lesson23fileupload");
Route::post("upload",[lesson23Controller::class,'index']);

Route::get('/locale/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('lesson24locale');
}); 

Route::get("members",[lesson25Controller::class,'getData']);

Route::get('pagination',[lesson26Controller::class,'getData']);

Route::view("adddata","lesson27datainsert");
Route::post("storedata",[lesson27ControllerDataInsertion::class,'addData']);

Route::get("memberslist",[lesson28ControllerDeleteData::class,'show']);
Route::get("delete/{id}",[lesson28ControllerDeleteData::class,'delete']);
Route::get("edit/{id}",[lesson28ControllerDeleteData::class,'showData']);
Route::post("update",[lesson28ControllerDeleteData::class,'update']);

Route::get("querybuilder",[lesson30QueryBuilderController::class,'dbOperations']);

Route::get("aggregatemethod",[lesson31AggregateMethodsController::class,'operation']);

Route::get("joining",[lesson32JoinController::class,'joining']);

Route::get("accessor",[lesson36AccessorController::class,'index']);

Route::get("mutator",[lesson37MutatorController::class,'index']);

Route::get("onetoone",[lesson38OneToOneRelation::class,'show']);

Route::get("onetomany",[lesson39OneToManyRelation::class,'index']);

$data = "hi,let's learn laravel";

$data = Str::of($data)
        ->ucfirst($data)
        ->replaceFirst("Hi","Hello",$data)
        ->camel($data);

//echo $data;

Route::get("binding/{key:name}",[lesson42RouteModelBindingController::class,'index']);

Route::get("multipleDB",[lesson45MultipleDbController::class,'index']);

Route::get("getapi",[lesson48GetApiController::class,'index']);