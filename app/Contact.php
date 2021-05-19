<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table = 'contacts';
    public function add($request){
    	$this->name = $request->name;
    	$this->phone = $request->phone;
    	$this->email = $request->email;
    	$this->message = $request->message;
    	$this->save();
    }
}
