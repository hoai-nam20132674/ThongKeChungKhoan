<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
    protected $table = 'sliders';
    public function add($request){
    	$this->href = $request->href;
        $this->title = $request->title;
        $this->description = $request->description;
    	$this->display = $request->display;
    	$this->target = $request->target;
    	$this->stt = $request->stt;
    	$file_name = $request->file('images')->getClientOriginalName();
		$this->url = $file_name;
    	// $request->file('avata')->move('public/uploads/images/products/avatas/',$file_name);
    	$request->file('images')->move('public/uploads/images/sliders/',$file_name);
    	$this->save();
    }
    public function edit($request, $id){
    	$slider = $this::where('id',$id)->get()->first();
    	$slider->href = $request->href;
    	$slider->display = $request->display;
    	$slider->target = $request->target;
    	$slider->stt = $request->stt;
        $slider->title = $request->title;
        $slider->description = $request->description;
    	if($request->hasFile('images')){ 
	    	$file_name = $request->file('images')->getClientOriginalName();
			$slider->url = $file_name;
	    	// $request->file('avata')->move('public/uploads/images/products/avatas/',$file_name);
    		$request->file('images')->move('public/uploads/images/sliders/',$file_name);
	    }
	    $slider->save();
    }
}
