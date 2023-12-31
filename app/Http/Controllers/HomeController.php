<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctors;
use App\Models\Appointments;
use App\Models\nurses;

class HomeController extends Controller
{
    public function redirect()
    {
        //to check if the user is currently logged in 
        if(Auth::id())
        {
            if(Auth::user()->usertype == "supperAdmin")
            {
                
                $totalDoctors = doctors::count();
                $totalAppointments = Appointments::count();
                $totalUsers = User::count();
                $totalNurses = Nurses::count();
                return view('supperadmin.home',compact('totalDoctors','totalAppointments','totalUsers','totalNurses'));
            }
            elseif(Auth::user()->usertype == 'admin')
            {
                $totalDoctors = doctors::count();
                $totalAppointments = Appointments::count();
                $totalUsers = User::count();
                $totalNurses = Nurses::count();
                return view('admin.home',compact('totalDoctors','totalAppointments','totalUsers','totalNurses'));
            }       
            elseif(Auth::user()->usertype == 'receptionist')
            {
            }
            elseif(Auth::user()->usertype == 'cashier')
            {
            }
            elseif(Auth::user()->usertype == 'doctor')
            {
            }
            elseif(Auth::user()->usertype == 'pharmasist')
            {
            }
            elseif(Auth::user()->usertype == 'laboratorian')
            {
            }
            elseif(Auth::user()->usertype == 'manager')
            {
            }
            elseif(Auth::user()->usertype == 'finance')
            {
            }
            elseif(Auth::user()->usertype == 'HeadOfClinicalSevices')
            {
            }
            else
            {
                $doctor = doctors::all();
                return view("user.home", compact("doctor"));
            }

            
        }
        else
        {
            return redirect()->back();
        }
    }
    public function index()
    {
        if(Auth::id()) {
            return redirect('home');
        }
        else{
            $doctor = doctors::all(); // Assuming "doctors" is the model name
            return view("user.home", compact("doctor"));
        }
        
    }

    public function appointment(Request $request)
    {
        $data = new appointments;
        
        $data -> name = $request->name;
        $data -> email = $request->email;
        $data -> date = $request->date;
        $data -> phone = $request->number;
        $data -> message = $request->message;
        $data -> dr_name = $request->dr_name;
        $data -> status = 'In Progress';

        if(Auth::id())
        {
            $data -> user_id = Auth::user()->id;
        }
        
        $data -> save();

        return redirect()->back() -> with('success','appointment set as well');

    }

    public function myAppointment()
    {
        if(Auth::id())
        {
            $userid =Auth::user()-> id;
            $appoint = appointments::where('user_id',$userid)->get();
            return view('user.my_appointment' ,compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }
        
    }

    public function AppointmentDelete($id)
    {
        $data = appointments::find($id);
        $data -> delete();

        return redirect()->back();
    }

    public function ShowAboutUs()
    {
        if(Auth::id()) {
            return redirect('home');
        }
        else{
            $doctor = doctors::all();
            return view("user.AboutUs", compact("doctor"));
        }
    }

    public function Workers()
    {
        if(Auth::id())
        {
            return redirect("home");
        }
        else{
            $doctor = doctors::all();
            $nurse = Nurses::all();

            return view("user.Workers",compact("doctor","nurse"));
        }
    }

    public function News()
    {
        if(Auth::id())
        {
            return redirect("home");
        }
        else{
            $doctor = doctors::all();

            return view("user.news",compact("doctor"));
        }
    }

    public function Contacts()
    {
        if(Auth::id())
        {
            return redirect("home");
        }
        else
        {
            $doctor = doctors::all();

            return view("user.Contacts",compact("doctor"));
        }
    }

    public function MeetDoctor()
    {
        $doctor =doctors::all();
        return view("user.meetDoctor.MeetDoctor",compact("doctor"));
    }


}