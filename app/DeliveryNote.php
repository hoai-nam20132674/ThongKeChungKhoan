<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Package;

class DeliveryNote extends Model
{
    //
    public function add($request){
    	$this->name = $request->name;
    	$this->email = $request->email;
    	$this->phone = $request->phone;
    	$this->nt = $request->nt;
    	$this->ktn = $request->ktn;
    	$this->ns = $request->ns;
    	$this->nth = $request->nth;
    	$this->tiencan = preg_replace( '/\D/', '', $request->tiencan);
    	$this->phiphatsinh = preg_replace( '/\D/', '', $request->phiphatsinh);
    	$this->philuukho = preg_replace( '/\D/', '', $request->philuukho);
    	$this->phiship = preg_replace( '/\D/', '', $request->phiship);
        $this->total = preg_replace( '/\D/', '', $request->total);
    	$this->message = $request->message;
    	$this->status = 'Đã trả hàng';
    	$this->kx = $request->kx;
    	$this->nvx = $request->nvx;
    	$this->pids = $request->str_ids;
    	$this->save();
    	$pids = array();
        $pids = explode(",",$request->str_ids);
        $packages = Package::whereIn('id',$pids)->get();
        foreach($packages as $item){
        	$item->mpxk = $this->id;
        	$item->save();
        }

    }
    public function edit($request,$id){
        $item = $this::where('id',$id)->get()->first();
        $item->nt = $request->nt;
        $item->ktn = $request->ktn;
        $item->ns = $request->ns;
        $item->nth = $request->nth;
        $item->tiencan = preg_replace( '/\D/', '', $request->tiencan);
        $item->phiphatsinh = preg_replace( '/\D/', '', $request->phiphatsinh);
        $item->philuukho = preg_replace( '/\D/', '', $request->philuukho);
        $item->phiship = preg_replace( '/\D/', '', $request->phiship);
        $item->total = preg_replace( '/\D/', '', $request->total);
        $item->message = $request->message;
        $item->kx = $request->kx;
        $item->nvx = $request->nvx;
        $item->save();
        

    }
}
