
@extends('front-end.layout.default')
@section('meta')
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">           
    <title>{{$system->title}}</title>
    <meta name="description" content="{{$system->seo_description}}">
    <meta name="keywords" content="{{$system->seo_keyword}}"/>      
    <link rel="canonical" href="{{$system->website}}"/>
    <meta name='revisit-after' content='1 days' />
    <link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{$system->title}}">
    @if(isset($sliders))
    <meta property="og:image" content="{{asset('uploads/images/sliders/'.$sliders[0]->url)}}">
    @endif
    <meta property="og:image:secure_url" content="">
    <meta property="og:description" content="{{$system->seo_description}}">
    <meta property="og:url" content="{{$system->website}}">
    <meta property="og:site_name" content="{{$system->name}}">
    <style type="text/css">
        /*css popup*/
        .background-popup {
            width: 100%; 
            height: 10000px; 
            background-color: #000; 
            opacity: 0.7; 
            position: fixed; 
            top: 0px; 
            z-index: 10000;
        }
        .popup {
            width: 700px; 
            /*height: 500px; */
            position: fixed; 
            top: 25%; 
            left: 25%; 
            z-index: 20000; 
            top: 50%; 
            left: 50%; 
            margin-left: -350px; 
            margin-top: -250px;
            background-color: #086748;
        }
        .close-popup {
            position: absolute; 
            right: -50px; 
            top: -50px;
        }
        .close-popup a {
            color: red; 
            font-size: 40px; 
            font-weight: 800;

        }

        #Snow {
          position: absolute;
        }

        .hoa-dao-left {
            position: fixed;
            top: 50px;
            /*left: 0px;*/
            transform: translateX(-100%);
        }
        .hoa-dao-right {
            position: fixed;
            top: 50px;
            /*right: 0px;*/
            transform: translateX(1200px);
        }
        @media (max-width: 768px) {
            .popup {
                width: 340px; 
                /*height: 340px; */
                position: fixed; 
                top: 25%; 
                left: 25%; 
                z-index: 20000; 
                top: 50%; 
                left: 50%; 
                margin-left: -170px; 
                margin-top: -170px;
            }
            .close-popup {
                position: absolute; 
                right: 0px; 
                top: -50px;
            }
            .hoa-dao-left {
                display: none;
            }
            .hoa-dao-right {
                display: none;
            }
        }
        /*end css popup*/
    </style>
@endsection
@section('css')
    <!-- Custom Css -->
    <!-- End Custom Css -->
