@extends('layouts.admin_layout')


@section('admin_content')

    {{-- search --}}
    <div class="d-flex justify-content-center">
        <form class="mt-5" action="{{ url('doctor_search') }}" method="GET">
            {{ csrf_field() }}
            <input style="background:white; color:black; width:400px!important; border-radius:3px;" type="text"
                name="search" placeholder="Search...">
            <button type="Submit" style="height: 40px" class="btn btn-success ">Search</button>
        </form>
    </div>

    <div class="my-5 " style="overflow: auto"> {{-- style="overflow: auto" ==> horizontal scroll --}}
        <table class="table table-dark table-striped text-white">
            <tr>
                <th>Doctor Name</th>
                <th>Phone</th>
                <th>Specility</th>
                <th>Room No</th>
                <th>Image</th>
                <th>Update</th>
                <th>Remove</th>
            </tr>

            @foreach ($doctor as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->speciality }}</td>
                    <td>{{ $item->room }}</td>
                    <td><img style="height: 100px; width:100px;" src="upload_image/{{ $item->image }}" alt="No Image">
                    </td>
                    <td><a class="btn btn-primary" href="{{ url('edit_doctor', $item->id) }}"><i
                                class="fas fa-pencil"></i></a></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure to remove this?')"
                            href="{{ url('delete_doctor', $item->id) }}"><i class="fa fa-trash"></i> </a></td>
                </tr>
            @endforeach

        </table>
    </div>

    <div class="d-flex justify-content-center  m-5">
        {{--(paginate) ->Providers\AppServiceProvider.php --}}
        {{$doctor->links()}}
   {{--
        {{$doctor->onEachSide(1)-> links()}}
   --}}
   </div>

@endsection
