<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\Customer;
use App\Shopping;
use App\OrdersDetails;
use App\Payments;
use App\Product;
use DB;
use PDF;

class OrderController extends Controller
{
    public function manageOrder()
    {
 		$orders = DB::table('orders')
    	->join('customers', 'orders.customer_id', '=', 'customers.id')
    	->join('payments','orders.id', '=', 'payments.order_id')
    	->select('orders.*', 'customers.first_name','customers.last_name','payments.payment_type','payments.payment_status')
    	->get();

    	return view('backend.order.manage-order',['orders' => $orders]);
    }
    public function viewOrder($id)
    {
    	$order 		= Order::find($id);
    	$customers 	= Customer::find($order->customer_id);
    	$shipping 	= Shopping::find($order->shipping_id);
    	$payment  	= Payments::where('order_id', $order->id)->first();
    	$orderAll 	= OrdersDetails::where('order_id', $order->id)->get();
    	return view('backend.order.view-orders',[
    		'order'			=> $order,
    		'customers'		=> $customers,
    		'shipping'		=> $shipping,
    		'payment'		=> $payment,
    		'orderAll'		=> $orderAll,
    	]);
    }
    public function orderInvoice($id)
    {
    	$order 		= Order::find($id);
    	$customers 	= Customer::find($order->customer_id);
    	$shipping 	= Shopping::find($order->shipping_id);
    	$orderAll 	= OrdersDetails::where('order_id', $order->id)->get();
    	return view('backend.order.invoice', [
    		'order'			=> $order,
    		'customers'		=> $customers,
    		'shipping'		=> $shipping,
    		'orderAll'		=> $orderAll,
    	]);
    }
    public function orderDownload($id)
    {
    	$order 		= Order::find($id);
    	$customers 	= Customer::find($order->customer_id);
    	$shipping 	= Shopping::find($order->shipping_id);
    	$orderAll 	= OrdersDetails::where('order_id', $order->id)->get();
    	$pdf = PDF::loadView('backend.order.download-invoice',[
    		'order'			=> $order,
    		'customers'		=> $customers,
    		'shipping'		=> $shipping,
    		'orderAll'		=> $orderAll,
    	]);
		return $pdf->download('invoice.pdf');
    }
    public function ordersearch(Request $request)
    {
      $q = $request::get ( 'q' );
    $user = Product::where ( 'product_name', 'LIKE', '%' . $q . '%' )->get ();
    return view('frontend.order.search',['user'=>$user]);
    }
}
