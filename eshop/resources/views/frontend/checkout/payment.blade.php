@extends('frontend.master')
<!-- main-slider -->
@section('home')
		<div class="container" style="margin-top:50px">
        <div class="card-body">
                    <div class="table-responsive">
                    	<form action="{{route('payment-confarm')}}"  method="POST">
                    		@csrf
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                           <tr>
                           	<td>Paypal</td>
                           	<td><input type="radio" name="payment_type" value="Paypal">Paypal</td>
                           </tr>
                           <tr>
                           	<td>Cash In Dalybary</td>
                           	<td><input type="radio" name="payment_type" value="Cash">Cash</td>
                           </tr>
                           <tr>
                           	<td>Bkash</td>
                           	<td><input type="radio" name="payment_type" value="Bkash">Bkash</td>
                           </tr>
                           <tr>
                           	<td></td>
                           	<td><input type="submit" name="btn" value="Oder Confarm"></td>
                           </tr>
                        </table>
                        </form>
                    </div>
                </div>
                </div>
@endsection