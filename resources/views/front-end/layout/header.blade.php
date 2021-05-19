<!-- header Start -->
<header class="header-style-two">
	<div class="header-wrapper">
		<div class="header-top-area bg-primary-color d-lg-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left-part d-none d-lg-block">
						<!-- <span class="address"><i class="webexflaticon flaticon-placeholder-1"></i>{{$system->address}}</span> -->
						<span class="phone"><i class="webexflaticon flaticon-call"></i>HOTLINE: {{$system->phone}}</span>
					</div>
					<div id="text-center" class="col-lg-6 header-top-right-part text-right">
						<ul class="social-links">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
						</ul>
						<div class="language">
							@if(Auth::check())
								<a class="language-btn" href="#"><i class="webexflaticon flaticon-internet"></i>{{Auth::user()->name}}</a>
								<ul class="language-dropdown">
									<li><a href="#">Thông tin cá nhân</a></li>
									<li><a href="{{URL::route('qlPackages')}}">Quản lý vận chuyển</a></li>
									<li><a href="{{URL::route('logout')}}">Đăng xuất</a></li>
									
								</ul>
							@else
								<a class="login-btn" href="{{URL::route('dangnhap')}}"><i class="webexflaticon flaticon-internet"></i>Đăng nhập</a>
							@endif
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-navigation-area two-layers-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a class="navbar-brand logo f-left mrt-10 mrt-md-0" href="/">
							<img id="logo-image" class="img-center" src="{{asset('uploads/images/systems/'.$system->logo)}}" alt="">
						</a>
						<div class="mobile-menu-right"></div>
						<div class="header-searchbox-style-two d-none d-xl-block">
							<div class="side-panel side-panel-trigger text-right d-none d-lg-block">
								<span class="bar1"></span>
								<span class="bar2"></span>
								<span class="bar3"></span>
							</div>
							<div class="show-searchbox">
								<a href="#"><i class="webex-icon-Search"></i></a>
							</div>
							<div class="toggle-searchbox">
								<form action="#" id="searchform-all" method="get">
									<div>
										<input type="text" id="s" class="form-control" placeholder="Search...">
										<div class="input-box">
											<input type="submit" value="" id="searchsubmit"><i class="fas fa-search"></i>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="side-panel-content">
							<div class="close-icon">
								<button><i class="webex-icon-cross"></i></button>
							</div>
							<div class="side-panel-logo mrb-30">
								<a href="index.html">
									<img src="{{asset('uploads/images/systems/'.$system->logo)}}" alt="" />
								</a>
							</div>
							<div class="side-info mrb-30">
								<div class="side-panel-element mrb-25">
									<h4 class="mrb-10">Thông tin liên hệ</h4>
									<ul class="list-items">
										<li><span class="fa fa-map-marker-alt mrr-10 text-primary-color"></span>{{$system->address}}</li>
										<li><span class="fas fa-envelope mrr-10 text-primary-color"></span>{{$system->email}}</li>
										<li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span>{{$system->phone}}</li>
									</ul>
								</div>
								
							</div>
							<h4 class="mrb-15">Kết nối với chúng tôi</h4>
							<ul class="social-list">
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
							</ul>
						</div>
						<div class="main-menu f-right">
							<nav id="mobile-menu-right">
								<ul>
								@php
							        $menus = App\Menu::where('parent_id',null)->orderBy('stt','ASC')->get();
							    @endphp
								
								
								@foreach($menus as $menu)
								
									@php
								        $menu2s = App\Menu::where('parent_id',$menu->id)->orderBy('stt','ASC')->get();
								    @endphp
								    @if(count($menu2s)!=0)
								    	<li class="has-sub">
											<a href="{{$menu->url}}" target="{{$menu->target}}" title="{{$menu->title}}">{{$menu->title}}</a>
											<ul class="sub-menu">
												@foreach($menu2s as $menu2)
													@php
												        $menu3s = App\Menu::where('parent_id',$menu2->id)->orderBy('stt','ASC')->get();
												    @endphp
												    @if(count($menu3s)!=0)
												    	<li class="has-sub-child">
															<a href="{{$menu2->url}}" target="{{$menu2->target}}" title="{{$menu2->title}}">{{$menu2->title}}</a>
															<ul class="sub-menu">
																@foreach($menu3s as $menu3)
																	<li><a href="{{$menu3->url}}" target="{{$menu3->target}}" title="{{$menu3->title}}">{{$menu3->title}}</a></li>
																@endforeach
																
															</ul>
														</li>
												    @else
												    	<li><a target="{{$menu2->target}}" href="{{$menu2->url}}" title="{{$menu2->title}}">{{$menu2->title}}</a></li>
												    @endif
												@endforeach
											</ul>
										</li>
								    @else
								    	<li><a href="{{$menu->url}}" target="{{$menu->target}}" title="{{$menu->title}}">{{$menu->title}}</a></li>
								    @endif
								@endforeach
									
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- header End -->