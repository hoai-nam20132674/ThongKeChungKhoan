<!-- Footer Area Start -->
<footer class="footer anim-object2">
    <div class="footer-main-area" data-background="images/footer-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="widget footer-widget">
                        <img src="{{asset('uploads/images/systems/'.$system->logo)}}" alt="" class="mrb-20">
                        <address class="mrb-25">
                            <p class="text-light-gray">{{$system->address}}</p>
                            <div class="mrb-10"><a href="#" class="text-light-gray"><i class="fas fa-phone-alt mrr-10"></i>{{$system->phone}}</a></div>
                            <div class="mrb-10"><a href="#" class="text-light-gray"><i class="fas fa-envelope mrr-10"></i>{{$system->email}}</a></div>
                            <div class="mrb-0"><a href="#" class="text-light-gray"><i class="fas fa-globe mrr-10"></i>{{$system->website}}</a></div>
                        </address>
                        <ul class="social-list">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                            @php
                                $sfs = App\Service::where('display',1)->take(6)->get();
                            @endphp
                            <div class="widget footer-widget">
                                <h5 class="widget-title text-white mrb-30">Dịch vụ</h5>
                                <ul class="footer-widget-list">
                                    @foreach($sfs as $sf)
                                    <li><a href="/{{$sf->url}}">{{$sf->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="widget footer-widget">
                        <h5 class="widget-title text-white mrb-30">Liên kết</h5>
                        @php
                            $menus = App\Menu::where('parent_id',null)->orderBy('stt','ASC')->get();
                        @endphp
                        <ul class="footer-widget-list">
                            @foreach($menus as $menu)
                            <li><a href="{{$menu->url}}" target="{{$menu->target}}" title="{{$menu->title}}">{{$menu->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="widget footer-widget">
                        <h5 class="widget-title text-white mrb-30">Hỗ trợ 24/7</h5>
                        <p class="text-light-gray">Quý khách vui lòng gửi thông tin liên hệ cho chúng tôi để được hỗ trợ tư vấn 24/7</p>
                        <input type="text" class="form-control" placeholder="Enter Your Email">
                        <a href="" class="cs-btn-one btn-primary-color btn-sm has-icon mrt-20"><i class="webexflaticon flaticon-send"></i>Gửi ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container footer-border-top pdt-30 pdb-10">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center">
                        <span class="text-light-gray">Copyright © 2021 by <a class="text-primary-color" target="_blank" href="https://themeforest.net/user/webextheme"> VẬN CHUYỂN HÀNG HÓA VIỆT-TRUNG</a> | All rights reserved </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->
<!-- BACK TO TOP SECTION -->
<div class="back-to-top bg-primary-color">
    <i class="fab fa-angle-up"></i>
</div>
<!-- Integrated important scripts here -->