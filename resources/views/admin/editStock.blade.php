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
                            <li class="breadcrumb-item"><a href="{{URL::route('stocks')}}">Danh sách mã chứng khoán</a></li>
                            <li class="breadcrumb-item active">Sửa mã chứng khoán {{$stock->ma}}</li>
            
            </ol>


                    <div class="clearfix"></div>
                    <div id="main">
                        <form method="POST" action="{{URL::route('postEditStock',$stock->id)}}" enctype="multipart/form-data" accept-charset="UTF-8" id="form_1aa3f76ebce588e61c3b18ff42edfa1a">
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
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4><label for="ma" class="control-label required" aria-required="true">Mã chứng khoán</label></h4>
                </div>
                <div class="widget-body">
                    <div class="col-md-12">
                        <div class="form-group"  >
                            <input class="form-control" placeholder="Nhập mã chứng khoán" name="ma" value="{{$stock->ma}}" required type="text" id="ma">
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4><label for="tg" class="control-label required" aria-required="true">Thời gian</label></h4>
                </div>
                <div class="widget-body">
                    <div class="col-md-12">
                        <div class="form-group"  >
                            <input class="form-control" placeholder="Nhập mã lấy dữ liệu" name="tg" value="{{$stock->tg}}" type="text" id="tg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4><label for="tc" class="control-label required" aria-required="true">Tham chiếu</label></h4>
                </div>
                <div class="widget-body">
                    <div class="col-md-12">
                        <div class="form-group"  >
                            <input class="form-control" placeholder="Nhập mã lấy dữ liệu" name="tc" value="{{$stock->tc}}" type="text" id="tc">
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4><label for="gt" class="control-label required" aria-required="true">Giá trần</label></h4>
                </div>
                <div class="widget-body">
                    <div class="col-md-12">
                        <div class="form-group"  >
                            <input class="form-control" placeholder="Nhập mã lấy dữ liệu" name="gt" value="{{$stock->gt}}" type="text" id="gt">
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4><label for="gs" class="control-label required" aria-required="true">Giá sàn</label></h4>
                </div>
                <div class="widget-body">
                    <div class="col-md-12">
                        <div class="form-group"  >
                            <input class="form-control" placeholder="Nhập mã lấy dữ liệu" name="gs" value="{{$stock->gs}}" type="text" id="gs">
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4><label for="g" class="control-label required" aria-required="true">Giá trị / biến động +/- (%)</label></h4>
                </div>
                <div class="widget-body">
                    <div class="col-md-12">
                        <div class="form-group"  >
                            <input class="form-control" placeholder="Nhập mã lấy dữ liệu" name="g" value="{{$stock->g}}" type="text" id="g">
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4><label for="kll" class="control-label required" aria-required="true">Khối lượng lô</label></h4>
                </div>
                <div class="widget-body">
                    <div class="col-md-12">
                        <div class="form-group"  >
                            <input class="form-control" placeholder="Nhập mã lấy dữ liệu" name="kll" value="{{$stock->kll}}" type="text" id="kll">
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4><label for="tkl_old" class="control-label required" aria-required="true">Tổng khối lượng hôm qua</label></h4>
                </div>
                <div class="widget-body">
                    <div class="col-md-12">
                        <div class="form-group"  >
                            <input class="form-control" placeholder="Nhập mã lấy dữ liệu" name="tkl_old" value="{{$stock->tkl_old}}" type="text" id="tkl_old">
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4><label for="tkl" class="control-label required" aria-required="true">Tổng khối lượng hôm nay</label></h4>
                </div>
                <div class="widget-body">
                    <div class="col-md-12">
                        <div class="form-group"  >
                            <input class="form-control" placeholder="Nhập mã lấy dữ liệu" name="tkl" value="{{$stock->tkl}}" type="text" id="tkl">
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget meta-boxes">
                <div class="widget-title">
                    <h4><label for="tb10" class="control-label required" aria-required="true">Trung bình 10 phiên</label></h4>
                </div>
                <div class="widget-body">
                    <div class="col-md-12">
                        <div class="form-group"  >
                            <input class="form-control" placeholder="Nhập mã lấy dữ liệu" name="tb10" value="{{$stock->tb10}}" type="text" id="tb10">
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
            <li class="breadcrumb-item"><a href="{{URL::route('stocks')}}">Danh sách mã chứng khoán</a></li>
            <li class="breadcrumb-item active">Sửa mã chứng khoán {{$stock->ma}}</li>
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
                            <h4><label for="properties[]" class="control-label required" aria-required="true">Sàn chứng khoán</label></h4>
                        </div>
                        <div class="widget-body">
                            <div class="form-group form-group-no-margin ">
                                <div class="multi-choices-widget list-item-checkbox mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible; padding: 0px;">
                                    <div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical_horizontal mCSB_outside" tabindex="0" style="max-height: 320px;">
                                        <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y mCS_x_hidden mCS_no_scrollbar_x" style="position: relative; top: 0px; left: 0px; width: 343.5px;" dir="ltr">
                                            <ul>
                                                @php
                                                    $ssids = App\SSID::where('stock_id',$stock->id)->get();
                                                    
                                                @endphp
                                                @foreach($ses as $se)
                                                    @php
                                                        $j=0;
                                                    @endphp
                                                    @foreach($ssids as $ssid)
                                                        @if($se->id == $ssid->se_id)
                                                            @php
                                                                $j=1;
                                                            @endphp
                                                            @break
                                                        @else
                                                        @endif

                                                    @endforeach

                                                    @if($j==1)
                                                        <li value="{{$se->id}}">
                                                            <label>
                                                                <input type="checkbox" checked value="{{$se->id}}" name="ses[]">
                                                                {{$se->name}}
                                                            </label>
                                                        </li>
                                                    @else
                                                        <li value="{{$se->id}}">
                                                            <label>
                                                                <input type="checkbox" value="{{$se->id}}" name="ses[]">
                                                                {{$se->name}}
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
                                    
                                    @if($stock->status == 1 )
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Không hiển thị</option>
                                    @else
                                        <option value="0">Không hiển thị</option>
                                        <option value="1">Hiển thị</option>
                                        
                                    @endif
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