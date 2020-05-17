<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
    
    <div class="agile_top_brands_grids">
    @foreach( $newProduct as $todayProduct )
        <div class="col-md-4 top_brand_left">
            <div class="hover14 column">
                <div class="agile_top_brand_left_grid">
                    <div class="agile_top_brand_left_grid1">
                        <figure>
                            <div class="snipcart-item block">
                                <div class="snipcart-thumb">
                                    <a href="{{route('productsDetaiils', ['id'=>$todayProduct->id,'name'=>$todayProduct->product_name])}}">
                                        <img title="{{ $todayProduct ->product_name}}" alt=" "  height="300" width="250" src="{{asset($todayProduct->product_image)}}" />
                                    </a>
                                    <p>{{ $todayProduct ->product_name}}</p>
                                    <div class="stars">
                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                        <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                    </div>
                                    <h4>{{ $todayProduct ->product_price}} <span>$55.00</span></h4>
                                </div>
                                <div class="snipcart-details top_brand_home_details">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
                                            <input type="hidden" name="amount" value="35.99" />
                                            <input type="hidden" name="discount_amount" value="1.00" />
                                            <input type="hidden" name="currency_code" value="USD" />
                                            <input type="hidden" name="return" value=" " />
                                            <input type="hidden" name="cancel_return" value=" " />
                                            <input type="submit" name="submit" value="Add to cart" class="button" />
                                        </fieldset>
                                    </form>
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