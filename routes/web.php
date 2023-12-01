<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnalyticsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth', 'verified');

Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function(){
    return view('dashboard');
})->name('dashboard');

Route::get('/AddDoctor',[AdminController::class,'AddAdmin']);

Route::post('/UploadDoctor',[AdminController::class,'Upload']);

Route::post('/appointment',[HomeController::class,'appointment']);

Route::get('/myAppointment',[HomeController::class,'myAppointment']);

Route::get('/AppointmentDelete/{id}',[HomeController::class,'AppointmentDelete']);

Route::get('/ShowAppointments',[AdminController::class,'ShowAppointments']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/ShowDoctors',[AdminController::class,'ShowDoctors']);

Route::get('/deleteDoctor/{id}',[AdminController::class,'deleteDoctor']);


Route::get('/updateDoctor/{id}',[AdminController::class,'updateDoctor']);

Route::post('/editDoctor/{id}',[AdminController::class,'editDoctor']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);

Route::get('/home',[AnalyticsController::class,'counts']);

Route::get('/ShowNurses',[AdminController::class,'ShowNurses']);

Route::get('/AddNurse',[AdminController::class,'AddNurse']);

Route::post('/UploadNurse',[AdminController::class,'UploadNurse']);

Route::get('/DeleteNurse/{id}',[AdminController::class,'DeleteNurse']);

Route::get('/UpdateNurse/{id}',[AdminController::class,'UpdateNurse']);

Route::post('/editNurse/{id}',[AdminController::class,'editNurse']);

Route::get('/AboutUs',[HomeController::class,'ShowAboutUs']);

Route::get('/Workers',[HomeController::class,'Workers']);

Route::get('/news',[HomeController::class, 'News']);

Route::get('/contacts',[HomeController::class, 'Contacts']);