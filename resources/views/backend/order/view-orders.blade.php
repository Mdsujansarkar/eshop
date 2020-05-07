@extends('backend.master')
@section('home')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div>
                <h3>{{ Session::get('message')}}</h3>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                <h3>Customer info for this order</h3>
                
                            	
                            	<tr>
                                	<td><b>Customer Name</b></td>
                                    <td>{{$customers->first_name.' '.$customers->last_name}}</td>
                            	</tr>
                                <tr>
                                    <td><b>Phone Number</b></td>
                                    <td>{{$customers->phone_number}}</td>
                                </tr>
                                <tr>
                                    <td><b>Email Adress</b></td>
                                    <td>{{$customers->email_address}}</td>
                                </tr>
                                 <tr>
                                    <td><b>Adress</b></td>
                                    <td>{{$customers->address}}</td>
                                </tr>

                            </tbody>
                        </table>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                <h3>Shopping info</h3>
                          
                                
                                <tr>
                                    <td><b>Full Name</b></td>
                                    <td>{{$shipping->first_name.' '.$shipping->last_name}}</td>
                                </tr>
                                <tr>
                                    <td><b>Phone Number</b></td>
                                    <td>{{$shipping->phone_number}}</td>
                                </tr>
                                <tr>
                                    <td><b>Email Adress</b></td>
                                    <td>{{$shipping->email_address}}</td>
                                </tr>
                                 <tr>
                                    <td><b>Adress</b></td>
                                    <td>{{$shipping->address}}</td>
                                </tr>

                            </tbody>
                        </table>
                         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Product Id</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product Quantity</th>
                                    <th>Product Price</th>
                                    
                                </tr>
                            </thead>
            
                            <tbody>
                                 <h3>Payment info</h3>
                                 @php($i = 0)
                                 @foreach($orderAll as $ordersing)
                                <tr>
                                 <td>{{ $i++}}</td>
                                 <td>{{ $ordersing   ->product_id}}</td>
                                 <td>{{ $ordersing   ->product_name}}</td>
                                 <td>{{ $ordersing   ->product_price}}</td>
                                 <td>{{ $ordersing   ->product_quantity}}</td>
                                 <td>{{ $ordersing   ->product_quantity * $ordersing   ->product_price}}</td>
                                </tr>
                                @endforeach
   
                            </tbody>
                        </table>
                         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                <h3>Order info</h3>
                          
                                
                                <tr>
                                    <td><b>Order No</b></td>
                                    <td>{{$order->id}}</td>
                                </tr>
                                <tr>
                                    <td><b>Order Total</b></td>
                                    <td>{{$order->order_total}}</td>
                                </tr>
                                <tr>
                                    <td><b>Order Status</b></td>
                                    <td>{{$order->order_status}}</td>
                                </tr>
                                 <tr>
                                    <td><b>Order Date</b></td>
                                    <td>{{$order->created_at}}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection