@extends('front-end.layout.default')
@section('meta')
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">           
    <title>Liên Hệ</title>
    <meta name="description" content="{{$system->seo_description}}">
    <meta name="keywords" content="{{$system->seo_keyword}}"/>      
    <link rel="canonical" href="{{$system->website}}"/>
    <meta name='revisit-after' content='1 days' />
    <link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{$system->title}}">
    <meta property="og:image" content="">
    <meta property="og:image:secure_url" content="">
    <meta property="og:description" content="{{$system->seo_description}}">
    <meta property="og:url" content="{{$system->website}}">
    <meta property="og:site_name" content="{{$system->name}}">
@endsection
@section('css')
	<!-- Build Main CSS --> 
    
@endsection
@section('content')
	<!-- Page Title Start -->
    <section class="page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="page-title-content">
                        <h3 class="title text-white">Liên hệ với chúng tôi</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">TRANG CHỦ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">LIÊN HỆ</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Title End -->
    <!-- Contact Section Start -->
    <section class="contact-section pdt-110 pdb-95 pdb-lg-90" data-background="images/bg/abs-bg1.png">
        <div class="container">
            <div class="row mrb-60">
                <div class="col-lg-7">
                    <div class="contact-form">
                        <form method="POST" action="{{URL::route('addContact')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mrb-25">
                                        <input type="text" name="name" placeholder="Họ tên" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mrb-25">
                                        <input type="text" name="phone" placeholder="Số điện thoại" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mrb-25">
                                        <input type="email" name="email" placeholder="Email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mrb-25">
                                        <textarea rows="4" name="message" placeholder="Nội dung yêu cầu tư vấn" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="cs-btn-one btn-md btn-round btn-primary-color element-shadow" value="Send">GỬI NGAY</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- Google Map Start -->
                    <div class="mapouter fixed-height">
                        <div class="gmap_canvas">
                            {!!$system->map!!}
                            <a href="https://www.whatismyip-address.com"></a>
                        </div>
                    </div>
                    <!-- Google Map End -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-4">
                    <div class="contact-block box-shadow-nn d-flex mrb-30">
                        <div class="contact-icon">
                            <i class="webex-icon-map1"></i>
                        </div>
                        <div class="contact-details mrl-30">
                            <h5 class="icon-box-title mrb-10">Địa chỉ</h5>
                            <p class="mrb-0">{{$system->address}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="contact-block box-shadow-nn d-flex mrb-30">
                        <div class="contact-icon">
                            <i class="webex-icon-Phone2"></i>
                        </div>
                        <div class="contact-details mrl-30">
                            <h5 class="icon-box-title mrb-10">Hotline</h5>
                            <p class="mrb-0">{{$system->phone}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="contact-block box-shadow-nn d-flex mrb-30">
                        <div class="contact-icon">
                            <i class="webex-icon-envelope"></i>
                        </div>
                        <div class="contact-details mrl-30">
                            <h5 class="icon-box-title mrb-10">Email</h5>
                            <p class="mrb-0">{{$system->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
@section('js')
	
@endsection