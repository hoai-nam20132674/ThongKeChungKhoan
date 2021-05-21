<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockExchange extends Model
{
    //
    public function add($request){
    	$this->name = $request->name;
    	$this->status = $request->status;
        $this->save();

    }
    public function edit($request,$id){
    	$se = $this::where('id',$id)->get()->first();
    	$se->name = $request->name;
    	$se->status = $request->status;
    	$se->save();
    }
}
