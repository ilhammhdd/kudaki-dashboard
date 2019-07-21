@extends('layouts.master')

@section('title')
    Doku invoice
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
                        <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Payment</h2>
                    </div>
                </div>
            </div>

            <form id="sign-up" method="post" action="https://staging.doku.com/Suite/Receive">
                <input type="text" id="AMOUNT" name="AMOUNT"
                       value="{{$amount}}">

                <input type="text" id="PURCHASEAMOUNT" name="PURCHASEAMOUNT"
                       value="{{$purchaseAmount}}">
                <input type="text" id="TRANSIDMERCHANT" name="TRANSIDMERCHANT"
                       value="{{"INVOICE-".$transIDMerchant}}">
                <input type="text" id="WORDS" name="WORDS"
                       value="{{$sha1Words}}">
                <input type="text" id="REQUESTDATETIME" name="REQUESTDATETIME"
                       value="{{$res_data["data"]["REQUESTDATETIME"]}}">
                <input type="text" id="CURRENCY" name="CURRENCY"
                       value="{{$res_data["data"]["CURRENCY"]}}">
                <input type="text" id="PURCHASECURRENCY" name="PURCHASECURRENCY"
                       value="{{$res_data["data"]["PURCHASECURRENCY"]}}">
                <input type="text" id="SESSIONID" name="SESSIONID"
                       value="740ogm6ifxi65wn">
                <input type="text" id="NAME" name="NAME"
                       value="{{$res_data["data"]["NAME"]}}">
                <input type="text" id="EMAIL" name="EMAIL"
                       value="{{$res_data["data"]["EMAIL"]}}">

                <input type="text" id="BASKET" name="BASKET"
                       value="{{$res_data["data"]["BASKET"]}}">
                <input type="text" value="{{$mallID}}" id="mall-id" name="MALLID" hidden>
                <input type="text" value="{{$sharedKey}}" id="shared-key" name="SHAREDKEY" hidden>
                <input type="text" value="NA" id="chain-merchant" name="CHAINMERCHANT" hidden>

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