<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Package;
use App\Stt;
use App\DeliveryNote;
use App\System;
use App\StockExchange;

class ClientController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index(){
        $system = System::where('id',1)->get()->first();
        $ses = StockExchange::where('status',1)->get();
        return view('front-end.index',compact('system','ses'));
    }
}
