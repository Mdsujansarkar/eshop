	<div class="categories">
					<h2>Categories</h2>
					<ul class="cate">

					@foreach( $categories as $categoriy )
                    	<li><a href="{{ route( 'category-content', ['id' => $categoriy->id] ) }}"><i class="fa fa-arrow-right" aria-hidden="true"></i>{{$categoriy->category_name}}</a></li>
                    @endforeach
					</ul>
				</div>	