@endsection
@section('content')
    @if(isset($popup))
    <!-- Popup -->
    <div class="main-popup">

        <div class="background-popup">
            
        </div>
        <div class="popup">
            <div class="close-popup">
                <a href="#" title="ĐÓNG">[X]</a>
                
            </div>
            <a target="{{$popup->target}}" href="{{$popup->href}}">
                <img src="{{asset('uploads/images/popups/'.$popup->url)}}" alt="" width="100%">
            </a>
            
        </div>
    </div>
    <!-- Popup -->
    @endif
    <!-- Home Slider Start -->
    <section class="banner-section">
        <div class="home-carousel owl-theme owl-carousel">
            @foreach($sliders as $slider)
            <div class="slide-item">
                <div class="image-layer" data-background="{{asset('uploads/images/sliders/'.$slider->url)}}"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-xl-12 col-lg-12 col-md-12 content-column">
                            <div class="content-box">
                                <h1>{{$slider->title}}</h1>
                                <p>{{$slider->description}}</p>
                                <div class="btn-box">
                                    <a href="{{$slider->href}}" target="{{$slider->target}}" class="cs-btn-one btn-primary-color">XEM CHI TIẾT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Home Slider End -->
    <!-- About Title Section Start -->
    <section class="about-section bg-silver-light pdt-110 pdb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-6">
                    <div class="about-us-wrapper">
                        <h6 class="text-primary-color side-line-left mrb-15">An toàn tin cậy</h6>
                        <h2>Đơn vị cung cấp dịch vụ vận chuyển an toàn tin cậy hàng đầu Việt Nam</h2>
                    </div>
                </div>
                <div class="col-md-12 col-xl-6">
                    <p class="content-border-left mrt-30">Bằng sự nhiệt thành và tâm huyết, chúng tôi chủ động lắng nghe để thấu hiểu và hoàn thiện dịch vụ, hướng tới mục tiêu đáp ứng ngày càng tốt hơn những mong muốn chính đáng của Quý Khách hàng...</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Title Section End -->
    <!-- About Section Start -->
    <section class="about-section anim-object pdt-0 pdb-170 pdb-lg-110" data-background="images/bg/abs-bg1.png">
        <div class="container">
            <div class="row mrb-80 align-items-center">
                <div class="col-md-12 col-xl-6">
                    <div class="row mrt-50">
                        <div class="col-md-6 col-xl-6">
                            <div class="about-feature-box">
                                <div class="about-feature-box-icon">
                                    <span class="webexflaticon flaticon-delivery-truck-1"></span>
                                </div>
                                <div class="about-feature-box-content">
                                    <div class="title">
                                        <a href="#"><h3>Giao Nhanh chóng</h3></a>
                                    </div>
                                    <div class="para">
                                        <p>Hệ thống trang thiết bị hiện đại, kho bãi rộng tại các đầu cầu trung chuyển Việt - Trung thuận tiện cho quá trình giao vận nhanh chóng</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-6">
                            <div class="about-feature-box">
                                <div class="about-feature-box-icon">
                                    <span class="webexflaticon flaticon-globe"></span>
                                </div>
                                <div class="about-feature-box-content">
                                    <div class="title">
                                        <a href="#"><h3>Quản lý thuận tiện</h3></a>
                                    </div>
                                    <div class="para">
                                        <p>Hệ thống công nghệ hiện đại, theo dõi đơn hàng online, giúp Quý khách tự động tính cước phí và theo dõi vận đơn 24/7</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="about-image-block mrt--110 mrt-lg-0 mrr-30 mrr-lg-0">
                        <img class="img-full js-tilt" src="{{asset('images/courier-man.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12 col-xl-6">
                    <div class="about-image-box mrr-60 mrr-lg-0 mrb-lg-110">
                        
                        <img class="about-image2 img-full" src="{{asset('images/04.jpg')}}" alt="">
                        <div class="experience"><h4>10+</h4><p>Năm kinh nghiệm trong lĩnh vực vận chuyển hàng hóa</p></div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-6 pdl-60">
                    <h5 class="side-line-left text-primary-color mrb-15">Tôn Chỉ - Cam Kết</h5>
                    <h2 class="text-uppercase mrb-30">Không ngừng cố gắng và hoàn thiện</h2>
                    <ul class="order-list primary-color mrb-40">
                        <li>Vận chuyển an toàn nhanh chóng</li>
                        <li>Tiết kiệm chi phí tối đa</li>
                        <li>Kho hàng nội địa Trung Quốc</li>
                        <li>Chăm sóc 24/7</li>
                    </ul>
                    <p class="mrb-40">Với nhiều năm kinh nghiệm trong lĩnh vực vận chuyển hàng hóa, Chúng tôi được rất nhiều khách hàng lựa chọn là đối tác vận chuyển hàng từ Trung Quốc về Việt Nam, các sản phẩm được mua từ các sàn thương mại điện tử như Taobao, 1688, Tmall,... hoặc từ các chợ, các nhà sản xuất với số lượng lớn lên đến hàng ngàn Kg.</p>
                    <div class="d-inline d-md-flex align-items-center mt-40">
                        <a href="page-about.html" class="animate-btn mrr-50 mrb-sm-30">Read More</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->
    <!-- Service Titile Area Start -->
    <section class="bg-primary-color pdt-110 pdb-150">
        <div class="section-title mrb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-title-left-part text-xl-right text-left mrb-20 mrb-sm-30">
                            <div class="section-left-sub-title mb-20">
                                <h5 class="sub-title text-white">Tất cả dịch vụ</h5>
                            </div>
                            <h2 class="title text-white">Dịch vụ cung cấp</h2>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col-lg-6">
                        <div class="section-title-right-part">
                            <p class="text-white">Dịch vụ vận chuyển hàng hoá từ Trung Quốc về Việt Nam với tiêu chí: nhanh chóng, an toàn, chuyên nghiệp và tiết kiệm tối đa chi phí cho khách hàng và những công cụ theo dõi vận đơn, thông báo đơn hàng trên hệ thống thông minh tự động hoá giúp khách hàng chủ động trong nguồn hàng.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Titile Area End -->
    <!-- Service Content Area Start -->
    <section class="service-content-area pdb-200">
        
        <div class="section-content">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($services as $service)
                    <div class="col-xl-4 col-lg-6">
                        <div class="service-item-box box-shadow-nn mrt--110 mrb-md-0">
                            <div class="service-item-thumb">
                                <img class="img-full" src="{{asset('uploads/images/services/'.$service->avata)}}" alt="">
                                <div class="service-item-icon">
                                    <i class="far fa-check-circle"></i>
                                </div>
                            </div>
                            <div class="service-item-content">
                                <div class="service-item-title">
                                    <h3 class="mrb-15">{{$service->name}}</h3>
                                </div>
                                <div class="service-item-para">
                                    <p>{{$service->seo_description}}</p>
                                </div>
                                <div class="service-item-link">
                                    <a class="text-uppercase text-primary-color" href="/{{$service->url}}">XEM CHI TIẾT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row mrt-60">
                    <div class="col-xl-12 text-center">
                        <h5>Xem thêm các dịch vụ khác của chúng tôi <span><a href="#" class="text-underline text-primary-color">tại đây</a></span></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Content Area End -->
    <!-- Divider Section Start -->
    <section class="person-object pdt-110 pdb-80" data-background="images/bg/1.jpg" data-overlay-dark="1">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5 mrb-sm-110 mrb-lg-30">
                        <div class="request-a-call-back-form bg-white mrt--235 mrl--160">
                            <h2 class="mrt-0 mrb-40 solid-side-line">Gửi yêu cầu tư vấn</h2>
                            <form action="addContact" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="name" required placeholder="Họ và tên" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="phone" required placeholder="Số điện thoại" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <select name="message" class="custom-select-categories">
                                                <option value="Chưa chọn dịch vụ">Chọn loại dịch vụ muốn tư vấn</option>
                                                @foreach($services as $service)
                                                    <option value="{{$service->name}}">{{$service->name}}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mrb-30">
                                            <button type="submit" class="cs-btn-one btn-primary-color btn-md">Gửi yêu cầu</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-7">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="funfact js-tilt mrb-30">
                                    <div class="icon">
                                        <span class="webexflaticon flaticon-delivery-truck-1"></span>
                                    </div>
                                    <h2 class="counter">5680</h2>
                                    <h5 class="title">Gói hàng được giao</h5>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="funfact js-tilt mrb-30">
                                    <div class="icon">
                                        <span class="webexflaticon flaticon-globe"></span>
                                    </div>
                                    <h2 class="counter">1656</h2>
                                    <h5 class="title">Khách hàng</h5>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="funfact js-tilt mrb-30">
                                    <div class="icon">
                                        <span class="webexflaticon flaticon-building"></span>
                                    </div>
                                    <h2 class="counter">2680</h2>
                                    <h5 class="title">Tấn hàng hóa</h5>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="funfact js-tilt mrb-30">
                                    <div class="icon">
                                        <span class="webexflaticon flaticon-man-2"></span>
                                    </div>
                                    <h2 class="counter">1450</h2>
                                    <h5 class="title">Khách hàng hài lòng</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Divider Section End -->
    <!-- Team Section Start -->
    <section class="pdt-110 pdb-80" data-background="images/bg/abs-bg2.png">
        <div class="section-title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-title-left-part title-left-part-primary-color  text-xl-right text-left mb-md-3 mrb-sm-30">
                            <div class="section-left-sub-title mb-20">
                                <h5 class="text-primary-color mrb-15">Dịch vụ chuyên nghiệp</h5>
                            </div>
                            <h2 class="title">Đội ngũ vận hàng</h2>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col-lg-6">
                        <div class="section-title-right-part">
                            <p>Với đội ngũ vận hàng chuyên nghiệp nhiệt tình và hệ thống trang thiết bị hiện đại, chúng tôi cam kết đem lại cho quý khách dịch vụ hoàn hảo nhất</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="team-block box-shadow-nn mrb-30">
                            <div class="team-upper-part">
                                <img class="img-full" src="{{asset('images/nhanvien.png')}}" alt="">
                                <!-- <ul class="social-list">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                </ul> -->
                            </div>
                            <div class="team-bottom-part">
                                <h4 class="team-title mrb-5"><a >Nhân viên</a></h4>
                                <h6 class="designation f-weight-500 text-gray">Chuyên nghiệp nhiệt tình</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="team-block box-shadow-nn mrb-30">
                            <div class="team-upper-part">
                                <img class="img-full" src="{{asset('images/trangthietbi.jpg')}}" alt="">
                                <!-- <ul class="social-list">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                </ul> -->
                            </div>
                            <div class="team-bottom-part">
                                <h4 class="team-title mrb-5"><a>Trang thiết bị</a></h4>
                                <h6 class="designation f-weight-500 text-gray">Hiện đại hiệu suất cao</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="team-block box-shadow-nn mrb-30">
                            <div class="team-upper-part">
                                <img class="img-full" src="{{asset('images/khobai.jpg')}}" alt="">
                                <!-- <ul class="social-list">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                </ul> -->
                            </div>
                            <div class="team-bottom-part">
                                <h4 class="team-title mrb-5"><a>Hạ tầng</a></h4>
                                <h6 class="designation f-weight-500 text-gray">Kho bãi rộng nhiều địa điểm</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
    
    
    <!-- Testimonials Section Start -->
    <section class="request-a-call-back pdt-80 pdb-110 pdb-lg-70" data-background="images/pattern/2.png">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-8">
                        <div class="title-box-center">
                            <h5 class="sub-title-center text-primary-color line-top-center mrb-15">Phản hồi từ khách hàng</h5>
                            <h2 class="title">Khách Hàng Nói Gì Về Chúng Tôi?</h2>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="owl-carousel testimonial-items-3col mrb-lg-40">
                        <div class="testimonial-item">
                            <span class="quote-icon fas fa-quote-right"></span>
                            <div class="testimonial-thumb">
                                <img src="{{asset('images/testimonial-img2.jpg')}}" alt="">
                            </div>
                            <h4 class="client-name">Aurther Maxwell</h4>
                            <h6 class="client-designation mrb-10">CEO, Apple Inc.</h6>
                            <ul class="star-rating mrb-30">
                                <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                <li><i class="webex-icon-star-half text-primary-color"></i></li>
                                <li><i class="webex-icon-star-empty text-primary-color"></i></li>
                            </ul>
                            <div class="testimonial-content">
                                <p class="comments">Lorem ipsum dolor consectetur adipisicing elit oluptatibus repellendus iusto quis harum laboriosam nostrum unde distinctio</p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <span class="quote-icon fas fa-quote-right"></span>
                            <div class="testimonial-thumb">
                                <img src="{{asset('images/testimonial-img2.jpg')}}" alt="">
                            </div>
                            <h4 class="client-name">Aurther Maxwell</h4>
                            <h6 class="client-designation mrb-20">CEO, Apple Inc.</h6>
                            <ul class="star-rating mrb-30">
                                <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                <li><i class="webex-icon-star-half text-primary-color"></i></li>
                                <li><i class="webex-icon-star-empty text-primary-color"></i></li>
                            </ul>
                            <div class="testimonial-content">
                                <p class="comments">Lorem ipsum dolor consectetur adipisicing elit oluptatibus repellendus iusto quis harum laboriosam nostrum unde distinctio</p>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <span class="quote-icon fas fa-quote-right"></span>
                            <div class="testimonial-thumb">
                                <img src="{{asset('images/testimonial-img2.jpg')}}" alt="">
                            </div>
                            <h4 class="client-name">Aurther Maxwell</h4>
                            <h6 class="client-designation mrb-20">CEO, Apple Inc.</h6>
                            <ul class="star-rating mrb-30">
                                <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                <li><i class="webex-icon-star-full text-primary-color"></i></li>
                                <li><i class="webex-icon-star-half text-primary-color"></i></li>
                                <li><i class="webex-icon-star-empty text-primary-color"></i></li>
                            </ul>
                            <div class="testimonial-content">
                                <p class="comments">Lorem ipsum dolor consectetur adipisicing elit oluptatibus repellendus iusto quis harum laboriosam nostrum unde distinctio</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section End -->
    <!-- Divider Section Start -->
    <section class="pdt-90 bg-pos-center-center" data-background="images/bg/3.jpg" data-overlay-dark="6">
        <div class="section-content">
            <div class="container-fluid">
                <div class="row justify-content-start">
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="about-image-block-3">
                            <img class="left-infinite-img img-full" src="{{asset('images/person2.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4 p-md-5 pd-sm-25">
                        <h5 class="mrb-15 text-white side-line-left">Tại sao nên lựa chọn chúng tôi?</h5>
                        <h2 class="text-white mrb-30">Cam kết chất lượng dịch vụ</h2>
                        <p class="text-white ">Với hệ thống kho hàng lớn và rộng khắp tại Quảng Châu, Bằng Tường Đông Hưng và Vân Nam, chúng tôi tự tin mang lại một dịch vụ vận chuyển Trung Việt tối ưu nhất cho Quý khách hàng</p>
                        <p class="text-white mrb-60">Chính sách chiết khấu, giảm giá cho khách hàng có nhu cầu vận chuyển thường xuyên hoặc khối lượng hàng lớn.</p>
                        <div class="video-popup-left mrb-lg-60">
                <a class="popup-youtube-left" href="https://www.youtube.com/watch?v=Fvae8nxzVz4"><i class="fas fa-play"></i></a>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Divider Section End -->
    <!-- News Section Start -->
    <section class="pdt-110 pdb-80">
        <div class="section-title mrb-30 mrb-md-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-6">
                        <h5 class="mrb-15 text-primary-color side-line-left">Tin mới</h5>
                        <h2 class="mrb-30">Tin Tức Mới Cập Nhật</h2>
                    </div>
                    <div class="col-lg-4 col-xl-6 align-self-center text-left text-lg-right">
                        <a href="#" class="cs-btn-one btn-primary-color btn-md">Xem tất cả</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($blogs as $item)
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        @include('front-end.layout.blog-item')
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- News Section End -->   

@endsection
@section('js')
    <!-- Custom Js -->
    <!-- End Custom Js -->
    <script type="text/javascript">
        $(document).ready(function(){
            
            $(".close-popup").click(function(){
                $(".main-popup").css("display", "none");
            });
            $(".background-popup").click(function(){
                $(".main-popup").css("display", "none");
            });
        });
    </script>
@endsection
