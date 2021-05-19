@extends('front-end.layout.default')
@section('meta')
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<title>{{$blog->title}}</title>
	<meta name="description" content="{{$blog->seo_description}}">
	<meta name="keywords" content="{{$blog->seo_keyword}}"/>		
	<link rel="canonical" href="{{$system->website}}/{{$blog->url}}"/>
	<meta name='revisit-after' content='1 days' />
	<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$blog->title}}">
	<meta property="og:image" content="{{asset('uploads/images/blogs/'.$blog->avata)}}">
	<meta property="og:image:secure_url" content="{{asset('uploads/images/blogs/'.$blog->avata)}}">
	<meta property="og:description" content="{{$blog->seo_description}}">
	<meta property="og:url" content="{{$system->website}}/{{$blog->url}}">
	<meta property="og:site_name" content="{{$blog->name}}">
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
                        <h3 class="title text-white">{{$blog->title}}</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">TRANG CHỦ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$blog->title}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Title End -->
    <!-- Service Details Section Start -->
    <section class="blog-single-news pdt-110 pdb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="single-news-details news-wrapper mrb-30">
                        <div class="single-news-content">
                            <div class="news-thumb">
                                <img src="{{asset('uploads/images/blogs/'.$blog->avata)}}" class="img-full" alt="blog">
                                
                            </div>
                            <div class="news-description">
                                {!!$blog->content!!}
                            </div>
                            <div class="single-news-tag-social-area clearfix">
                                <div class="single-news-tags f-left f-left-none mrb-lg-30">
                                    <h5 class="mrb-15">Thẻ tag:</h5>
                                    <ul class="list">
                                        <li><a href="#">tin tức</a></li>
                                        <li><a href="#">nổi bật</a></li>
                                        
                                    </ul>
                                </div>
                                <div class="single-news-share text-left text-xl-right">
                                    <h5 class="mrb-15">Chia sẻ:</h5>
                                    <ul class="social-icons">
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="single-post-navigation">
                                <div class="navigation-links">
                                    <div class="nav-previous f-left">
                                        <a href="#" class="text-primary-color f-weight-600"><i class="fa fa-angle-left"></i> Prev Post</a>
                                    </div>
                                    <div class="nav-next text-right">
                                        <a href="#" class="text-primary-color f-weight-600">Next Post <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div> -->
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 sidebar-right">
                    <aside class="news-sidebar-widget">
                        
                        
                        <div class="widget sidebar-widget widget-popular-posts">
                            <h4 class="mrb-30 single-blog-widget-title">Bài viết mới</h4>
                            @foreach($blogs as $item)
                            <div class="single-post media mrb-20">
                                
                                <div class="post-content media-body align-self-center">
                                    <h5 class="mrb-5"><a href="/{{$item->url}}">{{$item->title}}</a></h5>
                                    @php
                                        Carbon\Carbon::setLocale('vi');
                                        $now = \Carbon\Carbon::now();
                                    @endphp
                                    <span class="post-date"><i class="far fa-clock mrr-5"></i>{{\Carbon\Carbon::createFromTimestamp(strtotime($item->created_at))->diffForHumans($now)}}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->
@endsection
@section('js')
	
@endsection