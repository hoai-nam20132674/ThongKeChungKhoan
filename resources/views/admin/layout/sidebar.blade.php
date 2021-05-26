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