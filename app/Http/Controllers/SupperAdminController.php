<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use Illuminate\Http\Request;

class SupperAdminController extends Controller
{
    public function su_home(){
        $doctor = doctors::all();
        return view('supperadmin.home',compact('doctor'));
    }
}