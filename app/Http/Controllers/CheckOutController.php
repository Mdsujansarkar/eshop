<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
use App\Shopping;
use App\Order;
use App\OrdersDetails;
use App\Payments;
use Cart;
use Mail;
use Session;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.checkout.checkout');
    }
    public function checkoutProduct(Request $request)
    {
    	$customer  = new Customer();
    	$customer  -> first_name  		= $request 			->first_name;
    	$customer  -> last_name  		= $request 			->last_name;
    	$customer  -> email_address     = $request 			->email_address;
    	$customer  -> password  		= bcrypt($request 	->password);
    	$customer  -> phone_number  	= $request 			->phone_number;
        $customer  -> address           = $request          ->address;
    	$customer  -> save();

    	$customrId		= $customer  ->id;
    	Session::put('customrId', $customrId);
    	Session::put('customerName', $customer->first_name.' '.$customer->last_name);
    	// $data = $customer ->toArray();
     //    Mail::send('frontend.mail.mail-body', $data, function ($message) use ($data)
     //    {
     //        $message ->to($data['email_address']);
     //        $message ->subject('conform mail');
     //    });
        

    	return redirect('/checkout/shipping');
    }
    public function customerShopping()
    {
       $customerId = Customer::find(Session::get('customrId'));
        return view('frontend.checkout.shipping-info', ['customerId' => $customerId]);
    }
    public function customerAddress(Request $request)
    {
        $shopping  = new Shopping();
        $shopping  ->first_name     = $request-> first_name;
        $shopping  ->last_name      = $request-> last_name;
        $shopping  ->email_address  = $request-> email_address;
        $shopping  ->phone_number   = $request-> phone_number;
        $shopping  ->address        = $request-> address;
        $shopping  ->save();

        Session::put('shippingId', $shopping->id);
        return redirect('/checkout/payment');
    }

    public function customerLogin(Request $request)
    {

        $customer = Customer::where('email_address', $request->email_address)->first();


        if (password_verify($request->password, $customer->password)) {

            Session::put('customerId', $customer->id);

            Session::put('customerName',$customer->first_name. ' '.$customer->last_name);

            return redirect('/checkout/shipping');

        } else {

            return redirect('/shopping/info')->with('message',"password or email address are not metch");
        }
    }

    public function shoppingPayment()
    {
        return view('frontend.checkout.payment');
    }
    public function orderConform(Request $request)
    {
        $paymentType = $request->payment_type;
        if ($paymentType == 'Cash') {
            $order  = new Order();
            $order->customer_id = Session::get('customrId');
            $order->shipping_id = Session::get('shippingId');
            $order->order_total = Session::get('orderTotal');
            $order->save();

            $payment = new Payments();
            $payment->order_id = $order->id;
            $payment->payment_type = $paymentType;
            $payment->save();

            $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct ) {
                $orderDetail = new OrdersDetails();
                $orderDetail ->order_id = $order->id;
                $orderDetail ->product_id = $cartProduct->id;
                $orderDetail ->product_name = $cartProduct->name;
                $orderDetail ->product_price = $cartProduct->price;
                $orderDetail ->product_quantity = $cartProduct->qty;
                $orderDetail ->save();

            }
            Cart::destroy();
            return redirect('order/complite');

        }elseif ($paymentType == 'Bkash') {
            # code...
        }elseif ($paymentType == 'Paypal') {
            # code...
        }
    }

    public function orderComplite()
    {
        return view('frontend.order.oredr-complite');
    }

    public function customerLogout()
    {
        Session::forget('customerId');
        Session::forget('customerName');

        return redirect('/');
    }

    public function customerLoginNew()
    {
        return view('frontend.checkout.checkout');

    }
}
