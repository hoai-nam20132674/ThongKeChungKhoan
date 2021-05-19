
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Phiếu xuất kho</title>

    <!-- Data table CSS -->
    <link href="{{asset('css/ql/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/ql/select2.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/ql/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/ql/nprogress.css')}}">
    <link href="{{asset('css/ql/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/ql/bootstrap-datepicker3.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/ql/bootstrap-editable.css')}}" rel="stylesheet" />
    <link href="{{asset('css/ql/style.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ql/admincss.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ql/f-notification.css')}}">
    <style>
        body {
            background-color: #fff;
        }
        @media  print {
            .table-small, .table-small td, .table-small  * {
                font-size: 12px;
            }
            body {
                font-size: 11px !important;
            }
            a[href]:after {
                content: none !important;
            }

            .g-no-print {
                display: none !important;
            }
            td {
                /*border: 1px solid #ccc !important;*/
                font-size: 18px;
            }
            img {
                width: 50%;
            }

        }

        span.g-note {
            display: inline-block; width: 50px; height: 25px;
        }

        .table td {
            word-break: initial;
        }
        .ladingInput {
            
        }
    </style>
</head>
<body data-token="7jQfdVfIvjBvV4gfNSwRDlqnl4fMVDN6Va9030GT" class="t-content">

<div class="no-print">
    <div class="col-sm-12">
            </div>
