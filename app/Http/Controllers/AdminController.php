<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
