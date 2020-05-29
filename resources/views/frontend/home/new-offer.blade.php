 <div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
     <div class="agile_top_brands_grids">
             @foreach( $advProducts as $advProduct )
        <div class="col-md-4 top_brand_left">
            <div class="hover14 column">
                <div class="agile_top_brand_left_grid">
                    <div class="agile_top_brand_left_grid1">
                        <figure>
                            <div class="snipcart-item block">
                                <div class="snipcart-thumb">
                                    <a href="{{route('productsDetaiils', ['id'=>$advProduct->id,'name'=>$advProduct->product_name])}}">
                                        <img title="{{ $advProduct ->product_name}}" alt=" "  height="300" width="250" src="{{asset($advProduct->product_image)}}" />
                                    </a>
                                    <p>{{ $advProduct ->product_name}}</p>
                                    
                                    <h4>Price (TK.) : {{ $advProduct ->product_price}}</h4>
                                </div>
                                <div class="snipcart-details top_brand_home_details">
                                            <a href="{{route('productsDetaiils', ['id'=>$advProduct->id,'name'=>$advProduct->product_name])}}" class="btn btn-primary button" roll="button">Add to cart</a>
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
 </div>