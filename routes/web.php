<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SearchPostsController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//admin & frontend -> /home
Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::get('/',[HomeController::class,'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth', 'isAdmin'])->group(function(){
//==========Admin Doctors===========
Route::get('/add_doctor_view',[AdminController::class,'doctorAdd']);
Route::post('/upload_doctor',[AdminController::class,'doctorUpload']);
Route::get('/show_doctor',[AdminController::class,'show_doctor']);
Route::get('/delete_doctor/{id}',[AdminController::class,'delete_doctor']);
Route::get('/edit_doctor/{id}',[AdminController::class,'edit_doctor']);
Route::post('/update_doctor/{id}',[AdminController::class,'update_doctor']);


//=============Admin appointment==========
Route::get('/appointments-admin-nav',[AdminController::class,'appointmentsNav']);
Route::get('/approved_appoint_admin/{id}',[AdminController::class,'approved_appoint_admin']);
Route::get('/cancele_appoint_admin/{id}',[AdminController::class,'cancele_appoint_admin']);
Route::get('/message_seen/{id}',[AdminController::class,'message_seen']);
Route::get('/email_view/{id}',[AdminController::class,'email_view']);
Route::post('/send_email/{id}',[AdminController::class,'send_email']);

//=============Admin News==========
Route::get('/add_news',[NewsController::class,'add_news']);
Route::post('/news_upload',[NewsController::class,'news_upload']);
Route::get('/show_news',[NewsController::class,'show_news']);



//===========Admin search===============
Route::get('/doctor_search',[AdminController::class,'doctor_search']);//search
Route::get('/appointments_search',[AdminController::class,'appointments_search']);//search
Route::get('/news_search',[NewsController::class,'news_search']);//search

});


//=============Home appointment==========
Route::post('/appointment',[HomeController::class,'appointment_request']);
Route::get('/my_appointment',[HomeController::class,'my_appointment_nav']);
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);


//============= about==========
Route::get('/about',[HomeController::class,'about']);

//=============Doctor==========
Route::get('/doctors',[HomeController::class,'doctors']);


//============contact===========
Route::get('/contact',[HomeController::class,'contact']);

//=============news==========
Route::get('/news',[NewsController::class,'news']);
Route::get('/news_details/{id}',[NewsController::class,'news_details']);
Route::get('/edit_news/{id}',[NewsController::class,'edit_news']);
Route::post('/news_edit_update/{id}',[NewsController::class,'news_edit_update']);



//=============Home Search================
Route::get('/search_doctor',[SearchController::class,'search_doctor']);
Route::get('/search_news',[SearchController::class,'search_news']);