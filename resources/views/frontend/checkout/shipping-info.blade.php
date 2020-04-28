@extends('frontend.master')
<!-- main-slider -->
@section('home')
		
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Shipping Information</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container" >
			<h2>{{ Session::get('customerName')}}</h2>
			<div class="login-form-grids w3_agileits_contact_grid_left textarea">
				
				<h6>Registration information</h6>
					<form action="{{ route('new-shipping-info') }}" method="post">
						@csrf
					<input type="text" name="first_name" value="{{$customerId->first_name}}" >
					<input type="text" name="last_name" value="{{$customerId->last_name}}" >
					<input type="email" name="email_address"  value="{{$customerId->email_address}}">
					<input type="text" name="phone_number" value="{{$customerId->phone_number}}" >
					<textarea name="address" cols="52" rows="6">{{$customerId->address}}</textarea>
					<input type="submit" name="btn" value="Save shopping info">
				</form>
			</div>
		</div>
	</div>

<!-- //checkout -->
<!-- //top-brands -->
@endsection
