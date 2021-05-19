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
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/dataTables.bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/table.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/dashboard.css')}}">
@endsection
@section('content')
	<div class="page-content ">
	    <ol class="breadcrumb">

	        <li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>
	        <li class="breadcrumb-item"><a href="{{URL::route('sacks')}}">Danh sách bao hàng</a></li>
	        <li class="breadcrumb-item active">Sửa bao hàng {{$sack->ma}}</li>
	    </ol>


                    <div class="clearfix"></div>
                    <div id="main">
                        <form method="POST" action="{{URL::route('postEditSack',$sack->id)}}" enctype="multipart/form-data" accept-charset="UTF-8" id="form_1aa3f76ebce588e61c3b18ff42edfa1a">
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
            <div class="row">
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="ma" class="control-label required">Mã bao</label>
                                <input class="form-control" placeholder="Nhập mã bao" data-counter="120" disabled value="{{$sack->ma}}" name="ma" type="text" required id="ma">
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
                                <input class="form-control" placeholder="Thời gian nhận hàng" value="{{$sack->ktqnh}}" name="ktqnh" type="datetime-local" id="ktqnh">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="xktq" class="control-label">Xuất kho Trung Quốc</label>
                                <input class="form-control" placeholder="Thời gian xuất kho" value="{{$sack->xktq}}" name="xktq" type="datetime-local" id="xktq">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="tkvn" class="control-label">Trong kho Việt Nam</label>
                                <input class="form-control" placeholder="Thời gian xuất kho" value="{{$sack->tkvn}}" name="tkvn" type="datetime-local" id="tkvn">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="ht" class="control-label">Hoàn thành</label>
                                <input class="form-control" placeholder="Thời gian xuất kho" value="{{$sack->ht}}" name="ht" type="datetime-local" id="ht">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row list-package">
                <div class="col-md-12">
                <div class="table-wrapper">
                
                    <div class="portlet light bordered portlet-no-padding">
                        <div class="portlet-title">
                            <div class="caption">
                                <div class="wrapper-action">
                                    <div class="btn-group">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" data-toggle="dropdown">Hành động</a>
                                        <ul class="dropdown-menu">
                                            
                                            <li>
                                                <a href="#" class="delete-many-entry-trigger" data-class-item="Botble\Blog\Tables\CategoryTable">Xoá</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-primary btn-show-table-options">Lọc dữ liệu</button>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-responsive  table-has-actions   table-has-filter ">
                                <div id="table-categories_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer" style="width: 100%;">
                                    <div id="table-categories_filter" class="dataTables_filter">
                                        <label><input type="search" class="form-control form-control-sm" placeholder="Search..." aria-controls="table-categories"></label>
                                    </div>
                                    <div class="dt-buttons btn-group"> 
                                        <button class="btn btn-secondary action-item" tabindex="0" aria-controls="table-categories"><span><span data-action="create" data-href="{{URL::route('addPackage')}}?sack_id={{$sack->id}}"><i class="fa fa-plus"></i> Tạo kiện hàng mới</span></span></button> 
                                        <button class="btn btn-secondary buttons-reload" tabindex="0" aria-controls="table-categories"><span><i class="fas fa-sync"></i> Tải lại</span></button> 
                                    </div>
                                    <div id="table-categories_processing" class="dataTables_processing card" style="display: none;"></div>
                                    <table class="table table-striped table-hover vertical-middle dataTable no-footer" id="table-categories" role="grid" aria-describedby="table-categories_info" style="width: 1582px;">
                                        <thead>
                                            <tr>
                                                <th  width="10px" class="text-left no-sort" title="&lt;input class=&quot;table-check-all&quot; data-set=&quot;.dataTable .checkboxes&quot; type=&quot;checkbox&quot;&gt;">
                                                    <input class="table-check-all" data-set=".dataTable .checkboxes" type="checkbox">
                                                </th>
                                                <th  title="ID" width="20px" class=" column-key-id">ID</th>
                                                <th  title="Mã kiện hàng" class="text-left column-key-name">Mã kiện</th>
                                                <th  title="Mã vận đơn" class="text-left column-key-name">Mã vận đơn</th>
                                                <th  title="Mã bao hàng" width="" class="no-sort text-left column-key-mb">Mã bao</th>
                                                <th  title="Mã khách hàng" width="" class="no-sort text-left column-key-mkh">Mã khách hàng</th>
                                                <th  title="Cân nặng" width="" class="no-sort text-left column-key-cn">Cân nặng (gram)</th>
                                                <th  title="Cân quy đổi" width="" class="no-sort text-left column-key-cnqd">Thể tích (m&sup3;)</th>
                                                <th  title="Thành tiền" width="" class="no-sort text-left column-key-monney">Thành tiền (vnđ)</th>
                                                <th  title="Ngày tạo" width="100px" class=" column-key-created_at">Ngày tạo</th>
                                                <th  title="Xuất kho" width="" class="no-sort text-left column-key-mb">Xuất kho</th>
                                                <th  title="Tác vụ" width="80px" class="text-center">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i=1;
                                                $items = $packages;
                                            @endphp
                                            @foreach($packages as $package)
                                                @if($i%2 ==1 )
                                                    <tr role="row" class="odd item">
                                                @else
                                                    <tr role="row" class="even item">
                                                @endif
                                                        <td class=" text-left no-sort">
                                                            <div class="text-left">
                                                                <div class="checkbox checkbox-primary table-checkbox">
                                                                    @if(isset($package->mpxk))
                                                                    <input disabled type="checkbox" class="checkboxes" name="id[]" value="{{$package->id}}">
                                                                    @else
                                                                    <input type="checkbox" class="checkboxes" name="id[]" value="{{$package->id}}">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="column-key-id sorting_{{$i}}">{{$i}}</td>
                                                        
                                                        <td class=" text-left column-key-name"><a href="">{{$package->ma}}</a></td>
                                                        <td class=" text-left column-key-name"><a href="">{{$package->mvd}}</a></td>
                                                        @php
                                                            $sack = App\Sack::where('id',$package->sack_id)->get()->first();
                                                            
                                                        @endphp
                                                        <td class=" no-sort text-left column-key-updated_at">
                                                            <a href="{{URL::route('editSack',$sack->id)}}">{{$sack->ma}}</a>
                                                        </td>
                                                        <td class=" text-left">{{$package->phone}}</td>
                                                        <td class=" text-left">{!!number_format($package->cannang)!!}</td>
                                                        <td class=" text-left">{{$package->cnqd/1000000}} M&sup3;</td>
                                                        <td class=" text-left">{!!number_format($package->price)!!} VNĐ</td>
                                                        <td class="  column-key-created_at">{{$package->created_at->format('d-m-Y')}}</td>
                                                        <td class=" text-left">
                                                            @if(isset($package->mpxk))
                                                            <a href="#" onclick="" class="btn btn-danger">Đã xuất kho</a>
                                                            @else
                                                            <a href="#" onclick="" class="btn btn-success">Chưa xuất kho</a>
                                                            @endif
                                                        </td>
                                                        <td class=" text-center">
                                                            <div class="table-actions">

                                                                <a href="{{URL::route('editPackage',$package->id)}}" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Sửa">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                    
                                                                @if(isset($package->mpxk))
                                                                <a style="pointer-events: none;" href="#" class="btn btn-icon btn-sm btn-danger deleteDialog delete" data-toggle="tooltip" data-section="{{URL::route('deletePackage',$package->id)}}" role="button" data-original-title="Xóa bản ghi">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                                @else
                                                                <a href="#" class="btn btn-icon btn-sm btn-danger deleteDialog delete" data-toggle="tooltip" data-section="{{URL::route('deletePackage',$package->id)}}" role="button" data-original-title="Xóa bản ghi">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $i++;
                                                        
                                                    @endphp
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                    @include('admin.layout.table-footer')
                                </div>
                            </div>
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
            <li class="breadcrumb-item"><a href="{{URL::route('sacks')}}">Danh sách bao hàng</a></li>
            <li class="breadcrumb-item active">Sửa bao hàng {{$sack->ma}}</li>
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
                                                @php
                                                    $spids = App\SPID::where('sack_id',$sack->id)->get();
                                                    
                                                @endphp
						                    	@foreach($properties as $pp)
                                                    @php
                                                        $j=0;
                                                    @endphp
                                                    @foreach($spids as $spid)
                                                        @if($pp->id == $spid->properties_id)
                                                            @php
                                                                $j=1;
                                                            @endphp
                                                            @break
                                                        @else
                                                        @endif

                                                    @endforeach

                                                    @if($j==1)
    							                        <li value="{{$pp->id}}">
    									                    <label>
    													        <input type="checkbox" checked value="{{$pp->id}}" name="properties[]">
    													        {{$pp->name}}
    													    </label>
    							                        </li>
                                                    @else
                                                        <li value="{{$pp->id}}">
                                                            <label>
                                                                <input type="checkbox" value="{{$pp->id}}" name="properties[]">
                                                                {{$pp->name}}
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


                
                            
                    </div>
                </div>

            </form>
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
                            <a class="confirm-delete" href=""><button class="float-right btn btn-danger">Xóa</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Modal -->
    
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
        function replaceValue(name){
            var value = $('input[name="'+name+'"]').attr('value');
            value = value.replace(" ", "T");
            $('input[name="'+name+'"]').attr('value',value);
        }
        
        replaceValue('ktqnh');
        replaceValue('xktq');
        replaceValue('tkvn');
        replaceValue('ht');
		
	</script>
@endsection