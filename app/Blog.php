<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\BCID;

class Blog extends Model
{
    //
    protected $table = 'blogs';
    public function add($request){
    	$this->name = $request->name;
    	$this->title = $request->title;
    	$this->seo_keyword = $request->seo_keyword;
    	$this->seo_description = $request->seo_description;
    	$this->url = $request->url;
    	$this->content = $request->content;
    	$this->user_id = Auth::user()->id;
    	$this->display = $request->display;
        $this->hot = $request->hot;
    	$file_name = $request->file('avata')->getClientOriginalName();
		$this->avata = $file_name;
    	$request->file('avata')->move('public/uploads/images/blogs/',$file_name);
    	// $request->file('avata')->move('public/uploads/images/blogs/categories/',$file_name);
    	$this->save();
        $url = $request->url.'-bi'.$this->id;
        $this->url = $url;
        $this->save();
    	$categories = $request->categories;
        if(!empty($categories)){
            $count = count($categories);
            for($j=0;$j<$count;$j++){
                $bcid = new BCID;
                $bcid->blog_id = $this->id;
                $bcid->cate_id = $categories[$j];
                $bcid->save();
            }
        }
    	

    }
    public function edit($request,$id){
        $blog = $this::where('id',$id)->get()->first();
        $blog->name = $request->name;
        $blog->title = $request->title;
        $blog->seo_keyword = $request->seo_keyword;
        $blog->seo_description = $request->seo_description;
        $url = $request->url.'-bi'.$blog->id;
        $blog->url = $url;
        $blog->content = $request->content;
        $blog->user_id = Auth::user()->id;
        $blog->display = $request->display;
        $blog->hot = $request->hot;
        if($request->hasFile('avata')){ 
            $file_name = $request->file('avata')->getClientOriginalName();
            $blog->avata = $file_name;
            $request->file('avata')->move('public/uploads/images/blogs/',$file_name);
            // $request->file('avata')->move('public/uploads/images/blogs/categories/',$file_name);
        }
        $blog->save();
        $categories = $request->categories;
        if(!empty($categories)){
            $count = count($categories);
            $itemDeletes = BCID::where('blog_id',$id)->whereNotIn('cate_id',$categories)->get();
            foreach($itemDeletes as $itemDelete){
                $itemDelete->delete();
            }
            for($j=0;$j<$count;$j++){
                $item = BCID::where('cate_id',$categories[$j])->where('blog_id',$id)->get();
                if(count($item)==0){
                    $bcid = new BCID;
                    $bcid->blog_id = $id;
                    $bcid->cate_id = $categories[$j];
                    $bcid->save();
                }
                
            }
        }
        if(empty($categories)){
            $itemDeletes = BCID::where('blog_id',$id)->get();
            foreach($itemDeletes as $itemDelete){
                $itemDelete->delete();
            }
        }

    }
}
