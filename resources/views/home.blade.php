@extends('layouts.master')

@section('title')
    Home Organizer
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
    <section id="sign-up" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-left">
                        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Event register form</h2>
                    </div>
                </div>
            </div>

            <form id="sign-up" method="post" action="{{route('event.add')}}">
                @csrf
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Nama</label>
                    <div class="col-6">
                        <input class="form-control" type="text" value="" id="name" name="name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Venue</label>
                    <div class="col-6">
                        <input class="form-control" type="text" value="" id="venue" name="venue">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Description</label>
                    <div class="col-6">
                        <input class="form-control" type="text" value="" id="description" name="description">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Duration From</label>
                    <div class="col-6">
                        <input class="form-control" type="date" value="" id="duration_from" name="duration_from">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Duration To</label>
                    <div class="col-6">
                        <input class="form-control" type="date" value="" id="duration_to" name="duration_to">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Ad Duration From</label>
                    <div class="col-6">
                        <input class="form-control" type="date" value="" id="ad_duration_from" name="ad_duration_from">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exa mple-text-input" class="col-2 col-form-label">Ad Duration To</label>
                    <div class="col-6">
                        <input class="form-control" type="date" value="" id="ad_duration_to" name="ad_duration_to">
                    </div>
                </div>

                <div class="submit-button">
                    <button class="btn btn-common" id="form-submit" type="submit">Submit</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
