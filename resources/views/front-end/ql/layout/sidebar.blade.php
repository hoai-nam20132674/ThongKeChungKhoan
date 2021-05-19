<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left fixed-sidebar-left-custom">
    <ul class="nav navbar-nav side-nav nicescroll-bar" style="margin-bottom: 200px;">
                    

        <li class="">
           <a href="/"><div class="pull-left"><i class="ti-home mr-20"></i><span class="right-nav-text">Trang chủ</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>
        <li class="">
           <a href="{{URL::route('qlPackages')}}"><div class="pull-left"><i class="ti-package mr-20"></i><span class="right-nav-text">Kiện hàng</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>

        <li class="">
            <a href="{{URL::route('qlDns')}}"><div class="pull-left"><i class="ti-clipboard mr-20"></i><span class="right-nav-text">Phiếu xuất kho</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>

        <li class="hidden">
            <a href="https://pl.philongexpress.com/goship"><div class="pull-left"><i class="ti-rocket mr-20"></i><span class="right-nav-text">Ship hàng</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
        </li>

        <li class="hidden">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#ship"><div class="pull-left"><i class="ti-rocket mr-20"></i><span class="right-nav-text hidden">Ship</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
            <ul id="ship" class="collapse collapse-level-1 ">
                <li class=""><a class='parent-bold ' href="https://pl.philongexpress.com/ship/gui-yeu-cau">Gửi yêu cầu</a></li>
                <li class=""><a class='parent-bold ' href="https://pl.philongexpress.com/ship/yeu-cau/dang-cho">Đang chờ (<span class="t-label">0</span>)</a></li>
                <li class=""><a class='parent-bold ' href="https://pl.philongexpress.com/ship/yeu-cau/tiep-nhan">Tiếp nhận (<span class="t-label">0</span>)</a></li>
                <li class=""><a class='parent-bold ' href="https://pl.philongexpress.com/ship/yeu-cau/dang-ship">Đang ship (<span class="t-label">0</span>)</a></li>
                <li class=""><a class='parent-bold ' href="https://pl.philongexpress.com/ship/yeu-cau/hoan-thanh">Hoàn thành (<span class="t-label">0</span>)</a></li>
            </ul>
        </li>
     </ul>
</div>
<!-- /Left Sidebar Menu -->