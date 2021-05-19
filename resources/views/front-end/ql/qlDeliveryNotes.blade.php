@extends('front-end.ql.layout.default')
@section('head')
	<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Danh s&aacute;ch kiện h&agrave;ng</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" href="" type="image/x-icon">

        <!-- Data table CSS -->
        <link href="{{asset('css/ql/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Select2 -->

        <link href="{{asset('css/ql/select2.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/ql/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/ql/nprogress.css')}}">
        <!-- Custom CSS -->
        <link href="{{asset('css/ql/bootstrap-datepicker3.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/ql/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('css/ql/bootstrap-editable.css')}}" rel="stylesheet" />
        <link href="{{asset('css/ql/style.css?ver=2')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/ql/jquery.fancybox.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/ql/f-style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/ql/f-notification.css')}}">
           <style>
          .table td {
             
          }
       </style>
    <style type="text/css">
        .no-pd-colxs12 > .col-xs-12 {
            padding: 0;
        }
        .js-copytextarea {
            border: none;
            outline: none;
            resize: none;
            padding: 0;
            background: inherit;
        }
    </style>
    </head>
@endsection
@section('content')
  @php
    $items = $dns;
  @endphp
	<!-- Main Content -->
        <div class="page-wrapper" style="overflow: hidden;">
            <div class="container-fluid" style="overflow: hidden;">
                <div class="row" style="overflow: hidden;">
                    <div class="">
                        <div class="panel panel-default card-view card-gray-view" style="padding-top: 0px;">
                                                        <div class="panel-wrapper">
                                <div class="panel-body">
                                    
                                    <span class="clearfix"></span>
                                    <div class="no-pd-colxs12">
                                          <section class="col-xs-12">
    <header class="card-view">
      <h5 class="border-text">Danh s&aacute;ch phiếu xuất kho</h5>

      <form style="display: none;" id='to-nav' method="get" action="" class="mgb-20 mt-20 row form-filter form-inline search">
        <input type="hidden" name="cu_payment" value="">
        <div class="col-xs-12">
          <div class='col-xs-6 col-md-2 form-item form-group'>
            <input type="text" class="form-control datepicker" name='from' value="1-6-2018" placeholder='Từ ngày' rel='tooltip' title='Từ ngày'>
          </div>

          <div class='col-xs-6 col-md-2 form-item form-group'>
            <input type="text" class="form-control datepicker" name='to' value="09-05-2021" placeholder='Tới ngày' rel='tooltip' title='Tới ngày'>
          </div>
        </div>
        <div class="col-sm-12">
          <div class='col-md-2 form-item form-group'>
            <input type="text" class="form-control" name='cu_id' value="" placeholder='Mã phiếu' rel='tooltip' title='Mã phiếu'>
          </div>
          <div class='col-md-2 form-item form-group'>
            <input type="text" class="form-control" name='order_id' value="" placeholder='Mã đơn hàng' rel='tooltip' title='Mã đơn hàng'>
          </div>
          <div class='form-item form-group'>
            <input type="text" class="form-control" name='lading_code' value="" placeholder='Mã vận đơn' rel='tooltip' title='Mã vận đơn'>
          </div>
          <div class="col-md-2 form-group form-item" rel='tooltip' title="Kho xuất phiếu">
            <select name="cu_warehouse_id"  style="display:block" class="btn-flat form-control">
                <option value="-1">-Kho xuất phiếu-</option>
                              <option  value="1">Ph&uacute; Đ&ocirc; H&agrave; Nội</option>
                              <option  value="4">Kho HCM</option>
                          </select>
          </div>
          <div class="col-xs-6 col-md-2 form-group form-item" rel='tooltip' title="Trạng thái phiếu">
            <select name="cu_status"  style="display:block" class="btn-flat form-control">
                <option value="-1">-Trạng thái-</option>
                              <option  value="0">Đang lưu</option>
                              <option  value="4">Chờ kế to&aacute;n duyệt</option>
                              <option  value="3">Đang giao</option>
                              <option  value="1">Đ&atilde; trả h&agrave;ng</option>
                              <option  value="2">Đ&atilde; hủy</option>
                          </select>
          </div>
          <div class="col-xs-12 col-md-2 form-item form-group">
            <button id="btnSearch" type="submit" class="btn btn-primary">
              <i class="fa fa-filter"></i>
            </button>
            <button rel='tooltip' title="Xuất excel" name="excel" type="submit" value="1" class="btn btn-success">
              <i class="fa fa-file-excel-o"></i>
            </button>
          </div>
        </div>
      </form>
    </header>
    <div class="card-view">

      <div class="row-fluid">
        <div class="span6">
        @if($request->page =='')
          
          <div class="dataTables_info">Đang hiển thị <b>1 đến 15</b> trong tổng số <b>{{$count}}</b> bản ghi.</div>
        @else
          
          <div class="dataTables_info">Đang hiển thị <b>{{($request->page - 1)*15 + 1}} đến {{($request->page)*15}}</b> trong tổng số <b>{{$count}}</b> bản ghi.</div>
        @endif
        
    </div>
    
    <div class="span6">
      <div class="dataTables_paginate paging_bootstrap pagination">
        <ul class="pagination">
          @if($items->currentPage() != 1)
            <li class="" aria-disabled="false"><a href="{{$items->url($items->currentPage()-1)}}">&laquo; Trước</a></li>
          @else
            <li class="disabled" aria-disabled="true"><a href="{{$items->url($items->currentPage()-1)}}">&laquo; Trước</a></li>
          @endif
          @for($i =1; $i<=$items->lastPage();$i++)
            @if($request->page == $i)
              <li class="active"><a href="javascript:void(0)">{{$i}}</a></li>
            @else
              <li><a href="{{$items->url($i)}}">{{$i}}</a></li>
            @endif
          @endfor
          @if( $items->currentPage() != $items->lastPage())
            <li class="" aria-disabled="false"><a href="{{$items->url($items->currentPage()+1)}}" rel="next">Sau &raquo;</a></li>
          @else
            <li class="disabled" aria-disabled="true"><a href="{{$items->url($items->currentPage()+1)}}" rel="next">Sau &raquo;</a></li>
          @endif
          
        </ul>
      </div>
    </div>
    
