@extends('front-end.layout.default')
@section('meta')
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<title>{{$categorie->title}}</title>
	<meta name="description" content="{{$categorie->seo_description}}">
	<meta name="keywords" content="{{$categorie->seo_keyword}}"/>		
	<link rel="canonical" href="{{$system->website}}/{{$categorie->url}}"/>
	<meta name='revisit-after' content='1 days' />
	<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="{{$categorie->title}}">
	<meta property="og:image" content="{{asset('uploads/images/blogs/categories/'.$categorie->avata)}}">
	<meta property="og:image:secure_url" content="{{asset('uploads/images/blogs/categories/'.$categorie->avata)}}">
	<meta property="og:description" content="{{$categorie->seo_description}}">
	<meta property="og:url" content="{{$system->website}}/{{$categorie->url}}">
	<meta property="og:site_name" content="{{$categorie->name}}">
@endsection
@section('css')
	
@endsection
@section('content')
    @php
        $items = $blogs;
    @endphp
	<!-- Page Title Start -->
    <section class="page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="page-title-content">
                        <h3 class="title text-white">{{$categorie->title}}</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">TRANG CHỦ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$categorie->title}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Title End -->
    <!-- News Section Start -->
    <section class="pdt-110 pdb-80">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    @foreach($blogs as $item)
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        @include('front-end.layout.blog-item')
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <nav class="pagination-nav pdt-30">
                            <ul class="pagination-list">
                                @if($items->currentPage() != 1)
                                    <li class="pagination-left-arrow">
                                        <a href="{{$items->url($items->currentPage()-1)}}" ><i class="fa fa-angle-left"></i></a>
                                    </li>
                                @else
                                    <li class="pagination-left-arrow">
                                        <a class="disabled" href="{{$items->url($items->currentPage()-1)}}" ><i class="fa fa-angle-left"></i></a>
                                    </li>
                                @endif
                                @for($i =1; $i<=$items->lastPage();$i++)
                                    @if($request->page == $i)
                                        
                                        <li class="active"><a href="{{$items->url($i)}}" class="page-numbers">{{$i}}</a></li>
                                    @else
                                        <li><a href="{{$items->url($i)}}" class="page-numbers">{{$i}}</a></li>
                                    @endif
                                @endfor
                                @if( $items->currentPage() != $items->lastPage())
                                    <li class="pagination-right-arrow">
                                        <a href="{{$items->url($items->currentPage()+1)}}"><i class="fa fa-angle-right"></i></a>
                                    </li>
                                @else
                                    <li class="pagination-right-arrow">
                                        <a class="disabled" href="{{$items->url($items->currentPage()+1)}}"><i class="fa fa-angle-right"></i></a>
                                    </li>
                                @endif
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Section End -->

@endsection
@section('js')
	
@endsection