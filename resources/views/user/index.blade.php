@extends('layouts.user_layout')


@section('title')
Health Center 
@endsection


@section('frontend_content')
    
@include('user.user_home_include.background_img')

<div class="bg-light">
    @include('user.user_home_include.help')

    @include('user.user_home_include.welcome_health')
</div> <!-- .bg-light -->

@include('user.user_home_include.doctor')

@include('user.user_home_include.latest_news')

@include('user.user_home_include.appointment')

{{--
@include('user.user_home_include.banner')
--}}

@endsection