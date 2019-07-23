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

    Words
    <input class="form-control filled" id="WORDS" name="WORDS" type="text" value="{{$sha1Words}}" /><br>
    Trans ID
    <input name="TRANSIDMERCHANT" id="TRANSIDMERCHANT" type="text" maxlength="120" class="form-control filled" value="{{$transIDMerchant}}" /><br>
    Mall ID
    <input name="MALLID" id="MALLID" type="text" placeholder="Mall ID" maxlength="120" value="{{$mallID}}"/><br>
    Amount
    <input name="AMOUNT" id="amount" type="text" class="form-control filled" value="{{$amount}}" /><br>
    Shared Key
    <input name="SHAREDKEY" id="SHAREDKEY" type="text" maxlength="120" class="form-control" value="{{$sharedKey}}" /><br>

    Basket
    <input name="Basket" id="Basket" type="text" maxlength="120" class="form-control filled" value="{{$res_data["data"]["BASKET"]}}" /><br>
    Chain Merchant
    <input name="CHAINMERCHANT" id="chainmerchant" type="text" maxlength="120" class="form-control filled" value="NA" /><br>
    Session ID
    <input name="SESSIONID" id="SESSIONID" type="text" class="form-control filled" value="740ogm6ifxi65wn" /><br>
    Request date time
    <input name="REQUESTDATETIME" id="REQUESTDATETIME" type="text" class="form-control filled"value="{{$res_data["data"]["REQUESTDATETIME"]}}" /><br>
    Service ID
    <input name="SERVICEID" id="SERVICEID" type="hidden" class="form-control" value="3" /><br>
    Currency
    <input name="CURRENCY" id="CURRENCY" type="text" class="form-control filled" value="{{$res_data["data"]["CURRENCY"]}}" /><br>
    Purchase Currency
    <input name="PURCHASECURRENCY" id="PURCHASECURRENCY" type="text" class="form-control filled" value="{{$res_data["data"]["PURCHASECURRENCY"]}}" /><br>
    Purchase Amount
    <input name="PURCHASEAMOUNT" id="PURCHASEAMOUNT" type="text" maxlength="120" class="form-control filled" value="{{$purchaseAmount}}" /><br>
    Payment channel
    <select name="PAYMENTCHANNEL" id="PAYMENTCHANNEL" class="form-control">
      <option value="">All</option>
    </select><br><br>
    Data diri<br><br>
    Name
    <input name="NAME" id="NAME" type="text" class="form-control filled" value="{{$res_data["data"]["NAME"]}}" /><br>
    Email
    <input name="EMAIL" id="EMAIL" type="text" class="form-control filled" value="{{$res_data["data"]["EMAIL"]}}" /><br>
    Mobile Phone
    <input name="MOBILEPHONE" id="MOBILEPHONE" type="text" class="form-control filled" value="08111111111" /><br>
    Address
    <input name="ADDRESS" id="ADDRESS" type="text" class="form-control filled" value="Jl. Jendral Sudirman" /><br>
    Country
    <input name="COUNTRY" id="COUNTRY" type="text" class="form-control filled" value="ID" /><br>
    Zip Code
    <input name="ZIPCODE" id="ZIPCODE" type="text" class="form-control filled" value="16710" /><br>
    City
    <input name="CITY" id="CITY" type="City" class="form-control filled" value="Jakarta" /><br>


    <button class="btn-default" type="submit">TEST PAYMENT</button>

</form>
        </div>
    </section>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
