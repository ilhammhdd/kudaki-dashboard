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
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Purchase Amount</label>
                    <div class="col-6">
                        <input class="form-control" type="text" id="purchase-amount" name="PURCHASEAMOUNT"
                               value="{{$res_data["data"]["PURCHASEAMOUNT"]}}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Amount</label>
                    <div class="col-6">
                        <input class="form-control" type="text" id="amount" name="AMOUNT"
                               value="{{(string)$res_data["data"]["AMOUNT"]}}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Transaction ID Merchant</label>
                    <div class="col-6">
                        <input class="form-control" type="wtext" id="trans-id-merchant" name="TRANSIDMERCHANT"
                               value="{{$res_data["data"]["TRANSIDMERCHANT"]}}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Words</label>
                    <div class="col-6">
                        <input class="form-control" type="text" id="words" name="WORDS"
                               value="{{$sha1Words}}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Request Date Time</label>
                    <div class="col-6">
                        <input class="form-control" type="text" id="request-date-time" name="REQUESTDATETIME"
                               value="{{$res_data["data"]["REQUESTDATETIME"]}}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Currency</label>
                    <div class="col-6">
                        <input class="form-control" type="text" id="currency" name="CURRENCY"
                               value="{{$res_data["data"]["CURRENCY"]}}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exa mple-text-input" class="col-2 col-form-label">Purchase Currency</label>
                    <div class="col-6">
                        <input class="form-control" type="text" id="purchase-currency" name="PURCHASECURRENCY"
                               value="{{$res_data["data"]["PURCHASECURRENCY"]}}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exa mple-text-input" class="col-2 col-form-label">Session ID</label>
                    <div class="col-6">
                        <input class="form-control" type="text" id="session-id" name="SESSIONID"
                               value="{{$res_data["data"]["SESSIONID"]}}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exa mple-text-input" class="col-2 col-form-label">Name</label>
                    <div class="col-6">
                        <input class="form-control" type="text" id="name" name="NAME"
                               value="{{$res_data["data"]["NAME"]}}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exa mple-text-input" class="col-2 col-form-label">Email</label>
                    <div class="col-6">
                        <input class="form-control" type="text" id="email" name="EMAIL"
                               value="{{$res_data["data"]["EMAIL"]}}" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="exa mple-text-input" class="col-2 col-form-label">Basket</label>
                    <div class="col-6">
                        <input class="form-control" type="text" id="basket" name="BASKET"
                               value="{{$res_data["data"]["BASKET"]}}" disabled>
                    </div>
                </div>

                <input type="text" value="{{env("MALLID")}}" id="mall-id" name="MALLID" hidden>
                <input type="text" value="{{env("SHAREDKEY")}}" id="shared-key" name="SHAREDKEY" hidden>
                <input type="text" value="{{env('CHAINMERCHANT')}}" id="chain-merchant" name="CHAINMERCHANT" hidden>

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