@extends('layouts.master')

@section('title')
    Transactions
@endsection

@section('css.addition')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('navBar')
    @include('layouts.navbar')
@endsection

@section('bodyContent')
    <section id="sign-up" class="section-padding">
        <div class="container">
            <table id="invoices" class="display" style="width: 100%;">
                <thead>
                <tr>
                    <th>Purchase Amount</th>
                    <th>Transaction Id Merchant</th>
                    <th>Request Date Time</th>
                    <th>Session Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @if($response['data']['invoices']!=null)
                    @foreach($response['data']['invoices'] as $invoice)
                        <tr>
                            <td>{{$invoice["purchase_amount"]}}</td>
                            <td>{{$invoice["transaction_id_merchant"]}}</td>
                            <td>{{$invoice["request_date_time"]}}</td>
                            <td>{{$invoice["session_id"]}}</td>
                            <td>{{$invoice["name"]}}</td>
                            <td>{{$invoice["email"]}}</td>
                            <td>{{$invoice["status"]}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </section>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

@section('js.addition')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#invoices').DataTable();
        });
    </script>
@endsection