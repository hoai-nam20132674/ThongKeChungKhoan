
@extends('front-end.layout.default')
@section('meta')
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<title>{{$project->title}}</title>
	<meta name="description" content="{{$project->seo_description}}">
	<meta name="keywords" content="{{$project->seo_keyword}}"/>		
	<link rel="canonical" href="{{$system->website}}/{{$project->url}}"/>
	<meta name='revisit-after' content='1 days' />
	<meta name="robots" content="noodp,index,follow" />
	<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$project->title}}">
	<meta property="og:image" content="{{asset('uploads/images/projects/'.$project->avata)}}">
	<meta property="og:image:secure_url" content="{{asset('uploads/images/projects/'.$project->avata)}}">
	<meta property="og:description" content="{{$project->seo_description}}">
	<meta property="og:url" content="{{$system->website}}/{{$project->url}}">
	<meta property="og:site_name" content="{{$system->name}}">
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
                        
                        <li>
                            <a itemprop="url" href="/du-an" title="Tin tức"><span itemprop="title">Dự án thực tế</span></a> 
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </li>
                        <li><strong><span itemprop="title">{{$project->name}}</span></strong></li>
                        
                    </ul>
                    <div class="title-page ">{{$project->title}}</div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container article-wraper">
    <div class="row flex-wrap">     
        <section class="right-content col-lg-9 col-md-9 ">
            <article class="article-main bg-grey" itemscope itemtype="http://schema.org/Article">
              

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="title-head hidden" itemprop="name">{{$project->title}}</h1>
                        
                        <div class="article-details">
                            <div class="article-image hidden">
                                <a href="/dai-du-an-nha-may-nuoc-5-000-ty-dong-chu-dau-tu-tran-tinh-nguyen-nhan-dau-tu-dat-do">
                                    
                                    <img itemprop="image" class="img-fluid" src="//bizweb.dktcdn.net/100/360/494/articles/3-1567327446911.jpg?v=1567567800747" alt="Đại dự án nhà máy nước 5.000 tỷ đồng: Chủ đầu tư trần tình nguyên nhân đầu tư đắt đỏ">
                                    
                                </a>
                            </div>                          
                            <div class="article-content" itemprop="description">
                                <div class="rte">       
                                    {!!$project->content!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-12">
                        





<div class="social-media" data-permalink="{{$project->url}}">
    <label>Chia sẻ: </label>
    
    <a target="_blank" href="//www.facebook.com/sharer.php?u={{$system->website}}/{{$project->url}}" class="share-facebook" title="Chia sẻ lên Facebook">
        <i class="fa fa-facebook-official"></i>
    </a>
    

    
    <a target="_blank" href="//twitter.com/share?url={{$system->website}}/{{$project->url}}" class="share-twitter" title="Chia sẻ lên Twitter">
        <i class="fa fa-twitter"></i>
    </a>
    

    
    <a target="_blank" href="//pinterest.com/pin/create/button/?url={{$system->website}}/{{$project->url}}&amp;media={{asset('uploads/images/projects/avatas/'.$project->avata)}}" class="share-pinterest" title="Chia sẻ lên pinterest">
        <i class="fa fa-pinterest"></i>
    </a>
    

    

    
    <a target="_blank" href="//plus.google.com/share?url={{$system->website}}/{{$project->url}}" class="share-google" title="+1">
        <i class="fa fa-google-plus"></i>
    </a>
    
</div>
                    </div>
                    
                    
                     
                    <div class="col-xs-12">
                        

                        <form accept-charset="utf-8" action="/posts/dai-du-an-nha-may-nuoc-5-000-ty-dong-chu-dau-tu-tran-tinh-nguyen-nhan-dau-tu-dat-do/comments" id="article_comments" method="post">
						<input name="FormType" type="hidden" value="article_comments" />
						<input name="utf8" type="hidden" value="true" /> 

                        

                        

                        <div class="col-lg-12">
                            <div class="form-coment margin-bottom-30">
                                <div class="row">
                                    <div class="">
                                        <h5 class="title-form-coment">VIẾT BÌNH LUẬN CỦA BẠN:</h5>
                                    </div>
                                    
                                    
                                </div>
                            </div> <!-- End form mail -->
                        </div>
                        </form>
                    </div>
                    
                </div>              
            </article>
        </section>
        @include('front-end.layout.sidebar')
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