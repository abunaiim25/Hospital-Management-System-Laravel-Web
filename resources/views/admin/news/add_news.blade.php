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


        <form action="{{ url('news_upload') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">News Title</label>
                        <input type="text" style=" color:black" name="title" required class="form-control bg-white"  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Health Category</label>
                        <input type="text" style=" color:black" name="category" required class="form-control bg-white"  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Place</label>
                        <input type="text" style=" color:black" name="place" required class="form-control bg-white"  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">News Writer Name</label>
                        <input type="text" style=" color:black" name="img_writer_name" required class="form-control bg-white"  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">News Description</label>
                        <textarea style="color:black" rows="10" name="description" required class="form-control bg-white " id="exampleInputEmail1" cols="5" ></textarea>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">News Pragraph</label>
                        <textarea style="color:black" rows="5" name="pragraph" required class="form-control bg-white " id="exampleInputEmail1" cols="5" ></textarea>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">News Image</label>
                        <input type="file" name="image" class="form-control" required  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Writer Image</label>
                        <input type="file" name="img_writer" class="form-control" required  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

            </div>
            
                <input style="width: 150px" type="submit" class="btn btn-outline-success" >
           
        </form>
    </div>

@endsection
