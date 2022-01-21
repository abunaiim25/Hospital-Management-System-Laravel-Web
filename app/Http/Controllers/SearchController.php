<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\News;

class SearchController extends Controller
{
     //searching
     public function search_doctor(Request $request)
     {
         $request->validate([
             'query'=>'required',
         ]);
        
         $query = $request->input('query');
         //dd($query); //for see
         
         $doctor = Doctor::
         where('name','like',"%$query%")
         ->orWhere('phone','like',"%$query%")
         ->orWhere('speciality','like',"%$query%")
         ->orWhere('room','like',"%$query%")
         ->paginate(6);
         //dd($doctor);
         return view('user.search.search_doctor',compact('doctor'));
     }

     //searching
     public function search_news(Request $request)
     {
         $request->validate([
             'query'=>'required',
         ]);
        
         $query = $request->input('query');
         //dd($query); //for see
         
         $news = News::
         where('title','like',"%$query%")
         ->orWhere('category','like',"%$query%")
         ->orWhere('place','like',"%$query%")
         ->orWhere('img_writer_name','like',"%$query%")
         ->paginate(6);
         //dd($doctor);
         return view('user.search.search_news',compact('news'));
     }
}
