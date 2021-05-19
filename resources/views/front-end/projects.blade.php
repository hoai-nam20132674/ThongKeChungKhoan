@extends('front-end.layout.default')
@section('meta')
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<title>{{$project_cate->title}}</title>
	<meta name="description" content="{{$project_cate->seo_description}}">
	<meta name="keywords" content="{{$project_cate->seo_keyword}}"/>		
	<link rel="canonical" href="{{$system->website}}/{{$project_cate->url}}"/>
	<meta name='revisit-after' content='1 days' />
	<meta name="robots" content="noodp,index,follow" />
	<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$project_cate->title}}">
	<meta property="og:image" content="{{asset('uploads/images/projects/'.$project_cate->avata)}}">
	<meta property="og:image:secure_url" content="{{asset('uploads/images/projects/'.$project_cate->avata)}}">
	<meta property="og:description" content="{{$project_cate->seo_description}}">
	<meta property="og:url" content="{{$system->website}}/{{$project_cate->url}}">
	<meta property="og:site_name" content="{{$project_cate->name}}">
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
	<div class="blog_template">
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
                        
                        
                        <li><strong ><span itemprop="title">{{$project_cate->name}}</span></strong></li>
                        
                        
                    </ul>
                    <div class="title-page ">{{$project_cate->title}}</div>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="container">
        <div class="row flex-wrap">
            <section class="right-content col-lg-9 col-md-9 ">          
                <div class="box-heading hidden">
                    <h1 class="title-head">{{$project_cate->title}}</h1>
                </div>
                
                
                <section class="list-blogs blog-main flex-margin-20">
                    @foreach($pjs as $pj)
              
                        <article class="blog-item">
                            <div class="blog-item-thumbnail">                       
                                <a href="/{{$pj->url}}" title="{{$pj->title}}">
                                    
                                    <picture>
                                        
                                        <img src="{{asset('uploads/images/projects/avatas/'.$pj->avata)}}" style="max-width:100%;" class="img-responsive" alt="{{$pj->title}}">
                                    </picture>
                                    
                                </a>
                            </div>
                            
                            <div class="blog-item-info">
                                <a href="/{{$pj->url}}" title="{{$pj->title}}"><h3 class="blog-item-name">{{$pj->name}}</h3></a>
                                

                            </div>
                        </article>
                    @endforeach
                    <div class="text-xs-left text-center d-block-100 col-md-12">
                        

                    </div>
                </section>
                
                
            </section>
            
            @include('front-end.layout.sidebar')
            

        </div>
    </div>
</div>

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
@endsection