<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Orders;
use App\Models\Address;
use App\Models\User;
use App\Models\Users;
use App\Models\OrderStatus;
use Hashids\Hashids;

class AccountController extends Controller
{
    public function index()
    {
        $hashids = new Hashids(30);   
        $user = Auth::user();
        return view('account.account-profile', compact('user', 'hashids'));
    }
    
    public function account_address_edit()
    {
        $hashids = new Hashids(30);   
        $user = Auth::user();
        return view('account.account-profile', compact('user', 'hashids'));
    }

    public function account_address()
    {
        $hashids = new Hashids(30);   
        $user = Auth::user();
        $countries = DB::table('countries')->get();
        $user_address = Address::latest()->orderBy('created_at', 'asc')->where(['action' => 'true', 'customer_id' => $user->id])->paginate(10);
        return view('account.account-address',compact('user_address', 'hashids', 'user', 'countries'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function account_address_create(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'customer_id' => 'required',
            'last_name' => 'required',
            'company' => 'nullable',
            'county' => 'required',
            'city' => 'required',
            'line_one' => 'required',
            'line_two' => 'required',
            'zipcode' => 'required',
            'status' => 'required',
        ]);
        $user = Auth::user();

        $address_req = new Address;
        $address_req->customer_id = $request->input('customer_id');
        $address_req->first_name = $request->input('first_name');
        $address_req->last_name = $request->input('last_name');
        $address_req->company = $request->input('company');
        $address_req->county = $request->input('county');
        $address_req->city = $request->input('city');
        $address_req->lineone = $request->input('line_one');
        $address_req->linetwo = $request->input('line_two');
        $address_req->zipcode = $request->input('zipcode');
        $address_req->save();
        return redirect()->route('account.account-address')
            ->with('success', 'Categories created successfully.');
    }

    public function account_address_destroy(Request $request)
    {
        $request->validate([
            'address' => 'required',
        ]);

        $hashids = new Hashids('SATIF', 15);   

        $contact = Address::find($request->input('address'));
        $contact->action = 'false';
        $contact->save();

        return redirect()->route('account.address')
            ->with('success', 'Address Delete successfully.');
    }

    public function account_wishlist()
    {
        $hashids = new Hashids(30);   
        return view('account.account-wishlist', compact('hashids'));
    }

    public function account_payment()
    {
        $hashids = new Hashids(30);   
        return view('account.account-payment', compact('hashids'));
    }

    public function show($slug)
    {
        $user = Auth::user();
        return view('account.account-profile', compact('user'));
    }    

    public function account_orders()
    {
        $user = Auth::user(); 
        $hashids = new Hashids(30);  
        $status_order = OrderStatus::where(['action' => 'true'])->get();
        $orders = Orders::latest()->orderBy('created_at', 'asc')->where(['action' => 'true', 'customer_id' => $user->id])->paginate(10);
        return view('account.account-orders',compact('orders', 'hashids', 'status_order'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    
    public function update(Request $request)
    { 
        $user = Auth::user();
        $hashids = new Hashids(30);   
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'nullable',
            'new_password' => 'nullable',
            'confirm_password' => 'nullable',
        ]);
        // $idd = $hashids->decode($id);     
        if($request->input('new_password') == $request->input('confirm_password')){
        $new_password = (!(null == $request->input('new_password'))) ? 'Yes' : 'No'; 
        }
        // if($request->input('new_password') == $request->input('confirm_password')){
            $user_req = Users::find($user->id);
            $user_req->first_name = $request->input('first_name');
            $user_req->last_name = $request->input('last_name');
            $user_req->phone_number = $request->input('phone_number');
            if(isset($new_password)){
                $user_req->password = Hash::make($request->input('new_password'));
            }
            $user_req->save();
            return redirect()->route('account')
                ->with('success', 'successfully.');      
        // }else {
        //     return redirect()->route('account.account-profile')
        //         ->with('success', '404.');      
        // }
        // $2y$10$u0dSphitE3AB/Jebl3LuF.HL5/2meeO49ED0fdiiztXKuiop0L82m
    }
}