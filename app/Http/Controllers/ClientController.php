<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Package;
use App\Stt;
use App\DeliveryNote;

class ClientController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    // quản lý
    public function qlPackages(Request $request){
        $status = Stt::select()->get();
        if(isset($request->mvd) && isset($request->pid) && isset($request->stt)){
            $packages = Package::where('phone',Auth::user()->phone)->where('mvd',$request->mvd)->where('mpxk',$request->pid)->where('status',$request->stt)->orderBy('id','DESC')->get();
            $count = count($packages);
            $packages = Package::where('phone',Auth::user()->phone)->where('mvd',$request->mvd)->where('mpxk',$request->pid)->where('status',$request->stt)->orderBy('id','DESC')->paginate(15);
        }
        else if(isset($request->mvd)){
            $packages = Package::where('phone',Auth::user()->phone)->where('mvd', 'like', '%' .$request->mvd.'%')->orderBy('id','DESC')->get();
            $count = count($packages);
            $packages = Package::where('phone',Auth::user()->phone)->where('mvd', 'like', '%' .$request->mvd.'%')->orderBy('id','DESC')->paginate(15);
        }
        else if(isset($request->pid)){
            $packages = Package::where('phone',Auth::user()->phone)->where('mpxk', 'like', '%' .$request->pid.'%')->orderBy('id','DESC')->get();
            $count = count($packages);
            $packages = Package::where('phone',Auth::user()->phone)->where('mpxk', 'like', '%' .$request->pid.'%')->orderBy('id','DESC')->paginate(15);
        }
        else if(isset($request->stt)){
            $packages = Package::where('phone',Auth::user()->phone)->where('status', 'like', '%' .$request->stt.'%')->orderBy('id','DESC')->get();
            $count = count($packages);
            $packages = Package::where('phone',Auth::user()->phone)->where('status', 'like', '%' .$request->stt.'%')->orderBy('id','DESC')->paginate(15);
        }
        else{
            $packages = Package::where('phone',Auth::user()->phone)->orderBy('id','DESC')->get();
            $count = count($packages);
            $packages = Package::where('phone',Auth::user()->phone)->orderBy('id','DESC')->paginate(15);
        }
        return view('front-end.ql.qlPackages',compact('packages','request','count','status'));
    }
    public function qlDns(Request $request){
        $dns = DeliveryNote::where('phone',Auth::user()->phone)->orderBy('id','DESC')->get();
        $count = count($dns);
        $dns = DeliveryNote::where('phone',Auth::user()->phone)->orderBy('id','DESC')->paginate(15);
        return view('front-end.ql.qlDeliveryNotes',compact('dns','request','count'));
    }
    public function qlDn($id){
        $dn = DeliveryNote::where('id',$id)->get()->first();
        $pids = array();
        $pids = explode(",",$dn->pids);
        $packages = Package::whereIn('id',$pids)->get();
        return view('admin.dn',compact('packages','dn'));
    }
    // end quản lý
}
