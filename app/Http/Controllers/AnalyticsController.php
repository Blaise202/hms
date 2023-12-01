<?php

namespace App\Http\Controllers;
use App\Models\Appointments;
use Illuminate\Http\Request;
use App\Models\Doctors;
use App\Models\User;
use App\Models\nurses;
class AnalyticsController extends Controller
{
    public function counts()
    {
        $totalDoctors = Doctors::count();
        $totalAppointments = Appointments::count();
        $totalUsers = User::count();
        $totalNurses = Nurses::count();
    return view('admin.home',compact('totalDoctors','totalAppointments','totalUsers','totalNurses'));
    }

}