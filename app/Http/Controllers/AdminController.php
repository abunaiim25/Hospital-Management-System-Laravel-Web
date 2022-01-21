<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
//use Illuminate\Notifications\Notification;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Notification;
//use App\Notifications;


class AdminController extends Controller
{
    //==========Doctors===========
    public function doctorAdd()
    {
        return view('admin.doctor.add_doctor');
    }


    public function doctorUpload(Request $request)
    {
        $doctor=new doctor;

        if($request->hasFile('image'))
        {
            $file= $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('upload_image/',$filename);
            $doctor->image = $filename;
        }
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;
       
        $doctor->save();
        return redirect('show_doctor')->with('status_sweet','Doctor Added Successfully');
    }


    public function show_doctor()
    {
        $doctor= Doctor::paginate(10);
        return view('admin.doctor.show_doctor',compact('doctor'));
    }
     //searching
     public function doctor_search(Request $request)
     {
         $doctor = Doctor::
         where('name','like','%'.$request->search.'%')
         ->orWhere('phone','like','%'.$request->search.'%')
         ->orWhere('speciality','like','%'.$request->search.'%')
         ->orWhere('room','like','%'.$request->search.'%')
         ->paginate(10);
         return view('admin.doctor.show_doctor',compact('doctor'));
     }


    public function delete_doctor($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->back();
    }


    public function edit_doctor($id)
    {
        $data = Doctor::find($id);
        return view('admin.doctor.update_doctor',compact('data'));
    }


    public function update_doctor(Request $request, $id)
    {
        $doctor = Doctor::find($id);

        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;

        if($request->hasFile('image'))
        {
            $file= $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('upload_image/',$filename);
            $doctor->image = $filename;
        }

        $doctor->update();
        return redirect('show_doctor')->with('status_sweet','Doctor Updated Successfully');
    }


    
    //=======Appointment============
    public function appointmentsNav()
    {
        $appoint = Appointment::latest()->paginate(10);
        return view('admin.appointment.show_appointments',compact('appoint'));
    }

    //searching
    public function appointments_search(Request $request)
    {
        $appoint = Appointment::
        where('name','like','%'.$request->search.'%')
        ->orWhere('email','like','%'.$request->search.'%')
        ->orWhere('phone','like','%'.$request->search.'%')
        ->orWhere('doctor','like','%'.$request->search.'%')
        ->orWhere('date','like','%'.$request->search.'%')
        ->orWhere('message','like','%'.$request->search.'%')
        ->orWhere('status','like','%'.$request->search.'%')
        ->paginate(10);
        return view('admin..appointment.show_appointments',compact('appoint'));
    }


    //approved
    public function approved_appoint_admin($id)
    {
        $appoint = Appointment::find($id);
        $appoint->status='Approved';
        $appoint->save();
        return redirect()->back();
    }

    //cancele
    public function cancele_appoint_admin($id)
    {
        $appoint = Appointment::find($id);
        $appoint->status='Canceled';
        $appoint->save();
        return redirect()->back();
    }

    //message_seen
    public function message_seen($id)
    {
        $message = Appointment::find($id);
        return view('admin.appointment.message_seen',compact('message'));
    }

    public function email_view($id)
    {
        $data = Appointment::find($id);
        return view('admin.appointment.email_view',compact('data'));
    }

    //send_email
    public function send_email(Request $request, $id)
    {
        $data = Appointment::find($id);
        
        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
        ];

        Notification::send($data, new SendEmailNotification($details));
        return redirect()->back()->with('status','Email Send Successfully');
    }
}
