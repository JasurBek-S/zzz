<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Settings;
use App\Models\Countries;
use App\Models\States;
use Hashids\Hashids;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.home.index');
    }

    // Settings
    public function settings()
    {
        $hashids = new Hashids(30);  
        $settings_data = Settings::where(['id' => '1'])->first();
        $countries_data = Countries::get();
        $states_data = States::get();
        return view('dashboard.settings.index', compact('settings_data', 'countries_data', 'states_data', 'hashids'));
    }
    // Settings update
    public function settings_update(Request $request)
    {
        $hashids = new Hashids(30);  
        $request->validate([
            'sitetitle' => 'nullable',
            'metadescription' => 'nullable',
            // 'favicon' => 'image',
            'language' => 'nullable',
            'analyticsgoogleaccount' => 'string|max:50|nullable',
            'siteurl' => 'string|max:50|nullable',
            'googleclientid' => 'string|max:50|nullable',
            'googleclientsecret' => 'string|max:50|nullable',
            'googleredirect' => 'string|max:50|nullable',
            'companyname' => 'string|max:50|nullable',
            'phone' => 'string|max:50|nullable',
            'email' => 'email:rfc,dns',
            'countries' => 'string|max:50|nullable',
            'city' => 'string|max:50|nullable',
            'address' => 'string|max:320|nullable',
            'paypalmail' => 'string|max:50|nullable',
            'stripe_public_key' => 'string|max:50|nullable',
            // 'stripe_public_secret' => 'string|max:50|nullable'
        ]);



        if ($image = $request->file('favicon')) {
            $times = date('Ymdhis');
            $destinationPath = 'storage/images/';
            $profileImage = time().'c'. "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
                $data_image = $profileImage;
        }

        $settings_req = Settings::find('1');
        $settings_req->favicon       = $data_image;
        $settings_req->sitetitle       = json_encode($request->input('sitetitle'));
        $settings_req->metadescription       = json_encode($request->input('metadescription'));
        $settings_req->language       = json_encode($request->input('language'));
        $settings_req->analyticsgoogleaccount       = $request->input('analyticsgoogleaccount');
        $settings_req->url       = $request->input('siteurl');
        $settings_req->google_client_id       = $request->input('googleclientid');
        $settings_req->google_client_secret       = $request->input('googleclientsecret');
        $settings_req->google_redirect       = $request->input('googleredirect');
        $settings_req->companyname       = $request->input('companyname');
        $settings_req->phone       = $request->input('phone');
        $settings_req->email       = $request->input('email');
        $settings_req->state       = $request->input('countries');
        $settings_req->city       = $request->input('city');
        $settings_req->address       = $request->input('address');
        $settings_req->paypal       = $request->input('paypalmail');
        $settings_req->stripe       = $request->input('stripe_public_key');
        $settings_req->save();

        // Products::create($request->all());
        return redirect()->route('dashboard.settings')
            ->with('success', 'Project created successfully.');
    }
}