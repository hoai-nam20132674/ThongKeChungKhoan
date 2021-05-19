<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Requests\addUserRequest;
use App\User;
use App\BlogCate;
use App\Blog;
use App\Service;
use App\ServiceCate;
use App\Product;
use App\ProductCate;
use App\ProductImage;
use App\Project;
use App\ProjectCate;
use App\ProjectImage;
use App\System;
use App\Http\Controllers\Auth\LoginController;
use App\Menu;
use App\BCID;
use App\PCID;
use App\PJCID;
use App\SCID;
use App\Contact;
use App\Slider;
use App\Popup;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $system = System::where('id',1)->get()->first();
        $sliders = Slider::where('display',1)->get();
        $popup = Popup::where('display',1)->orderBy('id','DESC')->get()->first();
        $services = Service::where('hot',1)->where('display',1)->take(3)->get();
        $blogs = Blog::where('hot',1)->where('display',1)->take(3)->get();
        // $projects = Project::where('hot',1)->where('display',1)->take(8)->get();
        // $id = $this->arrayColumn($projects,$col='id');
        // $prjImages = ProjectImage::where('role',1)->whereIn('project_id',$id)->get();
        // $blogs = Blog::take(8)->get();
        return view('front-end.index',compact('system','sliders','services','blogs','popup'));
    }

    public function page($url, Request $request){

        $strrpos = strrpos($url,"-");
        $url = substr($url,$strrpos+1);
        $key = substr($url,0,2);
        $id = substr($url,2);

    	
    	$system = System::where('id',1)->get()->first();

    	if($key=='bc'){
    		$categorie = BlogCate::where('id',$id)->get()->first();
            $categories = BlogCate::where('display',1)->get();
            $bcids = BCID::where('cate_id',$id)->get();
            $bids = $this->arrayColumn($bcids,$col='blog_id');
            $blogs = Blog::where('display',1)->whereIn('id',$bids)->paginate(30);
            return view('front-end.blogs',compact('categories','blogs','categorie','request','system'));
    	}
        else if($key=='sc'){
            $categorie = ServiceCate::where('id',$id)->get()->first();
            $categories = ServiceCate::where('display',1)->get();
            $scids = SCID::where('cate_id',$id)->get();
            $sids = $this->arrayColumn($scids,$col='service_id');
            $services = Service::where('display',1)->whereIn('id',$sids)->paginate(30);
            return view('front-end.services',compact('categories','services','categorie','request','system'));
        }
        
        else if($key=='bi'){
            $blog = Blog::where('id',$id)->get()->first();
            $blogs = Blog::where('id','!=',$blog->id)->where('display',1)->take(8)->get();
            return view('front-end.blog',compact('blog','blogs','system','request'));
        }
        else if($key=='si'){
            $service = Service::where('id',$id)->get()->first();
            $services = Service::where('id','!=',$service->id)->where('display',1)->take(8)->get();
            return view('front-end.service',compact('service','services','system','request'));
        }
        else {
            
            return view('front-end.error',compact('system'));
        }


    }

    // ------------------------------------------
    public static function arrayColumn($object,$col){
        $array = array();
        $i = 0;
        foreach($object as $cate){
            $array[$i] = $cate->$col;
            $i++;
        }
        return $array;
    }
    // ------------------------------------------
    public function addContact(Request $request){
        $item = new Contact;
        $item->add($request);
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'Gửi yêu cầu tư vấn thành công']);

    }
    public function contact(){
        $system = System::where('id',1)->get()->first();
        return view('front-end.contact',compact('system'));
    }
    public function dangnhap(){
        return view('front-end.login');
    }
    public function dangky(){
        return view('front-end.register');
    }
    public function postDangKy(addUserRequest $request){
        $item = new User;
        if($item-> addUser($request)){
            $login = new LoginController;
            $request->user = $request->phone;
            $login->postLogin($request);
            return redirect()->route('index')->with(['flash_level'=>'success','flash_message'=>'Tạo tài khoản và đăng nhập thành công']);
        }
        else{
            return redirect()->route('index')->with(['flash_level'=>'danger','flash_message'=>'Tạo tài khoản không thành công']);
        }
    }

    public function getContent(Request $request){
        $client = new \GuzzleHttp\Client();
        $res = $client->get($request->url);
        $content = (string) $res->getBody();
        echo $content;
    }
}