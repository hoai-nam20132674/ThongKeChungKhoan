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
  <!-- Main Content -->
  @php
    $items = $packages;
  @endphp
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
      <div class="card-view">
         <h4 class="h4-inline">Danh s&aacute;ch kiện h&agrave;ng</h4>
         <form id="to-nav" method="GET" accept-charset="UTF-8" class="row mt-20">
            <div class="form-group col-md-3">
               <select name="stt" data-original-title="Trạng thái hàng" rel="tooltip" class="form-control search-box-modules">
                  @if(isset($request->stt))
                    <option value="{{$request->stt}}" >{{$request->stt}}</option>
                    <option value="">--- Trạng thái hàng ---</option>
                  @else
                    <option value="">--- Trạng thái hàng ---</option>
                  @endif
                  
                  @foreach($status as $stt)
                    <option value="{{$stt->name}}" >{{$stt->name}}</option>
                  @endforeach                   
                      
               </select>
            </div>
            <div class="form-group col-md-2">
              @if(isset($request->mvd))
                <input type="text" data-original-title="Mã vận đơn" rel="tooltip" placeholder="Mã vận đơn" name="mvd" class="form-control"  value="{{$request->mvd}}">
              @else
                <input type="text" data-original-title="Mã vận đơn" rel="tooltip" placeholder="Mã vận đơn" name="mvd" class="form-control"  value="">
              @endif
               
            </div>
            
            <div class="form-group col-md-2">
              @if(isset($request->pid))
                <input type="text" name="pid" rel='tooltip' title="Mã phiếu xuất kho" class="form-control search-box-modules" placeholder="Mã phiếu xuất kho" value="{{$request->pid}}">
              @else
                <input type="text" name="pid" rel='tooltip' title="Mã phiếu xuất kho" class="form-control search-box-modules" placeholder="Mã phiếu xuất kho" value="">
              @endif
                
            </div>
            <div class="check-box form-group col-md-3" >
               <button id="btnSearch" type="submit" class="btn btn-success btn-flat loc">Tìm kiếm</button>
            </div>
         </form>
      </div> 
      <div class="card-view">
         <div class="table-responsive">
            <table class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>
                        Thông tin kiện
                     </th>
                     <th>Thông tin thêm</th>
                     <th>Thông tin kho</th>
                     <th>Lịch trình</th>
                  </tr>
               </thead>
               <tbody>
                    @foreach($packages as $item)

                    <tr>
                        <td>
                           <ul class='list-order'>
                                <li><p>Mã kiện: <strong class="pull-right">{{$item->ma}}</strong></p></li>
                                <li><p class="label label-success">{{$item->status}}</p></li>
                                <li><p>Vận chuyển phát sinh: <strong class="pull-right"> 0<sup>đ</sup></strong></p></li>
                                <li><p>Đóng gỗ: <strong class="pull-right"> 0<sup>đ</sup></strong></p></li>
                                <li rel='tooltip' title="Tiền (vận chuyển TQ - VN)"><p>Tiền cân : <strong class="pull-right">{!!number_format($item->price)!!}<sup>đ</sup></strong></p></li>
                           </ul>
                        </td>
                        @php
                          $sack = App\Sack::where('id',$item->sack_id)->get()->first();
                        @endphp
                        <td>
                            <ul class="list-order">
                                <li><p>Mã vận đơn: <a class="btn-link pull-right"  target="_blank"  href="#">{{$item->mvd}}</a></p></li>
                                @if($item->mpxk =='')
                                <li><p>Mã phiếu xuất kho: <strong class="pull-right">Chưa xuất kho</strong></p></li>
                                @else
                                <li><p>Mã phiếu xuất kho: <strong class="pull-right">{{$item->mpxk}}</strong></p></li>
                                @endif
                                <li><p>Loại hàng: <strong class="pull-right">Hàng ký gửi</strong></p></li>
                                <li><p>Cân nặng: <strong class="pull-right">{{$item->cannang/1000}} kg</strong></p></li>
                                <li><p rel='tooltip' title="{{$item->dai}} x {{$item->rong}} x {{$item->cao}} / 1.000.000">Thể tích m&sup3;: <strong class="pull-right">{{$item->cnqd/1000000}} m&sup3;</strong></p></li>
                                @php
                                  $tc = ($item->cannang*$item->dongiacan)/1000;
                                  $tk = ($item->dai*$item->rong*$item->cao*$item->dongiakhoi)/1000000;
                                @endphp
                                @if($tc>=$tk)
                                <li><p class="label label-danger">Tính tiền theo cân</p></li>
                                @else
                                <li><p class="label label-danger">Tính tiền theo m&sup3;</p></li>
                                @endif
                            </ul>
                        </td>
                        <td>
                              <ul class="list-order">
                                 <li><p>Kho khách chọn: <strong>{{$item->kkc}}</strong></p></li>
                                 <li><p>Trạng thái: <strong>{{$item->status}}</strong></p></li>
                              </ul>
                        </td>
                        <td>
                              <ul class="list-order">
                                @php
                                    Carbon\Carbon::setLocale('vi');
                                    $now = \Carbon\Carbon::now();
                                @endphp
                                 <li>
                                    ----- <b class='pull-right'>...</b>
                                 </li>
                                 <li>
                                    Mua hàng xong <b class='pull-right' rel='tooltip' title="{{\Carbon\Carbon::createFromTimestamp(strtotime($item->mhx))->diffForHumans($now)}}">{{$item->mhx}}</b>
                                 </li>
                                 <li>
                                    Shop TQ phát hàng <b class='pull-right' rel='tooltip' title="{{\Carbon\Carbon::createFromTimestamp(strtotime($item->stqph))->diffForHumans($now)}}">{{$item->stqph}}</b>
                                 </li>
                                 <li>
                                    Kho TQ nhận hàng <b class='pull-right' rel='tooltip' title="{{\Carbon\Carbon::createFromTimestamp(strtotime($item->ktqnh))->diffForHumans($now)}}">{{$item->ktqnh}}</b>
                                 </li>
                                 <li>
                                    Xuất kho TQ: <b class='pull-right' rel='tooltip' title="{{\Carbon\Carbon::createFromTimestamp(strtotime($item->xktq))->diffForHumans($now)}}">{{$item->xktq}}</b>
                                 </li>
                                 <li>
                                    Trong kho VN: <b class='pull-right' rel='tooltip' title="{{\Carbon\Carbon::createFromTimestamp(strtotime($item->tkvn))->diffForHumans($now)}}">{{$item->tkvn}}</b>
                                 </li>
                                 <li>
                                    Đã trả hàng: <b class='pull-right' rel='tooltip' title="{{\Carbon\Carbon::createFromTimestamp(strtotime($item->dth))->diffForHumans($now)}}">{{$item->dth}}</b>
                                 </li>
                              </ul>
                        </td>
                    </tr>
                    @endforeach
                                          
                </tbody>
            </table>
         </div>
      </div>
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
    
</div>      </div>
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