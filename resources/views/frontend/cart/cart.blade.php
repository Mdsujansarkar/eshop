@extends('frontend.master')
<!-- main-slider -->
@section('home')

<!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Checkout Page</li>
            </ol>
        </div>
    </div>
<!-- //breadcrumbs -->
<!-- checkout -->
    <div class="checkout">
        <div class="container">
               @php($i = 0)
            <h2>Your shopping cart contains: <span>{{ $i = $i+$i }} Products</span></h2>
            <div class="checkout-right">
                <table class="timetable_sub">
                    <thead>
                        <tr>
                            <th>SL No.</th> 
                            
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Price Tk</th>
                        
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                 
                    @php($sum = 0)
                    @foreach($cartCollection as $cartCollections )
                    <tr class="rem1">
                        <td class="invert">{{$i++}}</td>
                        <td class="invert">{{$cartCollections->name}}</td>

                        <td class="invert-image">
                                <img src="{{asset($cartCollections->options->image)}}" alt=" " height="80" width="80"class="img-responsive" />
                        </td>
                
                             <td class="invert">{{$cartCollections->price}}</td>
               
                        <td class="invert">
                            <form action="{{route('cart-update')}}" method="POST">
                                @csrf
                                <input type="number" name="qty" value="{{$cartCollections->qty}}" min="1">
                                <input type="hidden" name="rowId" value="{{$cartCollections->rowId}}" >
                                <input type="submit" name="btn" value="update">
                            </form>
                        </td>
                        
                        <td class="invert">{{ $total = $cartCollections->qty*$cartCollections->price}}</td>
                        <td class="invert">
                            <button class="btn btn-outline-danger">
                                <a href="{{ route('delete-cart-item',['rowId' => $cartCollections->rowId])}}"><i class="far fa-trash-alt"></i>Delete</a>
                            </button>
                        </td>
                    
                    </tr>
                   @php($sum = $total + $sum)

                    @endforeach
                     
                </table>
            </div>
            <div class="checkout-left"> 
                <div class="checkout-left-basket">
                    <h4>Continue to basket</h4>
                    <ul>
                        <li>Iteam Total(TK. ) <i>-</i> <span>{{$sum}} </span></li>
                        <li>Vat(TK. ) <i>-</i> <span>{{$vat = 0}} </span></li>
            
                        <li>Total(TK. ) <i>-</i> <span><b>{{ $orderTotal = $sum+$vat}}</b></span></li>
                        <?php 
                            Session::put('orderTotal', $orderTotal);
                        ?>
                    </ul>
                </div>
                <div class="checkout-right-basket" style="margin-left:5px">
                    @if( Session::get('customrId') && Session::get('shippingId'))
                    <a href="{{ route('shopping-payment')}}"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Chack Out1</a>
                    @elseif( Session::get('customrId'))
                        <a href="{{ route('CustomercheckOut')}}"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Chack Out2</a>
                    @else
                    <a href="{{ route('CustomercheckOut')}}"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Chack Out3</a>
                    @endif

                </div>
                <div class="checkout-right-basket">
                    <a href="single.html"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<!-- //checkout -->
<!-- //top-brands -->
@endsection