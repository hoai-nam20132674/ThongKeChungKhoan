<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Auth::routes();

Route::get('admin', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@postLogin')->name('postLogin');
Route::get('admin/index', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
// user route
Route::get('admin/users', 'HomeController@users')->name('users');
Route::get('admin/user/add', 'HomeController@addUser')->name('addUser');
Route::post('admin/user/add', 'HomeController@postAddUser')->name('postAddUser');
Route::get('admin/user/edit/{id}', 'HomeController@editUser')->name('editUser');
Route::post('admin/user/edit/{id}', 'HomeController@postEditUser')->name('postEditUser');
Route::post('admin/user/edit-password/{id}', 'HomeController@postEditPassword')->name('postEditPassword');
// end user route
// service route

// end servive route

// blog route
Route::get('admin/blogs', 'HomeController@blogs')->name('blogs');
Route::get('admin/blog/add', 'HomeController@addBlog')->name('addBlog');
Route::post('admin/blog/add', 'HomeController@postAddBlog')->name('postAddBlog');
Route::get('admin/blog/edit/{id}', 'HomeController@editBlog')->name('editBlog');
Route::post('admin/blog/edit/{id}', 'HomeController@postEditBlog')->name('postEditBlog');
Route::get('admin/blog/delete/{id}', 'HomeController@deleteBlog')->name('deleteBlog');
Route::get('admin/blog/categories', 'HomeController@blogCategories')->name('blogCategories');
Route::get('admin/blog/categorie/add', 'HomeController@addBlogCategorie')->name('addBlogCategorie');
Route::post('admin/blog/categorie/add', 'HomeController@postAddBlogCategorie')->name('postAddBlogCategorie');
Route::get('admin/blog/categorie/edit/{id}', 'HomeController@editBlogCategorie')->name('editBlogCategorie');
Route::post('admin/blog/categorie/edit/{id}', 'HomeController@postEditBlogCategorie')->name('postEditBlogCategorie');
Route::get('admin/blogs/categorie/delete/{id}', 'HomeController@deleteBlogCategorie')->name('deleteBlogCategorie');
// end blog route

// service route
Route::get('admin/services', 'HomeController@services')->name('services');
Route::get('admin/service/add', 'HomeController@addService')->name('addService');
Route::post('admin/service/add', 'HomeController@postAddService')->name('postAddService');
Route::get('admin/service/edit/{id}', 'HomeController@editService')->name('editService');
Route::post('admin/service/edit/{id}', 'HomeController@postEditService')->name('postEditService');
Route::get('admin/service/delete/{id}', 'HomeController@deleteService')->name('deleteService');
Route::get('admin/service/categories', 'HomeController@serviceCategories')->name('serviceCategories');
Route::get('admin/service/categorie/add', 'HomeController@addServiceCategorie')->name('addServiceCategorie');
Route::post('admin/service/categorie/add', 'HomeController@postAddServiceCategorie')->name('postAddServiceCategorie');
Route::get('admin/service/categorie/edit/{id}', 'HomeController@editServiceCategorie')->name('editServiceCategorie');
Route::post('admin/service/categorie/edit/{id}', 'HomeController@postEditServiceCategorie')->name('postEditServiceCategorie');
Route::get('admin/service/categorie/delete/{id}', 'HomeController@deleteServiceCategorie')->name('deleteServiceCategorie');
// end service route

// product route
Route::get('admin/sacks', 'HomeController@sacks')->name('sacks');
Route::get('admin/sack/add', 'HomeController@addSack')->name('addSack');
Route::post('admin/sack/add', 'HomeController@postAddSack')->name('postAddSack');
Route::get('admin/sack/edit/{id}', 'HomeController@editSack')->name('editSack');
Route::post('admin/sack/edit/{id}', 'HomeController@postEditSack')->name('postEditSack');
Route::get('admin/sack/delete/{id}', 'HomeController@deleteSack')->name('deleteSack');
// end product route

// Properties route
Route::get('admin/properties', 'HomeController@properties')->name('properties');
Route::get('admin/properties/add', 'HomeController@addProperties')->name('addProperties');
Route::post('admin/properties/add', 'HomeController@postAddProperties')->name('postAddProperties');
Route::get('admin/properties/edit/{id}', 'HomeController@editProperties')->name('editProperties');
Route::post('admin/properties/edit/{id}', 'HomeController@postEditProperties')->name('postEditProperties');
Route::get('admin/properties/delete/{id}', 'HomeController@deleteProperties')->name('deleteProperties');
// end properties route

// Status route
Route::get('admin/status', 'HomeController@status')->name('status');
Route::get('admin/status/add', 'HomeController@addStatus')->name('addStatus');
Route::post('admin/status/add', 'HomeController@postAddStatus')->name('postAddStatus');
Route::get('admin/status/edit/{id}', 'HomeController@editStatus')->name('editStatus');
Route::post('admin/status/edit/{id}', 'HomeController@postEditStatus')->name('postEditStatus');
Route::get('admin/status/delete/{id}', 'HomeController@deleteStatus')->name('deleteStatus');
// end status route

// Popup 
Route::get('admin/popups', 'HomeController@popups')->name('popups');
Route::get('admin/popup/add', 'HomeController@addPopup')->name('addPopup');
Route::post('admin/popup/add', 'HomeController@postAddPopup')->name('postAddPopup');
Route::get('admin/popup/edit/{id}', 'HomeController@editPopup')->name('editPopup');
Route::post('admin/popup/edit/{id}', 'HomeController@postEditPopup')->name('postEditPopup');
Route::get('admin/popup/delete/{id}', 'HomeController@deletePopup')->name('deletePopup');
// end popup

// Slider 
Route::get('admin/sliders', 'HomeController@sliders')->name('sliders');
Route::get('admin/slider/add', 'HomeController@addSlider')->name('addSlider');
Route::post('admin/slider/add', 'HomeController@postAddSlider')->name('postAddSlider');
Route::get('admin/slider/edit/{id}', 'HomeController@editSlider')->name('editSlider');
Route::post('admin/slider/edit/{id}', 'HomeController@postEditSlider')->name('postEditSlider');
Route::get('admin/slider/delete/{id}', 'HomeController@deleteSlider')->name('deleteSlider');
// end sliders
// Contact
Route::get('admin/contacts', 'HomeController@contacts')->name('contacts');
// End Contact

// package route
Route::get('admin/packages', 'HomeController@packages')->name('packages');
Route::get('admin/package/add', 'HomeController@addPackage')->name('addPackage');
Route::post('admin/package/add', 'HomeController@postAddPackage')->name('postAddPackage');
Route::get('admin/package/edit/{id}', 'HomeController@editPackage')->name('editPackage');
Route::post('admin/package/edit/{id}', 'HomeController@postEditPackage')->name('postEditPackage');
Route::get('admin/package/delete/{id}', 'HomeController@deletePackage')->name('deletePackage');

// End Package route

Route::get('admin/dns', 'HomeController@dns')->name('dns');
Route::get('admin/dn-detail/{id}', 'HomeController@dn')->name('dn');
Route::get('admin/dn/add', 'HomeController@addDn')->name('addDn');
Route::get('admin/dn/edit/{id}', 'HomeController@editDn')->name('editDn');
Route::post('admin/dn/edit/{id}', 'HomeController@postEditDn')->name('postEditDn');
Route::get('admin/dn/add/preview', 'HomeController@addDnPreview')->name('addDnPreview');
Route::post('admin/dn/add', 'HomeController@postAddDn')->name('postAddDn');
Route::get('admin/dn/delete/{id}', 'HomeController@deleteDn')->name('deleteDn');

// Route::get('admin/project/categorie/edit/{id}', 'HomeController@editProjectCategorie')->name('editProjectCategorie');
// Route::post('admin/project/categorie/edit/{id}', 'HomeController@postEditProjectCategorie')->name('postEditProjectCategorie');
// Route::get('admin/project/categorie/delete/{id}', 'HomeController@deleteProjectCategorie')->name('deleteProjectCategorie');
// end project route

// system 
Route::get('admin/system/edit', 'HomeController@editSystem')->name('editSystem');
Route::post('admin/system/edit', 'HomeController@postEditSystem')->name('postEditSystem');
// end system

//menu
Route::get('admin/menu/edit', 'HomeController@editMenu')->name('editMenu');
Route::get('admin/menu/update', 'HomeController@updateMenu')->name('updateMenu');
Route::get('admin/menu/delete/{array}', 'HomeController@deleteMenu')->name('deleteMenu');
// end menu

Route::get('ql/kien-hang', 'ClientController@qlPackages')->name('qlPackages');
Route::get('ql/phieu-xuat-kho', 'ClientController@qlDns')->name('qlDns');
Route::get('ql/phieu-xuat-kho/{id}', 'ClientController@qlDn')->name('qlDn');



Route::get('/clear', function() {

   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');

   return "Cleared!";

});

Route::get('/get-content-webstite', 'Controller@getContent')->name('getContent');
Route::get('/get-data-value', 'Controller@getDataValue')->name('getDataValue');
Route::get('/dang-nhap', 'Controller@dangnhap')->name('dangnhap');
Route::get('/dang-ky', 'Controller@dangky')->name('dangky');
Route::post('/dang-ky', 'Controller@postDangKy')->name('postDangKy');
Route::post('/addContact', 'Controller@addContact')->name('addContact');
Route::get('/lien-he', 'Controller@contact')->name('contact');
Route::get('/{url}', 'Controller@page')->name('page');
Route::get('/', 'Controller@index')->name('index');