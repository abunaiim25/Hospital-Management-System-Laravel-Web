@extends('layouts.admin_layout')



@section('admin_content')

    <div class="container  m-5" >

        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('status') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


        <form action="{{ url('news_edit_update',$news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">News Title</label>
                        <input type="text" style=" color:black" name="title" value="{{$news->title}}" class="form-control bg-white"  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Health Category</label>
                        <input type="text" style=" color:black" name="category" value="{{$news->category}}" class="form-control bg-white"  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Place</label>
                        <input type="text" style=" color:black" name="place" value="{{$news->place}}" class="form-control bg-white"  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">News Writer Name</label>
                        <input type="text" style=" color:black" name="img_writer_name" value="{{$news->img_writer_name}}" class="form-control bg-white"  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">News Description</label>
                        <textarea style="color:black" rows="10" name="description"  class="form-control bg-white " id="exampleInputEmail1" cols="5" >{{$news->description}}</textarea>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">News Pragraph</label>
                        <textarea style="color:black" rows="5" name="pragraph" class="form-control bg-white " id="exampleInputEmail1" cols="5" >{{$news->pragraph}}</textarea>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">News Old Image</label>
                        <img  style="height: 120px; width:120px;"  src="{{ asset('news_image/' . $news->image) }}" alt="No Image">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Writer Old Image</label>
                        <img  style="height: 120px; width:120px;"  src="{{ asset('news_image_writer/' . $news->img_writer) }}" alt="No Image">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">News Image</label>
                        <input type="file" name="image" class="form-control"   id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Writer Image</label>
                        <input type="file" name="img_writer" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

            </div>
            
                <input style="width: 150px" type="submit" class="btn btn-outline-success" >
           
        </form>
    </div>

@endsection
