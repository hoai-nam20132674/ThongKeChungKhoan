@extends('front-end.layout.default')
@section('meta')
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<title>Trang lỗi</title>
	
	<link rel="icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" type="image/x-icon" />
	<meta property="og:type" content="website">
	<meta property="og:title" content="Trang lỗi">
	<meta property="og:image" content="">
	<meta property="og:image:secure_url" content="">
	<meta property="og:description" content="">
	<meta property="og:site_name" content="">
@endsection
@section('css')
	<!-- Build Main CSS --> 
    
@endsection

@section('content')
	<!-- Error Section Start -->
	<div class="error-area vh d-flex" data-background="{{asset('images/404.jpg')}}" data-overlay-light="94">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="error-inner text-center">
						<h1 class="error-title">4<span class="text-primary-color">0</span>4</h1>
						<h2 class="error-text">Xin lỗi! Liên kết không được tìm thấy</h2>
						<p>Trang này tạm thời không có sẵn hoặc do bảo trì. Chúng tôi sẽ trở lại rất sớm, cảm ơn quý khách đã luôn ủng hộ</p>
						<a class="cs-btn-one btn-md btn-primary-color" href="/">Quay về trang chủ</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Error Section End -->
@endsection
@section('js')
	
@endsection