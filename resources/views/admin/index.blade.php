@extends('admin.layout.default')
@section('css')
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/fontawesome.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/simple-line-icons.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/select2.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/select2-bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/pace-theme-minimal.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/toastr.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/jquery.mCustomScrollbar.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/bootstrap-datepicker3.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/spectrum.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/jquery.fancybox.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/morris.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/core.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/dashboard.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/jquery-jvectormap-1.2.2.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('css/admin/default.css')}}">
@endsection
@section('content')
	<div class="page-content ">
                    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{URL::route('home')}}">Bảng điều khiển</a></li>
            
        
                            <li class="breadcrumb-item active">Trang quản trị</li>
            
            </ol>


                    <div class="clearfix"></div>
                    <div id="main">
                            
    <div class="note note-success">
        <p>Chào {{Auth::user()->name}} đến với trình quản trị nội dung của website</p>
    </div>
    <div class="row">
        
    </div>
    <div class="clearfix"></div>
    <div id="list_widgets" class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <a class="dashboard-stat dashboard-stat-v2" style="background-color: #32c5d2; color: #fff" href="#">
            <div class="visual">
                <i class="far fa-file-alt" style="opacity: .1;"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="3">0</span>
                </div>
                <div class="desc"> Dịch vụ </div>
            </div>
        </a>
    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <a class="dashboard-stat dashboard-stat-v2" style="background-color: #8e44ad; color: #fff" href="#">
            <div class="visual">
                <i class="fa fa-plug" style="opacity: .1;"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="12">0</span>
                </div>
                <div class="desc"> Khách hàng </div>
            </div>
        </a>
    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <a class="dashboard-stat dashboard-stat-v2" style="background-color: #e7505a; color: #fff" href="">
            <div class="visual">
                <i class="fa fa-paint-brush" style="opacity: .1;"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="1">0</span>
                </div>
                <div class="desc"> Liên hệ </div>
            </div>
        </a>
    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        <a class="dashboard-stat dashboard-stat-v2" style="background-color: #3598dc; color: #fff" href="{{URL::route('users')}}">
            <div class="visual">
                <i class="fas fa-users" style="opacity: .1;"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="1">0</span>
                </div>
                <div class="desc"> Quản trị viên </div>
            </div>
        </a>
    </div>

                    <div class=" col-12 widget_item" id="widget_analytics_general" data-url="">
        <div class="portlet light bordered portlet-no-padding ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fas fa-chart-line font-dark" style="font-weight: 700;"></i>
                    <span class="caption-subject font-dark">Thống kê truy cập</span>
                </div>
                <div class="tools">
    <a href="#" class="expand" data-toggle="tooltip" title="Mở rộng" data-state="collapse"></a>
    <a href="#" class="reload" data-toggle="tooltip" title="Làm mới"></a>
    <a href="#" class="fullscreen" data-toggle="tooltip" data-original-title="Toàn màn hình" title="Toàn màn hình"> </a>
    <a href="#" class="remove" data-toggle="tooltip" title="Ẩn"></a>
</div>            </div>
            <div class="portlet-body  widget-content row "></div>
        </div>
    </div>

                    <div class="col-md-6 col-sm-6 col-12 widget_item" id="widget_analytics_page" data-url="">
        <div class="portlet light bordered portlet-no-padding ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="far fa-newspaper font-dark" style="font-weight: 700;"></i>
                    <span class="caption-subject font-dark">Trang được xem nhiều nhất</span>
                </div>
                <div class="tools">
    <a href="#" class="expand" data-toggle="tooltip" title="Mở rộng" data-state="collapse"></a>
    <a href="#" class="reload" data-toggle="tooltip" title="Làm mới"></a>
    <a href="#" class="fullscreen" data-toggle="tooltip" data-original-title="Toàn màn hình" title="Toàn màn hình"> </a>
    <a href="#" class="remove" data-toggle="tooltip" title="Ẩn"></a>
</div>            </div>
            <div class="portlet-body  widget-content scroll-table "></div>
        </div>
    </div>

                    <div class="col-md-6 col-sm-6 col-12 widget_item" id="widget_analytics_browser" data-url="">
        <div class="portlet light bordered portlet-no-padding ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fab fa-safari font-dark" style="font-weight: 700;"></i>
                    <span class="caption-subject font-dark">Trình duyệt truy cập nhiều</span>
                </div>
                <div class="tools">
    <a href="#" class="expand" data-toggle="tooltip" title="Mở rộng" data-state="collapse"></a>
    <a href="#" class="reload" data-toggle="tooltip" title="Làm mới"></a>
    <a href="#" class="fullscreen" data-toggle="tooltip" data-original-title="Toàn màn hình" title="Toàn màn hình"> </a>
    <a href="#" class="remove" data-toggle="tooltip" title="Ẩn"></a>
