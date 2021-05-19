<div class="page-header navbar navbar-static-top">
    <div class="page-header-inner col-12">

        <div class="page-logo">
            <a href="{{URL::route('home')}}">
                <img src="{{asset('uploads/images/systems/'.$system->logo)}}" alt="logo" class="logo-default" />
            </a>
            <div class="menu-toggler sidebar-toggler">
                <span></span>
            </div>
        </div>

        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"><span></span></a>
        
        <div class="top-menu">
            <ul class="nav navbar-nav float-right">
                <li class="dropdown">
                    <a class="dropdown-toggle dropdown-header-name" style="padding-right: 10px" href="{{$system->website}}" target="_blank"><i class="fa fa-globe"></i> <span class="d-none d-sm-inline">Xem trang ngoài</span> </a>
                </li>
                
                    
                <li class="language dropdown">
                    <a href="javascript:;" class="dropdown-toggle dropdown-header-name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('uploads/images/systems/vn.svg')}}" title="Tiếng Việt" width="16" alt="Tiếng Việt">
                        <span class="d-none d-sm-inline">Tiếng Việt</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right icons-right">
                        
                        <li class="active">
                            <a href="#">
                                <img src="{{asset('uploads/images/systems/vn.svg')}}" title="Tiếng Việt" width="16" alt="Tiếng Việt">
                                <span>Tiếng Việt</span>
                            </a>
                        </li>
                    </ul>
                </li>
                    
                <li class="dropdown dropdown-user">
                    <a href="javascript:void(0)" class="dropdown-toggle dropdown-header-name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('uploads/images/systems/lg-u.png')}}" />
                        <span class="username username-hide-on-mobile"> {{Auth::user()->name}} </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{URL::route('editUser',Auth::user()->id)}}"><i class="icon-user"></i> Thông tin cá nhân</a></li>
                        <li><a href="{{URL::route('logout')}}" class="btn-logout"><i class="icon-key"></i> Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>