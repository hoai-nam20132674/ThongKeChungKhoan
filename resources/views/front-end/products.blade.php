
@extends('front-end.layout.default')
@section('meta')
	
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<title>{{$product_cate->title}}</title>
	<meta name="description" content="{{$product_cate->seo_description}}">
	<meta name="keywords" content="{{$product_cate->seo_keyword}}"/>		
	<link rel="canonical" href="{{$system->website}}/{{$product_cate->url}}"/>
	<meta name='revisit-after' content='1 days' />
	<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$product_cate->title}}">
	<meta property="og:image" content="{{asset('uploads/images/products/categories/'.$product_cate->avata)}}">
	<meta property="og:description" content="{{$product_cate->seo_description}}">
	<meta property="og:url" content="{{$system->website}}/{{$product_cate->url}}">
	<meta property="og:site_name" content="{{$product_cate->name}}">
@endsection
@section('css')
	<!-- Build Main CSS --> 
    <link href="{{asset('css/plugin.scss.css')}}" rel="stylesheet" type="text/css" /> 
    <link href="{{asset('css/base.scss.css')}}" rel="stylesheet" type="text/css" />       
    <link href="{{asset('css/style.scss.css')}}" rel="stylesheet" type="text/css" />  
            
    <link href="{{asset('css/responsive.scss.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('js/jquery-2.2.3.min.js')}}" type="text/javascript"></script>

@endsection
	
@section('content')
	<section class="bread-crumb">
    <span class="crumb-border"></span>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 a-left">
                <div class="breadcrumb-container">
                    <ul class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">                  
                        <li class="home" property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" href="/" title="Trang chủ" ><span property="name">Trang chủ</span></a>  
                            <meta property="position" content="1">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </li>
                        
                        
                        <li><strong ><span itemprop="title">{{$product_cate->name}}</span></strong></li>
                        
                        
                    </ul>
                    <div class="title-page ">{{$product_cate->name}}</div>
                </div>
            </div>
        </div>
    </div>
</section>  
<div class="container">
    <div class="row flex-wrap">         
       
        <section class="main_container collection col-lg-12 col-md-12">
            <div class="category-products products">
                <h1 class="title-head margin-top-0 hidden">
                    
                    {{$product_cate->name}}
                    
                </h1>
                    
                <div class="sortPagiBar">
                    <div class="row">
                        <div class="col-xs-5 col-md-6 col-sm-6">                        
                            <div class="hidden-xs">
                                <a href="javascript:;" data-view="grid" >
                                    <span class="btn button-view-mode view-mode-grid active ">
                                        <i class="fa fa-th" aria-hidden="true"></i>                 
                                    </span>
                                </a>
                                <a href="javascript:;" data-view="list" onclick="switchView('list')">
                                    <span class="btn button-view-mode view-mode-list ">
                                        <i class="fa fa-th-list" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <div class="tt hidden">
                                    
                                    <div id="ttfix" class="hidden-sm hidden-xs">
                                        Hiển thị <span>1</span> - <span>8</span> trong tổng số <span>8</span> sản phẩm
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-sm-6 text-xs-left text-sm-right">
                            <div id="sort-by">
                                <label class="left">Sắp xếp: </label>
                                <ul>
                                    <li ><span class="val">Mặc định</span>
                                        <ul class="ul_2">
                                            <li><a class="click-change" href="/collections/all">Mặc định</a></li>
                                            <li><a href="javascript:;" onclick="sortby('alpha-asc')">A &rarr; Z</a></li>
                                            <li><a href="javascript:;" onclick="sortby('alpha-desc')">Z &rarr; A</a></li>
                                            <li><a href="javascript:;" onclick="sortby('price-asc')">Giá tăng dần</a></li>
                                            <li><a href="javascript:;" onclick="sortby('price-desc')">Giá giảm dần</a></li>
                                            <li><a href="javascript:;" onclick="sortby('created-desc')">Hàng mới nhất</a></li>
                                            <li><a href="javascript:;" onclick="sortby('created-asc')">Hàng cũ nhất</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <section class="products-view products-view-grid">
                    <div class="row">

                        @foreach($products as $product)                
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">

                                @include('front-end.layout.product-box')          
                            </div>      
                        @endforeach
                    </div>
                    <div class="text-xs-right text-center col-md-12">
                        
                    </div>

                </section>
                
                
            </div>
        </section>
        <div id="open-filters" class="open-filters hidden-lg hidden-md">
            <i class="fa fa-filter"></i>
            <span></span>
        </div>
        <div class="cate-overlay3"></div>
    </div>
</div>
@endsection
@section('js')
	<script src="//bizweb.dktcdn.net/100/360/494/themes/729420/assets/option-selectors.js?1594364082841" type="text/javascript"></script>
    <script src="//bizweb.dktcdn.net/assets/themes_support/api.jquery.js" type="text/javascript"></script> 

    <!-- Plugin JS -->
    <script src="//bizweb.dktcdn.net/100/360/494/themes/729420/assets/plugin.js?1594364082841" type="text/javascript"></script> 
    <script src="//bizweb.dktcdn.net/100/360/494/themes/729420/assets/cs.script.js?1594364082841" type="text/javascript"></script>
    
    <!-- Main JS -->    
    <script src="//bizweb.dktcdn.net/100/360/494/themes/729420/assets/main.js?1594364082841" type="text/javascript"></script>               

    <script src="//bizweb.dktcdn.net/100/360/494/themes/729420/assets/quickview.js?1594364082841" type="text/javascript"></script>
@endsection
