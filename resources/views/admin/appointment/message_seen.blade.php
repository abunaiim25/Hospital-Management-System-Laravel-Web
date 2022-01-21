@extends('layouts.admin_layout')


@section('admin_content')

<div class="container mt-5">
<div class="card">
    <div class="card-header h1">
       {{$message->name}}
      </div>

    <div class="card-body">
        {{$message->message}}
    </div>
</div>
</div>

@endsection