</div>         <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="200">Thông tin phiếu</th>
                <th width="150px">Lịch sử</th>
                <th width="160px">Cân nặng</th>
                <th>Tiền cân<span rel='tooltip' title="Chưa bao gồm phí vận chuyển, phát sinh, đóng gỗ">(?)</span></th>
                
                <th>Phí phát sinh</th>
                <th>phí ship</th>
                <th>Tổng tiền<span rel='tooltip' title="Đã bao gồm phí vận chuyển, phát sinh, đóng gỗ">(?)</span></th>
                <th width="120px;">Ghi chú kho</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
              @foreach($dns as $dn)
                <tr data-cu-id="{{$dn->id}}">
                  <td>
                    <ul class="list-order">
                      <li>Mã: <span class="text-danger pull-right">{{$dn->id}}</span></li>
                      <li>Trạng thái: <label class="label pull-right label-danger">{{$dn->status}}</label></li>
                      <li>Kho xuất: <span class="text-success pull-right">{{$dn->kx}}</span></li>
                      <li>Tổng kiện <span class='pull-right'>1</span></li>
                      <li>NV xuất: <span class="pull-right">{{$dn->nvx}}</span></li>
                    </ul>
                  </td>
                  <td>
                    <ul class="list-order">
                      <li rel='tooltip' title="Tạo ngày">{{$dn->nt}}</li>
                      <li rel='tooltip' title="Kế toán nhận">{{$dn->ktn}}</li>
                      
                      <li rel='tooltip' title="Ship ngày">{{$dn->ns}}</li>
                      <li rel='tooltip' title="Trả hàng ngày">{{$dn->nth}}</li>
                      

                    </ul>
                  </td>
                  <td>
                    @php
                      $packages = App\Package::where('mpxk',$dn->id)->get();
                      $total_c = 0;
                      $total_k = 0;
                      foreach($packages as $pa){
                        $total_c = $total_c + $pa->cannang;
                        $total_k = $total_k + $pa->cnqd;
                      }
                    @endphp
                    <ul class='list-order'>
                      <li>Cân thực tế <span class='pull-right'>{{$total_c/1000}} kg</span></li>
                      <li>Thể tích <span class='pull-right'>{{$total_k/1000000}} m&sup3;</span></li>
                    </ul>
                  </td>
                  <td class="text-right">{!!number_format($dn->tiencan)!!} <sup>đ</sup></td>
                  <td class="text-right">{!!number_format($dn->phiphatsinh)!!} <sup>đ</sup></td>
                  <td class="text-right">{!!number_format($dn->phiship)!!} <sup>đ</sup></td>
                  <td class="text-right">{!!number_format($dn->total)!!} <sup>đ</sup></td>
                  <td data-field='cu_vault_note'>{{$dn->message}}</td>
                  <td>
                    <ul class="list-order">
                      <li><a href="{{URL::route('qlDn',$dn->id)}}" target="_blank" class="btn btn-xs btn-primary">chi tiết</a></li>
                    </ul>

                  </td>
                </tr>
              @endforeach                
            </tbody>
          </table>
        </div>
      <div class="row-fluid">
        <div class="span6">
        @if($request->page =='')
          
          <div class="dataTables_info">Đang hiển thị <b>1 đến 15</b> trong tổng số <b>{{$count}}</b> bản ghi.</div>
        @else
          
          <div class="dataTables_info">Đang hiển thị <b>{{($request->page - 1)*15 + 1}} đến {{($request->page)*15}}</b> trong tổng số <b>{{$count}}</b> bản ghi.</div>
        @endif
        
    </div>
    
    <div class="span6">
      <div class="dataTables_paginate paging_bootstrap pagination">
        <ul class="pagination">
          @if($items->currentPage() != 1)
            <li class="" aria-disabled="false"><a href="{{$items->url($items->currentPage()-1)}}">&laquo; Trước</a></li>
          @else
            <li class="disabled" aria-disabled="true"><a href="{{$items->url($items->currentPage()-1)}}">&laquo; Trước</a></li>
          @endif
          @for($i =1; $i<=$items->lastPage();$i++)
            @if($request->page == $i)
              <li class="active"><a href="javascript:void(0)">{{$i}}</a></li>
            @else
              <li><a href="{{$items->url($i)}}">{{$i}}</a></li>
            @endif
          @endfor
          @if( $items->currentPage() != $items->lastPage())
            <li class="" aria-disabled="false"><a href="{{$items->url($items->currentPage()+1)}}" rel="next">Sau &raquo;</a></li>
          @else
            <li class="disabled" aria-disabled="true"><a href="{{$items->url($items->currentPage()+1)}}" rel="next">Sau &raquo;</a></li>
          @endif
          
        </ul>
      </div>
    </div>
    
