<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
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
    	$data = $customer ->toArray();
        Mail::send('frontend.mail.mail-body', $data, function ($message) use ($data)
        {
            $message ->to($data['email_address']);
            $message ->subject('conform mail');
        });
        return "success";

    	return redirect('/checkout/shipping');
    }

}
