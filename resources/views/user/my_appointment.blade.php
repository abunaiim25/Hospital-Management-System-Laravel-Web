@extends('layouts.user_layout')

@section('frontend_content')
    <div class=" container my-5"  style="overflow: auto">
        <table class="table ">
            <tr>
                <th>Doctor Name</th>
                <th>Date</th>
                <th>Message</th>
                <th>Status</th>
                <th>Cancel</th>
            </tr>

            @foreach ($appoint as $item)
            <tr>
                <td>{{$item->doctor}}</td>
                <td>{{$item->date}}</td>
                <td>{{$item->message}}</td>
                <td>{{$item->status}}</td>
                <td><a class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')" href="{{url('cancel_appoint',$item->id)}}"><i class="fa fa-trash"></i> </a></td>
            </tr>
            @endforeach
            
        </table>
    </div>
@endsection

