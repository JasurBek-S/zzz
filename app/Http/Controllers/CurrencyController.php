<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class CurrencyController extends Controller
{
    
    public function switchCur($cur)
    {
        if (array_key_exists($cur, Config::get('currency'))) {
            Session::put('appcur', $cur);
        }
        return Redirect::back();
    }
}
