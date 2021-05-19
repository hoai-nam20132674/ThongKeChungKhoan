@extends('front-end.layout.default')
@section('css')
	<link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/bootstrap.scss.css?1593142743270" rel="stylesheet" type="text/css" />
	<link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/plugin.scss.css?1593142743270" rel="stylesheet" type="text/css" />							
	<link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/base.scss.css?1593142743270" rel="stylesheet" type="text/css" />	
	<link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/evo-main.scss.css?1593142743270" rel="stylesheet" type="text/css" />
	<link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/slick.scss.css?1593142743270" rel="stylesheet" type="text/css" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- <link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/evo-index.scss.css?1593142743270" rel="stylesheet" type="text/css" /> -->
	<link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/evo-dich-vu.scss.css?1593142743270" rel="stylesheet" type="text/css" />
	<!-- <link href="https://bizweb.dktcdn.net/100/359/276/themes/725925/assets/evo-blogs.scss.css?1593142743270" rel="stylesheet" type="text/css" /> -->
	
@endsection
@section('body_class')
bg-body product-dich-vu
@endsection
@section('content')
	<section class="bread-crumb margin-bottom-10">
		<div class="container">
			<ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">						
				<li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="/" title="Trang chủ">
						<span itemprop="name">Trang chủ</span>
						<meta itemprop="position" content="1" />
					</a>
					<span><i class="fa fa-angle-right"></i></span>
				</li>
				
				
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<a itemprop="item" href="" title="Dịch vụ Spa">
						<span itemprop="name">Khách hàng</span>
						<meta itemprop="position" content="2" />
					</a>
					<span><i class="fa fa-angle-right"></i></span>
				</li>
				
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<span itemprop="name">{{$product->name}}</span>
					<meta itemprop="position" content="3" />
				</li>
				
			</ul>
		</div>
	</section>
	<div id="product" class="productDetail-page product-dich-vu" itemscope itemtype="http://schema.org/Product">
		
		<div class="container">
			<div class="row product-detail-wrapper">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="row product-detail-main pr_style_01">
						<div class="col-md-7 col-sm-12 col-xs-12">
							
							
							<div class="product-gallery">
								<div class="product-gallery__thumbs-container hidden-sm hidden-xs">
									<div class="product-gallery__thumbs thumb-fix">
										
										<div class="product-gallery__thumb active"  data-image="{{asset('uploads/images/products/avatas/'.$product->avata)}}">
											<a class="product-gallery__thumb-placeholder" href="javascript:void(0);" data-image="{{asset('uploads/images/products/avatas/'.$product->avata)}}" data-zoom-image="{{asset('uploads/images/products/avatas/'.$product->avata)}}">
												<img src="{{asset('uploads/images/products/avatas/'.$product->avata)}}" data-image="{{asset('uploads/images/products/avatas/'.$product->avata)}}" alt="{{$product->title}}" />
											</a>
										</div>
										@foreach($images as $image)
										<div class="product-gallery__thumb "  data-image="{{asset('uploads/images/products/details/'.$image->url)}}">
											<a class="product-gallery__thumb-placeholder" href="javascript:void(0);" data-image="{{asset('uploads/images/products/details/'.$image->url)}}" data-zoom-image="{{asset('uploads/images/products/details/'.$image->url)}}">
												<img src="{{asset('uploads/images/products/details/'.$image->url)}}" data-image="{{asset('uploads/images/products/details/'.$image->url)}}" alt="{{$product->title}}" />
											</a>
										</div>
										@endforeach
										
										
									</div>
								</div> 
								<div class="product-image-detail box__product-gallery scroll">
									<ul id="sliderproduct" class="site-box-content slide_product">
										
										<li class="product-gallery-item gallery-item">
											<img class="product-image-feature img-responsive center-block" src="{{asset('uploads/images/products/avatas/'.$product->avata)}}" alt="{{$product->title}}" />
										</li>	
										@foreach($images as $image)
										<li class="product-gallery-item gallery-item">
											<img class="product-image-feature img-responsive center-block" src="{{asset('uploads/images/products/details/'.$image->url)}}" alt="{{$product->title}}" />
										</li>	
										@endforeach
										
										
									</ul>
									<div class="product-image__button">
										<div id="product-zoom-in" class="product-zoom icon-pr-fix " aria-label="Zoom in" title="Click chuột để phóng to">
											<span class="zoom-in" aria-hidden="true">
												<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" style="enable-background:new 0 0 36 36; width: 30px; height: 30px;" xml:space="preserve"><polyline points="6,14 9,11 14,16 16,14 11,9 14,6 6,6 "/><polyline points="22,6 25,9 20,14 22,16 27,11 30,14 30,6 "/><polyline points="30,22 27,25 22,20 20,22 25,27 22,30 30,30 "/><polyline points="14,30 11,27 16,22 14,20 9,25 6,22 6,30 "/> </svg>
											</span>
										</div>		
									</div>
								</div>
							</div>							
							
							
						</div>
						<div class="col-md-5 col-sm-12 col-xs-12 product-content-desc details-pro" id="detail-product">
							<div class="product-title">
								<h1 class="title-head">{{$product->title}}</h1>
							</div>
							<div class="product-description">
								
								<div class="description-content">
									
									
									{!!$product->content!!}
									
								</div>
								<div class="contact" style="border: 1px solid #cca900; border-radius: 5px; padding: 10px;">
									<div>
										<p><i class="fa fa-hand-o-right" style="color: green;"></i> Quý khách quan tâm đến dịch vụ mà khách hàng sử dụng tại Dental Plus có thể liên hệ số điện thoại bên dưới để được tư vấn trực tiếp hoặc click <span class="badge badge-warning" style="background: #dcb048;">đăng ký tư vấn</span> và để lại thông tin trong form đăng ký. Đội ngũ y bác sỹ của Dental Plus sẽ liên hệ ngay cho quý khách</p>
									</div>
									<div class="row-flex" >
									
									
										<br>
										<a class="service_button" style="font-weight: 800;" href="tel:{{$system->phone}}" title="Liên hệ {{$system->phone}}"><i class="fa fa-phone-square"></i> Liên hệ {{$system->phone}}</a>
										
										<button class="service_button" style="font-weight: 800;" type="button" data-toggle="modal" data-target="#myModalCall">
											Đăng ký tư vấn
										</button>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>					
				
				
				
				
									
				
				<div class="list-productRelated clearfix">
					<div class="heading-title text-center">
						<h2>Dịch vụ khác</h2>
					</div>
					<div class="evo-owl-product clearfix">
						
						
						<div class="evo-slick">
							 
	<div class="evo-product-block-item product.dich-vu">
		<div class="product-img">
			
			<a href="/dieu-tri-tre-hoa" title="Điều trị trẻ h&#243;a" class="image-resize">
				<img class="lazy" src="https://bizweb.dktcdn.net/thumb/pico/100/359/276/products/anh-tre-hoa-da.jpg?v=1562558426350" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/anh-tre-hoa-da.jpg?v=1562558426350" alt="Điều trị trẻ h&#243;a" />
				
				<img class="lazy hidden-sm hidden-xs" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/351932-hifu-2018-tre-dep-hon-5-tuoi-nang-co-xoa-nhan-tre-hoa-da-tao-hinh-vline-duy-nhat-1-lan-cam-ket-hieu-qua-100-madina-beauty-amp-academy.jpg?v=1562558427067" alt="Điều trị trẻ h&#243;a" />
				
			</a>
			<div class="button-add">
				<form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15001729">
					
					<button title="Chi tiết" type="button" onclick="location.href='/dieu-tri-tre-hoa'" class="action cart-button">Chi tiết</button>
					
				</form>
			</div>	
		</div>
		<div class="product-detail clearfix">
			<div class="box-pro-detail">
				<h3 class="pro-name">
					<a href="/dieu-tri-tre-hoa" title="Điều trị trẻ h&#243;a">Điều trị trẻ h&#243;a</a>
				</h3>
				<div class="box-pro-prices">	
					<p class="pro-price">
						
						Liên hệ
						
					</p>
				</div>
			</div>
		</div>
	</div>
						</div>
						
						
						
						<div class="evo-slick">
							 
	<div class="evo-product-block-item product.dich-vu">
		<div class="product-img">
			
			<a href="/nang-nguc-biofat" title="N&#226;ng ngực Biofat" class="image-resize">
				<img class="lazy" src="https://bizweb.dktcdn.net/thumb/pico/100/359/276/products/sahadeal-vn-15211782649030.jpg?v=1562558282753" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/sahadeal-vn-15211782649030.jpg?v=1562558282753" alt="N&#226;ng ngực Biofat" />
				
				<img class="lazy hidden-sm hidden-xs" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/1553087194-1.jpg?v=1562558284023" alt="N&#226;ng ngực Biofat" />
				
			</a>
			<div class="button-add">
				<form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15001714">
					
					<button title="Chi tiết" type="button" onclick="location.href='/nang-nguc-biofat'" class="action cart-button">Chi tiết</button>
					
				</form>
			</div>	
		</div>
		<div class="product-detail clearfix">
			<div class="box-pro-detail">
				<h3 class="pro-name">
					<a href="/nang-nguc-biofat" title="N&#226;ng ngực Biofat">N&#226;ng ngực Biofat</a>
				</h3>
				<div class="box-pro-prices">	
					<p class="pro-price">
						
						Liên hệ
						
					</p>
				</div>
			</div>
		</div>
	</div>
						</div>
						
						
						
						<div class="evo-slick">
							 
	<div class="evo-product-block-item product.dich-vu">
		<div class="product-img">
			
			<a href="/phau-thuat-ham-mat" title="Phẩu thuật h&#224;m mặt" class="image-resize">
				<img class="lazy" src="https://bizweb.dktcdn.net/thumb/pico/100/359/276/products/trong-rang-implant-boc-rang-su-nha-khoa-sai-gon-bs-quang-tphcm.jpg?v=1562558099607" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/trong-rang-implant-boc-rang-su-nha-khoa-sai-gon-bs-quang-tphcm.jpg?v=1562558099607" alt="Phẩu thuật h&#224;m mặt" />
				
				<img class="lazy hidden-sm hidden-xs" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/co-nen-tham-my-moi-khong-1.jpg?v=1562558100437" alt="Phẩu thuật h&#224;m mặt" />
				
			</a>
			<div class="button-add">
				<form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15001689">
					
					<button title="Chi tiết" type="button" onclick="location.href='/phau-thuat-ham-mat'" class="action cart-button">Chi tiết</button>
					
				</form>
			</div>	
		</div>
		<div class="product-detail clearfix">
			<div class="box-pro-detail">
				<h3 class="pro-name">
					<a href="/phau-thuat-ham-mat" title="Phẩu thuật h&#224;m mặt">Phẩu thuật h&#224;m mặt</a>
				</h3>
				<div class="box-pro-prices">	
					<p class="pro-price">
						
						Liên hệ
						
					</p>
				</div>
			</div>
		</div>
	</div>
						</div>
						
						
						
						<div class="evo-slick">
							 
	<div class="evo-product-block-item product.dich-vu">
		<div class="product-img">
			
			<a href="/giam-mo-slimlipo" title="Giảm mỡ Slimlipo" class="image-resize">
				<img class="lazy" src="https://bizweb.dktcdn.net/thumb/pico/100/359/276/products/giam-mo-bung-sau-sinh-hieu-qua.jpg?v=1562557922043" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/giam-mo-bung-sau-sinh-hieu-qua.jpg?v=1562557922043" alt="Giảm mỡ Slimlipo" />
				
				<img class="lazy hidden-sm hidden-xs" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/144952-giam-beo-toan-than-tieu-mo-vung-bung-phuong-linh-salon-hair-spa.jpg?v=1562557922887" alt="Giảm mỡ Slimlipo" />
				
			</a>
			<div class="button-add">
				<form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15001668">
					
					<button title="Chi tiết" type="button" onclick="location.href='/giam-mo-slimlipo'" class="action cart-button">Chi tiết</button>
					
				</form>
			</div>	
		</div>
		<div class="product-detail clearfix">
			<div class="box-pro-detail">
				<h3 class="pro-name">
					<a href="/giam-mo-slimlipo" title="Giảm mỡ Slimlipo">Giảm mỡ Slimlipo</a>
				</h3>
				<div class="box-pro-prices">	
					<p class="pro-price">
						
						Liên hệ
						
					</p>
				</div>
			</div>
		</div>
	</div>
						</div>
						
						
						
						<div class="evo-slick">
							 
	<div class="evo-product-block-item product.dich-vu">
		<div class="product-img">
			
			<a href="/cat-mi-eye-line" title="Cắt m&#237; Eye Line" class="image-resize">
				<img class="lazy" src="https://bizweb.dktcdn.net/thumb/pico/100/359/276/products/tao-hinh-mui-go.jpg?v=1562557597270" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/tao-hinh-mui-go.jpg?v=1562557597270" alt="Cắt m&#237; Eye Line" />
				
				<img class="lazy hidden-sm hidden-xs" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="https://bizweb.dktcdn.net/thumb/large/100/359/276/products/don-cam-2.jpg?v=1562557598070" alt="Cắt m&#237; Eye Line" />
				
			</a>
			<div class="button-add">
				<form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15001645">
					
					<button title="Chi tiết" type="button" onclick="location.href='/cat-mi-eye-line'" class="action cart-button">Chi tiết</button>
					
				</form>
			</div>	
		</div>
		<div class="product-detail clearfix">
			<div class="box-pro-detail">
				<h3 class="pro-name">
					<a href="/cat-mi-eye-line" title="Cắt m&#237; Eye Line">Cắt m&#237; Eye Line</a>
				</h3>
				<div class="box-pro-prices">	
					<p class="pro-price">
						
						Liên hệ
						
					</p>
				</div>
			</div>
		</div>
	</div>
						</div>
						
						
						
						
					</div>	
				</div>
				
				
			</div>
		</div>
	</div>
	<div id="divzoom">
		<div class="divzoom_main">
			
			<div class="product-thumb text-center">
				<img class="product-image-feature" src="{{asset('uploads/images/products/avatas/'.$product->avata)}}" alt="{{$product->title}}" />
			</div>
			@foreach($images as $image)
			<div class="product-thumb text-center">
				<img class="product-image-feature" src="{{asset('uploads/images/products/details/'.$image->url)}}" alt="{{$product->title}}" />
			</div>
			@endforeach
			
			
		</div>
		<div id="positionButtonDiv" class="hidden">
			<p> 
				<span>
					<button type="button" class="buttonZoomIn"><i></i></button>
					<button type="button" class="buttonZoomOut"><i></i></button>			
				</span>
			</p>
		</div>
		<button id="closedivZoom"><i></i></button>
	</div>
	<script>
		$(document).ready(function(){
			$(".evo-owl-product").slick({
				dots: false,
				infinite: false,
				speed: 300,
				slidesToShow: 5,
				slidesToScroll: 5,
				responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 5,
							slidesToScroll: 5
						}
					},
					{
						breakpoint: 991,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3
						}
					},
					{
						breakpoint: 767,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							dots: true
						}
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2,
							dots: true
						}
					}
				]
			});
		});
		$(document).on("click","#product-zoom-in",function(){
			$("body").addClass("open_layer");
			$("#divzoom").css({'opcaity':0,'visibility':'hidden'}).show();
			$(".divzoom_main").flickity({
				resize:true,
				draggable: true,
			});
			if($(window).width() > 768){
				var ncurrent = parseInt($(".gallery-index .current").html()) - 1;
			}
			else{
				var ncurrent = parseInt($(".product-gallery-item.is-selected").index());
			}
			$(".divzoom_main").flickity('select',ncurrent);
			setTimeout(function(){$("#divzoom").css({'opcaity': 1,'visibility':'visible'})},50);
		});
		$(document).on('click','#closedivZoom', function(event) {
			$("#divzoom").hide();
			$("body").removeClass("open_layer");
			$(".divzoom_main").flickity('select',0);
		});
	</script>
	<script>
		$(".product-gallery__thumb img").click(function(){
			$(".product-gallery__thumb").removeClass('active');
			$(this).parents('.product-gallery__thumb').addClass('active');
			var img_thumb = $(this).data('image');
			$("html, body").animate({
				scrollTop: $("#sliderproduct img[src='"+img_thumb+"']").offset().top
			}, 1000);
		});
		$(".product-gallery__thumb").first().addClass('active');
	</script>
	
	

@endsection