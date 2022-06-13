<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

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
    return view('home', [
        "title" => "Home"
    ]);
});

route::get('/gallery',function(){
    return view('gallery', [
        "title" => "Gallery"
    ]);
});
Route::get('/about', function (){
    return view('about',[
        "title" => "About",
        "nama" => "Angger Panji Laksmana",
        "email" => "3103120024@student.smktelkom-pwt.sch.id",
        "gambar" => "AIIM0839.JPG"
    ]);
});
Route::get('/gallery', function () {
    return view('gallery',[
        "title" => "Gallery"
    ]);
});

Route::get('/admin  ', function(){
    return view('admin.home', [
        "title" => "Home"
    ]);
});

Route::get('/delete_contact/{id}', ContactController::class . '@destroy');
Route::get('/edit_contact/{id}', ContactController::class . '@edit');
Route::post('/update_contact', ContactController::class . '@update');

Route::resource('/contact', ContactController::class);

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
