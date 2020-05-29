@extends('frontend.master')
<!-- main-slider -->
@section('home')

<!--- beverages --->
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
			@include('frontend.category.categoryMenu')																																											
			</div>
			<div class="col-md-8 products-right">
				@include('frontend.category.categoryProductSetting')
				<div class="agile_top_brands_grids">
					@foreach($user as $users)
					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
													<img title=" " height="300" width="250" src="{{asset($users->product_image)}}"></a>		
												<p>{{$users->product_name}}</p>
												<h4>{{$users->product_price}}</h4>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
					@endforeach
						<div class="clearfix"> </div>
				</div>
				@include('frontend.category.pagination')
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //top-brands -->
@endsection