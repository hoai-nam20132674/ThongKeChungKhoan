@extends('admin.layout.default')
@section('css')
	<link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/fontawesome.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/simple-line-icons.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/select2.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/select2-bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/pace-theme-minimal.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/toastr.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/jquery.mCustomScrollbar.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/bootstrap-datepicker3.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/spectrum.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/jquery.fancybox.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/bootstrap-colorpicker.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/theme-options.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/core.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/default.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/upload-image.css')}}">
@endsection
@section('content')

	<div class="page-content ">
                        @if( Session::has('flash_message'))
                            <div class="note note-{{ Session::get('flash_level')}}">
                                <p>{{ Session::get('flash_message')}}</p>
                            </div>
                        @endif
                        @if( count($errors) > 0)
                            
                            @foreach($errors->all() as $error)
                                <div class="note note-danger">
                                    <p>{{$error}}</p>
                                </div>
                            @endforeach
                                
                        @endif
                    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>
        
                            <li class="breadcrumb-item active">Cập nhật thông tin hệ thống</li>
            
            </ol>


                    <div class="clearfix"></div>
                    <div id="main">
                                <div id="theme-option-header">
        <div class="display_header">
            <h2>Cài đặt hệ thống</h2>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="theme-option-container">
        <form method="POST" action="{{URL::route('postEditSystem')}}" enctype="multipart/form-data" accept-charset="UTF-8">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <div class="theme-option-sticky">
                <div class="info_bar">
                    <div class="float-left">
                                            </div>
                    <div class="theme-option-action_bar">
                        
                        <button type="submit" name="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </div>
                </div>
            </div>
            <div class="theme-option-sidebar">
                <ul class="nav nav-tabs tab-in-left">
                                            <li class="nav-item">
                            <a href="#tab_opt-text-subsection-general" class="nav-link  active " data-toggle="tab"><i class="fa fa-home"></i>  General</a>
                        </li>
                                            <li class="nav-item">
                            <a href="#tab_opt-text-subsection-logo" class="nav-link " data-toggle="tab"><i class="fa fa-image"></i>  Logo</a>
                        </li>
                                            <li class="nav-item">
                            <a href="#tab_opt-text-subsection-social" class="nav-link " data-toggle="tab"><i class="fa fa-share-alt"></i>  Social</a>
                        </li>
                                            
                                    </ul>
            </div>
            <div class="theme-option-main">
                <div class="tab-content tab-content-in-right">
                                            <div class="tab-pane  active " id="tab_opt-text-subsection-general">
                                                            <div class="form-group ">
                                    <label for="site_name" class="control-label">Site name</label>
                                    <input class="form-control" placeholder="Site name" data-counter="255" name="name" type="text" value="{{$system->name}}" id="site_name">
                                                                    </div>
                                                        
                                <hr>
                                                            <div class="form-group ">
                                    <label for="seo_title" class="control-label">SEO Title</label>
                                    <input class="form-control" placeholder="SEO Title" data-counter="120" name="title" type="text" value="{{$system->title}}" id="seo_title">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="seo_keyword" class="control-label">SEO keyword</label>
                                    <input class="form-control" placeholder="SEO Keyword" data-counter="120" name="seo_keyword" type="text" value="{{$system->seo_keyword}}" id="seo_keyword">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="seo_description" class="control-label">SEO Description</label>
                                    <textarea class="form-control" rows="4" name="seo_description" cols="50" id="seo_description">{{$system->seo_description}}</textarea>
                                                                    </div>
                                
                                <hr>
                                                            <div class="form-group ">
                                    <label for="hotline" class="control-label">Hotline</label>
                                    <input class="form-control" placeholder="Hotline" data-counter="30" name="phone" type="text" value="{{$system->phone}}" id="hotline">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="address" class="control-label">Address</label>
                                    <input class="form-control" placeholder="Address" data-counter="120" name="address" type="text" value="{{$system->address}}" id="address">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="email" class="control-label">Email</label>
                                    <input class="form-control" placeholder="email" data-counter="120" name="email" type="text" value="{{$system->email}}" id="email">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="website" class="control-label">Website</label>
                                    <input class="form-control" placeholder="website" data-counter="120" name="website" type="text" value="{{$system->website}}" id="website">
                                                                    </div>
                                                                    <div class="form-group ">
                                    <label for="script" class="control-label">Script</label>
                                    <textarea class="form-control" rows="4" placeholder="Nội dung" data-counter="10000" name="script" cols="50" id="content">{{$system->script}}</textarea>
                                    
                                                                    </div>
                                                                    <div class="form-group ">
                                    <label for="map" class="control-label">Bản đồ</label>
                                    <textarea class="form-control" rows="4" placeholder="Nội dung" data-counter="10000" name="map" cols="50" id="map">{{$system->map}}</textarea>
                                    
                                                                    </div>
                                
                                <hr>
                                                    </div>
                                    <div class="tab-pane " id="tab_opt-text-subsection-logo">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group ">
                                                    <label for="favicon" class="control-label">Favicon</label>
                                                    <div class="image-box">
                                                        <div class="file-upload">   
                                                            <div class="file-upload-content file-upload-content100" style="position: relative;">
                                                                @if($system->shortcut_logo == '')
                                                                    <img width="100%" class="file-upload-image file-upload-image100" src="{{asset('uploads/images/icon-image.gif')}}" alt="your image" />
                                                                @else
                                                                    <img width="100%" class="file-upload-image file-upload-image100" src="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" alt="your image" />
                                                                @endif
                                                                <div class="image-title-wrap image-title-wrap100" style="position: absolute;top: 0px; right: 0px;">
                                                                    <button type="button" onclick="removeUploadTest(100)" class="remove-image">Favicon</button>
                                                                </div>
                                                                <input style="z-index: 100; position: absolute; top: 0px; left: 0px;" class="file-upload-input file-upload-input100" type='file' name="shortcut_logo" onchange="readURLTest(this,100);" accept="image/*" />
                                                            </div>
                                                        </div>
                    
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                <hr>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group ">
                                                    <label for="logo" class="control-label">Logo</label>
                                                    <div class="image-box">
                                                        <div class="file-upload">   
                                                            <div class="file-upload-content file-upload-content101" style="position: relative;">   
                                                                @if($system->logo == '')
                                                                    <img width="100%" class="file-upload-image file-upload-image101" src="{{asset('uploads/images/icon-image.gif')}}" alt="your image" />
                                                                @else
                                                                    <img width="100%" class="file-upload-image file-upload-image101" src="{{asset('uploads/images/systems/'.$system->logo)}}" alt="your image" />
                                                                @endif
                                                                <div class="image-title-wrap image-title-wrap101" style="position: absolute;top: 0px; right: 0px;">
                                                                    <button type="button" onclick="removeUploadTest(101)" class="remove-image">Logo</button>
                                                                </div>
                                                                <input style="z-index: 100; position: absolute; top: 0px; left: 0px;" class="file-upload-input file-upload-input101" type='file' name="logo" onchange="readURLTest(this,101);" accept="image/*" />
                                                            </div>
                                                        </div>
                    
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                <hr>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group ">
                                                    <label for="banner" class="control-label">Banner</label>
                                                    <div class="image-box">
                                                        <div class="file-upload">   
                                                            <div class="file-upload-content file-upload-content102" style="position: relative;">   
                                                                @if($system->banner == '')
                                                                    <img width="100%" class="file-upload-image file-upload-image102" src="{{asset('uploads/images/icon-image.gif')}}" alt="your image" />
                                                                @else
                                                                    <img width="100%" class="file-upload-image file-upload-image102" src="{{asset('uploads/images/systems/'.$system->banner)}}" alt="your image" />
                                                                @endif
                                                                <div class="image-title-wrap image-title-wrap102" style="position: absolute;top: 0px; right: 0px;">
                                                                    <button type="button" onclick="removeUploadTest(102)" class="remove-image">Banner</button>
                                                                </div>
                                                                <input style="z-index: 100; position: absolute; top: 0px; left: 0px;" class="file-upload-input file-upload-input102" type='file' name="banner" onchange="readURLTest(this,102);" accept="image/*" />
                                                            </div>
                                                        </div>
                    
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                <hr>
                                                    </div>
                                            <div class="tab-pane " id="tab_opt-text-subsection-social">
                                                            <div class="form-group ">
                                    <label for="facebook" class="control-label">Facebook</label>
                                    <input class="form-control" name="facebook" type="text" value="{{$system->facebook}}" id="facebook">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="instagram" class="control-label">Instagram</label>
                                    <input class="form-control" name="instagram" type="text" value="{{$system->instagram}}" id="instagram">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="zalo" class="control-label">Zalo</label>
                                    <input class="form-control" name="zalo" type="text" value="{{$system->zalo}}" id="zalo">
                                                                    </div>
                                <hr>
                                                            <div class="form-group ">
                                    <label for="youtube" class="control-label">Youtube</label>
                                    <input class="form-control" name="youtube" type="text" value="{{$system->youtube}}" id="youtube">
                                                                    </div>
                                <hr>
                                                    </div>
                                            
                                            
                                            
                                    </div>
            </div>
            <div class="theme-option-sticky">
                <div class="info_bar">
                    <div class="theme-option-action_bar">
                        
                        <button type="submit" name="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
                    </div>
                </div>
@endsection
@section('js')
	<script src="{{asset('js/admin/respond.min.js')}}"></script>
    <script src="{{asset('js/admin/excanvas.min.js')}}"></script>
    <script src="{{asset('js/admin/ie8.fix.min.js')}}"></script>
    <script src="{{asset('js/admin/modernizr.min.js')}}"></script>
    <script src="{{asset('js/admin/select2.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.cookie.js')}}"></script>
    <script src="{{asset('js/admin/core.js')}}"></script>
    <script src="{{asset('js/admin/toastr.min.js')}}"></script>
    <script src="{{asset('js/admin/pace.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.mCustomScrollbar.js')}}"></script>
    <script src="{{asset('js/admin/jquery.stickytableheaders.js')}}"></script>
    <script src="{{asset('js/admin/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/admin/spectrum.js')}}"></script>
    <script src="{{asset('js/admin/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.are-you-sure.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{asset('js/admin/theme-options.js')}}"></script>
    <script src="{{asset('js/admin/upload-image.js')}}"></script>
@endsection