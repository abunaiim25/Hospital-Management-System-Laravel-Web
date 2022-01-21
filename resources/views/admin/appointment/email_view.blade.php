@extends('layouts.admin_layout')



@section('admin_content')

    <div class="container " style="margin-top: 100px; ">

        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('status') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


        <form action="{{ url('send_email', $data->id) }}" method="POST">
            @csrf

            <div class="row">

                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Greeting</label>
                        <input type="text" style=" color:black" name="greeting"  class="form-control bg-white"  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Action Text</label>
                        <input type="text" style=" color:black" name="actiontext" class="form-control bg-white"  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Action Url</label>
                        <input type="text" style=" color:black" name="actionurl" class="form-control bg-white"  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
    
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">End Part</label>
                        <input type="text" style=" color:black" name="endpart" class="form-control bg-white"  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
    
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Body</label>
                        <textarea style="color:black" rows="10" name="body" class="form-control bg-white " id="exampleInputEmail1" cols="5" ></textarea>
                    </div>
                </div>
            </div>
            
            
          
            <div style="padding: 15px;">
                <input type="submit" class="btn btn-outline-success" >
            </div>
        </form>
    </div>

@endsection
