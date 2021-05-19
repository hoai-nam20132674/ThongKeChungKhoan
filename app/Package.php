<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PPID;

class Package extends Model
{
    //
    protected $table = 'packages';
    public function add($request){
    	$this->ma = $request->ma.'-';
    	$this->sack_id = $request->sack_id;
    	$this->mhx = $request->mhx;
    	$this->stqph = $request->stqph;
    	$this->ktqnh = $request->ktqnh;
    	$this->xktq = $request->xktq;
    	$this->tkvn = $request->tkvn;
    	$this->dth = $request->dth;
    	$this->kkc = $request->kkc;
    	$this->cannang = preg_replace( '/\D/', '', $request->cannang);
    	$this->dai = preg_replace( '/\D/', '', $request->dai);
    	$this->rong = preg_replace( '/\D/', '', $request->rong);
    	$this->cao = preg_replace( '/\D/', '', $request->cao);
		$this->cnqd = $request->cnqd*1000000;
        $this->name = $request->name;
        $this->phone = $request->phone;
        $this->message = $request->message;
        $this->status = $request->status;
        $this->mvd = $request->mvd;
        $this->sl = $request->sl;
        $this->dongiacan = preg_replace( '/\D/', '', $request->dongiacan);
        $this->dongiakhoi = preg_replace( '/\D/', '', $request->dongiakhoi);
        $this->price = $request->price;
    	$this->save();
    	$this->ma = $request->ma.'-MK'.$this->id;
    	$this->save();
    	$properties = $request->properties;
        if(isset($properties)){
        	$count = count($properties);
        	for($j=0;$j<$count;$j++){
                $ppid = new PPID;
                $ppid->package_id = $this->id;
                $ppid->properties_id = $properties[$j];
                $ppid->save();
            }
        }
    }
    public function edit($request,$id){
        $package = $this::where('id',$id)->get()->first();
        $package->mhx = $request->mhx;
        $package->stqph = $request->stqph;
        $package->ktqnh = $request->ktqnh;
        $package->xktq = $request->xktq;
        $package->tkvn = $request->tkvn;
        $package->dth = $request->dth;
        $package->kkc = $request->kkc;
        $package->cannang = preg_replace( '/\D/', '', $request->cannang);
        $package->dai = preg_replace( '/\D/', '', $request->dai);
        $package->rong = preg_replace( '/\D/', '', $request->rong);
        $package->cao = preg_replace( '/\D/', '', $request->cao);
        $package->cnqd = $request->cnqd*1000000;
        $package->name = $request->name;
        $package->phone = $request->phone;
        $package->message = $request->message;
        $package->status = $request->status;
        $package->mvd = $request->mvd;
        $package->sl = $request->sl;
        $package->dongiacan = preg_replace( '/\D/', '', $request->dongiacan);
        $package->dongiakhoi = preg_replace( '/\D/', '', $request->dongiakhoi);
        $package->price = $request->price;
        $package->save();
        $properties = $request->properties;
        if(empty($properties)){
            $itemDeletes = PPID::where('package_id',$id)->get();
            foreach($itemDeletes as $itemDelete){
                $itemDelete->delete();
            }
        }
        if(isset($properties)){
            $itemDeletes = PPID::where('package_id',$id)->whereNotIn('properties_id',$properties)->get();
            foreach($itemDeletes as $itemDelete){
                $itemDelete->delete();
            }
            $count = count($properties);
            for($j=0;$j<$count;$j++){
                $item = PPID::where('properties_id',$properties[$j])->where('package_id',$id)->get();
                if(count($item)==0){
                    $ppid = new PPID;
                    $ppid->package_id = $id;
                    $ppid->properties_id = $properties[$j];
                    $ppid->save();
                }
                
            }
        }
    }
}
