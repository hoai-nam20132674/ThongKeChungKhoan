
@extends('front-end.layout.default')
@section('meta')
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<title>{{$product->title}}</title>
	<meta name="description" content="{{$product->seo_description}}">
	<meta name="keywords" content="{{$product->seo_keyword}}"/>		
	<link rel="canonical" href="{{$system->website}}/{{$product->url}}"/>
	<meta name='revisit-after' content='1 days' />
	<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$product->title}}">
	<meta property="og:image" content="{{asset('uploads/images/products/avata'.$product->avata)}}">
	<meta property="og:description" content="{{$product->seo_description}}">
	<meta property="og:url" content="{{$system->website}}/{{$product->url}}">
	<meta property="og:site_name" content="{{$product->name}}">
@endsection
@section('css')
	<!-- Build Main CSS --> 
    <link href="{{asset('css/plugin.scss.css')}}" rel="stylesheet" type="text/css" /> 
    <link href="{{asset('css/base.scss.css')}}" rel="stylesheet" type="text/css" />       
    <link href="{{asset('css/style.scss.css')}}" rel="stylesheet" type="text/css" />  
    <link href="{{asset('css/lightbox.css')}}" rel="stylesheet" type="text/css" />
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
                                <a property="item" typeof="WebPage" href="/" title="Trang ch???" ><span property="name">Trang ch???</span></a>  
                                <meta property="position" content="1">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </li>
                            <li class="home" property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" href="/san-pham" title="Trang ch???" ><span property="name">S???n ph???m</span></a>  
                                <meta property="position" content="1">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </li>
                            
                            <li property="itemListElement" typeof="ListItem">
                                <strong property="item" typeof="WebPage"><span property="name">{{$product->name}}</span></strong>
                                <meta property="position" content="3">
                            <li>
                            
                        </ul>
                        <div class="title-page hidden">{{$product->name}}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="product" itemscope itemtype="https://schema.org/Product">
    

    <div class="container">
        <div class="row">
            <div class="col-lg-12 details-product">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-5 col-md-5">
                                <div class="relative product-image-block no-thum">
                                    <div class="large-image">
                                        <a href="{{asset('uploads/images/products/avatas/'.$product->avata)}}" data-rel="prettyPhoto[product-gallery]">
                                            
                                            <img id="zoom_01" class="img-responsive center-block has-zoom" src="{{asset('uploads/images/products/avatas/'.$product->avata)}}" alt="{{$product->title}}">
                                            
                                        </a>
                                        <div class="hidden">
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 details-pro">
                                <h1 class="title-head" itemprop="name">{{$product->name}}</h1>
                                <div class="details-sticky details-pro">
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <link itemprop="availability" href="http://schema.org/InStock" />
                                        <div class="information">
                                            <p><span>Th????ng hi???u:</span> ??ang c???p nh???t</p>
                                            <p  class="inventory_quantity">
                                                <span>T??nh tr???ng: </span>

                                                C??n h??ng

                                            </p>

                                        </div>
                                        <div class="price-box clearfix">
                                            
                                            <div class="special-price">
                                            <span class="price product-price">
                                                GI??: Li??n h???
                                            </span>
                                                <meta itemprop="price" content="">
                                                <meta itemprop="priceCurrency" content="VND"></div> <!-- Gi?? -->
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="product-summary">
                                    <div class="rte margin-bottom-0">
                                     {!!$product->seo_description!!}
                                    </div>
                                </div>
                                <br>
                                <button type="botton" class="btn btn-lg btn-gray btn-cart btn_buy add_to_cart">
                                    <span><i class="fa fa-phone-square" aria-hidden="true"></i> Li??n h??? ?????t h??ng</span>
                                </button>
                                

                                
                                
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                         <div class="shipping-product">
                            
                            
                            
                            
                             <div class="item">
                                <span class="icon"><i class="fa fa-truck"></i></span>
                                <div class="text">
                                    <h3>V???n chuy???n mi???n ph??</h3>
                                    <p>H??? tr??? v???n chuy???n mi???n ph?? cho ????n h??ng tr??n 20.00.000 VN??</p>
                                </div>
                            </div>
                            
                            
                            
                            
                             <div class="item">
                                <span class="icon"><i class="fa fa-money"></i></span>
                                <div class="text">
                                    <h3>Thanh to??n nhanh</h3>
                                    <p>H??? tr??? thanh to??n ti???n m???t, th??? visa t???t c??? c??c ng??n h??ng</p>
                                </div>
                            </div>
                            
                            
                            
                            
                             <div class="item">
                                <span class="icon"><i class="fa fa-clock-o"></i></span>
                                <div class="text">
                                    <h3>Ch??m s??c 24/7</h3>
                                    <p>H??? tr??? ch??m s??c kh??ch h??ng 24/7</p>
                                </div>
                            </div>
                            
                            
                            
                            
                             <div class="item">
                                <span class="icon"><i class="fa fa-compass"></i></span>
                                <div class="text">
                                    <h3>Uy t??n th????ng hi???u</h3>
                                    <p>TAT-HOME l?? th????ng hi???u ???????c y??u th??ch v?? l???a ch???n</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-xs-12 col-lg-12 col-md-12 margin-top-40 margin-bottom-30">
                        <!-- Nav tabs -->
                        <div class="product-tab e-tabs">
                            <ul class="tabs tabs-title clearfix">
                                
                                <li class="tab-link" data-tab="tab-1">
                                    <h4><span>Th??ng tin s???n ph???m</span></h4>
                                </li>
                                
                                
                                <li class="tab-link" data-tab="tab-2">
                                    <h4><span>Ch??nh s??ch</span></h4>
                                </li>
                                
                                
                                <li class="tab-link" data-tab="tab-3">
                                    <h4><span>????nh gi?? s???n ph???m</span></h4>
                                </li>
                                
                            </ul>
                            
                            <div id="tab-1" class="tab-content">
                                {!!$product->content!!}
                            </div>
                            
                            
                            <div id="tab-2" class="tab-content ">
                                <div class="shipping-product">
                            
                            
                            
                            
                                     <div class="item">
                                        <span class="icon"><i class="fa fa-truck"></i></span>
                                        <div class="text">
                                            <h3>V???n chuy???n mi???n ph??</h3>
                                            <p>H??? tr??? v???n chuy???n mi???n ph?? cho ????n h??ng tr??n 20.00.000 VN??</p>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                     <div class="item">
                                        <span class="icon"><i class="fa fa-money"></i></span>
                                        <div class="text">
                                            <h3>Thanh to??n nhanh</h3>
                                            <p>H??? tr??? thanh to??n ti???n m???t, th??? visa t???t c??? c??c ng??n h??ng</p>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                     <div class="item">
                                        <span class="icon"><i class="fa fa-clock-o"></i></span>
                                        <div class="text">
                                            <h3>Ch??m s??c 24/7</h3>
                                            <p>H??? tr??? ch??m s??c kh??ch h??ng 24/7</p>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                     <div class="item">
                                        <span class="icon"><i class="fa fa-compass"></i></span>
                                        <div class="text">
                                            <h3>Uy t??n th????ng hi???u</h3>
                                            <p>TAT-HOME l?? th????ng hi???u ???????c y??u th??ch v?? l???a ch???n</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            
                            <div id="tab-3" class="tab-content">
                                <div id="bizweb-product-reviews" class="bizweb-product-reviews" data-id="15456534">
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                

                
                
                
                <div class="related-product pt-30">
                    <div class="title-text">
                        <h2><a href="/san-pham" title="S???n ph???m li??n quan">S???N PH???M KH??C</a></h2>
                    </div>
                    <div class="products  owl-carousel owl-theme products-view-grid" data-nav="true" data-lg-items="4" data-md-items="4" data-sm-items="3" data-xs-items="3" data-xss-items="2" data-margin="10">
                        @foreach($products as $product)
                            @include('front-end.layout.product-box')
                        @endforeach
                    </div>
                </div>
                

            </div>
        </div>
    </div>
</section>


        <div class="bizweb-product-reviews-module"></div>
@endsection
@section('js')
	<script src="{{asset('js/option-selectors.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/api.jquery.js')}}" type="text/javascript"></script> 

    <!-- Plugin JS -->
    <script src="{{asset('js/plugin.js')}}" type="text/javascript"></script> 
    <script src="{{asset('js/cs.script.js')}}" type="text/javascript"></script>
    
    <!-- Main JS -->    
    <script src="{{asset('js/main.js')}}" type="text/javascript"></script>               
    <script src="{{asset('js/quickview.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.prettyphoto.min005e.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery-prettyphoto-init-min367a.js')}}" type="text/javascript"></script>
        
    <script src="{{asset('js/jquery.elevatezoom308.min.js')}}" type="text/javascript"></script>      

@endsection
