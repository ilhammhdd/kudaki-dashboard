@extends('layouts.master')

@section('title')
    Home Organizer
@endsection

@section('navBar')
    @include('layouts.navbar')
@endsection

@section('afterNavBar')
<p>Logged in</p>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection