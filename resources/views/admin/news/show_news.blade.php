@extends('layouts.admin_layout')


@section('admin_content')

    {{-- search --}}
    <div class="d-flex justify-content-center">
        <form class="mt-5" action="{{ url('news_search') }}" method="GET">
            {{ csrf_field() }}
            <input style="background:white; color:black; width:400px!important; border-radius:3px;" type="text"
                name="search" placeholder="Search...">
            <button type="Submit" style="height: 40px" class="btn btn-success ">Search</button>
        </form>
    </div>

    <div class="my-5 " style="overflow: auto"> {{-- style="overflow: auto" ==> horizontal scroll --}}
        <table class="table table-dark table-striped text-white">
            <tr>
                <th>Time</th>
                <th>New Title</th>
                <th>News Category</th>
                <th>News Place</th>
                <th>News Description</th>
                <th>News Pragraph</th>
                <th>News Image</th>
                <th>Update</th>
                <th>Remove</th>
            </tr>

            @foreach ($news as $item)
                <tr>
                    {{--
                    <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                    --}}
                    <td>{{$item->created_at-> diffForHumans()}}</td>
                    <td>{{Str::limit(strip_tags($item->title),25)}}</td>
                    <td>{{ $item->category }}</td>
                    <td>{{ $item->place }}</td>
                    <td>{{Str::limit(strip_tags($item->description),20)}}</td>
                    <td>{{Str::limit(strip_tags($item->pragraph),20)}}</td>
                    <td><img style="height: 100px; width:100px;" src="news_image/{{ $item->image }}" alt="No Image">
                    </td>
                    <td><a class="btn btn-primary" href="{{ url('edit_news', $item->id) }}"><i
                                class="fas fa-pencil"></i></a></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure to remove this?')"
                            href="{{ url('delete_doctor', $item->id) }}"><i class="fa fa-trash"></i> </a></td>
                </tr>
            @endforeach

        </table>
    </div>

    <div class="d-flex justify-content-center  m-5">
        {{--(paginate) ->Providers\AppServiceProvider.php --}}
        {{$news->links()}}
   {{--
        {{$news->onEachSide(1)-> links()}}
   --}}
   </div>

@endsection
