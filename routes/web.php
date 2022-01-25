<?php

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



route::get('/',function(){
    return view('home');
});

route::get('/gallery',function(){
    return view('gallery');
});
Route::get('/about', function (){
    return view('about',[
        "nama" => "Angger Panji Laksmana",
        "email" => "3103120024@student.smktelkom-pwt.sch.id",
        "gambar" => "AIIM0839.JPG"
    ]);
});