</div>            </div>
            <div class="portlet-body  widget-content scroll-table "></div>
        </div>
    </div>

                    <div class="col-md-6 col-sm-6 col-12 widget_item" id="widget_posts_recent" data-url="">
        <div class="portlet light bordered portlet-no-padding ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fas fa-edit font-dark" style="font-weight: 700;"></i>
                    <span class="caption-subject font-dark">Bài viết gần đây</span>
                </div>
                <div class="tools">
    <a href="#" class="expand" data-toggle="tooltip" title="Mở rộng" data-state="collapse"></a>
    <a href="#" class="reload" data-toggle="tooltip" title="Làm mới"></a>
    <a href="#" class="fullscreen" data-toggle="tooltip" data-original-title="Toàn màn hình" title="Toàn màn hình"> </a>
    <a href="#" class="remove" data-toggle="tooltip" title="Ẩn"></a>
</div>            </div>
            <div class="portlet-body  widget-content scroll-table "></div>
        </div>
    </div>

                    <div class="col-md-6 col-sm-6 col-12 widget_item" id="widget_analytics_referrer" data-url="">
        <div class="portlet light bordered portlet-no-padding ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fas fa-user-friends font-dark" style="font-weight: 700;"></i>
                    <span class="caption-subject font-dark">Trang giới thiệu nhiều</span>
                </div>
                <div class="tools">
    <a href="#" class="expand" data-toggle="tooltip" title="Mở rộng" data-state="collapse"></a>
    <a href="#" class="reload" data-toggle="tooltip" title="Làm mới"></a>
    <a href="#" class="fullscreen" data-toggle="tooltip" data-original-title="Toàn màn hình" title="Toàn màn hình"> </a>
    <a href="#" class="remove" data-toggle="tooltip" title="Ẩn"></a>
</div>            </div>
            <div class="portlet-body  widget-content scroll-table "></div>
        </div>
    </div>

                    <div class="col-md-6 col-sm-6 col-12 widget_item" id="widget_audit_logs" data-url="">
        <div class="portlet light bordered portlet-no-padding ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fas fa-history font-dark" style="font-weight: 700;"></i>
                    <span class="caption-subject font-dark">Lịch sử hoạt động</span>
                </div>
                <div class="tools">
    <a href="#" class="expand" data-toggle="tooltip" title="Mở rộng" data-state="collapse"></a>
    <a href="#" class="reload" data-toggle="tooltip" title="Làm mới"></a>
    <a href="#" class="fullscreen" data-toggle="tooltip" data-original-title="Toàn màn hình" title="Toàn màn hình"> </a>
    <a href="#" class="remove" data-toggle="tooltip" title="Ẩn"></a>
</div>            </div>
            <div class="portlet-body  widget-content scroll-table "></div>
        </div>
    </div>

                    <div class="col-md-6 col-sm-6 col-12 widget_item" id="widget_ecommerce_report_general" data-url="">
        <div class="portlet light bordered portlet-no-padding ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fas fa-shopping-basket font-dark" style="font-weight: 700;"></i>
                    <span class="caption-subject font-dark">Thương mại điện tử</span>
                </div>
                <div class="tools">
    <a href="#" class="expand" data-toggle="tooltip" title="Mở rộng" data-state="collapse"></a>
    <a href="#" class="reload" data-toggle="tooltip" title="Làm mới"></a>
    <a href="#" class="fullscreen" data-toggle="tooltip" data-original-title="Toàn màn hình" title="Toàn màn hình"> </a>
    <a href="#" class="remove" data-toggle="tooltip" title="Ẩn"></a>
</div>            </div>
            <div class="portlet-body  widget-content scroll-table "></div>
        </div>
    </div>

                <div class="clearfix"></div>
    </div>

            <a href="#" class="manage-widget"><i class="fa fa-plus"></i> Quản lý tiện ích</a>
        <div id="hide_widget_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title"><i class="til_img"></i><strong>Bạn có chắc?</strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="modal-body with-padding">
                <p>Bạn có chắc chắn muốn ẩn tiện ích này? Nó sẽ không được hiển thị trên trang chủ nữa!</p>
            </div>

            <div class="modal-footer">
                <a class="float-left btn btn-danger" href="#" id="hide-widget-confirm-bttn">Vâng, ẩn tiện ích này</a>
                <button class="float-right btn btn-primary" data-dismiss="modal">Hủy bỏ</button>
            </div>
        </div>
    </div>