</div> 
</div>

  </section>
                                    </div>
                                </div>
                                                            </div>
                        </div>  
                    </div>
                </div>
                
            </div>
        </div>
        <!-- /Main Content -->
@endsection
@section('js')
	<!-- JavaScript -->

    <!-- jQuery -->
    <script src="https://pl.philongexpress.com/admindoodle/vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://pl.philongexpress.com/admindoodle/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Data table JavaScript -->
    <script src="https://pl.philongexpress.com/admindoodle/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="https://pl.philongexpress.com/admindoodle/dist/js/dataTables-data.js"></script>
    <script src="https://pl.philongexpress.com/admindoodle/vendors/bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="https://pl.philongexpress.com/js/jquery.inputmask.numeric.extensions.js"></script>
    <!-- Slimscroll JavaScript -->
    <script src="https://pl.philongexpress.com/admindoodle/dist/js/jquery.slimscroll.js"></script>

    <!-- Owl JavaScript -->
    <script src="https://pl.philongexpress.com/admindoodle/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- Switchery JavaScript -->
    <script src="https://pl.philongexpress.com/admindoodle/vendors/bower_components/switchery/dist/switchery.min.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="https://pl.philongexpress.com/admindoodle/dist/js/dropdown-bootstrap-extended.js"></script>
    <!-- Select2 JavaScript -->
    <script src="https://pl.philongexpress.com/admindoodle/vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
    <script type="text/javascript" src="https://pl.philongexpress.com/assets/js/nprogress.js"></script>
        <script src="https://pl.philongexpress.com/js/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="https://pl.philongexpress.com/js/bootstrap-datepicker/locales/bootstrap-datepicker.vi.min.js"></script>
    <script type="text/javascript" src="https://pl.philongexpress.com/bower_components/moment/min/moment.min.js"></script>
    <script type="text/javascript" src="https://pl.philongexpress.com/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- sweet alert -->
    <script src="https://pl.philongexpress.com/admindoodle/vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript" src="https://pl.philongexpress.com/admindoodle/vendors/bower_components/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
        <script src="https://pl.philongexpress.com/admindoodle/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
    <!-- Init JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
    <script src="https://pl.philongexpress.com/admindoodle/dist/js/init.js?ver=1"></script>
    <script type="text/javascript" src='https://pl.philongexpress.com/admin/main/comment.js?ver=1.1'></script>
    <script type="text/javascript" src='https://pl.philongexpress.com/ver2/js/frontendjs.js'></script>
    <script type="text/javascript" src='https://pl.philongexpress.com/ver2/js/notification.js'></script>
    <script type="text/javascript">
    $.each($('.t-label'), function(index, val) {
        if($(this).html() > 0 ) {
            $(this).parents('.parent-bold').css('font-weight', 'bold');
        }
   });
        jQuery(document).ready(function($) {
        var cName = 'blogs_' + 20;
        checkCookie(cName);

        $('.btnBlogDissmiss').click(function(event) {
            markCookie(cName);
        });
    });
    
            jQuery(document).ready(function($) {
            var cName = 'order_free';
            checkCookieFreeOrder(cName);

            $('.btnBlogDissmissFreeOrder').click(function(event) {
                markCookie(cName);
            });
        });
    </script>

<script type="text/javascript">
    $('.js-textareacopybtn').click(function(event) {
        $(this).find('textarea').css('background', '#dc4666');
        $(this).find('textarea').css('color', '#fff');
        var copyTextarea = $(this).find('.js-copytextarea');
        copyTextarea.select();

        gNoti('Đã copy');

        try {
            var successful = document.execCommand('copy');
            var msg = successful ? 'successful' : 'unsuccessful';
            console.log('Copying text command was ' + msg);
            } catch (err) {
            console.log('Oops, unable to copy');
        }
    });
</script>

    
    
    <script type="text/javascript">
    //dua form filter vao navbar trong mode mobile
        jQuery(document).ready(function($) {

                        $('#mark-all').click(function() {
                  $.ajax({
                    url: $(this).data('url'),
                    type: 'GET',
                    dataType: 'json',
                    data: 1,
                    success: function(data) {
                      $.each($('.item-unread'), function(index, val) {
                        $(this).removeClass('item-unread');
                      });
                      $.each($('.total-noti'), function(index, val) {
                        $(this).text('0');
                      });
                      $('.indicator').remove();
                    },
                  });
                });
            });
        
    </script>
@endsection