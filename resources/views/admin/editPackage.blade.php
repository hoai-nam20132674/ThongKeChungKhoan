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
    <style type="text/css">
        .pttt a.active {
            background:#d40000;
        }
        #khoi p {
            font-size: 15px;
            font-weight: 800;
        }
        #khoi h4 {
            font-size: 25px;
        }
        #can h4 {
            font-size: 25px;
        }
        #can p {
            font-size: 15px;
            font-weight: 800;
        }
    </style>
@endsection
@section('content')
	<div class="page-content ">
                    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>
                            <li class="breadcrumb-item"><a href="{{URL::route('editSack',$sack->id)}}">Bao hàng {{$sack->ma}}</a></li>
                            <li class="breadcrumb-item active">Sửa kiện hàng {{$package->ma}}</li>
            
            </ol>


                    <div class="clearfix"></div>
                    <div id="main">
                        <form method="POST" action="{{URL::route('postEditPackage',$package->id)}}" enctype="multipart/form-data" accept-charset="UTF-8" id="form_1aa3f76ebce588e61c3b18ff42edfa1a">
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
                                <label for="ma" class="control-label required">Mã kiện</label>
                                <input class="form-control" disabled placeholder="Nhập mã kiện" value="{{$package->ma}}" name="ma" type="text" id="ma">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="mvd" class="control-label required">Mã vận đơn</label>
                                <input class="form-control" placeholder="Nhập mã vận đơn" value="{{$package->mvd}}" name="mvd" required type="text" id="mvd">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="sack_ma" class="control-label required">Mã Bao</label>
                                <input disabled class="form-control" placeholder="Nhập mã bao" value="{{$sack->ma}}" name="sack_ma" type="text" id="sack_ma">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="sl" class="control-label required">Số lượng kiện</label>
                                <input class="form-control" placeholder="Nhập số lượng kiện" value="{{$package->sl}}" name="sl" required type="number" min="1" id="sl">
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <div class="row">
                <div class="col-md-3" style="">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="name" class="control-label required">Họ tên khách hàng</label>
                                <input class="form-control" placeholder="Nhập họ tên" value="{{$package->name}}" name="name" type="text" required id="name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="phone" class="control-label required">Số điện thoại</label>
                                <input class="form-control" data-counter="10" placeholder="Nhập số điện thoại" value="{{$package->phone}}" name="phone" type="number" required id="phone">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="kkc" class="control-label">Kho khách chọn</label>
                                <input class="form-control" placeholder="Nhập kho khách chọn" value="{{$package->kkc}}" name="kkc" type="text" id="kkc">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="message" class="control-label">Ghi chú</label>
                                <input class="form-control" placeholder="Nhập kho khách chọn" value="{{$package->message}}" name="message" type="text" id="message">
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
                                <label for="mhx" class="control-label">Mua hàng xong</label>
                                <input class="form-control" placeholder="Thời gian mua hàng xong" value="{{$package->mhx}}" name="mhx" type="datetime-local" id="mhx">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="stqph" class="control-label">Shop Trung Quốc phát hàng</label>
                                <input class="form-control" placeholder="Thời gian shop phát hàng" value="{{$package->stqph}}" name="stqph" type="datetime-local" id="stqph">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="ktqnh" class="control-label">Kho Trung Quốc nhận hàng</label>
                                <input class="form-control" placeholder="Thời gian về kho TQ" value="{{$package->ktqnh}}" name="ktqnh" type="datetime-local" id="ktqnh">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="xktq" class="control-label">Xuất kho Trung Quốc</label>
                                <input class="form-control" placeholder="Thời gian xuất kho TQ" value="{{$package->xktq}}" name="xktq" type="datetime-local" id="xktq">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="tkvn" class="control-label">Trong kho Việt Nam</label>
                                <input class="form-control" placeholder="Thời gian về kho VN" value="{{$package->tkvn}}" name="tkvn" type="datetime-local" id="tkvn">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="dth" class="control-label">Đã trả hàng</label>
                                <input class="form-control" placeholder="Thời gian trả hàng" value="{{$package->dth}}" name="dth" type="datetime-local" id="dth">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3" style="">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="dai" class="control-label ">Dài (đơn vị cm)</label>
                                <input class="form-control" placeholder="Nhập kích thước dài" oninput="replaceValueInteger('dai');" value="{{$package->dai}}" name="dai" type="text" id="dai">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="rong" class="control-label ">Rộng (đơn vị cm)</label>
                                <input class="form-control" placeholder="Nhập kích thước rộng" oninput="replaceValueInteger('rong')" value="{{$package->rong}}" name="rong" type="text" id="rong">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="cao" class="control-label ">Cao (đơn vị cm)</label>
                                <input class="form-control" placeholder="Nhập kích thước cao" oninput="replaceValueInteger('cao')" value="{{$package->cao}}" name="cao" type="text" id="cao">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="cnqd" class="control-label">Thể tích (mét khối)</label>
                                <input class="form-control" placeholder="" oninput="replaceValueInteger('cnqd')" value="{{$package->cnqd}}" name="cnqd" type="text" id="cnqd">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3" style="">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="cannang" class="control-label">Cân nặng (đơn vị gram)</label>
                                <input class="form-control" placeholder="Nhập cân nặng" oninput="replaceValueInteger('cannang')" value="{{$package->cannang}}" name="cannang" type="text" id="cannang">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="dongiacan" class="control-label">Đơn giá theo cân (VNĐ)</label>
                                <input class="form-control" placeholder="Nhập đơn giá cân" oninput="replaceValueInteger('dongiacan')" value="{{$package->dongiacan}}" name="dongiacan" type="text" id="dongiacan">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="dongiakhoi" class="control-label">Đơn giá theo m&sup3; (VNĐ)</label>
                                <input class="form-control" placeholder="Nhập đơn giá khối" oninput="replaceValueInteger('dongiakhoi')" value="{{$package->dongiakhoi}}" name="dongiakhoi" type="text" id="dongiakhoi">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="display: none;">
                    <div class="main-form">
                        <div class="form-body">
                            <div class="form-group">
                                <label for="price" class="control-label">Tổng tiền (VNĐ)</label>
                                <input class="form-control" value="{{$package->price}}" name="price" type="number" id="price">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4><label for="properties[]" class="control-label required" aria-required="true">TỔNG TIỀN</label></h4>
                </div>
                <div class="widget-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 text-center">
                                <ul class="nav nav-tabs" style="display: inline-flex;">
                                  <li class="pttt can" style="margin-right: 10px"><a class="badge badge-success" data-toggle="tab" href="#can">TÍNH TIỀN THEO CÂN</a></li>
                                  <li class="pttt khoi"><a class="badge badge-success" data-toggle="tab" href="#khoi">TÍNH TIỀN THEO KHỐI</a></li>
                                </ul>

                                <div class="tab-content">
                                  <div id="can" class="tab-pane">
                                    
                                  </div>
                                  <div id="khoi" class="tab-pane">
                                    
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
            <li class="breadcrumb-item"><a href="{{URL::route('editSack',$sack->id)}}">Bao hàng {{$sack->ma}}</a></li>
            <li class="breadcrumb-item active">Sửa kiện hàng {{$package->ma}}</li>
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
                                                    $ppids = App\PPID::where('package_id',$package->id)->get();
                                                    
                                                @endphp
                                                @foreach($properties as $pp)
                                                    @php
                                                        $j=0;
                                                    @endphp
                                                    @foreach($ppids as $ppid)
                                                        @if($pp->id == $ppid->properties_id)
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
                    <div class="widget meta-boxes">
                        <div class="widget-title">
                            <h4><label for="status" class="control-label required">Trạng th&aacute;i</label></h4>
                        </div>
                        <div class="widget-body">
                            <div class="ui-select-wrapper">
                                <select class="form-control ui-select ui-select" id="status" name="status">
                                    <option value="{{$package->status}}">{{$package->status}}</option>
                                    @foreach($status as $stt)
                                        <option value="{{$stt->name}}">{{$stt->name}}</option>
                                    @endforeach
                                </select>
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
    <script src="{{asset('js/admin/slug.js')}}"></script>
    <script src="{{asset('js/admin/seo-helper.js')}}"></script>
    <script src="{{asset('js/admin/upload-image.js')}}"></script>
    <script type="text/javascript">

        // format number
        function addCommas(nStr)
        {
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            return x1 + x2;
        }
        // end format number
        function tinhthetich(){
            var dai = $('input[name="dai"]').val().replace(/\D/g,'');
            var rong = $('input[name="rong"]').val().replace(/\D/g,'');
            var cao = $('input[name="cao"]').val().replace(/\D/g,'');
            var thetich = (dai*rong*cao)/1000000;
            var cao = $('input[name="cnqd"]').val(thetich);
            return thetich;
        }
        function tinhtien(){
            var thetich = tinhthetich();
            var cannang = $('input[name="cannang"]').val().replace(/\D/g,'');
            var dongiacan = $('input[name="dongiacan"]').val().replace(/\D/g,'');
            var dongiakhoi = $('input[name="dongiakhoi"]').val().replace(/\D/g,'');
            var tiencan = parseInt((cannang*dongiacan)/1000);
            var tienkhoi = parseInt(thetich*dongiakhoi);
            if(tienkhoi>tiencan){
                $('.khoi').addClass('active');
                $('.khoi').children('a').addClass('active');
                $('#khoi').addClass('active');
                $('.can').removeClass('active');
                $('.can').children('a').removeClass('active');
                $('#can').removeClass('active');
                $('input[name="price"]').val(tienkhoi);
                $('input[name="price"]').attr('value',tienkhoi);
                tiencan = addCommas(tiencan);
                tienkhoi = addCommas(tienkhoi);
                var htmlcan = '<h4>TÍNH TIỀN THEO CÂN</h4><p>Tổng tiền: <span class="" style="font-size:15px; font-weight:800; background:#d40000; border-radius: 15px; padding:3px; color:#fff;">'+tiencan+' VNĐ</span></p>';
                var htmlkhoi = '<h4>TÍNH TIỀN THEO KHỐI</h4><p>Tổng tiền: <span class="" style="font-size:15px; font-weight:800; background:#d40000; border-radius: 15px; padding:3px; color:#fff;">'+tienkhoi+' VNĐ</span></p>';
                $('#can').html(htmlcan);
                $('#khoi').html(htmlkhoi);
                console.log(tiencan);
                console.log(tienkhoi);
            }
            else{
                $('.can').addClass('active');
                $('.can').children('a').addClass('active');
                $('#can').addClass('active');
                $('.khoi').removeClass('active');
                $('.khoi').children('a').removeClass('active');
                $('#khoi').removeClass('active');
                $('input[name="price"]').val(tiencan);
                $('input[name="price"]').attr('value',tiencan);
                tiencan = addCommas(tiencan);
                tienkhoi = addCommas(tienkhoi);
                var htmlcan = '<h4>TÍNH TIỀN THEO CÂN</h4><p>Tổng tiền: <span class="" style="font-size:15px; font-weight:800; background:#d40000; border-radius: 15px; padding:3px; color:#fff;">'+tiencan+' VNĐ</span></p>';
                var htmlkhoi = '<h4>TÍNH TIỀN THEO KHỐI</h4><p>Tổng tiền: <span class="" style="font-size:15px; font-weight:800; background:#d40000; border-radius: 15px; padding:3px; color:#fff;">'+tienkhoi+' VNĐ</span></p>';
                $('#can').html(htmlcan);
                $('#khoi').html(htmlkhoi);
                console.log(tiencan);
                console.log(tienkhoi);
            }
        }
        function replaceValueInteger(name){
            
            var value = $('input[name="'+name+'"]').val();
            value = value.replace(/\D/g,'');
            value = addCommas(value);
            $('input[name="'+name+'"]').val(value);
            if(name == 'dai' || name == 'rong' || name == 'cao' || name == 'cannang'){
                tinhthetich();
                tinhtien();
            }
            else if(name == 'dongiacan' || name == 'dongiakhoi'){
                tinhtien();
            }
            else{

            }
        }


        function replaceValue(name){
            var value = $('input[name="'+name+'"]').attr('value');
            value = value.replace(" ", "T");
            $('input[name="'+name+'"]').attr('value',value);
        }
        
        replaceValue('mhx');
        replaceValue('stqph');
        replaceValue('ktqnh');
        replaceValue('xktq');
        replaceValue('tkvn');
        replaceValue('dth');
        replaceValueInteger('dai');
        replaceValueInteger('rong');
        replaceValueInteger('cao');
        replaceValueInteger('cannang');
        replaceValueInteger('dongiacan');
        replaceValueInteger('dongiakhoi');
        
    </script>
@endsection