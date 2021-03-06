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
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/dashboard.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/default.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/dataTables.bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/table.css')}}">
@endsection
@section('content')
	<div class="page-content ">
        <ol class="breadcrumb">

            <li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>
            <li class="breadcrumb-item active">Danh sách phiếu xuất kho</li>
            
        
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
                            		<label>
                            			<input type="search" class="form-control form-control-sm" url="{{URL::route('dns')}}" name="search" onchange="searchDn()" value="{{$request->phone}}" placeholder="Tìm theo mã khách hàng..." aria-controls="table-categories">
                            		</label>
                            	</div>
                            	<div class="dt-buttons btn-group">
                            		
                            		<button class="btn btn-secondary action-item addDn" href="{{URL::route('addDn')}}" tabindex="0" aria-controls="table-categories"><span><span data-action="create" ><i class="fa fa-plus"></i>Tạo phiếu xuất kho</span></span></button> 
                            		
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
											<th  title="Mã kiện hàng" class="text-left column-key-name">Mã phiếu</th>
											
											<th  title="Mã khách hàng" width="" class="no-sort text-left column-key-mkh">Mã khách hàng</th>
											<th  title="Tiền cân" width="" class="no-sort text-left column-key-cn">Tiền cân</th>
											<th  title="Phát sinh" width="" class="no-sort text-left column-key-cnqd">Phí phát sinh</th>
											<th  title="Phí ship" width="" class="no-sort text-left column-key-monney">Phí ship</th>
											<th  title="Tổng tiền" width="" class="no-sort text-left column-key-cnqd">Tổng tiền</th>
											<th  title="Ngày tạo" width="150px" class=" column-key-created_at">Ngày tạo</th>
											<th  title="Tác vụ" width="134px" class="text-center">Tác vụ</th>
										</tr>
									</thead>
									<tbody>
										@php
											$i=1;
											$items = $dns;
										@endphp
										@foreach($dns as $dn)
											@if($i%2 ==1 )
												<tr role="row" class="odd item">
											@else
												<tr role="row" class="even item">
											@endif
													<td class=" text-left no-sort">
														<div class="text-left">
														    <div class="checkbox checkbox-primary table-checkbox">
														        <input type="checkbox" class="checkboxes" name="id[]" value="{{$dn->id}}">
														    </div>
														</div>
													</td>
													<td class="column-key-id sorting_{{$i}}">{{$i}}</td>
													
													<td class=" text-left column-key-name"><a href="">{{$dn->id}}</a></td>
													
													
													<td class=" text-left">{{$dn->phone}}</td>
													<td class=" text-left">{!!number_format($dn->tiencan)!!}</td>
													<td class=" text-left">{!!number_format($dn->phiphatsinh)!!}</td>
													<td class=" text-left">{!!number_format($dn->phiship)!!}</td>
													<td class=" text-left">{!!number_format($dn->total)!!}</td>
													<td class="  column-key-created_at">{{$dn->created_at}}</td>
													
													<td class=" text-center">
														<div class="table-actions">

										                    <a href="{{URL::route('dn',$dn->id)}}" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Chi tiết">
										                    	<i class="fa fa-eye"></i>
										                    </a>
										        			<a href="{{URL::route('editDn',$dn->id)}}" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Sửa">
										                    	<i class="fa fa-edit"></i>
										                    </a>
										                    <a href="#" class="btn btn-icon btn-sm btn-danger deleteDialog delete" data-toggle="tooltip" data-section="{{URL::route('deleteDn',$dn->id)}}" role="button" data-original-title="Xóa bản ghi">
										                    	<i class="fa fa-trash"></i>
										                    </a>
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
			<div class="modal fade delete-many-modal" tabindex="-1" role="dialog">
			    <div class="modal-dialog modal-sm">
			        <div class="modal-content">
			            <div class="modal-header bg-danger">
			                <h4 class="modal-title"><i class="til_img"></i><strong>Xác nhận xóa</strong></h4>
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			                    <span aria-hidden="true">×</span>
			                </button>
			            </div>

			            <div class="modal-body with-padding">
			                <div>Do you really want to delete selected record(s)?</div>
			            </div>

			            <div class="modal-footer">
			                <button class="float-left btn btn-warning" data-dismiss="modal">Huỷ bỏ</button>
			                <button class="float-right btn btn-danger delete-many-entry-button">Xóa</button>
			            </div>
			        </div>
			    </div>
			</div>
			<!-- end Modal -->
			<div class="modal fade modal-bulk-change-items" tabindex="-1" role="dialog">
			    <div class="modal-dialog modal-sm">
			        <div class="modal-content">
			            <div class="modal-header bg-info">
			                <h4 class="modal-title"><i class="til_img"></i><strong>Bulk changes</strong></h4>
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			                    <span aria-hidden="true">×</span>
			                </button>
			            </div>

			            <div class="modal-body with-padding">
			                <div><div class="modal-bulk-change-content"></div></div>
			            </div>

			            <div class="modal-footer">
			                <button class="float-left btn btn-warning" data-dismiss="modal">Huỷ bỏ</button>
			                <button class="float-right btn btn-info confirm-bulk-change-button" data-load-url="">Submit</button>
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
    <script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('js/admin/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/admin/moment-with-locales.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap3-typeahead.min.js')}}"></script>
    <script src="{{asset('js/admin/table.js')}}"></script>
    <script src="{{asset('js/admin/filter.js')}}"></script>
    <script type="text/javascript">
    	var items =  $('tr.item');
    	if(items.length == 0){
    		swal("Không có kiện hàng nào được tìm thấy");
    	}
    	function searchDn(){
            var phone = $('input[name="search"]').val();
            var url = $('input[name="search"]').attr('url');
            url = url+'&phone='+phone;
            location.href = url;
            // console.log(url);
        }
        $(document).on('click', '.addDnPreview', function(event) {
	        event.preventDefault();
	        url = $(this).attr('data-href');
	        var items = $('input.checkboxes');
	        var str_ids = '';
	        items.each(function(){
                if($(this).is(":checked")){
	                str_ids = str_ids+','+$(this).attr('value');
	                console.log(str_ids);
	            }
	            else{
	            	
	            }
            });
            if(str_ids ==''){
            	swal("Vui lòng chọn kiện hàng muốn in phiếu xuất kho");
            }
            else{
            	url = url+'?str_ids='+str_ids;
            	location.href = url;
            }
            
	        
	    });
    </script>
    
@endsection