@extends('layouts.master')

@section('title')
    Event Registration
@endsection

@section('navBar')
    @include('layouts.navbar')
@endsection

@section('bodyContent')
    <section id="transaction-details" class="section-padding">
        <div class="container">
            <div class="row" style="margin-top: 15vh;">
                <div class="col">
                    <img class="img-fluid" src="{{$response['data']['poster']}}" alt="">
                </div>
                <div class="col">
                    <table>
                        <tr>
                            <td><h6>Event Name</h6></td>
                            <td><h6>:</h6></td>
                            <td><h6>{{$response['data']['name']}}</h6></td>
                        </tr>
                        <tr>
                            <td><h6>Venue</h6></td>
                            <td><h6>:</h6></td>
                            <td><h6>{{$response['data']['venue']}}</h6></td>
                        </tr>
                        <tr>
                            <td><h6>Description</h6></td>
                            <td><h6>:</h6></td>
                            <td><h6>{{$response['data']['description']}}</h6></td>
                        </tr>

                        <tr>
                            <td><h6>Event Duration From</h6></td>
                            <td><h6>:</h6></td>
                            <td><h6>{{date('d M Y',$response['data']['duration_from']['seconds'])}}</h6></td>
                        </tr>
                        <tr>
                            <td><h6>Event Duration To</h6></td>
                            <td><h6>:</h6></td>
                            <td><h6>{{date('d M Y',$response['data']['duration_to']['seconds'])}}</h6></td>
                        </tr>
                        <tr>
                            <td><h6>Ad Duration From</h6></td>
                            <td><h6>:</h6></td>
                            <td><h6>{{date('d M Y',$response['data']['ad_duration_from']['seconds'])}}</h6></td>
                        </tr>
                        <tr>
                            <td><h6>Status</h6></td>
                            <td><h6>:</h6></td>
                            <td><h6>{{$response['data']['status']}}</h6></td>
                        </tr>
                        <tr>
                            <td><h6>Payment Status</h6></td>
                            <td><h6>:</h6></td>
                            <td><h6>{{$response['data']['payment_status']}}</h6></td>
                        </tr>
                    </table>
{{--                    <div class="row">--}}
{{--                        <h6>Event Name : {{$response['data']['name']}}</h6>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <h6>Venue : {{$response['data']['venue']}}</h6>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <h6>Description : {{$response['data']['description']}}</h6>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <h6>Event Duration From : {{date('d M Y',$response['data']['duration_from']['seconds'])}}</h6>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <h6>Event Duration To : {{date('d M Y',$response['data']['duration_to']['seconds'])}}</h6>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <h6>Ad Duration From : {{date('d M Y',$response['data']['ad_duration_from']['seconds'])}}</h6>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <h6>Ad Duration To : {{date('d M Y',$response['data']['ad_duration_to']['seconds'])}}</h6>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <h6>Status : {{$response['data']['status']}}</h6>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <h6>Payment Status : {{$response['data']['payment_status']}}</h6>--}}
{{--                    </div>--}}

                    @if($response['data']['payment_status']=="SUCCESS")
                        <form action="{{route('publish')}}" method="post">
                            @csrf
                            <input type="text" value="{{$response['data']['uuid']}}" name="kudaki_event_uuid" hidden readonly>

                            <div class="submit-button">
                                <button class="btn btn-common" id="form-submit" type="submit">Publish</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection