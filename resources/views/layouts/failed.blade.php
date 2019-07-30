@extends('layouts.master')

@section('title')
    Failed
@endsection

@section('navBar')
    @include('layouts.navbar')
@endsection

@section('afterNavBar')
    <!-- Hero Area Start -->
    <div id="hero-area" class="hero-area-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="contents text-center">
                        <h2 class="head-title wow fadeInUp">Temukan Kebutuhan Mendakimu<br>di Kudaki!</h2>

                    </div>
                    <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                        <img class="img-fluid" src="{{asset('/img/appmock.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
@endsection

@section('bodyContent')
    <div class="container">
        <h1 style="font-weight:bold;margin: auto;">{{$res_stat_code}}</h1>
        @foreach($res_body['errors'] as $error)
            <p>{{$error}}</p><br>
        @endforeach
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection