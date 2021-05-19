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
	        <li class="breadcrumb-item"><a href="{{URL::route('projects')}}">dự án</a></li>
	        <li class="breadcrumb-item active">Sửa dự án</li>
	    </ol>


                    <div class="clearfix"></div>
                    <div id="main">
                        <form method="POST" action="{{URL::route('postEditProject',$project->id)}}" enctype="multipart/form-data" accept-charset="UTF-8" id="form_1aa3f76ebce588e61c3b18ff42edfa1a">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
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
    
        <div class="row">
        <div class="col-md-9">
                <div class="main-form">
                    <div class="form-body">
                        <div class="form-group"  >
    
                            <label for="name" class="control-label required">T&ecirc;n</label>
                            <input class="form-control" placeholder="Nhập tên" data-counter="120" name="name" type="text" value="{{$project->name}}" required id="name">
                        </div>
    
                        
                        <input type="hidden" name="model" value="">

                        
    
                        <div class="form-group"  >
    
                            <label for="content" class="control-label">Nội dung</label>
                            <textarea class="form-control" rows="4" placeholder="Nội dung" data-counter="400" name="content" cols="50" id="content">{{$project->content}}</textarea>
                            <script type="text/javascript">
                              var editor = CKEDITOR.replace('content',{
                               language:'vi',
                               filebrowserImageBrowseUrl : '../../../auth/ckfinder/ckfinder.html?type=Images',
                               filebrowserFlashBrowseUrl : '../../../auth/ckfinder/ckfinder.html?type=Flash',
                               filebrowserImageUploadUrl : '../../../auth/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                               filebrowserFlashUploadUrl : '../../../auth/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                               });
                             </script>﻿
                        </div>
    
                        
    
                        <div class="form-group" >
    
                            <label for="is_featured" class="control-label">Nổi bật?</label>

                            <div class="onoffswitch">
                                @if($project->hot ==0)
                                    <input type="hidden" name="hot" value="0">
                                    <input type="checkbox" name="hot" class="onoffswitch-checkbox" id="is_featured" value="1" class="form-control">
                                @else
                                    <input type="hidden" name="hot" value="0">
                                    <input type="checkbox" name="hot" class="onoffswitch-checkbox" id="is_featured" value="1" class="form-control" checked>
                                @endif
                                <label class="onoffswitch-label" for="is_featured">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                        </div>
    
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="widget meta-boxes">
			        <div class="widget-title">
			            <h4>
			                <span>Ảnh chi tiết</span>
			            </h4>
			            <button style="float: right;" type="button" onclick="more_image()" value="plus" class="btn btn-info">
			                <i class="fa fa-plus"></i> Thêm ảnh
			            </button>
			        </div>
			        <div class="widget-body">
			            <div class="product-images-wrapper">
			    
			        		<div class="images-wrapper">
			        			<div class="row" id="more_image">
			        				@php
	                                    $images = App\ProjectImage::where('project_id',$project->id)->where('role','=','0')->get();
	                                @endphp
	                                @if(count($images) == 0)
				        				<div class="col-md-2">
				        					<div class="file-upload">   
			                                    <div class="file-upload-content file-upload-content1" style="position: relative;">
			                                        <img width="100%" class="file-upload-image file-upload-image1" src="{{asset('uploads/images/icon-image.gif')}}" alt="your image" />
			                                        <div class="image-title-wrap image-title-wrap1" style="position: absolute;top: 0px; right: 0px;">
			                                            <button type="button" onclick="removeUploadTest(1)" class="remove-image">Ảnh chi tiết</button>
			                                        </div>
			                                        <input style="z-index: 100; position: absolute; top: 0px; left: 0px;" class="file-upload-input file-upload-input1" type='file' name="images[]" onchange="readURLTest(this,1);" accept="image/*" />
			                                    </div>
			                                </div>
				        				</div>
				        			@else
				        				@foreach($images as $image)
					        				<div class="col-md-2">
					        					<div class="file-upload" style="position: relative;">   
				                                    <div class="file-upload-content file-upload-content{{$image->id+20}}" style="position: relative;">
				                                        <img width="100%" class="file-upload-image file-upload-image{{$image->id+20}}" src="{{asset('uploads/images/projects/details/'.$image->url)}}" alt="your image" />
				                                        <div class="image-title-wrap image-title-wrap{{$image->id+20}}" style="position: absolute;top: 0px; right: 0px;">
				                                            
				                                        </div>
				                                        <input style="z-index: 100; position: absolute; top: 0px; left: 0px;" class="file-upload-input file-upload-input{{$image->id+20}}" type='file' name="{{$image->id}}" onchange="readURLTest(this,{{$image->id+20}});" accept="image/*" />
				                                    </div>
                                                    <!-- <div class="delete-image" id="177" onclick="return confirmDelete('Bạn có chắc muốn xóa ảnh này không')" style="position: absolute; top: 0px; right: 0px; z-index: 10000;">
                                                        <a title="XÓA ẢNH"><i class="fa fa-window-close"></i></a>
                                                    </div> -->
                                                    <a title="Xóa ảnh" class="btn btn-icon btn-sm btn-danger deleteDialog delete delete-image" data-toggle="tooltip" data-section="{{URL::route('deleteProjectImage',$image->id)}}" role="button" data-original-title="Xóa bản ghi" style="position: absolute; top: 0px; right: 0px; z-index: 10000;">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
				                                </div>
                                                
					        				</div>
					        			@endforeach
				        			@endif
			        				
			        			</div>

			        
			        
			    			</div>
						</div>

			        </div>
			    </div>

            <div class="modal fade modal-confirm-delete" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h4 class="modal-title"><i class="til_img"></i><strong>Xác nhận xóa</strong></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                        <div class="modal-body with-padding">
                            <div>Bạn có chắc chắn muốn xóa bản ghi này?</div>
                        </div>

                        <div class="modal-footer">
                            <button class="float-left btn btn-warning" data-dismiss="modal">Huỷ bỏ</button>
                            <a class="confirm-delete" href="">Xóa</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Modal -->
            
            <div id="advanced-sortables" class="meta-box-sortables">
        <div id="seo_wrap" class="widget meta-boxes">
     <div class="widget-title">
          <h4><span>Tối ưu hoá bộ máy tìm kiếm (SEO)</span></h4>
     </div>
     @php
        $it = $project;
     @endphp
     @include('admin.layout.seo-preview-edit')
</div>
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
            <li class="breadcrumb-item"><a href="{{URL::route('projects')}}">dự án</a></li>
            <li class="breadcrumb-item active">Sửa dự án</li>
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
                            <h4><label for="status" class="control-label required">Trạng th&aacute;i</label></h4>
                        </div>
                        <div class="widget-body">
                            <div class="ui-select-wrapper">
        <select class="form-control ui-select ui-select" id="status" name="display">
            @if($project->display == 1)
                <option value="1">Xuất bản</option>
                <option value="0">Bản nháp</option>
            @else
                <option value="0">Bản nháp</option>
                <option value="1">Xuất bản</option>
                
            @endif
        </select>
    <svg class="svg-next-icon svg-next-icon-size-16">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
    </svg>
</div>

    


                        </div>
                    </div>

                    <div class="widget meta-boxes">
                        <div class="widget-title">
                            <h4><label for="categories[]" class="control-label required" aria-required="true">Danh mục</label></h4>
                        </div>
                        <div class="widget-body">
                            <div class="form-group form-group-no-margin ">
                            	<div class="multi-choices-widget list-item-checkbox mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible; padding: 0px;">
                            		<div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical_horizontal mCSB_outside" tabindex="0" style="max-height: 320px;">
                            			<div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y mCS_x_hidden mCS_no_scrollbar_x" style="position: relative; top: 0px; left: 0px; width: 343.5px;" dir="ltr">
						                    <ul>
                                                @php
                                                    $pjcids = App\PJCID::where('project_id',$project->id)->get();
                                                    
                                                @endphp
						                    	@foreach($categories as $cate)
                                                    @php
                                                        $j=0;
                                                    @endphp
                                                    @foreach($pjcids as $pjcid)
                                                        @if($cate->id == $pjcid->cate_id)
                                                            @php
                                                                $j=1;
                                                            @endphp
                                                            @break
                                                        @else
                                                        @endif

                                                    @endforeach

                                                    @if($j==1)
    							                        <li value="{{$cate->id}}">
    									                    <label>
    													        <input type="checkbox" checked value="{{$cate->id}}" name="categories[]">
    													        {{$cate->name}}
    													    </label>
    							                        </li>
                                                    @else
                                                        <li value="{{$cate->id}}">
                                                            <label>
                                                                <input type="checkbox" value="{{$cate->id}}" name="categories[]">
                                                                {{$cate->name}}
                                                            </label>
                                                        </li>
                                                    @endif
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


                    <div class="widget meta-boxes">
                        <div class="widget-title">
                            <h4><label for="image" class="control-label">Avata</label></h4>
                        </div>
                        <div class="widget-body">
                            <div class="image-box" style="border: 1px solid #e2e2e2;">
                                <div class="file-upload">   
                                    <div class="file-upload-content file-upload-content0" style="position: relative;">
                                        <img width="100%" class="file-upload-image file-upload-image0" src="{{asset('uploads/images/projects/avatas/'.$project->avata)}}" alt="your image" />
                                        <div class="image-title-wrap image-title-wrap0" style="position: absolute;top: 0px; right: 0px;">
                                            <button type="button" onclick="removeUploadTest(0)" class="remove-image">Ảnh đại diện</button>
                                        </div>
                                        <input style="z-index: 100; position: absolute; top: 0px; left: 0px;" class="file-upload-input file-upload-input0" type='file' name="avata" onchange="readURLTest(this,0);" accept="image/*" />
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
    <script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/admin/table.js')}}"></script>
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