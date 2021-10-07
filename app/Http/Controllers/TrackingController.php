<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\OrderStatus;

class TrackingController extends Controller
{
    public function index()
    {
        
        return view('components.tracking');
    }
    public function trackingstatus($id)
    {        
        $status_order = OrderStatus::where(['action' => 'true'])->get();
        $orders = Orders::where(['action' => 'true', 'order_number' => $id])->first();
        if($orders){
            return view('components.trackingstatus', compact('orders', 'status_order'));
        }else{
            abort(404);
        }
    }
    
}
