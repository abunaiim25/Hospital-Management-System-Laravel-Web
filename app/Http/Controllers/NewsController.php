<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NewsController extends Controller
{
    
     //{{ date('d-m-Y', strtotime($item->created_at)) }}

      //=============User==============
     public function news()
     {
        $news = News::latest()->paginate(8);
        $latest_news = News::latest()->take(3)->get();
         return view('user.blog',compact('news','latest_news'));
     }

     public function news_details($id)
     {
         $news = News::find($id);
         $latest_news = News::latest()->take(3)->get();
         return view('user.blog-details',compact('news','latest_news'));
     }


      //=============Admin==============
     public function add_news()
     {
         return view('admin.news.add_news');
     }

     public function news_upload(Request $request)
    {
        $news=new News;

        if($request->hasFile('image'))
        {
            $file= $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('news_image/',$filename);
            $news->image = $filename;
        }
        if($request->hasFile('img_writer'))
        {
            $file= $request->file('img_writer');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('news_image_writer/',$filename);
            $news->img_writer = $filename;
        }

        $news->title=$request->title;
        $news->category=$request->category;
        $news->place=$request->place;
        $news->img_writer_name=$request->img_writer_name;
        $news->description=$request->description;
        $news->pragraph=$request->pragraph;
        //$news = Carbon::now();

        $news->save();
        return redirect('show_news')->with('status_sweet','News Added Successfully');
        //return redirect()->back();
    }

    public function show_news()
    {
        $news = News::latest()->paginate(10);
        return view('admin.news.show_news',compact('news'));
    }
      //searching
      public function news_search(Request $request)
      {
          $news = News::
          where('title','like','%'.$request->search.'%')
          ->orWhere('category','like','%'.$request->search.'%')
          ->orWhere('place','like','%'.$request->search.'%')
          ->orWhere('img_writer','like','%'.$request->search.'%')
          ->paginate(10);
          return view('admin.news.show_news',compact('news'));
      }
      

    public function edit_news($id)
     {
         $news = News::find($id);
         return view('admin.news.edit_news',compact('news'));
     }


     public function news_edit_update(Request $request,$id)
     {
        $news=News::find($id);
       
        if($request->hasFile('image'))
        {
            $file= $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('news_image/',$filename);
            $news->image = $filename;
        }
        if($request->hasFile('img_writer'))
        {
            $file= $request->file('img_writer');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('news_image_writer/',$filename);
            $news->img_writer = $filename;
        }

        $news->title=$request->title;
        $news->category=$request->category;
        $news->place=$request->place;
        $news->img_writer_name=$request->img_writer_name;
        $news->description=$request->description;
        $news->pragraph=$request->pragraph;
 
         $news->update();
         return redirect('show_news')->with('status_sweet','News Updated Successfully');
     }

}
