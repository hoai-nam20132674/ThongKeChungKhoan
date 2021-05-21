<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <div class="sidebar">
            <div class="sidebar-content">
                <ul class="page-sidebar-menu page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="nav-item " id="cms-core-dashboard">
                        <a href="{{URL::route('home')}}" class="nav-link nav-toggle">
                            <i class="fa fa-home"></i>
                            <span class="title">Bảng điều khiển </span>
                        </a>
                    </li>
                    <!-- <li class="nav-item " id="cms-core-page">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="fa fa-book"></i>
                            <span class="title">Trang </span>
                        </a>
                    </li> -->
                    <li class="nav-item" id="cms-plugins-blog">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="fa fa-edit"></i>
                            <span class="title">Sàn Chứng Khoán</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu ">
                            <li class="nav-item  active " id="cms-plugins-blog-post">
                                <a href="{{URL::route('ses')}}" class="nav-link">
                                    <i class="fa fa-newspaper"></i>
                                    Danh sách sàn
                                </a>
                            </li>
                            <li class="nav-item " id="cms-plugins-blog-categories">
                                <a href="{{URL::route('addSE')}}" class="nav-link">
                                    <i class="fa fa-folder-open"></i>
                                    Thêm mới
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-item" id="cms-plugins-newsletter">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="fa fa-list-alt"></i>
                            <span class="title">Mã Chứng Khoán</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu ">
                            <li class="nav-item " id="cms-plugins-blog-post">
                                <a href="{{URL::route('stocks')}}" class="nav-link">
                                    <i class="fa fa-th-list"></i>
                                    Danh sách mã chứng khoán
                                </a>
                            </li>
                            <li class="nav-item " id="cms-plugins-blog-categories">
                                <a href="{{URL::route('addStock')}}" class="nav-link">
                                    <i class="fa fa-folder-open"></i>
                                    Thêm mới
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    <li class="nav-item " id="cms-plugins-ecommerce">
                        <a href="" class="nav-link nav-toggle">
                            <i class="fa fa-cubes"></i>
                            <span class="title">Bao hàng</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu  hidden-ul ">
                            <li class="nav-item " id="cms-plugins-ecommerce-customer">
                                <a href="{{URL::route('sacks')}}" class="nav-link">
                                    <i class="fa fa-cubes"></i>
                                    Danh sách bao hàng
                                </a>
                            </li>
                            <li class="nav-item " id="cms-plugins-product-categories">
                                <a href="{{URL::route('addSack')}}" class="nav-link">
                                    <i class="fa fa-plus-square"></i>
                                    Thêm mới bao hàng
                                </a>
                            </li>
                            
                            
                        </ul>
                    </li>
                    <li class="nav-item " id="cms-plugins-contact">
                        <a href="{{URL::route('packages')}}" class="nav-link nav-toggle">
                            <i class="fa fa-cube"></i>
                            <span class="title">Danh sách kiện hàng</span>
                        </a>
                    </li>

                    <li class="nav-item " id="cms-plugins-ecommerce">
                        <a href="" class="nav-link nav-toggle">
                            <i class="fa fa-window-restore"></i>
                            <span class="title">Phiếu xuất kho</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu  hidden-ul ">
                            <li class="nav-item " id="cms-plugins-ecommerce-customer">
                                <a href="{{URL::route('dns')}}" class="nav-link">
                                    <i class="fa fa-folder-open"></i>
                                    Danh sách phiếu xuất kho
                                </a>
                            </li>
                            <li class="nav-item " id="cms-plugins-product-categories">
                                <a href="{{URL::route('addDn')}}" class="addDn nav-link">
                                    <i class="fa fa-plus-square"></i>
                                    Tạo mới phiếu xuất kho
                                </a>
                            </li>
                            
                            
                        </ul>
                    </li>
                    
                    <li class="nav-item " id="cms-plugins-contact">
                        <a href="{{URL::route('properties')}}" class="nav-link nav-toggle">
                            <i class="fa fa-th-large"></i>
                            <span class="title">Quy cách đóng gói</span>
                        </a>
                    </li>

                    <li class="nav-item " id="cms-plugins-contact">
                        <a href="{{URL::route('status')}}" class="nav-link nav-toggle">
                            <i class="fa fa-asterisk"></i>
                            <span class="title">Trạng thái hàng hóa</span>
                        </a>
                    </li>
                    
                    <li class="nav-item " id="cms-plugins-contact">
                        <a href="{{URL::route('contacts')}}" class="nav-link nav-toggle">
                            <i class="far fa-envelope"></i>
                            <span class="title">Liên hệ </span>
                        </a>
                    </li>
                    
                    
                    <li class="nav-item " id="cms-core-appearance">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="fa fa-paint-brush"></i>
                            <span class="title">Hiển thị </span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu  hidden-ul ">
                            
                            <li class="nav-item " id="cms-core-menu">
                                <a href="{{URL::route('editMenu')}}" class="nav-link">
                                    <i class="fa fa-bars"></i>
                                    Menu
                                </a>
                            </li>
                            
                            <li class="nav-item " id="cms-core-appearance-custom-css">
                                <a href="{{URL::route('sliders')}}" class="nav-link">
                                    <i class="fa fa-sliders-h"></i>
                                    Slider
                                </a>
                            </li>
                            <li class="nav-item " id="cms-core-appearance-custom-css">
                                <a href="{{URL::route('popups')}}" class="nav-link">
                                    <i class="fa fa-window-restore"></i>
                                    Popup
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                
                    <li class="nav-item " id="cms-core-platform-administration">
                        <a href="" class="nav-link nav-toggle">
                            <i class="fa fa-user-shield"></i>
                            <span class="title">Quản trị hệ thống </span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu  hidden-ul ">
                            @if(Auth::user()->role ==1)
                            <li class="nav-item " id="cms-core-user">
                                <a href="{{URL::route('users')}}" class="nav-link">
                                    <i class="fa fa-user"></i>
                                    Quản trị viên
                                </a>
                            </li>
                            @endif
                            <li class="nav-item " id="cms-core-system-information">
                                <a href="{{URL::route('editSystem')}}" class="nav-link">
                                    <i class="fa fa-cogs"></i>
                                    Cài đặt hệ thống
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>