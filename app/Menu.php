<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BlogCate;
use App\ProductCate;
use App\ServiceCate;
use App\ProjectCate;

class Menu extends Model
{
    //
    protected $table = 'menus';

    public function updateMenu($request){
    	$id = $request->data_id;
    	$title = $request->data_title;
    	$icon =$request->data_icon_font;
    	$target =$request->data_target;
    	$type =$request->data_reference_type;
    	$type_id =$request->data_reference_id;
    	$stt = $request->data_stt;
    	$parent_id =$request->data_parent_id;
    	if($type == 'blogCategory'){
    		$cate = BlogCate::where('id',$type_id)->get()->first();
    		$url = $cate->url;

    	}
    	else if($type == 'productCategory'){
    		$cate = ProductCate::where('id',$type_id)->get()->first();
    		$url = $cate->url;

    	}
    	else if($type == 'serviceCategory'){
    		$cate = ServiceCate::where('id',$type_id)->get()->first();
    		$url = $cate->url;

    	}
        else if($type == 'projectCategory'){
            $cate = ProjectCate::where('id',$type_id)->get()->first();
            $url = $cate->url;

        }
    	else{
    		$url = $request->data_custom_url;
    	}
    	if($id ==0){
    		$this->title=$title;
    		$this->icon=$icon;
    		$this->target=$target;
    		$this->type=$type;
    		$this->type_id=$type_id;
    		$this->url=$url;
    		$this->stt=$stt;
    		$this->parent_id = $parent_id;
    		$this->save();
            echo $this->id;
    	}
    	else{
    		$menu = $this::where('id',$id)->get()->first();
    		$menu->title=$title;
    		$menu->icon=$icon;
    		$menu->target=$target;
    		$menu->type=$type;
    		$menu->type_id=$type_id;
    		$menu->url=$url;
    		$menu->stt=$stt;
    		$menu->parent_id = $parent_id;
    		$menu->save();
            echo $id;
    	}
    }
    public function deleteItems($array){
        $ids = explode(',' ,$array);
        $items = $this::whereNotIn('id',$ids)->get();
        foreach($items as $item){
            $item->delete();
        }
    }
}
