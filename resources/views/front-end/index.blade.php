
<!DOCTYPE html>
<html lang="en">

<head class="crypt-dark">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>THỐNG KÊ THỊ TRƯỜNG CHỨNG KHOÁN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="https://demo.tophivetheme.com/cryptorio/Dark/images/favicon.png">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/ui.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .open>.dropdown-menu {
            display: block;
        }
        .dropdown-menu>li>a {
            display: block;
            padding: 3px 20px;
            clear: both;
            font-weight: 400;
            line-height: 1.42857143;
            color: #000;
            white-space: nowrap;
            text-decoration: none;
        }
        .dropdown-menu li{
            padding: 5px 0;
        }
        .dropdown-menu>li:hover{
            background: #e0e0e0;
        }
        .dropdown-menu{
            right: 0;
            left: auto;
            padding: 0;
        }

    </style>
</head>

<body class="crypt-dark">
    <section>
        <header>
            <div class="container">
                <!-- <div class="crypt-header"> -->
                    <div class="row sm-gutters">
                        
                        <div class="col-md-6">
                            <div class="crypt-logo"><img src="https://demo.tophivetheme.com/cryptorio/Dark/images/logo.png" alt=""></div>
                        </div>
                        <div class="col-md-6" style="margin-top: 20px;">
                            <div style="float: right;">
                                <button class="btn btn-primary update" type="button" style=" margin-right: 5px;">
                                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                    <span class="">Cập nhật dữ liệu</span>
                                </button>
                                <div class="btn-group" style="">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    {{Auth::user()->name}}<span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{URL::route('home')}}">TRANG QUẢN TRỊ</a></li>
                                        <li><a href="{{URL::route('logout')}}">ĐĂNG XUẤT</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
            <div class="crypt-mobile-menu">
                <ul class="crypt-heading-menu">
                    <li class="active"><a href="https://demo.tophivetheme.com/cryptorio/Dark/">Exchange</a></li>
                    <li><a href="https://demo.tophivetheme.com/cryptorio/Dark/">Market Cap</a></li>
                    <li><a href="https://demo.tophivetheme.com/cryptorio/Dark/">Treanding</a></li>
                    <li><a href="https://demo.tophivetheme.com/cryptorio/Dark/">Tools</a></li>
                    <li class="crypt-box-menu menu-green"><a href="https://demo.tophivetheme.com/cryptorio/Dark/">login</a></li>
                    <li class="crypt-box-menu menu-red"><a href="https://demo.tophivetheme.com/cryptorio/Dark/">register</a></li>
                    
                </ul>
                <div class="crypt-gross-market-cap">
                    <h5>$34.795.90 <span class="crypt-up pl-2">+3.435 %</span></h5>
                    <h6>0.7925.90 BTC <span class="crypt-down pl-2">+7.435 %</span></h6></div>
            </div>
        </header>
    </section>
    <div class="container">
        <div class="row sm-gutters">
            
            <div class="col-md-12">
                <br>
                <div class="tradingview-widget-container mb-3">
                    
                        <div>
                            <div class="crypt-market-status">
                                <div>
                                    <ul class="nav nav-tabs">
                                        @php
                                            $tg = 1;
                                        @endphp
                                        @foreach($ses as $se)
                                            @if($tg == 1)
                                                <li role="presentation"><a href="#{{$se->id}}" class="active" data-toggle="tab">{{$se->name}}</a></li>
                                            @else
                                                <li role="presentation"><a href="#{{$se->id}}" data-toggle="tab">{{$se->name}}</a></li>
                                            @endif
                                            @php
                                                $tg++;
                                            @endphp
                                        @endforeach
                                        
                                    </ul>
                                    <div class="tab-content">
                                        @php
                                            $tg = 1;
                                        @endphp
                                        @foreach($ses as $se)
                                            @php
                                                $ssids = App\SSID::where('se_id',$se->id)->get();
                                                $stocks_id = App\Http\Controllers\Controller::arrayColumn($ssids,'stock_id');
                                                $stocks = App\Stock::where('status',1)->whereIn('id',$stocks_id)->get();
                                            @endphp
                                            @if($tg == 1)
                                                <div role="tabpanel" class="tab-pane active" id="{{$se->id}}">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Mã</th>
                                                                <th scope="col">Thời gian</th>
                                                                <th scope="col">Tham chiếu</th>
                                                                <th scope="col">Giá trần</th>
                                                                <th scope="col">Giá sàn</th>
                                                                <th scope="col">Giá +/-/ (%)</th>
                                                                <th scope="col">KL lô</th>
                                                                <th scope="col">Tổng KL(HQ)</th>
                                                                <th scope="col">Tổng KL(HN)</th>
                                                                <th scope="col">TB 10 phiên</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($stocks as $stock)
                                                                <tr class="{{$stock->ma}}">
                                                                    <td>{{$stock->ma}}</td>
                                                                    <td class="get-data-value" pp="tg" url="/{{$stock->tg}}">...</td>
                                                                    <td class="get-data-value" pp="tc" url="/{{$stock->tc}}">...</td>
                                                                    <td class="get-data-value" pp="gt" url="/{{$stock->gt}}">...</td>
                                                                    <td class="get-data-value" pp="gs" url="/{{$stock->gs}}">...</td>
                                                                    <td class="get-data-value" pp="g" url="/{{$stock->g}}">...</td>
                                                                    <td class="get-data-value" pp="kll" url="/{{$stock->kll}}">...</td>
                                                                    <td class="get-data-value" pp="tkl_old" url="/{{$stock->tkl_old}}">...</td>
                                                                    <td class="get-data-value" pp="tkl" url="/{{$stock->tkl}}">...</td>
                                                                    <td class="get-data-value" pp="tb10" url="/{{$stock->tb10}}">...</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div style="display: none;" class="no-orders text-center p-160"><img src="https://demo.tophivetheme.com/cryptorio/Dark/images/empty.svg" alt="no-orders"></div>
                                                </div>
                                            @else
                                                <div role="tabpanel" class="tab-pane" id="{{$se->id}}">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Mã</th>
                                                                <th scope="col">Thời gian</th>
                                                                <th scope="col">Tham chiếu</th>
                                                                <th scope="col">Giá trần</th>
                                                                <th scope="col">Giá sàn</th>
                                                                <th scope="col">Giá +/-/ (%)</th>
                                                                <th scope="col">KL lô</th>
                                                                <th scope="col">Tổng KL(HQ)</th>
                                                                <th scope="col">Tổng KL(HN)</th>
                                                                <th scope="col">TB 10 phiên</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($stocks as $stock)
                                                                <tr class="{{$stock->ma}}">
                                                                    <td>{{$stock->ma}}</td>
                                                                    <td class="get-data-value" pp="tg" url="/{{$stock->tg}}">...</td>
                                                                    <td class="get-data-value" pp="tc" url="/{{$stock->tc}}">...</td>
                                                                    <td class="get-data-value" pp="gt" url="/{{$stock->gt}}">...</td>
                                                                    <td class="get-data-value" pp="gs" url="/{{$stock->gs}}">...</td>
                                                                    <td class="get-data-value" pp="g" url="/{{$stock->g}}">...</td>
                                                                    <td class="get-data-value" pp="kll" url="/{{$stock->kll}}">...</td>
                                                                    <td class="get-data-value" pp="tkl_old" url="/{{$stock->tkl_old}}">...</td>
                                                                    <td class="get-data-value" pp="tkl" url="/{{$stock->tkl}}">...</td>
                                                                    <td class="get-data-value" pp="tb10" url="/{{$stock->tb10}}">...</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div style="display: none;" class="no-orders text-center p-160"><img src="https://demo.tophivetheme.com/cryptorio/Dark/images/empty.svg" alt="no-orders"></div>
                                                </div>
                                            @endif
                                            @php
                                                $tg++;
                                            @endphp
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <!-- <div id="depthchart" class="depthchart h-40 crypt-dark-segment"></div> -->
            </div>
        
        </div>
    </div>
    
    <footer>
    
    </footer>
    <script src="https://s3.tradingview.com/tv.js"></script>
    <!-- <script src="{{asset('js/bundle.js')}}"></script> -->
    
    <script type="text/javascript">
        $(document).ready(function(){

            function test(ma,pp,url){
                
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: 'json',
                    success: function (data){
                        var old_value = $('.'+ma).children('.get-data-value[pp='+pp+']').html();
                        if(data.value == old_value || data.value.length >=50){

                        }
                        else{
                            $('.'+ma).children('.get-data-value[pp='+pp+']').html(data.value);
                            $('.'+ma).children('.get-data-value[pp='+pp+']').css('color','#ff9900c2');
                            setTimeout(function(){ $('.'+ma).children('.get-data-value[pp='+pp+']').css('color',''); }, 500);
                        }
                    }
                });
                // var function1 = setInterval(test, 5000, ma, pp, url);
            
                // $(document).on('visibilitychange', function() {
                //     if(document.visibilityState == 'hidden') {
                //         clearInterval(function1);
                //     } else {
                        
                //     }
                // });
                
            }
            function run(){
                var stocks = '';
                $.ajax({
                    type: "GET",
                    url: '/get-name-stocks',
                    dataType: 'json',
                    success: function (data){
                        stocks = data;
                        for(var i=0;i<data.length;i++){
                            $('tr.'+data[i]).children('td.get-data-value').each(function(){
                                var ma = data[i];
                                var pp = $(this).attr('pp');
                                var url = $(this).attr('url');
                                test(ma,pp,url);
                            });
                            var totalvolume = $('tr.'+data[i]).children('td.get-data-value[pp="tkl"]').html();
                            var old_totalvolume = $('tr.'+data[i]).children('td.get-data-value[pp="tkl_old"]').html();
                            // console.log(totalvolume);
                            // console.log(old_totalvolume);
                        }
                        
                    }
                });
                return stocks;
            }
            
            var stocks = run();
            console.log(stocks);
            $(document).on('click', '.update', function(event) {
                event.preventDefault();
                run();
                console.log('update');
            });



            // test('AAA', 'kll', 'http://localhost:8000/get-data-value?url=https://s.cafef.vn/Lich-su-giao-dich-AAA-6.chn&start=</span></td><td style="width:20%;" class="Item_Price10">&finish=</td>');
            
            // test('AAA', 'tkl', 'http://localhost:8000/get-data-value?url=https://s.cafef.vn/Lich-su-giao-dich-AAA-6.chn&start=<span class="price"><b class="totalvolume">&finish=</b>');
        });
    </script>
</body>
</html>