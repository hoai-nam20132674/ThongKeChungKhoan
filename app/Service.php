<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $table = 'services';
    public function add($request){
    	$this->name = $request->name;
    	$this->title = $request->title;
    	$this->seo_keyword = $request->seo_keyword;
    	$this->seo_description = $request->seo_description;
    	$this->url = $request->url;
    	$this->content = $request->content;
    	$this->display = $request->display;
        $this->hot = $request->hot;
    	$file_name = $request->file('avata')->getClientOriginalName();
		$this->avata = $file_name;
    	$request->file('avata')->move('public/uploads/images/services/',$file_name);
    	// $request->file('avata')->move('public/uploads/images/blogs/categories/',$file_name);
    	$this->save();
        $url = $request->url.'-si'.$this->id;
        $this->url = $url;
        $this->save();
    	$categories = $request->categories;
        if(!empty($categories)){
            $count = count($categories);
            for($j=0;$j<$count;$j++){
                $scid = new SCID;
                $scid->service_id = $this->id;
                $scid->cate_id = $categories[$j];
                $scid->save();
            }
        }
    	

    }
    public function edit($request,$id){
        $service = $this::where('id',$id)->get()->first();
        $service->name = $request->name;
        $service->title = $request->title;
        $service->seo_keyword = $request->seo_keyword;
        $service->seo_description = $request->seo_description;
        $url = $request->url.'-si'.$service->id;
        $service->url = $url;
        $service->content = $request->content;
        $service->display = $request->display;
        $service->hot = $request->hot;
        if($request->hasFile('avata')){ 
            $file_name = $request->file('avata')->getClientOriginalName();
            $service->avata = $file_name;
            $request->file('avata')->move('public/uploads/images/services/',$file_name);
            // $request->file('avata')->move('public/uploads/images/blogs/categories/',$file_name);
        }
        $service->save();
        $categories = $request->categories;
        if(!empty($categories)){
            $count = count($categories);
            $itemDeletes = SCID::where('service_id',$id)->whereNotIn('cate_id',$categories)->get();
            foreach($itemDeletes as $itemDelete){
                $itemDelete->delete();
            }
            for($j=0;$j<$count;$j++){
                $item = SCID::where('cate_id',$categories[$j])->where('service_id',$id)->get();
                if(count($item)==0){
                    $scid = new SCID;
                    $scid->service_id = $id;
                    $scid->cate_id = $categories[$j];
                    $scid->save();
                }
                
            }
        }
        if(empty($categories)){
            $itemDeletes = SCID::where('service_id',$id)->get();
            foreach($itemDeletes as $itemDelete){
                $itemDelete->delete();
            }
        }
        

    }
}
