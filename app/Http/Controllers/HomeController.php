<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\addUserRequest;
use App\Http\Requests\editUserRequest;
use App\Http\Requests\editPasswordRequest;
use App\Http\Requests\addBlogCategorieRequest;
use App\Http\Requests\editBlogCategorieRequest;
use App\Http\Requests\addBlogRequest;
use App\Http\Requests\editBlogRequest;
use App\Http\Requests\addServiceCategorieRequest;
use App\Http\Requests\editServiceCategorieRequest;
use App\Http\Requests\addServiceRequest;
use App\Http\Requests\editServiceRequest;
use App\Http\Requests\addProductCategorieRequest;
use App\Http\Requests\editProductCategorieRequest;
use App\Http\Requests\addProductRequest;
use App\Http\Requests\editProductRequest;
use App\Http\Requests\addProjectCategorieRequest;
use App\Http\Requests\editProjectCategorieRequest;
use App\Http\Requests\addProjectRequest;
use App\Http\Requests\editProjectRequest;
use App\Http\Requests\addStockRequest;
use App\Http\Requests\editStockRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\CheckAdmin;
use App\StockExchange;
use App\Stock;
use App\SSID;
use App\User;
use App\BlogCate;
use App\Slider;
use App\Contact;
use App\Blog;
use App\Popup;
use App\Service;
use App\ServiceCate;
use App\Sack;
use App\Package;
use App\Properties;
use App\ProductImage;
use App\Project;
use App\ProjectCate;
use App\ProjectImage;
use App\System;
use App\Menu;
use App\Stt;
use App\DeliveryNote;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(CheckAdmin::class);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }

    // User custom
    public function users(Request $request){
        $users = User::select()->paginate(15);
        return view('admin.users',['users'=>$users,'request'=>$request]);
    }
    public function addUser(){
        return view('admin.addUser');
    }
    public function postAddUser(addUserRequest $request){
        $item = new User;
        $item -> add($request);
        if($item-> add($request)){
            return redirect()->route('users')->with(['flash_level'=>'success','flash_message'=>'Th??m th??nh c??ng']);
        }
        else{
            return redirect()->route('users')->with(['flash_level'=>'danger','flash_message'=>'Th??m kh??ng th??nh c??ng']);
        }

    }
    public function editUser($id){
        $user = User::where('id',$id)->get()->first();
        return view('admin.editUser',['user'=>$user]);
    }
    public function postEditUser(editUserRequest $request, $id){
        
        $item = new User;
        $item->edit($request,$id);
        if($item-> edit($request,$id)){
            return redirect()->route('editUser',$id)->with(['flash_level'=>'success','flash_message'=>'S???a th??nh c??ng']);
        }
        else{
            return redirect()->route('editUser',$id)->with(['flash_level'=>'danger','flash_message'=>'S???a kh??ng th??nh c??ng']);
        }
    }
    public function postEditPassword(editPasswordRequest $request, $id){
        $item = new User;
        $item->editPassword($request,$id);
        if($item-> editPassword($request,$id)){
            return redirect()->route('editUser',$id)->with(['flash_level'=>'success','flash_message'=>'S???a m???t kh???u th??nh c??ng']);
        }
        else{
            return redirect()->route('editUser',$id)->with(['flash_level'=>'danger','flash_message'=>'S???a m???t kh???u kh??ng th??nh c??ng']);
        }

    }
    // End User Custom


    //Stock Exchange
    public function ses(Request $request){
        $ses = StockExchange::select()->paginate(15);
        return view('admin.ses',compact('ses','request'));
    }
    public function addSE(){
        return view('admin.addSE');
    }
    public function postAddSE(Request $request){
        $item = new StockExchange;
        $item -> add($request);
        return redirect()->route('ses')->with(['flash_level'=>'success','flash_message'=>'Th??m th??nh c??ng']); 
    }
    public function editSE($id){
        
        $se = StockExchange::where('id',$id)->get()->first();
        return view('admin.editSE',compact('se'));
        
    }
    public function postEditSE(Request $request, $id){
        $item = new StockExchange;
        $item->edit($request,$id);
        return redirect()->route('editSE',$id)->with(['flash_level'=>'success','flash_message'=>'S???a th??nh c??ng']);
    }
    public function deleteSE($id){
        $item = StockExchange::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('ses')->with(['flash_level'=>'success','flash_message'=>'X??a th??nh c??ng']); 
    }
    // end Stock Exchange
    // Stock
    public function stocks(Request $request){
        $stocks = Stock::select()->paginate(15);
        return view('admin.stocks',compact('stocks','request'));
    }
    public function addStock(){
        $ses = StockExchange::select()->get();
        return view('admin.addStock',compact('ses'));
    }
    public function postAddStock(addStockRequest $request){
        $item = new Stock;
        $item -> add($request);
        return redirect()->route('stocks')->with(['flash_level'=>'success','flash_message'=>'Th??m th??nh c??ng']); 
    }
    public function editStock($id){
        $ses = StockExchange::select()->get();
        $stock = Stock::where('id',$id)->get()->first();
        return view('admin.editStock',compact('stock','ses'));
    }
    public function postEditStock(editStockRequest $request, $id){
        $item = new Stock;
        $item->edit($request,$id);
        return redirect()->route('editStock',$id)->with(['flash_level'=>'success','flash_message'=>'S???a th??nh c??ng']);
    }
    public function deleteStock($id){
        $item = Stock::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('stocks')->with(['flash_level'=>'success','flash_message'=>'X??a th??nh c??ng']); 
    }
    // end Stock

    // blog
    public function blogCategories(Request $request){
        $categories = BlogCate::select()->paginate(15);
        return view('admin.blogCategories',['categories'=>$categories, 'request'=>$request]);
    }
    public function addBlogCategorie(){
        $categories = BlogCate::select()->get();
        return view('admin.addBlogCategorie',['categories'=>$categories]);
    }
    public function postAddBlogCategorie(addBlogCategorieRequest $request){
        $item = new BlogCate;
        $item -> add($request);
        return redirect()->route('blogCategories')->with(['flash_level'=>'success','flash_message'=>'Th??m th??nh c??ng']); 
    }
    public function editBlogCategorie($id){
        $categories = BlogCate::where('id','!=',$id)->get();
        $cate = BlogCate::where('id',$id)->get()->first();
        if($cate->parent_id != ''){
            $parent = BlogCate::where('id',$cate->parent_id)->get()->first();
            return view('admin.editBlogCategorie',['cate'=>$cate, 'categories'=>$categories,'parent'=>$parent]);
        }
        else{
            return view('admin.editBlogCategorie',['cate'=>$cate, 'categories'=>$categories]);
        }
        
    }
    public function postEditBlogCategorie(editBlogCategorieRequest $request, $id){
        $item = new BlogCate;
        $item->edit($request,$id);
        return redirect()->route('editBlogCategorie',$id)->with(['flash_level'=>'success','flash_message'=>'S???a th??nh c??ng']);
    }
    public function deleteBlogCategorie($id){
        $item = BlogCate::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('blogCategories')->with(['flash_level'=>'success','flash_message'=>'X??a tin t???c th??nh c??ng']); 
    }
    public function blogs(Request $request){
        $blogs = Blog::select()->paginate(15);
        return view('admin.blogs',['blogs'=>$blogs, 'request'=>$request]);
    }
    public function addBlog(){
        $categories = BlogCate::select()->get();
        return view('admin.addBlog',['categories'=>$categories]);
    }
    public function postAddBlog(addBlogRequest $request){
        $item = new Blog;
        $item -> add($request);
        return redirect()->route('blogs')->with(['flash_level'=>'success','flash_message'=>'Th??m th??nh c??ng']); 
    }
    public function editBlog($id){
        $categories = BlogCate::select()->get();
        $blog = Blog::where('id',$id)->get()->first();
        return view('admin.editBlog',['blog'=>$blog,'categories'=>$categories]);
    }
    public function postEditBlog(editBlogRequest $request, $id){
        $item = new Blog;
        $item->edit($request,$id);
        return redirect()->route('editBlog',$id)->with(['flash_level'=>'success','flash_message'=>'S???a th??nh c??ng']);
    }
    public function deleteBlog($id){
        $item = Blog::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('blogs')->with(['flash_level'=>'success','flash_message'=>'X??a tin t???c th??nh c??ng']); 
    }
    // end blog

    // Contact 
    public function contacts(Request $request){
        $contacts = Contact::select()->orderBy('created_at','DESC')->paginate(15);
        return view('admin.contacts',compact('contacts','request'));
    }
    // End Contact

    // service
    public function serviceCategories(Request $request){
        $categories = ServiceCate::select()->paginate(15);
        return view('admin.serviceCategories',['categories'=>$categories,'request'=>$request]);
    }
    public function addServiceCategorie(){
        $categories = ServiceCate::select()->get();
        return view('admin.addServiceCategorie',['categories'=>$categories]);
    }
    public function postAddServiceCategorie(addServiceCategorieRequest $request){
        $item = new ServiceCate;
        $item -> add($request);
        return redirect()->route('serviceCategories')->with(['flash_level'=>'success','flash_message'=>'Th??m danh m???c d???ch v??? th??nh c??ng']); 
    }
    public function editServiceCategorie($id){
        $categories = ServiceCate::where('id','!=',$id)->get();
        $cate = ServiceCate::where('id',$id)->get()->first();
        if($cate->parent_id != ''){
            $parent = ServiceCate::where('id',$cate->parent_id)->get()->first();
            return view('admin.editServiceCategorie',['cate'=>$cate, 'categories'=>$categories,'parent'=>$parent]);
        }
        else{
            return view('admin.editServiceCategorie',['cate'=>$cate, 'categories'=>$categories]);
        }
        
    }
    public function postEditServiceCategorie(editServiceCategorieRequest $request, $id){
        $item = new ServiceCate;
        $item->edit($request,$id);
        return redirect()->route('editServiceCategorie',$id)->with(['flash_level'=>'success','flash_message'=>'S???a danh m???c d???ch v??? th??nh c??ng']);
    }
    public function deleteServiceCategorie($id){
        $item = ServiceCate::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('serviceCategories')->with(['flash_level'=>'success','flash_message'=>'X??a danh m???c d???ch v??? th??nh c??ng']); 
    }

    public function services(Request $request){
        $services = Service::select()->paginate(15);
        return view('admin.services',['services'=>$services,'request'=>$request]);
    }
    public function addService(){
        $categories = ServiceCate::select()->get();
        return view('admin.addService',['categories'=>$categories]);
    }
    public function postAddService(addServiceRequest $request){
        $item = new Service;
        $item -> add($request);
        return redirect()->route('services')->with(['flash_level'=>'success','flash_message'=>'Th??m d???ch v??? th??nh c??ng']); 
    }
    public function editService($id){
        $categories = ServiceCate::select()->get();
        $service = Service::where('id',$id)->get()->first();
        return view('admin.editService',['service'=>$service,'categories'=>$categories]);
    }
    public function postEditService(editServiceRequest $request, $id){
        $item = new Service;
        $item->edit($request,$id);
        return redirect()->route('editService',$id)->with(['flash_level'=>'success','flash_message'=>'S???a d???ch v??? th??nh c??ng']);
    }
    public function deleteService($id){
        $item = Service::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('services')->with(['flash_level'=>'success','flash_message'=>'X??a d???ch v??? th??nh c??ng']); 
    }
    // end service

    // Package
    public function packages(Request $request){
        if(isset($request->paginate) && isset($request->phone)){
            $packages = Package::where('phone',$request->phone)->paginate($request->paginate);
        }
        else{
            $packages = Package::select()->paginate(15);
        }
        
        return view('admin.packages',compact('packages','request'));
    }
    public function addPackage(Request $request){
        $properties = Properties::select()->get();
        $status = Stt::select()->get();
        return view('admin.addPackage',compact('properties','status','request'));
    }
    public function postAddPackage(Request $request){
        $item = new Package;
        $item -> add($request);
        return redirect()->route('editSack',$request->sack_id)->with(['flash_level'=>'success','flash_message'=>'Th??m ki???n h??ng th??nh c??ng']); 
    }
    public function editPackage(Request $request, $id){
        $properties = Properties::select()->get();
        $package = Package::where('id',$id)->get()->first();
        $status = Stt::where('name','!=',$package->status)->get();
        
        $sack = Sack::where('id',$package->sack_id)->get()->first();
        return view('admin.editPackage',compact('package','properties','request','sack','status'));
    }
    public function postEditPackage(Request $request, $id){
        $item = new Package;
        $item->edit($request,$id);
        return redirect()->route('editPackage',$id)->with(['flash_level'=>'success','flash_message'=>'S???a ki???n h??ng th??nh c??ng']);
    }
    public function deletePackage($id){
        $item = Package::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'X??a ki???n h??ng th??nh c??ng']); 
    }
    // end package

    // product
    
    public function sacks(Request $request){
        $sacks = Sack::select()->paginate(15);
        return view('admin.sacks',compact('sacks','request'));
    }
    public function addSack(){
        $properties = Properties::select()->get();
        return view('admin.addSack',compact('properties'));
    }
    public function postAddSack(Request $request){
        $item = new Sack;
        $item -> add($request);
        return redirect()->route('sacks')->with(['flash_level'=>'success','flash_message'=>'Th??m bao h??ng th??nh c??ng']); 
    }
    public function editSack(Request $request, $id){
        $packages = Package::where('sack_id',$id)->orderBy('id','DESC')->paginate(100);
        $properties = Properties::select()->get();
        $sack = Sack::where('id',$id)->get()->first();
        return view('admin.editSack',compact('sack','properties','packages','request'));
    }
    public function postEditSack(Request $request, $id){
        $item = new Sack;
        $item->edit($request,$id);
        return redirect()->route('editSack',$id)->with(['flash_level'=>'success','flash_message'=>'S???a bao h??ng th??nh c??ng']);
    }
    public function deleteSack($id){
        $item = Sack::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('sacks')->with(['flash_level'=>'success','flash_message'=>'X??a bao h??ng th??nh c??ng']); 
    }

    public function deleteProductImage($id){
        $item = ProductImage::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->back()->with(['flash_level'=>'success','flash_message'=>'X??a ???nh th??nh c??ng']); 
    }
    // end product

    // Properties

    public function properties(Request $request){
        $properties = Properties::select()->paginate(15);
        return view('admin.properties',compact('properties','request'));
    }
    public function addProperties(){
        
        return view('admin.addProperties');
    }
    public function postAddProperties(Request $request){
        $item = new Properties;
        $item -> add($request);
        return redirect()->route('properties')->with(['flash_level'=>'success','flash_message'=>'Th??m th??nh c??ng']); 
    }
    public function editProperties($id){
        
        $properties = Properties::where('id',$id)->get()->first();
        return view('admin.editProperties',compact('properties'));
    }
    public function postEditProperties(Request $request, $id){
        $item = new Properties;
        $item->edit($request,$id);
        return redirect()->route('editProperties',$id)->with(['flash_level'=>'success','flash_message'=>'S???a th??nh c??ng']);
    }
    public function deleteProperties($id){
        $item = Properties::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('properties')->with(['flash_level'=>'success','flash_message'=>'X??a th??nh c??ng']); 
    }
    // End properties

    // Status

    public function status(Request $request){
        $status = Stt::select()->paginate(15);
        return view('admin.status',compact('status','request'));
    }
    public function addStatus(){
        
        return view('admin.addStatus');
    }
    public function postAddStatus(Request $request){
        $item = new Stt;
        $item -> add($request);
        return redirect()->route('status')->with(['flash_level'=>'success','flash_message'=>'Th??m th??nh c??ng']); 
    }
    public function editStatus($id){
        
        $status = Stt::where('id',$id)->get()->first();
        return view('admin.editStatus',compact('status'));
    }
    public function postEditStatus(Request $request, $id){
        $item = new Stt;
        $item->edit($request,$id);
        return redirect()->route('editStatus',$id)->with(['flash_level'=>'success','flash_message'=>'S???a th??nh c??ng']);
    }
    public function deleteStatus($id){
        $item = Stt::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('status')->with(['flash_level'=>'success','flash_message'=>'X??a th??nh c??ng']); 
    }
    // End status

    // Delivery Note (Phi???u xu???t kho)
    public function dns(Request $request){
        $dns = DeliveryNote::select()->paginate(15);
        return view('admin.dns',compact('dns','request'));
    }
    
    public function addDn(Request $request){
        if(isset($request->paginate) && isset($request->phone)){
            $packages = Package::where('phone',$request->phone)->paginate($request->paginate);
        }
        else{
            $packages = Package::where('phone',$request->phone)->paginate(15);
        }
        
        return view('admin.packages',compact('packages','request'));
    }
    public function addDnPreview(Request $request){
        $str_ids = $request->str_ids;
        $ids = array();
        $ids = explode(",",$str_ids);
        $packages = Package::whereIn('id',$ids)->get();
        $user_name = $packages->first()->name;
        $user_phone = $packages->first()->phone;
        return view('admin.dnPreview',compact('packages','request','user_name','user_phone'));
    }
    public function editDn($id){
        $dn = DeliveryNote::where('id',$id)->get()->first();
        $pids = array();
        $pids = explode(",",$dn->pids);
        $packages = Package::whereIn('id',$pids)->get();
        return view('admin.editDn',compact('packages','dn'));
    }
    public function postEditDn(Request $request, $id){
        $item = new DeliveryNote;
        $item -> edit($request,$id);
        return redirect()->route('dn',$id)->with(['flash_level'=>'success','flash_message'=>'S???a phi???u xu???t kho th??nh c??ng']);
    }
    public function postAddDn(Request $request){
        $item = new DeliveryNote;
        $item -> add($request);
        return redirect()->route('dn',$item->id)->with(['flash_level'=>'success','flash_message'=>'T???o phi???u xu???t kho th??nh c??ng']);

    }
    public function dn($id){
        $dn = DeliveryNote::where('id',$id)->get()->first();
        $pids = array();
        $pids = explode(",",$dn->pids);
        $packages = Package::whereIn('id',$pids)->get();
        return view('admin.dn',compact('packages','dn'));
    }
    // End Delivery Note (phi???u xu???t kho)

    

    // system 
    public function editSystem(){
        $system = System::where('id',1)->get()->first();
        return view('admin.editSystem',['system'=>$system]);
    }
    public function postEditSystem(Request $request){
        $item = new System;
        $item->edit($request);
        return redirect()->route('editSystem')->with(['flash_level'=>'success','flash_message'=>'C???p nh???t h??? th???ng th??nh c??ng']);
    }
    // end system

    // menu 
    public function editMenu(){
        $menus = Menu::where('parent_id',null)->orderBy('stt','ASC')->get();
        $serviceCategories = ServiceCate::where('display',1)->get();
        $blogCategories = BlogCate::where('display',1)->get();
        return view('admin.menu',compact('menus','serviceCategories','blogCategories'));
    }
    public function updateMenu(Request $request){
        $item = new Menu;
        $item->updateMenu($request);
    }
    public function deleteMenu($array){
        $item = new Menu;
        $item->deleteItems($array);
    }
    // end menu

    //Popups
    public function popups(Request $request){
        $popups = Popup::orderBy('id','DESC')->paginate(10);
        return view('admin.popups',compact('popups','request'));
    }
    public function addPopup(){
        
        return view('admin.addPopup');
    }
    public function postAddPopup(Request $request){
        $item = new Popup;
        $item -> add($request);
        return redirect()->route('popups')->with(['flash_level'=>'success','flash_message'=>'Th??m popup th??nh c??ng']); 
    }
    public function editPopup($id){
        
        $popup = Popup::where('id',$id)->get()->first();
        return view('admin.editPopup',compact('popup'));
    }
    public function postEditPopup(Request $request, $id){
        $item = new Popup;
        $item->edit($request,$id);
        return redirect()->route('editPopup',$id)->with(['flash_level'=>'success','flash_message'=>'S???a popup th??nh c??ng']);
    }
    public function deletePopup($id){
        $item = Popup::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('popups')->with(['flash_level'=>'success','flash_message'=>'X??a popup th??nh c??ng']); 
    }
    // end popups

    


    //slider
    public function sliders(Request $request){
        $sliders = Slider::select()->paginate(10);
        return view('admin.sliders',['sliders'=>$sliders,'request'=>$request]);
    }
    public function addSlider(){
        
        return view('admin.addSlider');
    }
    public function postAddSlider(Request $request){
        $item = new Slider;
        $item -> add($request);
        return redirect()->route('sliders')->with(['flash_level'=>'success','flash_message'=>'Th??m slider th??nh c??ng']); 
    }
    public function editSlider($id){
        
        $slider = Slider::where('id',$id)->get()->first();
        return view('admin.editSlider',['slider'=>$slider]);
    }
    public function postEditSlider(Request $request, $id){
        $item = new Slider;
        $item->edit($request,$id);
        return redirect()->route('editSlider',$id)->with(['flash_level'=>'success','flash_message'=>'S???a slider th??nh c??ng']);
    }
    public function deleteSlider($id){
        $item = Slider::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('sliders')->with(['flash_level'=>'success','flash_message'=>'X??a slider th??nh c??ng']); 
    }
    // end slider
}
