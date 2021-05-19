
@extends('front-end.layout.default')
@section('meta')
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<title>{{$service->title}}</title>
	<meta name="description" content="{{$service->seo_description}}">
	<meta name="keywords" content="{{$service->seo_keyword}}"/>		
	<link rel="canonical" href="{{$system->website}}/{{$service->url}}"/>
	<meta name='revisit-after' content='1 days' />
	<meta name="robots" content="noodp,index,follow" />
	<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$service->title}}">
	<meta property="og:image" content="{{asset('uploads/images/services/'.$service->avata)}}">
	<meta property="og:image:secure_url" content="{{asset('uploads/images/services/'.$service->avata)}}">
	<meta property="og:description" content="{{$service->seo_description}}">
	<meta property="og:url" content="{{$system->website}}/{{$service->url}}">
	<meta property="og:site_name" content="{{$system->name}}">
@endsection
@section('css')
	
@endsection
@section('content')
	<!-- Page Title Start -->
    <section class="page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="page-title-content">
                        <h3 class="title text-white">{{$service->name}}</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">TRANG CHỦ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$service->name}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Title End -->
    <!-- Service Details Section Start -->
    <section class="service-details-page pdt-110 pdb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="service-detail-text">
                        <div class="blog-standared-img slider-blog mrb-35">
                            <img class="img-full" src="{{asset('uploads/images/services/'.$service->avata)}}" alt="">
                        </div>
                        <h3 class="mrb-20">Thông Tin Dịch Vụ</h3>
                        {!!$service->content!!}
                        <div class="service-details-content">
                        
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="mrb-30">Câu Hỏi Thường Gặp</h3>
                                </div>
                                <div class="col-lg-12">
                                    <div class="faq-block">
                                        <div class="accordion">
                                            <div class="accordion-item">
                                                <div class="accordion-header active">
                                                    <h5 class="title">Câu hỏi 1?</h5>
                                                    <span class="fas fa-arrow-right"></span>
                                                </div>
                                                <div class="accordion-body">
                                                    <p>Trả lời: Câu trả lời</p>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <h5 class="title">Câu hỏi 2?</h5>
                                                    <span class="fas fa-arrow-right"></span>
                                                </div>
                                                <div class="accordion-body">
                                                    <p>Trả lời: Câu trả lời</p>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <h5 class="title">Câu hỏi 3?</h5>
                                                    <span class="fas fa-arrow-right"></span>
                                                </div>
                                                <div class="accordion-body">
                                                    <p>Trả lời: Câu trả lời</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div style="width: 100%;padding: 10px 20px; background: #bdbdbd;text-align:center;font-weight: 800; color: #060c3e">DỊCH VỤ KHÁC</div>
                    <div class="service-nav-menu mrb-30">
                        <div class="service-link-list mb-30">

                            <ul class="">
                                <!-- <li class="active"><a href="service-air-freight.html"><i class="fa fa-chevron-right"></i>Air Freight</a></li> -->
                                @foreach($services as $s)
                                <li><a href="/{{$s->url}}"><i class="fa fa-chevron-right"></i>{{$s->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <div class="brochure-download">
                            <h4 class="mrb-40 widget-title">Brochure Download</h4>
                            <p>Please click download button for getting brochure file</p>
                            <a href="#" class="cs-btn-one"><span class="far fa-file-pdf mrr-10"></span> Download PDF</a>
                        </div>
                    </div>
                    <div class="sidebar-widget bg-primary-color" data-background="images/bg/abs-bg4.png">
                        <div class="contact-information">
                            <h3 class="text-white mrb-20">Thông tin liên hệ</h3>
                            <p class="text-white">Nếu bạn có bất cứ thắc mắc nào về dịch vụ của chúng tôi vui lòng liên hệ</p>
                            <ul class="list-items text-white mrb-20">
                                <li><span class="fas fa-phone alt mrr-10 text-white"></span>{{$system->phone}}</li>
                                <li><span class="fas fa-globe mrr-10 text-white"></span>{{$system->address}}</li>
                                <li><span class="fas fa-envelope mrr-10 text-white"></span>{{$system->email}}</li>
                            </ul>
                            <a href="tel:{{$system->phone}}" class="cs-btn-one btn-light mrt-15"><span class="fas fa-phone alt mrr-10"></span>GỌI NGAY</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Service Details Section End -->
@endsection
@section('js')
	
@endsection