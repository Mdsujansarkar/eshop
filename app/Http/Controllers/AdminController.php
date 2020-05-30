<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.home.home');
    }
    public function login()
    {
        return view( 'backend.auth.login');
    }
    public function registration()
    {
        return view( 'backend.auth.register');
    }
    public function register(Request $request)
    {
        $this ->validate( $request,[
            'name'               => 'required',
            'email'              => 'required|email',
            'phone_number'       => 'required|min:6|max:13',
            'password'           => 'required|confirmed|min:6',
            
        ]);
        try {
            $user       = new User();
            $user->name          = $request->name;
            $user->email         = strtolower($request->email);
            $user->phone_number  = $request->phone_number;
            $user->password      = bcrypt($request->password);
            $user->save();
            session()->flash('message', 'Account Create successfully');
            session()->flash('type', 'success');
            return redirect('/admin/login');
        } catch (\Exception $e) {
            session()->flash('message', $e->getMessage());
            session()->flash('type', 'danger');
            return redirect()->back();
        }
        // $user       = new User();
        // $user->name          = $request->name;
        // $user->email         = strtolower($request->email);
        // $user->phone_number  = $request->phone_number;
        // $user->password      = bcrypt($request->password);
        // $user->save();
        
        // return redirect('/admin/login')->with('message','Account create');
       
    }
}
