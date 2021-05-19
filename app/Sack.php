<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SPID;

class Sack extends Model
{
    //
    protected $table = 'sacks';
    public function add($request){
    	$this->ma = $request->ma.'-';
    	$this->ktqnh = $request->ktqnh;
    	$this->xktq = $request->xktq;
    	$this->tkvn = $request->tkvn;
    	$this->ht = $request->ht;
    	$this->save();
    	$this->ma = $request->ma.'-MB'.$this->id;
    	$this->save();
    	$properties = $request->properties;
        if(isset($properties)){
        	$count = count($properties);
        	for($j=0;$j<$count;$j++){
                $spid = new SPID;
                $spid->sack_id = $this->id;
                $spid->properties_id = $properties[$j];
                $spid->save();
            }
        }
    }
    public function edit($request,$id){
        $sack = $this::where('id',$id)->get()->first();
        $sack->ktqnh = $request->ktqnh;
        $sack->xktq = $request->xktq;
        $sack->tkvn = $request->tkvn;
        $sack->ht = $request->ht;
        $sack->save();
        $properties = $request->properties;
        if(empty($properties)){
            $itemDeletes = SPID::where('sack_id',$id)->get();
            foreach($itemDeletes as $itemDelete){
                $itemDelete->delete();
            }
        }
        if(isset($properties)){
            $itemDeletes = SPID::where('sack_id',$id)->whereNotIn('properties_id',$properties)->get();
            foreach($itemDeletes as $itemDelete){
                $itemDelete->delete();
            }
            $count = count($properties);
            for($j=0;$j<$count;$j++){
                $item = SPID::where('properties_id',$properties[$j])->where('sack_id',$id)->get();
                if(count($item)==0){
                    $spid = new SPID;
                    $spid->sack_id = $id;
                    $spid->properties_id = $properties[$j];
                    $spid->save();
                }
                
            }
        }
    }
}