</div>

<div id="manage_widget_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="" accept-charset="UTF-8"><input name="_token" type="hidden" value="pDJd5ehSBKJT4WE8iMOSN1ClgOvWNSeSJ2isp5H5">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="til_img"></i><strong>Quản lý tiện ích</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body with-padding">
                                                                    <section class="wrap_widget_total_users">
                            <i class="fas fa-users " style="background-color: #3598dc"></i>
                            <span class="widget_name">Quản trị viên</span>
                            <div class="swc_wrap">
                                <div class="onoffswitch">
    <input type="hidden" name="widgets[widget_total_users]" value="0">
    <input type="checkbox" name="widgets[widget_total_users]" class="onoffswitch-checkbox" id="widgets[widget_total_users]" value="1"  checked   data-target="widget_total_users">
    <label class="onoffswitch-label" for="widgets[widget_total_users]">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>

                            </div>
                        </section>
                                                                    <section class="wrap_widget_total_pages">
                            <i class="far fa-file-alt " style="background-color: #32c5d2"></i>
                            <span class="widget_name">Trang</span>
                            <div class="swc_wrap">
                                <div class="onoffswitch">
    <input type="hidden" name="widgets[widget_total_pages]" value="0">
    <input type="checkbox" name="widgets[widget_total_pages]" class="onoffswitch-checkbox" id="widgets[widget_total_pages]" value="1"  checked   data-target="widget_total_pages">
    <label class="onoffswitch-label" for="widgets[widget_total_pages]">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>

                            </div>
                        </section>
                                                                    <section class="wrap_widget_total_plugins">
                            <i class="fa fa-plug " style="background-color: #8e44ad"></i>
                            <span class="widget_name">Tiện ích mở rộng</span>
                            <div class="swc_wrap">
                                <div class="onoffswitch">
    <input type="hidden" name="widgets[widget_total_plugins]" value="0">
    <input type="checkbox" name="widgets[widget_total_plugins]" class="onoffswitch-checkbox" id="widgets[widget_total_plugins]" value="1"  checked   data-target="widget_total_plugins">
    <label class="onoffswitch-label" for="widgets[widget_total_plugins]">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>

                            </div>
                        </section>
                                                                    <section class="wrap_widget_total_themes">
                            <i class="fa fa-paint-brush " style="background-color: #e7505a"></i>
                            <span class="widget_name">Giao diện</span>
                            <div class="swc_wrap">
                                <div class="onoffswitch">
    <input type="hidden" name="widgets[widget_total_themes]" value="0">
    <input type="checkbox" name="widgets[widget_total_themes]" class="onoffswitch-checkbox" id="widgets[widget_total_themes]" value="1"  checked   data-target="widget_total_themes">
    <label class="onoffswitch-label" for="widgets[widget_total_themes]">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>

                            </div>
                        </section>
                                                                    <section class="wrap_widget_analytics_general">
                            <i class="fas fa-chart-line " style="background-color: #f2784b"></i>
                            <span class="widget_name">Thống kê truy cập</span>
                            <div class="swc_wrap">
                                <div class="onoffswitch">
    <input type="hidden" name="widgets[widget_analytics_general]" value="0">
    <input type="checkbox" name="widgets[widget_analytics_general]" class="onoffswitch-checkbox" id="widgets[widget_analytics_general]" value="1"  checked   data-target="widget_analytics_general">
    <label class="onoffswitch-label" for="widgets[widget_analytics_general]">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>

                            </div>
                        </section>
                                                                    <section class="wrap_widget_analytics_page">
                            <i class="far fa-newspaper " style="background-color: #3598dc"></i>
                            <span class="widget_name">Trang được xem nhiều nhất</span>
                            <div class="swc_wrap">
                                <div class="onoffswitch">
    <input type="hidden" name="widgets[widget_analytics_page]" value="0">
    <input type="checkbox" name="widgets[widget_analytics_page]" class="onoffswitch-checkbox" id="widgets[widget_analytics_page]" value="1"  checked   data-target="widget_analytics_page">
    <label class="onoffswitch-label" for="widgets[widget_analytics_page]">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>

                            </div>
                        </section>
                                                                    <section class="wrap_widget_analytics_browser">
                            <i class="fab fa-safari " style="background-color: #8e44ad"></i>
                            <span class="widget_name">Trình duyệt truy cập nhiều</span>
                            <div class="swc_wrap">
                                <div class="onoffswitch">
    <input type="hidden" name="widgets[widget_analytics_browser]" value="0">
    <input type="checkbox" name="widgets[widget_analytics_browser]" class="onoffswitch-checkbox" id="widgets[widget_analytics_browser]" value="1"  checked   data-target="widget_analytics_browser">
    <label class="onoffswitch-label" for="widgets[widget_analytics_browser]">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>

                            </div>
                        </section>
                                                                    <section class="wrap_widget_posts_recent">
                            <i class="fas fa-edit " style="background-color: #f3c200"></i>
                            <span class="widget_name">Bài viết gần đây</span>
                            <div class="swc_wrap">
                                <div class="onoffswitch">
    <input type="hidden" name="widgets[widget_posts_recent]" value="0">
    <input type="checkbox" name="widgets[widget_posts_recent]" class="onoffswitch-checkbox" id="widgets[widget_posts_recent]" value="1"  checked   data-target="widget_posts_recent">
    <label class="onoffswitch-label" for="widgets[widget_posts_recent]">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>

                            </div>
                        </section>
                                                                    <section class="wrap_widget_analytics_referrer">
                            <i class="fas fa-user-friends " style="background-color: #3598dc"></i>
                            <span class="widget_name">Trang giới thiệu nhiều</span>
                            <div class="swc_wrap">
                                <div class="onoffswitch">
    <input type="hidden" name="widgets[widget_analytics_referrer]" value="0">
    <input type="checkbox" name="widgets[widget_analytics_referrer]" class="onoffswitch-checkbox" id="widgets[widget_analytics_referrer]" value="1"  checked   data-target="widget_analytics_referrer">
    <label class="onoffswitch-label" for="widgets[widget_analytics_referrer]">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>

                            </div>
                        </section>
                                                                    <section class="wrap_widget_audit_logs">
                            <i class="fas fa-history " style="background-color: #44b6ae"></i>
                            <span class="widget_name">Lịch sử hoạt động</span>
                            <div class="swc_wrap">
                                <div class="onoffswitch">
    <input type="hidden" name="widgets[widget_audit_logs]" value="0">
    <input type="checkbox" name="widgets[widget_audit_logs]" class="onoffswitch-checkbox" id="widgets[widget_audit_logs]" value="1"  checked   data-target="widget_audit_logs">
    <label class="onoffswitch-label" for="widgets[widget_audit_logs]">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>

                            </div>
                        </section>
                                                                    <section class="wrap_widget_ecommerce_report_general">
                            <i class="fas fa-shopping-basket " style="background-color: #7ad03a"></i>
                            <span class="widget_name">Thương mại điện tử</span>
                            <div class="swc_wrap">
                                <div class="onoffswitch">
    <input type="hidden" name="widgets[widget_ecommerce_report_general]" value="0">
    <input type="checkbox" name="widgets[widget_ecommerce_report_general]" class="onoffswitch-checkbox" id="widgets[widget_ecommerce_report_general]" value="1"  checked   data-target="widget_ecommerce_report_general">
    <label class="onoffswitch-label" for="widgets[widget_ecommerce_report_general]">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>

                            </div>
                        </section>
                                    </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Hủy bỏ</button>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
                    </div>
                </div>
