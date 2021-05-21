<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SSID;

class Stock extends Model
{
    //
    public function add($request){
    	$this->ma = $request->ma;
    	$this->tg = $request->tg;
    	$this->tc = $request->tc;
    	$this->gt = $request->gt;
    	$this->gs = $request->gs;
    	$this->g = $request->g;
        $this->kll = $request->kll;
		$this->tkl_old = $request->tkl_old;
		$this->tkl = $request->tkl;
		$this->tb10 = $request->tb10;
		$this->status = $request->status;
    	$this->save();
    	$ses = $request->ses;
        if(!empty($ses)){
            $count = count($ses);
            for($j=0;$j<$count;$j++){
                $ssid = new SSID;
                $ssid->stock_id = $this->id;
                $ssid->se_id = $ses[$j];
                $ssid->save();
            }
        }
    	

    }
    public function edit($request,$id){
        $stock = $this::where('id',$id)->get()->first();
        $stock->ma = $request->ma;
    	$stock->tg = $request->tg;
    	$stock->tc = $request->tc;
    	$stock->gt = $request->gt;
    	$stock->gs = $request->gs;
    	$stock->g = $request->g;
        $stock->kll = $request->kll;
		$stock->tkl_old = $request->tkl_old;
		$stock->tkl = $request->tkl;
		$stock->tb10 = $request->tb10;
		$stock->status = $request->status;
    	$stock->save();
        $ses = $request->ses;
        if(!empty($ses)){
            $count = count($ses);
            $itemDeletes = SSID::where('stock_id',$id)->whereNotIn('se_id',$ses)->get();
            foreach($itemDeletes as $itemDelete){
                $itemDelete->delete();
            }
            for($j=0;$j<$count;$j++){
                $item = SSID::where('se_id',$ses[$j])->where('stock_id',$id)->get();
                if(count($item)==0){
                    $ssid = new SSID;
                    $ssid->stock_id = $id;
                    $ssid->se_id = $ses[$j];
                    $ssid->save();
                }
                
            }
        }
        if(empty($ses)){
            $itemDeletes = SSID::where('stock_id',$id)->get();
            foreach($itemDeletes as $itemDelete){
                $itemDelete->delete();
            }
        }

    }
}
