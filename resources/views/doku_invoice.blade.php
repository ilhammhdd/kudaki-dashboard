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

            <form method="post" action="https://staging.doku.com/Suite/Receive">
                <input class="form-control filled" id="WORDS" name="WORDS" type="text"
                       value="{{$sha1Words}}" hidden readonly/>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Transaction ID Merchant</label>
                    <div class="col-6">
                        <input name="TRANSIDMERCHANT" id="TRANSIDMERCHANT" type="text" maxlength="120"
                               class="form-control filled" value="{{$transIDMerchant}}" readonly/>
                    </div>
                </div>

                <input name="MALLID" id="MALLID" type="text" maxlength="120"
                       value="{{$mallID}}" hidden readonly/>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Amount</label>
                    <div class="col-6">
                        <input name="AMOUNT" id="amount" type="text" class="form-control filled"
                               value="{{$purchaseAmount}}" readonly/>
                    </div>
                </div>

                <input name="SHAREDKEY" id="SHAREDKEY" type="text" maxlength="120" class="form-control"
                       value="{{$sharedKey}}" hidden readonly/>

                <input name="Basket" id="Basket" type="text" maxlength="120" class="form-control filled"
                       value="{{$res_data["data"]["BASKET"]}}" hidden readonly/>

                <input name="CHAINMERCHANT" id="chainmerchant" type="text" maxlength="120"
                       class="form-control filled"
                       value="NA" hidden readonly/>

{{--                <input name="SESSIONID" id="SESSIONID" type="text" class="form-control filled"--}}
{{--                       value="{{$res_data["data"]["SESSIONID"]}}" hidden readonly/>--}}
                <input name="SESSIONID" id="SESSIONID" type="text" class="form-control filled"
                       value="740ogm6ifxi65wn" hidden readonly/>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Request Date Time</label>
                    <div class="col-6">
                        <input name="REQUESTDATETIME" id="REQUESTDATETIME" type="text" class="form-control filled"
                               value="{{$res_data["data"]["REQUESTDATETIME"]}}" readonly/>
                    </div>
                </div>

                <input name="SERVICEID" id="SERVICEID" type="hidden" class="form-control" value="3" hidden readonly/>

                <input name="CURRENCY" id="CURRENCY" type="text" class="form-control filled"
                       value="{{$res_data["data"]["CURRENCY"]}}" hidden readonly/>

                <input name="PURCHASECURRENCY" id="PURCHASECURRENCY" type="text" class="form-control filled"
                       value="{{$res_data["data"]["PURCHASECURRENCY"]}}" hidden readonly/>

                <input name="PURCHASEAMOUNT" id="PURCHASEAMOUNT" type="text" maxlength="120"
                       class="form-control filled"
                       value="{{$purchaseAmount}}" hidden readonly/>

                <input name="PAYMENTCHANNEL" id="PAYMENTCHANNEL" type="text" maxlength="120"
                       class="form-control filled"
                       value="" hidden readonly/>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Name</label>
                    <div class="col-6">
                        <input name="NAME" id="NAME" type="text" class="form-control filled"
                               value="{{$res_data["data"]["NAME"]}}" readonly/>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Email</label>
                    <div class="col-6">
                        <input name="EMAIL" id="EMAIL" type="text" class="form-control filled"
                               value="{{$res_data["data"]["EMAIL"]}}" readonly/>
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