@endsection
@section('js')
    <script src="{{asset('js/admin/respond.min.js')}}"></script>
    <script src="{{asset('js/admin/excanvas.min.js')}}"></script>
    <script src="{{asset('js/admin/ie8.fix.min.js')}}"></script>
    <script src="{{asset('js/admin/modernizr.min.js')}}"></script>
    <script src="{{asset('js/admin/select2.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.cookie.js')}}"></script>
    <script src="{{asset('js/admin/core.js')}}"></script>
    <script src="{{asset('js/admin/toastr.min.js')}}"></script>
    <script src="{{asset('js/admin/pace.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.mCustomScrollbar.js')}}"></script>
    <script src="{{asset('js/admin/jquery.stickytableheaders.js')}}"></script>
    <script src="{{asset('js/admin/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/admin/spectrum.js')}}"></script>
    <script src="{{asset('js/admin/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.blockui.min.js')}}"></script>
    <script src="{{asset('js/admin/sortable.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.equalheights.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/admin/raphael-min.js')}}"></script>
    <script src="{{asset('js/admin/morris.min.js')}}"></script>
    <script src="{{asset('js/admin/dashboard.js')}}"></script>
    <script src="{{asset('js/admin/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('js/admin/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('js/admin/analytics.js')}}"></script>
    <script src="{{asset('js/admin/blog.js')}}"></script>
    <script src="{{asset('js/admin/audit-log.js')}}"></script>
    <script src="{{asset('js/admin/report.js')}}"></script>
@endsection