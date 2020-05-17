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
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Customer Name</th>
                                    <th>Order Total</th>
                                    <th>Order Date</th>
                                    <th>Order Status</th>
                                    <th>Payment Type</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Customer Name</th>
                                    <th>Order Total</th>
                                    <th>Order Date</th>
                                    <th>Order Status</th>
                                    <th>Payment Type</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            	@php($i = 0)
                            	@foreach($orders as $order)
                            	<tr>
                            	<td>{{$i++}}</td>
		                         <td>{{$order ->first_name. ' '.$order ->last_name}}</td>
		                         <td>{{$order->order_total}}</td>
		                         <td>{{$order->created_at}}</td>
		                         <td>{{$order->order_status}}</td>
		                         <td>{{$order->payment_type}}</td>
		                         <td>{{$order->payment_status}}</td>
		                         <td>
                                        
                                        <button class="btn btn-outline-primary"><a href="{{ route('view-order-details', [ 'id' => $order -> id ] ) }}"><i class="fas fa-search-plus"></i></a></button>
                                     
                                  
                                        <button class="btn btn-outline-success"><a href="{{ route('order-invoice',   [ 'id' => $order -> id ] ) }}"><i class="fas fa-file-invoice-dollar" title="invoice"></i></a></button>
                            
                                       <button class="btn btn-outline-warning"><a href="{{ route('order-download',      [ 'id' => $order -> id ] ) }}"><i class="fas fa-file-download"></i></a></button>

                                        {{-- <button class="btn btn-outline-danger"><a href="{{ route('delete-category',     [ 'id' => $category -> id ] ) }}"><i class="far fa-trash-alt"></i></a></button> --}}

                                    </td>
                            	</tr>
                               @endforeach;
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection