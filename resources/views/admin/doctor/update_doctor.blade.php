@extends('layouts.admin_layout')

<style type="text/css">
    label {
        display: inline-block;
        width: 200px;
    }

}
</style>


@section('admin_content')

<div class="container text-center" ">

    {{--
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    --}}


    <form action="{{ url('update_doctor',$data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div style="padding: 15px;">
            <label for="">Doctor Name</label>
            <input type="text" name="name" style="color:black" value="{{$data->name}}">
        </div>

        <div style="padding: 15px;">
            <label for="">Phone Number</label>
            <input type="text" name="number" style="color:black" value="{{$data->phone}}">
        </div>

        <div style="padding: 15px;">
            <label for="">Speciality</label>
            <input type="text" name="speciality" style="color:black" value="{{$data->speciality}}">
        </div>

        <div style="padding: 15px;">
            <label for="">Room Number</label>
            <input type="text" name="room" style="color:black" value="{{$data->room}}">
        </div>

        <div style="padding: 15px;" class="d-flex justify-content-center">
            <label for="">Doctor Old Image</label>
            <img  style="height: 120px; width:120px;"  src="{{ asset('upload_image/' . $data->image) }}" alt="No Image">
        </div>

        <div style="padding: 15px;" class="d-flex justify-content-center">
            <label for="">Change Image</label>
            <input type="file" name="image" style=" width:220px;">
        </div>

        <div style="padding: 15px;">
            <button type="submit" class="btn btn-success" style=" width:150px;">Update</button>
        </div>
    </form>

   
</div>

@endsection
