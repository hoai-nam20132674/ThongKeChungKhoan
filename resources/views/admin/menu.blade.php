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
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/jquery.nestable.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/menu.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/default.css')}}">
@endsection
@section('content')
<div class="page-content ">
    <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>
        <li class="breadcrumb-item active">Sửa menu</li>
    
    </ol>


    <div class="clearfix"></div>
    <div id="main">
        <form method="POST" action="" accept-charset="UTF-8" id="form_de7bcdb34b7e65f91db4054da5d794d3" class="form-save-menu">
            <input name="_token" type="hidden" value="kU6i13XxOpavyLG5JTRb9f8prUR9M5Hn14b8kD57">
            <div class="tb"></div>
            
            <div class="row">
                <div class="col-md-9">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group"  >
                                <label for="name" class="control-label required">T&ecirc;n</label>
                                <input class="form-control" placeholder="Nhập tên" data-counter="120" name="name" type="text" value="Main menu" id="name">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <input type="hidden" name="deleted_nodes">
                    <textarea name="menu_nodes" id="nestable-output" class="form-control hidden"></textarea>
                    <div class="row widget-menu">
        <div class="col-md-4">
            <div class="panel-group" id="accordion">

                
                
                <div class="widget meta-boxes">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse_service_categories">
                        <h4 class="widget-title" style="margin-top: 0">
                            <span>Danh mục dịch vụ</span>
                            <i class="fa fa-angle-down narrow-icon"></i>
                        </h4>
                    </a>
                    <div id="collapse_service_categories" class="panel-collapse collapse">
                        <div class="widget-body">
                            <div class="box-links-for-menu">
                                <div class="the-box">
                                    <ul class="list-item">
                                        <ul  class="list-item">
                                            @foreach($serviceCategories as $sc)
                                            <li>
                                                <label for="" data-title="{{$sc->name}}" data-reference-id="{{$sc->id}}"
                                                       data-reference-type="serviceCategory">
                                                    <input id="{{$sc->id}}" name="menu_id" type="checkbox" value="{{$sc->id}}">
                                                    {{$sc->name}}
                                                </label>

                                                                
                                            </li>
                                            @endforeach
                                            
                                        </ul>

                                    </ul>
                                    <div class="text-right">
                                        <div class="btn-group btn-group-devided">
                                            <a href="#" class="btn-add-to-menu btn btn-primary">
                                                <span class="text"><i class="fa fa-plus"></i> Thêm vào trình đơn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="widget meta-boxes">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse_blog_categories">
                        <h4 class="widget-title" style="margin-top: 0">
                            <span>Danh mục tin tức</span>
                            <i class="fa fa-angle-down narrow-icon"></i>
                        </h4>
                    </a>
                    <div id="collapse_blog_categories" class="panel-collapse collapse">
                        <div class="widget-body">
                            <div class="box-links-for-menu">
                                <div class="the-box">
                                    <ul class="list-item">
                                        <ul  class="list-item">
                                            @foreach($blogCategories as $bc)
                                            <li>
                                                <label for="" data-title="{{$bc->name}}" data-reference-id="{{$bc->id}}"
                                                       data-reference-type="blogCategory">
                                                    <input id="{{$bc->id}}" name="menu_id" type="checkbox" value="{{$bc->id}}">
                                                    {{$bc->name}}
                                                </label>

                                                                
                                            </li>
                                            @endforeach
                                            
                                        </ul>

                                    </ul>
                                    <div class="text-right">
                                        <div class="btn-group btn-group-devided">
                                            <a href="#" class="btn-add-to-menu btn btn-primary">
                                                <span class="text"><i class="fa fa-plus"></i> Thêm vào trình đơn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="widget meta-boxes">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseCustomLink">
                        <h4 class="widget-title">
                            <span>Liên kết tùy chỉnh</span>
                            <i class="fa fa-angle-down narrow-icon"></i>
                        </h4>
                    </a>
                    <div id="collapseCustomLink" class="panel-collapse collapse">
                        <div class="widget-body">
                            <div class="box-links-for-menu">
                                <div id="external_link" class="the-box">
                                    <div class="node-content">
                                        <div class="form-group">
                                            <label for="node-title">Tiêu đề</label>
                                            <input type="text" class="form-control" id="node-title" autocomplete="false">
                                        </div>
                                        <div class="form-group">
                                            <label for="node-url">URL</label>
                                            <input type="text" class="form-control" id="node-url" placeholder="http://" autocomplete="false">
                                        </div>
                                        <div class="form-group">
                                            <label for="node-icon">Biểu tượng</label>
                                            <input type="text" class="form-control" id="node-icon" placeholder="fa fa-home" autocomplete="false">
                                        </div>
                                        <div class="form-group">
                                            <label for="node-css">CSS class</label>
                                            <input type="text" class="form-control" id="node-css" autocomplete="false">
                                        </div>
                                        <div class="form-group">
                                            <label for="target">Target</label>
                                            <div class="ui-select-wrapper">
                                                <select name="target" class="ui-select" id="target">
                                                    <option value="_self">Mở liên kết trong tab hiện tại</option>
                                                    <option value="_blank">Mở liên kết trong tab mới</option>
                                                </select>
                                                <svg class="svg-next-icon svg-next-icon-size-16">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="text-right form-group node-actions hidden">
                                            <a class="btn red btn-remove" href="#">Xóa</a>
                                            <a class="btn blue btn-cancel" href="#">Hủy bỏ</a>
                                        </div>

                                        <div class="form-group">
                                            <div class="text-right add-button">
                                                <div class="btn-group">
                                                    <a href="#" class="btn-add-to-menu btn btn-primary"><span class="text"><i class="fa fa-plus"></i> Thêm vào trình đơn</span></a>
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
        <div class="col-md-8">
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4>
                        <span>Cấu trúc trình đơn</span>
                    </h4>
                </div>
                <div class="widget-body">
                    <div class="dd nestable-menu" id="nestable" data-depth="0">
                        <ol class="dd-list">
                            @foreach($menus as $menu)
                            <li class="dd-item dd3-item " data-reference-type="{{$menu->type}}"
                            data-reference-id="{{$menu->type_id}}" data-title="{{$menu->title}}"
                            data-class="" data-id="{{$menu->id}}" data-custom-url="{{$menu->url}}"
                            data-icon-font="{{$menu->icon}}" data-target="{{$menu->target}}">
                                <div class="dd-handle dd3-handle"></div>
                                <div class="dd3-content">
                                    <span class="text float-left" data-update="title">{{$menu->title}}</span>
                                    <span class="text float-right">{{$menu->type}}</span>
                                    <a href="#" title="" class="show-item-details"><i class="fa fa-angle-down"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="item-details">
                                    <label class="pad-bot-5">
                                        <span class="text pad-top-5 dis-inline-block" data-update="title">Tiêu đề</span>
                                        <input type="text" name="title" value="{{$menu->title}}"
                                               data-old="{{$menu->title}}">
                                    </label>
                                                        <label class="pad-bot-5 dis-inline-block">
                                            <span class="text pad-top-5" data-update="custom-url">URL</span>
                                            <input type="text" name="custom-url" value="{{$menu->url}}" data-old="{{$menu->url}}">
                                        </label>
                                                    <label class="pad-bot-5 dis-inline-block">
                                        <span class="text pad-top-5" data-update="icon-font">Biểu tượng</span>
                                        <input type="text" name="icon-font" value="{{$menu->icon}}" data-old="{{$menu->icon}}">
                                    </label>
                                    <label class="pad-bot-10">
                                        <span class="text pad-top-5 dis-inline-block">CSS class</span>
                                        <input type="text" name="class" value="" data-old="">
                                    </label>
                                    <label class="pad-bot-10">
                                        <span class="text pad-top-5 dis-inline-block">Target</span>
                                        <div style="width: 228px; display: inline-block">
                                            <div class="ui-select-wrapper">
                                                @if($menu->target == '_self')
                                                    <select name="target" class="ui-select" id="target" data-old="_self">
                                                        <option value="_self"  selected="selected" >Mở liên kết trong tab hiện tại
                                                        </option>
                                                        <option value="_blank" >Mở liên kết trong tab mới
                                                        </option>
                                                    </select>
                                                @else
                                                    <select name="target" class="ui-select" id="target" data-old="_blank">
                                                        <option value="_self" >Mở liên kết trong tab hiện tại
                                                        </option>
                                                        <option value="_blank" selected="selected" >Mở liên kết trong tab mới
                                                        </option>
                                                    </select>
                                                @endif
                                                <svg class="svg-next-icon svg-next-icon-size-16">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </label>
                                    <div class="clearfix"></div>
                                    <div class="text-right" style="margin-top: 5px">
                                        <a href="#" class="btn btn-danger btn-remove btn-sm">Xóa</a>
                                        <a href="#" class="btn btn-primary btn-cancel btn-sm">Hủy bỏ</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                @php
                                    $menus_c = App\Menu::where('parent_id',$menu->id)->orderBy('stt','ASC')->get();
                                @endphp
                                @if(count($menus_c) !=0)
                                    <ol class="dd-list">
                                        @foreach($menus_c as $menu_c)
                                            <li class="dd-item dd3-item " data-reference-type="{{$menu_c->type}}" data-reference-id="{{$menu_c->type_id}}" data-title="{{$menu_c->title}}" data-class="" data-id="{{$menu_c->id}}" data-custom-url="{{$menu_c->url}}" data-icon-font="{{$menu_c->icon}}" data-target="{{$menu_c->target}}">
                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">
                                                    <span class="text float-left" data-update="title">{{$menu_c->title}}</span>
                                                    <span class="text float-right">{{$menu_c->type}}</span>
                                                    <a href="#" title="" class="show-item-details"><i class="fa fa-angle-down"></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="item-details">
                                                    <label class="pad-bot-5">
                                                        <span class="text pad-top-5 dis-inline-block" data-update="title">Tiêu đề</span>
                                                        <input type="text" name="title" value="{{$menu_c->title}}"
                                                               data-old="{{$menu_c->title}}">
                                                    </label>
                                                                        <label class="pad-bot-5 dis-inline-block">
                                                            <span class="text pad-top-5" data-update="custom-url">URL</span>
                                                            <input type="text" name="custom-url" value="{{$menu_c->url}}" data-old="{{$menu_c->url}}">
                                                        </label>
                                                                    <label class="pad-bot-5 dis-inline-block">
                                                        <span class="text pad-top-5" data-update="icon-font">Biểu tượng</span>
                                                        <input type="text" name="icon-font" value="{{$menu_c->icon}}" data-old="{{$menu_c->icon}}">
                                                    </label>
                                                    <label class="pad-bot-10">
                                                        <span class="text pad-top-5 dis-inline-block">CSS class</span>
                                                        <input type="text" name="class" value="" data-old="">
                                                    </label>
                                                    <label class="pad-bot-10">
                                                        <span class="text pad-top-5 dis-inline-block">Target</span>
                                                        <div style="width: 228px; display: inline-block">
                                                            <div class="ui-select-wrapper">
                                                                @if($menu_c->target == '_self')
                                                                    <select name="target" class="ui-select" id="target" data-old="_self">
                                                                        <option value="_self"  selected="selected" >Mở liên kết trong tab hiện tại
                                                                        </option>
                                                                        <option value="_blank" >Mở liên kết trong tab mới
                                                                        </option>
                                                                    </select>
                                                                @else
                                                                    <select name="target" class="ui-select" id="target" data-old="_blank">
                                                                        <option value="_self" >Mở liên kết trong tab hiện tại
                                                                        </option>
                                                                        <option value="_blank" selected="selected" >Mở liên kết trong tab mới
                                                                        </option>
                                                                    </select>
                                                                @endif
                                                                <svg class="svg-next-icon svg-next-icon-size-16">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <div class="clearfix"></div>
                                                    <div class="text-right" style="margin-top: 5px">
                                                        <a href="#" class="btn btn-danger btn-remove btn-sm">Xóa</a>
                                                        <a href="#" class="btn btn-primary btn-cancel btn-sm">Hủy bỏ</a>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                @php
                                                    $menus_cc = App\Menu::where('parent_id',$menu_c->id)->orderBy('stt','ASC')->get();
                                                @endphp
                                                @if(count($menus_cc) !=0)
                                                    <ol class="dd-list">
                                                        @foreach($menus_cc as $menu_cc)
                                                            <li class="dd-item dd3-item " data-reference-type="{{$menu_cc->type}}" data-reference-id="{{$menu_cc->type_id}}" data-title="{{$menu_cc->title}}" data-class="" data-id="{{$menu_cc->id}}" data-custom-url="{{$menu_cc->url}}" data-icon-font="{{$menu_cc->icon}}" data-target="{{$menu_cc->target}}">
                                                                <div class="dd-handle dd3-handle"></div>
                                                                <div class="dd3-content">
                                                                    <span class="text float-left" data-update="title">{{$menu_cc->title}}</span>
                                                                    <span class="text float-right">{{$menu_cc->type}}</span>
                                                                    <a href="#" title="" class="show-item-details"><i class="fa fa-angle-down"></i></a>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="item-details">
                                                                    <label class="pad-bot-5">
                                                                        <span class="text pad-top-5 dis-inline-block" data-update="title">Tiêu đề</span>
                                                                        <input type="text" name="title" value="{{$menu_cc->title}}"
                                                                               data-old="{{$menu_cc->title}}">
                                                                    </label>
                                                                                        <label class="pad-bot-5 dis-inline-block">
                                                                            <span class="text pad-top-5" data-update="custom-url">URL</span>
                                                                            <input type="text" name="custom-url" value="{{$menu_cc->url}}" data-old="{{$menu_cc->url}}">
                                                                        </label>
                                                                                    <label class="pad-bot-5 dis-inline-block">
                                                                        <span class="text pad-top-5" data-update="icon-font">Biểu tượng</span>
                                                                        <input type="text" name="icon-font" value="{{$menu_cc->icon}}" data-old="{{$menu_cc->icon}}">
                                                                    </label>
                                                                    <label class="pad-bot-10">
                                                                        <span class="text pad-top-5 dis-inline-block">CSS class</span>
                                                                        <input type="text" name="class" value="" data-old="">
                                                                    </label>
                                                                    <label class="pad-bot-10">
                                                                        <span class="text pad-top-5 dis-inline-block">Target</span>
                                                                        <div style="width: 228px; display: inline-block">
                                                                            <div class="ui-select-wrapper">
                                                                                @if($menu_cc->target == '_self')
                                                                                    <select name="target" class="ui-select" id="target" data-old="_self">
                                                                                        <option value="_self"  selected="selected" >Mở liên kết trong tab hiện tại
                                                                                        </option>
                                                                                        <option value="_blank" >Mở liên kết trong tab mới
                                                                                        </option>
                                                                                    </select>
                                                                                @else
                                                                                    <select name="target" class="ui-select" id="target" data-old="_blank">
                                                                                        <option value="_self" >Mở liên kết trong tab hiện tại
                                                                                        </option>
                                                                                        <option value="_blank" selected="selected" >Mở liên kết trong tab mới
                                                                                        </option>
                                                                                    </select>
                                                                                @endif
                                                                                <svg class="svg-next-icon svg-next-icon-size-16">
                                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                    <div class="clearfix"></div>
                                                                    <div class="text-right" style="margin-top: 5px">
                                                                        <a href="#" class="btn btn-danger btn-remove btn-sm">Xóa</a>
                                                                        <a href="#" class="btn btn-primary btn-cancel btn-sm">Hủy bỏ</a>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </li>
                                                        @endforeach
                                                    </ol>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ol>
                                @endif
                            </li>
                            @endforeach
            
                            

                        </ol>

                    </div>
                                            <hr>
                        <h3>Menu settings</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <p><i>Display location</i></p>
                            </div>
                            <div class="col-md-8">
                                                                    <div>
                                        <input type="checkbox"  checked  class="hrv-checkbox" name="locations[]" value="main-menu" id="menu_location_main-menu">
                                        <label for="menu_location_main-menu">Main Navigation</label>
                                    </div>
                                                            </div>
                        </div>
                                    </div>
            </div>
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
                        <button type="button" name="submit" value="save" class="btn btn-info save-menu">
                <i class="fa fa-save"></i> Lưu &amp; cập nhật
            </button>
                            &nbsp;
            
                    </div>
    </div>
