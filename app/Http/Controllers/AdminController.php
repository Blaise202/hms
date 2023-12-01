<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use Illuminate\Http\Request;
use App\Models\appointments;
use Notification;
use App\Notifications\EmailNotification;
use App\Models\Nurses;
use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{
    public function AddAdmin()
    {
        return view('admin.addDoctor');
    }
    
    public function Upload(Request $request)
    {
        $doctor = new Doctors();
        $image = $request->file('image');
       
            $filename = time() .'.'. $image->getClientOriginalExtension();

            $image->move('doctorimages', $filename);

            $doctor->image = $filename;
        

        $doctor->f_name = $request->f_name;
        $doctor->l_name = $request->l_name;
        $doctor->phone = $request->phone;
        $doctor->o_phone = $request->o_phone;
        $doctor->dob = $request->dob;
        $doctor->specialisation = $request->specialisation;
        $doctor->email = $request->email;
        $doctor->room = $request->room;

        $doctor->save();

        return redirect()->back()->with('message','Doctor added Successifully');


    }

    public function ShowAppointments()
    {
        $data = appointments::all();
        return view('admin.ShowAppointments',compact('data'));
    }

    public function approved($id) 
    {
        $data = appointments::find($id);
        $data->status='approved by admin'; 
        $data->save(); 
        return redirect()->back(); 
    }

    public function canceled($id) 
    {
        $data = appointments::find($id);
        $data->status='canceled by admin'; 
        $data->save(); 
        return redirect()->back(); 
    }

    public function ShowDoctors()
    {
        $data = doctors::all();
        return view('admin.ShowDoctors',compact('data'));
    }

    public function deleteDoctor($id)
    {
        $data = doctors::find($id);
        $data -> delete();
        return redirect()->back();
    }

    public function updateDoctor($id)
    {
        $data = doctors::find($id);
        return view('admin.updateDoctor',compact('data'));
    }

    public function editDoctor(Request $request, $id)
    {
        $doctor = doctors::find($id);

        $doctor->f_name =$request->f_name;
        $doctor->l_name =$request->l_name;
        $doctor->phone =$request->phone;
        $doctor->o_phone =$request->o_phone;
        $doctor->dob =$request->dob;
        $doctor->specialisation =$request->specialisation;
        $doctor->room =$request->room;
        
        $image =$request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->file->move('doctorimages', $imagename);

            $doctor->image = $imagename;
        }   
         
        $doctor->save();

        return redirect()->back()->with('success','Doctor updated successifully!');
    }

    public function emailview ($id)
    {
        $data = appointments::find($id);
        return view('admin.emailview',compact('data'));
    }

    public function sendemail(Request $request, $id)
    {
        $data = appointments::find($id);
        $details=[
            'greetings' => $request->greetings,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
        ];
        
        // Notification::send($data,new EmailNotification($details));

        return redirect()->back()->with('message','mail sent successifully');
    }

    public function ShowNurses()
    {
        $data = Nurses::all();
        return view('admin.ShowNurses' ,compact('data'));
    }

    public function AddNurse()
    {
        Alert::success('NurseAdded','Anew nurse is successifully added');
        return view('admin.AddNurse');
        
    }

    public function UploadNurse(Request $request)
    {
        $nurse = new Nurses();
        $image = $request->file('image');
       
            $filename = time() .'.'. $image->getClientOriginalExtension();

            $image->move('nursesimages', $filename);

            $nurse->image = $filename;
        

        $nurse->name = $request->name;
        $nurse->gender = $request->gender;
        $nurse->bdate = $request->bdate;
        $nurse->phone = $request->phone;
        $nurse->o_phone = $request->o_phone;
        $nurse->email = $request->email;

        
        $nurse->save();

        return redirect()->back();
    }

    public function deleteNurse($id)
    {
        $data = nurses::find($id);
        $data -> delete();

        return redirect()->back();
    }

    public function UpdateNurse($id)
    {
        $data = nurses::find($id);
        return view('admin.updateNurse',compact('data'));
    }

    public function editNurse(Request $request, $id)
    {
        $doctor = nurses::find($id);

        $doctor->name =$request->name;
        $doctor->gender =$request->gender;
        $doctor->phone =$request->phone;
        $doctor->o_phone =$request->o_phone;
        $doctor->bdate =$request->bdate;
        
        $image =$request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->file->move('nursesimages', $imagename);

            $doctor->image = $imagename;
        }   
         
        $doctor->save();

        return redirect()->back()->with('success','Doctor updated successifully!');
    }

}