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
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/core.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/default.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/slug.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/seo-helper.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/upload-image.css')}}">
@endsection
@section('content')
	<div class="page-content ">
	    <ol class="breadcrumb">

	        <li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>
	        <li class="breadcrumb-item"><a href="{{URL::route('sacks')}}">Bao hàng</a></li>
	        <li class="breadcrumb-item active">Thêm bao hàng mới</li>
	    </ol>


                    <div class="clearfix"></div>
                    <div id="main">
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
                        <form method="POST" action="{{URL::route('postAddSack')}}" enctype="multipart/form-data" accept-charset="UTF-8" id="form_1aa3f76ebce588e61c3b18ff42edfa1a">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
    
        <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="ma" class="control-label required">Mã bao</label>
                                <input class="form-control" placeholder="Nhập mã bao" data-counter="120" value="{{old('ma')}}" name="ma" type="text" required id="ma">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="ktqnh" class="control-label">Kho Trung Quốc nhận hàng</label>
                                <input class="form-control" placeholder="Thời gian nhận hàng" value="{{old('ktqnh')}}" name="ktqnh" type="datetime-local" id="ktqnh">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="xktq" class="control-label">Xuất kho Trung Quốc</label>
                                <input class="form-control" placeholder="Thời gian xuất kho" value="{{old('xktq')}}" name="xktq" type="datetime-local" id="xktq">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="tkvn" class="control-label">Trong kho Việt Nam</label>
                                <input class="form-control" placeholder="Thời gian xuất kho" value="{{old('tkvn')}}" name="tkvn" type="datetime-local" id="tkvn">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="ht" class="control-label">Hoàn thành</label>
                                <input class="form-control" placeholder="Thời gian xuất kho" value="{{old('ht')}}" name="ht" type="datetime-local" id="ht">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="advanced-sortables" class="meta-box-sortables">
                <div id="seo_wrap" class="widget meta-boxes"></div>
            </div>
        </div>
        <div class="col-md-3 right-sidebar">
            <div class="widget meta-boxes form-actions form-actions-default action-horizontal">
    <div class="widget-title">
        <h4>
                        <span>Xuất bản</span>
        </h4>
    </div>
    <div class="widget-body">
        <div class="btn-set">
                        <button type="submit" name="submit" value="save" class="btn btn-info">
                <i class="fa fa-save"></i> Lưu
            </button>
                            &nbsp;
            <button type="submit" name="submit" value="apply" class="btn btn-success">
                <i class="fa fa-check-circle"></i> Lưu &amp; chỉnh sửa
            </button>
                    </div>
    </div>
</div>
<div id="waypoint"></div>
<div class="form-actions form-actions-fixed-top hidden">
    <ol class="breadcrumb">

            <li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>
            <li class="breadcrumb-item"><a href="{{URL::route('sacks')}}">Bao hàng</a></li>
            <li class="breadcrumb-item active">Thêm bao hàng mới</li>
        </ol>


    <div class="btn-set">
                <button type="submit" name="submit" value="save" class="btn btn-info">
            <i class="fa fa-save"></i> Lưu
        </button>
                    &nbsp;
            <button type="submit" name="submit" value="apply" class="btn btn-success">
                <i class="fa fa-check-circle"></i> Lưu &amp; chỉnh sửa
            </button>
            </div>
</div>

            
                                            

                    <div class="widget meta-boxes">
                        <div class="widget-title">
                            <h4><label for="properties[]" class="control-label required" aria-required="true">Quy cách đóng gói</label></h4>
                        </div>
                        <div class="widget-body">
                            <div class="form-group form-group-no-margin ">
                            	<div class="multi-choices-widget list-item-checkbox mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible; padding: 0px;">
                            		<div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical_horizontal mCSB_outside" tabindex="0" style="max-height: 320px;">
                            			<div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y mCS_x_hidden mCS_no_scrollbar_x" style="position: relative; top: 0px; left: 0px; width: 343.5px;" dir="ltr">
						                    <ul>
						                    	@foreach($properties as $pp)
							                        <li value="{{$pp->id}}">
									                    <label>
													        <input type="checkbox" value="{{$pp->id}}" name="properties[]">
													        {{$pp->name}}
													    </label>

							                        </li>
						                        @endforeach
						                       
						                    </ul>
						                </div>
						            </div>
						            <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: none;">
						            	<div class="mCSB_draggerContainer">
						            		<div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; height: 0px; top: 0px;" oncontextmenu="return false;">
						            			<div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
						            			<div class="mCSB_draggerRail"></div>
						            		</div>
						            		<div id="mCSB_1_scrollbar_horizontal" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_horizontal" style="display: none;">
						            			<div class="mCSB_draggerContainer">
						            				<div id="mCSB_1_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 50px; width: 0px; left: 0px;" oncontextmenu="return false;">
						            					<div class="mCSB_dragger_bar"></div>
						            					<div class="mCSB_draggerRail"></div>
						            				</div>
						            			</div>
						            		</div>
						            	</div>
						            </div>
						        </div>
						    </div>

                        </div>
                    </div>
                            
                    </div>
    </div>

            </form>
    
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
    <script src="{{asset('js/admin/js-validation.js')}}"></script>
    <script src="{{asset('js/admin/jquery.are-you-sure.js')}}"></script>
    <script src="{{asset('js/admin/slug.js')}}"></script>
    <script src="{{asset('js/admin/seo-helper.js')}}"></script>
    <script src="{{asset('js/admin/upload-image.js')}}"></script>
    <script type="text/javascript">
			
		function more_image(){
			var i = parseInt($("input[type=file]").length);
			i=i+1;
			var more_image = $("#more_image");
			more_image.append('<div class="col-md-2"><div class="file-upload"><div class="file-upload-content file-upload-content'+i+'" style="position: relative;"><img width="100%" class="file-upload-image file-upload-image'+i+'" src="{{asset("uploads/images/icon-image.gif")}}" alt="your image" /><div class="image-title-wrap image-title-wrap'+i+'" style="position: absolute;top: 0px; right: 0px;"><button type="button" onclick="removeUploadTest('+i+')" class="remove-image">Ảnh chi tiết</button></div><input style="z-index: 100; position: absolute; top: 0px; left: 0px;" class="file-upload-input file-upload-input'+i+'" type="file" name="images[]" onchange="readURLTest(this,'+i+');" accept="image/*" /></div></div></div>');
			i++;
		};
		
	</script>
@endsection