</div>
    @if( Session::has('flash_message'))
        <div class="note note-{{ Session::get('flash_level')}}" style="display: none;">
            <p class="flash-message">{{ Session::get('flash_message')}}</p>
        </div>
    @endif
    @if( count($errors) > 0)
        
        @foreach($errors->all() as $error)
            <div class="note note-danger" style="display: none;">
                <p>{{$error}}</p>
            </div>
        @endforeach
            
    @endif
    <div class="container" style="padding-bottom: 30px;">
        <div class="row">
            <div class="">
                <div>
                    <div class="col-xs-4 pull-left">
                        <img src="https://png.pngtree.com/template/20190717/ourlarge/pngtree-letter-ll-square-logo-vector-design-template-element-image_230021.jpg" style="width: 25%">
                    </div>
                    <div class="col-xs-8 pull-right">
                        <p class='text-right'><small>Hotline: 0123456789</small></p>
                        <p class='text-right hidden'><small>VP HCM: Số 1A L&yacute; Thường Kiệt, Phường 2 Quận T&acirc;n B&igrave;nh. HCM  - 037.401.1111</small></p>
                    </div>
                </div>
                <span class="clearfix"></span>
                <div>
                    <div>
                        <h4 class='text-center'>PHIẾU XUẤT KHO</h4>
                        <p class='text-center'><i>(Mã phiếu <b>{{$dn->id}}</b>)</i> H&agrave; Nội</p>
                        <p class='g-no-print text-center'>Trạng thái: <span class='label label-primary'>Xem thử</span> <span class="label label-danger">Bản nháp</span></p>
                    </div>
                    <div class='row mt-20'>
                        <div class="col-xs-6 pull-left">
                            <h5 class="border-text">Khách hàng</h5>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>1. Họ tên</td>
                                        <td >{{$dn->name}}</td>
                                    </tr>
                                    <tr class="">
                                        <td>2. Email</td>
                                        <td>{{$dn->email}}</td>
                                    </tr>
                                    
                                    <tr class="">
                                        <td>3. Điện thoại</td>
                                        <td>{{$dn->phone}}</td>
                                    </tr>

                                    <tr class="">
                                        <td>4. Kho xuất</td>
                                        <td>{{$dn->kx}}</td>
                                    </tr>
                                    <tr class="">
                                        <td>5. Nhân viên xuất</td>
                                        <td>{{$dn->nvx}}</td>
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-6">
                            <h5 class="border-text">Chi tiết thanh toán(đơn vị đ)</h5>
                            <table class="table table-striped">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1. Tiền cân</td>
                                        <td >{!!number_format($dn->tiencan)!!} VNĐ</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>2. Phí phát sinh</td>
                                        <td >{!!number_format($dn->phiphatsinh)!!} VNĐ</td>
                                    </tr>
                                    
                                    <tr class="">
                                        <td>3. Phí ship</td>
                                        <td >{!!number_format($dn->phiship)!!} VNĐ</td>
                                    </tr>
                                    <tr class="">
                                        <td>4. Tổng tiền</td>
                                        <td >{!!number_format($dn->total)!!} VNĐ</td>
                                    </tr>
                                    <tr >
                                        <td>5. Ghi chú kho</td>
                                        <td>{{$dn->message}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    
                        <span class="clearfix"></span>
                    </div>
                    
                    <div>
                        <div>
                            <h5 class="border-text">Kiện hàng</h5>
                            <!-- <span class='pull-right'><i>Công thức quy đổi: (kg) =  Dài (cm) x rộng (cm) x cao (cm)/ 7000</i></span> -->
                        </div>
                        <table class="table table-bordered  lading_table table-small" style="cursor: pointer;" >
                            <thead>
                                <tr>
                                    <th>Stt</th>
                                    <th class="text-center">Mã kiện</th>
                                    <th class="text-center">Mã vận đơn</th>
                                    <th class="text-center">Mã bao</th>
                                    <th class='text-center'>Dịch vụ</th>
                                    <th class="text-center">Cân (gram)</th>
                                    <th class="text-center">Thể tích (m&sup3;)</th>
                                    
                                    <th class="text-center">ĐG CÂN(đ)</th>
                                    <th class="text-center">ĐG Khối(đ)</th>
                                    <th class="text-center">Thành tiền(đ)</th>
                                    <th class="text-center"><span rel='tooltip' title="(hoặc cước TQ)">Đóng gỗ(đ)</span></th>
                                    <th>Chống sốc</th>
                                    <th class="text-center">Cước vận chuyển <br> phát sinh</th>
                                    <th>Vn trả thêm</th>
                                    <th>Phí lưu kho</th>
                                    <th >Phí ship</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($packages as $item)
                                <tr class="bgc-warning  bg-success">
                                        <td class="text-center">{{$i}}</td>
                                        <td class="">
                                            <span rel='tooltip' title="Mã kiện {{$item->ma}}">{{$item->ma}}</span>
                                        </td>
                                        <td class='text-right'>
                                            <span rel='tooltip' title="Mã vận đơn {{$item->mvd}}">{{$item->mvd}}</span>
                                        </td>
                                        <td class='text-right'>
                                            @php
                                                $sack = App\Sack::where('id',$item->sack_id)->get()->first();
                                            @endphp
                                            <span rel='tooltip' title="Mã bao {{$sack->ma}}" class="text-success">{{$sack->ma}}</span>
                                        </td>
                                        <td> <br>   <span class='label label-primary'>Chuyển phát thường</span>      </td>
                                        <td class='text-right'>{{$item->cannang}}</td>
                                        <td class='text-right' title="dài x rộng x cao /1000000">{{$item->cnqd/1000000}}</td>
                                        
                                        <td class='text-right'>{!!number_format($item->dongiacan)!!}</td>
                                        <td class='text-right'>{!!number_format($item->dongiakhoi)!!}</td>
                                        @php
                                            $gc = $item->cannang*$item->dongiacan/1000;
                                            $gk = $item->dai*$item->rong*$item->cao*$item->dongiakhoi/1000000;
                                        @endphp
                                        @if($gc >= $gk)
                                            <td class='text-right' title="Thành tiền tính theo cân">{!!number_format($item->price)!!}</td>
                                        @else
                                            <td class='text-right' title="Thành tiền tính theo khối">{!!number_format($item->price)!!}</td>
                                        @endif
                                        <td class='text-right'>
                                            0
                                        </td>
                                        <td class='text-right '>0</td>
                                        <td class='text-right '>0</td>
                                        <td class='text-right '>0</td>
                                        <td class="text-right">
                                            0 <b class='g-no-print' rel="tooltip"></b>
                                        </td>
                                        <td class="text-right">0</td>
                                        
                                </tr>
                                @php
                                    $i++;
                                @endphp
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>

                
                                            <div>
                            <p>Khi nhận hàng quý khách lưu ý</p>
                            <p>- Quý khách vui lòng kiểm tra lại cân nặng và kích thước, tình trạng kiện hàng cùng với nhân viên giao hàng.</p>
                            
                                                        
                                <p>- Khi cần hỗ trợ Quý khách vui lòng liên hệ hotline  0123456789</p>
                                <p>- Khi cần hỗ trợ giao hàng Quý khách vui lòng liên hệ hotline: Kho HN  0123456789, Kho HCM 0123456789</p>
                                                    </div>
                                        <h4 class="mt-20">Khách hàng xác nhận tình trạng bao hàng hoặc kiện hàng khi nhận hàng</h4>
                    <p class="mt-10">Tôi xác nhận đã nhận ...................... kiện hàng, tình trạng kiện hàng nguyên vẹn, không móc rách</p>
                    <p style="word-wrap: break-word;">......................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................</p>
                    @php
                        Carbon\Carbon::setLocale('vi');
                        $now = \Carbon\Carbon::now();
                    @endphp

                    <p class="text-right mt-20">Ngày <b>{{$now}}</b></p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-left">Khách hàng</th>
                                <th class='text-right'>Nhân viên xuất kho</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="height: 50px;" colspan="4" tabindex="1"></td>
                            </tr>
                            <tr>
                                <td class="text-left">{{$dn->name}}</td>
                                <td class="text-right">{{$dn->nvx}}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <div class="ladingInput g-no-print">
        <div class="col-xs-12">
            <div class="form-inline" id='input-container'>
                <div class='inline col-xs-12'>
                    <a href="javascript:;" class="btn btn-danger btn-sm btnPrint">IN PHIẾU XUẤT KHO</a>
                    <!-- <a href="javascript:;" class="btn btn-danger btn-sm btnPrintNoLink">In ẩn link</a> -->
                    <!-- <a type="submit" class="postAddDn btn btn-primary btn-sm">LƯU PHIẾU XUẤT KHO</a> -->
                </div>
                <div class="col-xs-8">
                    
                </div>
            </div>
        </div>
        <span class="clearfix"></span>
    </div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="{{asset('js/ql/jquery.min.js')}}"></script>

<script src="{{asset('js/ql/bootstrap.min.js')}}"></script>

    <!-- Data table JavaScript -->
    @if( Session::has('flash_message'))
        <script>
            var message = $('.flash-message').text();
            console.log(message);
            swal({
              title: message,
              text: "Bạn muốn in phiếu xuất kho không",
              icon: "success",
              buttons: ["Hủy bỏ", "In phiếu"],
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                
              } else {
                location.href = '/admin/dns';
              }
            });
            
        </script>
    @endif

    <script>
        jQuery(document).ready(function($) {
            $('.btnPrintNoLink').click(function(event) {
                $('#detail-link').addClass('g-no-print');
                window.print();
            });

            $('.btnPrint').click(function(event) {
                $('#detail-link').removeClass('g-no-print');
                window.print();
            });
            $('.postAddDn').click(function(event) {
                $("#postAddDn").submit()
            });

        });
    </script>
    
    <script>
        jQuery(document).ready(function($) {
            // giảm trừ khuyến mại
            $('.toReduce').click(function(event) {
                event.preventDefault();
                href = $(this).attr('href');
                swal({
                    title: "Giảm trừ, khuyến mại",
                    html: "<input type='text' class='money form-control'>",
                    // text: "<input type='text' class='money'>",
                    // type: "input",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    animation: "slide-from-top",
                    // inputPlaceholder: "....",
                    showLoaderOnConfirm: false
                }, function(inputValue){
                    console.log(typeof inputValue);
                    if (inputValue == false) { return false;}
                    if (inputValue === "") { alert('mời bạn nhập số tiền giảm trừ, chiết khấu, nếu không có nhập số 0');  return false;};
                        window.location.href = href + "&order_reduce=" + inputValue;
                    });
            });

        });
    </script>
</body>
</html>