</div>
<div id="waypoint"></div>
<div class="form-actions form-actions-fixed-top hidden">
    <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>
        <li class="breadcrumb-item active">Sửa menu</li>
    
    </ol>


    <div class="btn-set">
                <button type="button" name="submit" value="save" class="btn btn-info save-menu">
            <i class="fa fa-save"></i> Lưu &amp; cập nhật
        </button>
                    &nbsp;
            
            </div>
</div>

            
                                                <div class="widget meta-boxes">
                        <div class="widget-title">
                            <h4><label for="status" class="control-label required">Trạng th&aacute;i</label></h4>
                        </div>
                        <div class="widget-body">
                            <div class="ui-select-wrapper">
        <select class="form-control ui-select ui-select" id="status" name="status"><option value="published" selected="selected">Xuất bản</option><option value="draft">Bản nháp</option><option value="pending">Đang chờ xử lý</option></select>
    <svg class="svg-next-icon svg-next-icon-size-16">
        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#select-chevron"></use>
    </svg>
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
    <script src="{{asset('js/admin/jquery.nestable.js')}}"></script>
    <script src="{{asset('js/admin/menu.js')}}"></script>
    <script type="text/javascript">
    $(document).on('click', '.save-menu', function(event) {
        event.preventDefault();

        // xóa menu 
        var items = $(".dd-item");
        var items_id = new Array();
        var x=0;
        items.each(function(){
            var id_item = $(this).attr("data-id");
            if(id_item == 0){

            }
            else{
                items_id[x] = id_item;
                x++;
            }
        });
        var url_delete_item = '/admin/menu/delete/'+items_id;
        $.ajax({
          type: "GET",
          url: url_delete_item,
          data: items_id,
          success: function(data){

          }
        });
        // end xóa menu

        var menu = $(".nestable-menu");
        var ol = menu.children("ol");
        var li = ol.children("li");
        var i =0;
        
        li.each(function(){
            var item = $(this);
            var data_id = $(this).attr("data-id");
            var data_reference_type = $(this).attr("data-reference-type");
            var data_reference_id = $(this).attr("data-reference-id");
            var data_title=$(this).attr("data-title");
            var data_custom_url=$(this).attr("data-custom-url");
            var data_icon_font=$(this).attr("data-icon-font");
            var data_target=$(this).attr("data-target");
            var url = '/admin/menu/update?data_id='+data_id+'&data_reference_type='+data_reference_type+'&data_reference_id='+data_reference_id+'&data_title='+data_title+'&data_custom_url='+data_custom_url+'&data_icon_font='+data_icon_font+'&data_target='+data_target+'&data_stt='+i+'&data_parent_id=';
            i++;
            $.ajax({
              type: "GET",
              url: url,
              dataType: 'html',
              success: function(data){
                var ol = item.children("ol");
                var li = ol.children("li");
                var i=0;
                li.each(function(){
                    var item = $(this);
                    var data_id = $(this).attr("data-id");
                    var data_reference_type = $(this).attr("data-reference-type");
                    var data_reference_id = $(this).attr("data-reference-id");
                    var data_title=$(this).attr("data-title");
                    var data_custom_url=$(this).attr("data-custom-url");
                    var data_icon_font=$(this).attr("data-icon-font");
                    var data_target=$(this).attr("data-target");
                    var url = '/admin/menu/update?data_id='+data_id+'&data_reference_type='+data_reference_type+'&data_reference_id='+data_reference_id+'&data_title='+data_title+'&data_custom_url='+data_custom_url+'&data_icon_font='+data_icon_font+'&data_target='+data_target+'&data_stt='+i+'&data_parent_id='+data;
                    i++;
                    $.ajax({
                      type: "GET",
                      url: url,
                      dataType: 'html',
                      success: function(data){
                        var ol = item.children("ol");
                        var li = ol.children("li");
                        var i=0;
                        li.each(function(){
                            var item = $(this);
                            var data_id = $(this).attr("data-id");
                            var data_reference_type = $(this).attr("data-reference-type");
                            var data_reference_id = $(this).attr("data-reference-id");
                            var data_title=$(this).attr("data-title");
                            var data_custom_url=$(this).attr("data-custom-url");
                            var data_icon_font=$(this).attr("data-icon-font");
                            var data_target=$(this).attr("data-target");
                            var url = '/admin/menu/update?data_id='+data_id+'&data_reference_type='+data_reference_type+'&data_reference_id='+data_reference_id+'&data_title='+data_title+'&data_custom_url='+data_custom_url+'&data_icon_font='+data_icon_font+'&data_target='+data_target+'&data_stt='+i+'&data_parent_id='+data;
                            i++;
                            console.log(url);
                            $.ajax({
                              type: "GET",
                              url: url,
                              dataType: 'html',
                              success: function(data){
                                
                                

                              }
                            });

                        });
                        
                        
                      }
                    });

                });
                
                
              }
            });
        });
        var html = '<div class="note note-success"><p>Cập nhật menu thành công</p></div>'
        $(".tb").append(html);
        $(".tb").delay(3000).slideUp();
        setTimeout(function(){location.reload()}, 3000);

    });
    </script>
@endsection