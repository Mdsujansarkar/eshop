<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('backend.home.home');
    }
    public function addProduct() {
        return view('backend.product.addProduct');
    }
    public function manageProduct() {
        return view( 'backend.product.manageProduct');
    }
}
