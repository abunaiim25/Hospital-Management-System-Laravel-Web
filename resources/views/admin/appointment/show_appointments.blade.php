@extends('layouts.admin_layout')


@section('admin_content')

{{--search--}}
   <div class="d-flex justify-content-center">
    <form class="mt-5" action="{{url('appointments_search')}}" method="GET" >
        {{csrf_field()}}
        <input style="background:white; color:black; width:400px!important; border-radius:3px;"  type="text" name="search"  placeholder="Search...">
        <button type="Submit" style="height: 40px" class="btn btn-success ">Search</button>
      </form>
   </div>
     
   
  

<div class="my-5 " style="overflow: auto"> {{-- style="overflow: auto" ==> horizontal scroll --}}
    <table class="table table-dark table-striped text-white">
        <tr>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Doctor Name</th>
            <th>Date</th>
            <th>Status</th>
            <th>Message</th>
            <th>Approved</th>
            <th>Canceled</th>
            <th>Sand Mail</th>
        </tr>

        @foreach ($appoint as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->doctor}}</td>
            <td>{{$item->date}}</td>
            <td>{{$item->status}}</td>
            <td>{{Str::limit(strip_tags($item->message),20)}} <a class="btn btn-warning" href="{{url('message_seen',$item->id)}}"><i class="fas fa-eye"></i></a></td>
            <td><a class="btn btn-success btn-sm"  href="{{url('approved_appoint_admin',$item->id)}}"><i class="fas fa-thumbs-up"></i> </a></td>
            <td><a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to Canceled this?')" href="{{url('cancele_appoint_admin',$item->id)}}"><i class="fa fa-trash"></i> </a></td>
            <td><a class="btn btn-primary btn-sm"  href="{{url('email_view',$item->id)}}"><i class="fas fa-share"></i></a></td>
        </tr>
        @endforeach
        
    </table>

  
</div>

<div class="d-flex justify-content-center  m-5">
     {{--(paginate) ->Providers\AppServiceProvider.php --}}
     {{$appoint->links()}}
{{--
     {{$appoint->onEachSide(1)-> links()}}
--}}
</div>


@endsection
