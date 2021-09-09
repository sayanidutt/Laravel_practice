<?php

use App\Http\Controllers\lesson10Controller;
use App\Http\Controllers\lesson8Controller;
use App\Http\Controllers\myFirstController;
use Illuminate\Support\Facades\Route;

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