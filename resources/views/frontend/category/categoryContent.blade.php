@extends('frontend.master')
<!-- main-slider -->
@section('home')

<!-- breadcrumbs -->
	
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
								
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="{{ route('productsDetaiils', ['id' =>$categoryProduct->id, 'name' => $categoryProduct->product_name])}}">
													<img title=" " height="300" width="350" src="{{asset($categoryProduct->product_image)}}"></a>		
												<p>{{$categoryProduct->product_name}}</p>
												<h4>Price: {{$categoryProduct->product_price}} Tk</h4>
											</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
					@endforeach
						<div class="clearfix"> </div>
				</div>
			 {{$categoryProducts->links()}}
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //top-brands -->
@endsection
