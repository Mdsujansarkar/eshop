@extends('frontend.master')
<!-- main-slider -->
@section('home')
		
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container" >
			<h2>Register Here</h2>
			<h4 class="text-center">{{ Session::get('message')}}</h4>
			<div class="login-form-grids w3_agileits_contact_grid_left textarea" style="float: left; overflow: hidden;">
				
				<h6>Registration information</h6>
					<form action="{{route('customer-chechout')}}" method="post">
						@csrf
					<input type="text" name="first_name" placeholder="First Name" required=" " >
					<input type="text" name="last_name" placeholder="Last Name" required=" " >
					<input type="email" name="email_address" placeholder="Email Address" required=" " >
					<input type="password" name="password" placeholder="Password" required=" " >
					<input type="text" name="phone_number" placeholder="Phone Number" required=" " >
					<textarea name="address" placeholder="Your message here..." cols="52" rows="6"></textarea>
					<input type="submit" name="btn" value="Register">
				</form>
			</div>
			<div class="login-form-grids" style="overflow: hidden;">
				<h6>Login information</h6>
				<form action="{{route('login-info-customer')}}" method="post">
					@csrf
					<input type="email" name="email_address"placeholder="Email Address" required=" " >
					<input type="password" name="password"  placeholder="Password" required=" " >
					<input type="submit" name="btn" value="Login">
				</form>
			</div>
		</div>

	</div>

<!-- //checkout -->
<!-- //top-brands -->
@endsection
