@extends('frontend.master')
<!-- main-slider -->
@section('home')

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Beverages</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--- beverages --->
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
			@include('frontend.category.categoryMenu')
			</div>
			<div class="col-md-8 products-right">
				@include('frontend.category.categoryProductSetting')
				<div class="agile_top_brands_grids">
					@foreach($categoryProducts as $categoryProduct)
					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">


									<?php foreach ($user as $users): ?>
                    <p>{{$users->product_name}}</p>
                  <?php endforeach; ?>
						<div class="clearfix"> </div>
				</div>


				@include('frontend.category.pagination')
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //top-brands -->
@endsection
