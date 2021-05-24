
<!DOCTYPE html>
<html lang="en">

<head class="crypt-dark">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ĐĂNG NHẬP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="https://demo.tophivetheme.com/cryptorio/Dark/images/favicon.png">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/ui.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="crypt-dark">
    
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="cryptorio-forms cryptorio-forms-dark text-center pt-5 pb-5">
                    <div class="logo">
                        <!-- <img src="images/logo.png" alt="logo-image"> -->
                    </div>
                    <h3 class="p-4">ĐĂNG NHẬP HỆ THỐNG</h3>
                    <div class="cryptorio-main-form">
                        <form action="{{URL::route('postLogin')}}" method="POST" class="text-left">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            <label for="user">Tên đăng nhập</label>
                            <input type="text" id="user" name="user" placeholder="Email hoặc số điện thoại">
                            <label for="password">Mật khẩu</label>
                            <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">
                            <br>
                            <input type="submit" value="ĐĂNG NHẬP" class="crypt-button-red-full btn btn-danger">
                        </form>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    
    <footer>
    
    </footer>
    <script src="https://s3.tradingview.com/tv.js"></script>
    <script src="{{asset('js/bundle.js')}}"></script>
    
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
                $.ajax({
                    type: "GET",
                    url: '/get-name-stocks',
                    dataType: 'json',
                    success: function (data){
                        for(var i=0;i<data.length;i++){
                            $('tr.'+data[i]).children('td.get-data-value').each(function(){
                                var ma = data[i];
                                var pp = $(this).attr('pp');
                                var url = $(this).attr('url');
                                test(ma,pp,url);
                            });
                        }
                        
                    }
                });
            }
            
            run();
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