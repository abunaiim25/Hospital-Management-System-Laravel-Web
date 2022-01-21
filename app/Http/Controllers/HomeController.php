<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    // after login -> user & admin
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')// 0=>Frontend dashboard home
            {
                $doctor=Doctor::all();
                $latest_news = News::latest()->take(3)->get();
                return view('user.index',compact('doctor','latest_news'));
            }else
            {
                //return view('admin.index');
                $appoint = Appointment::latest()->paginate(10);// 1=>Admin dashboard home
                return view('admin.appointment.show_appointments',compact('appoint'));
            }
        }
        else
        {
            return redirect()->back();
        }
        
    }


    //=========Frontend Doctor============
    public function index()
    {
        $doctor=Doctor::all();
        $latest_news = News::latest()->take(3)->get();
        return view('user.index',compact('doctor','latest_news'));
        /*
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
            $doctor=Doctor::all();
            return view('user.home',compact('doctor'));
        }*/
        
    }

     //searching
     public function doctor_search(Request $request)
     {
         $doctor = Doctor::
         where('name','like','%'.$request->search.'%')
         ->orWhere('phone','like','%'.$request->search.'%')
         ->orWhere('speciality','like','%'.$request->search.'%')
         ->orWhere('room','like','%'.$request->search.'%')
         ->get();
         return view('user.index',compact('doctor'));
     }


    //=======appointment============
    public function appointment_request(Request $request)
    {
        $data=new Appointment();
        
        $data->name= $request->name;
        $data->email= $request->email;
        $data->date= $request->date;
        $data->phone= $request->phone;
        $data->doctor= $request->doctor;
        $data->message= $request->message;
        $data->status= 'In Progress';
        if(Auth::id())
        {
            $data->user_id= Auth::user()->id;
        }

        $data->save();
        return redirect()->back()->with('status','Appointment Request Successfully. We will contact with you soon.');
    }



    public function my_appointment_nav()
    {
        
        if(Auth::id())
        {
            $userid=Auth::user()->id;
            $appoint= Appointment::where('user_id',$userid)->latest()->get();

            return view('user.my_appointment',compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data = Appointment::find($id);
        $data->delete();
        return redirect()->back();
    }


    //=============about==============
    public function about()
    {
        $doctor=Doctor::all();
        return view('user.about',compact('doctor'));
    }


     //=============doctor==============
     public function doctors()
     {
         $doctor=Doctor::paginate(9);
         return view('user.doctors',compact('doctor'));
     }

      //=============contact==============
      public function contact()
      {
        $doctor=Doctor::all();
          return view('user.contact',compact('doctor'));
      }

     
}
