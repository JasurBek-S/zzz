<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Orders;
use App\Models\Address;
use App\Models\User;
use App\Models\Users;
use App\Models\OrderStatus;
use Hashids\Hashids;

class CheckoutController extends Controller
{
 
    public function checkout_cart()
    {
        $hashids = new Hashids(30);   
        $user = Auth::user();
        $status_order = OrderStatus::where(['action' => 'true'])->get();
        return view('checkout.checkout-cart',compact('hashids', 'user'));
    }
 
    public function checkout_details()
    {
        $hashids = new Hashids(30);   
        $user = Auth::user();
        $status_order = OrderStatus::where(['action' => 'true'])->get();
        return view('checkout.checkout-details',compact('hashids', 'user'));
    }
 
    public function checkout_payment()
    {
        $hashids = new Hashids(30);   
        $user = Auth::user();
        $status_order = OrderStatus::where(['action' => 'true'])->get();
        return view('checkout.checkout-payment',compact('hashids', 'user'));
    }
 
    public function checkout_shipping()
    {
        $hashids = new Hashids(30);   
        $user = Auth::user();
        $status_order = OrderStatus::where(['action' => 'true'])->get();
        return view('checkout.checkout-shipping',compact('hashids', 'user'));
    }
 
    public function checkout_review()
    {
        $hashids = new Hashids(30);   
        $user = Auth::user();
        $status_order = OrderStatus::where(['action' => 'true'])->get();
        return view('checkout.checkout-review',compact('hashids', 'user'));
    }
 
    public function checkout_complete()
    {
        $hashids = new Hashids(30);   
        $user = Auth::user();
        $status_order = OrderStatus::where(['action' => 'true'])->get();
        return view('checkout.checkout-complete',compact('hashids', 'user'));
    }
}