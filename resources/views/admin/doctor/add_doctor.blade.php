@extends('layouts.admin_layout')

<style type="text/css">
    label {
        display: inline-block;
        width: 200px;
    }

</style>

@section('admin_content')

    <div class="container text-center" style="margin-top: 100px;">

        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('status') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


        <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div style="padding: 15px;">
                <label for="">Doctor Name</label>
                <input type="text" name="name" style="color:black" placeholder="Write the name" required>
            </div>

            <div style="padding: 15px;">
                <label for="">Phone Number</label>
                <input type="text" name="number" style="color:black" placeholder="Write the phone number" required>
            </div>

            {{--
            <div style="padding: 15px; ">
                <label for="">Speciality</label>
                <select name="speciality" id="" style="color:black; width:220px;" required>
                    <option value="">--- Select Speciality ---</option>
                    <option value="skin">skin</option>
                    <option value="heart">heart</option>
                    <option value="eye">eye</option>
                    <option value="nose">nose</option>
                </select>
            </div>
            --}}

            <div style="padding: 15px;">
                <label for="">Speciality</label>
                <input type="text" name="speciality" style="color:black" placeholder="Write the speciality" required>
            </div>


            <div style="padding: 15px;">
                <label for="">Room Number</label>
                <input type="text" name="room" style="color:black" placeholder="Write the room number" required>
            </div>

            <div style="padding: 15px; ">
                <label for="">Doctor Image</label>
                <input type="file" name="image" style=" width:220px;" >
            </div>

            <div style="padding: 15px;">
                <input type="submit" class="btn btn-outline-success" style=" width:150px;">
            </div>
        </form>
    </div>
    
@endsection
