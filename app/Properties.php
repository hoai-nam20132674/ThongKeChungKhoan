<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    //
    protected $table = 'properties';
    public function add($request){
    	$this->name = $request->name;
    	$this->save();
    }
    public function edit($request, $id){
    	$item = $this::where('id',$id)->get()->first();
    	$item->name = $request->name;
    	$item->save();
    }
}
