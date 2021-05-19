
<!DOCTYPE html>
<html lang="zxx">
<head>
    
    <title>ĐĂNG NHẬP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/login/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/login/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/login/flaticon.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/login/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('css/login/default.css')}}">

</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Login 27 start -->
<div class="login-27">
    <div class="container-fluid">
        <div class="row login-box">
            <div class="col-lg-6 bg-color-15 align-self-center pad-0 none-992 bg-img">
                <div class="info clearfix">
                    <h1>Welcome<span></span></h1>
                    <p>Bằng sự nhiệt thành và tâm huyết, chúng tôi chủ động lắng nghe để thấu hiểu và hoàn thiện dịch vụ, hướng tới mục tiêu đáp ứng ngày càng tốt hơn những mong muốn chính đáng của Quý Khách hàng...</p>
                </div>
            </div>
            <div class="col-lg-6 align-self-center pad-0 form-section">
                <div class="form-inner">
                    <!-- <a href="login-27.html" class="logo">
                        <img src="https://storage.googleapis.com/theme-vessel/checking-sites/logdy-html/main/assets/img/logos/logo.png" alt="logo">
                    </a> -->
                    <h3>ĐĂNG NHẬP</h3>
                    <form action="{{URL::route('postLogin')}}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        <div class="form-group form-box">
                            <input type="text" name="user" class="input-text" placeholder="Số điện thoại">
                            <i class="flaticon-mail-2"></i>
                        </div>
                        <div class="form-group form-box">
                            <input type="password" name="password" class="input-text" placeholder="Mật khẩu">
                            <i class="flaticon-password"></i>
                        </div>
                        <div class="checkbox form-group clearfix">
                            <div class="form-check checkbox-theme">
                                <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">
                                    Remember me
                                </label>
                            </div>
                            <a href="forgot-password-27.html" class="forgot-password">Quên mật khẩu</a>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn-md btn-theme btn-block">ĐĂNG NHẬP</button>
                        </div>
                        <div class="clearfix"></div>
                        <!-- <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg">Facebook</a></li>
                            <li><a href="#" class="twitter-bg">Twitter</a></li>
                            <li><a href="#" class="google-bg">Google</a></li>
                        </ul> -->
                    </form>
                    <div class="clearfix"></div>
                    <p>Bạn chưa có tài khoản ?<a href="{{URL::route('dangky')}}" class="thembo">Đăng ký tài khoản</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 27 end -->

<!-- External JS libraries -->
<script src="{{asset('js/login/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('js/login/popper.min.js')}}"></script>
<script src="{{asset('js/login/bootstrap.min.js')}}"></script>
<!-- Custom JS Script -->
</body>
</html>