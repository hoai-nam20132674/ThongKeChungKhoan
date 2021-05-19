<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="mobile-only-brand pull-left">
        <div class="nav-header pull-left">
            <div class="logo-wrap">
                <a  href="https://philongexpress.com"  class="tb-pc">
                    <img class="brand-img pull-left" src="https://i.pinimg.com/originals/0c/3b/3a/0c3b3adb1a7530892e55ef36d3be6cb8.png" width="40px" alt="brand"/>

                    <div class="pull-left" style="max-width: 168px; font-size: smaller;">
                        <span brand-text style="font-style: smaller;"><span rel='tooltip' title="Tên">{{Auth::user()->name}}</span> / <span rel='tooltip' title="Mã khách">{{Auth::user()->phone}}</span></span>
                        <p style="font-size: x-small; line-height: 14px;">{{Auth::user()->email}}</p>
                    </div>
                </a>
            </div>
        </div>
        
        <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
                    <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
        

        <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
        <form id="search_form" role="search" action="{{URL::route('qlPackages')}}" method="get" class="top-nav-search collapse pull-left">
            <div class="input-group">
                <input type="text" name="mvd" value="" class="form-control" placeholder="Nhập mã vận đơn">
                <span class="input-group-btn">
                <button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
                </span>
            </div>
        </form>
    </div>
    <div id="mobile_only_nav" class="mobile-only-nav pull-right">
        <ul class="nav navbar-right top-nav pull-right">
            
            <li>
                <a  href="#">Tỷ giá: 3750</a>
            </li>
            
            
            <!-- notification -->
            <li class="dropdown keep-open alert-drp dropdown-msg-parent">
                <a  href="#" url-read="#" class="dropdown-toggle dropdown-msg t-dropdown" data-toggle="dropdown"><i class="zmdi zmdi-notifications top-nav-icon"></i>
                                            
                                    </a>
                <ul id="notifi-expand" class="dropdown-menu alert-dropdown tab-struct custom-tab-1 alert-dropdown-custom container" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
                                        <li class="">
                        <ul role="tablist" class="nav nav-tabs">
                                                          <li class="msg-type active" role="presentation">
                                 <a class="msg-type-btn frontend active" data-loaded="false" data-type="0" data-module="message" aria-expanded="true" data-toggle="tab" role="tab" id="chat_title_tab_0" href="#chat_tab_0">
                                 Tất cả
                                 </a>
                              </li>
                                                          <li class="msg-type " role="presentation">
                                 <a class="msg-type-btn frontend " data-loaded="false" data-type="1" data-module="message" aria-expanded="true" data-toggle="tab" role="tab" id="chat_title_tab_1" href="#chat_tab_1">
                                 Trao đổi
                                 </a>
                              </li>
                                                          <li class="msg-type " role="presentation">
                                 <a class="msg-type-btn frontend " data-loaded="false" data-type="2" data-module="message" aria-expanded="true" data-toggle="tab" role="tab" id="chat_title_tab_2" href="#chat_tab_2">
                                 T&agrave;i ch&iacute;nh
                                 </a>
                              </li>
                                                          <li class="msg-type " role="presentation">
                                 <a class="msg-type-btn frontend " data-loaded="false" data-type="3" data-module="message" aria-expanded="true" data-toggle="tab" role="tab" id="chat_title_tab_3" href="#chat_tab_3">
                                 Đơn h&agrave;ng
                                 </a>
                              </li>
                                                          <li class="msg-type " role="presentation">
                                 <a class="msg-type-btn frontend " data-loaded="false" data-type="4" data-module="message" aria-expanded="true" data-toggle="tab" role="tab" id="chat_title_tab_4" href="#chat_tab_4">
                                 Khiếu nại
                                 </a>
                              </li>
                                                        <li class="msg-type" role="presentation">
                                 <a class="msg-type-btn frontend" data-loaded="false" data-type="99" aria-expanded="true" data-toggle="tab" role="tab" id="chat_title_tab_99" data-module="global" href="#chat_tab_99">
                                 Th&ocirc;ng b&aacute;o
                                 </a>
                              </li>
                        </ul>
                    </li>
                    <div class="tab-content" id="right_sidebar_content">
                                                    <div id="chat_tab_0" data-key="0" class="chat-tab tab-pane fade active in" role="tabpane0">
                                <li>
                                   <div >
                                       <div class="streamline message-nicescroll-bar customScrollDiv" data-page="1" data-module="message">
                                       <div class="customScrollDivChild">
                                                              <div class="sl-item">
                                               <a href="javascript:void(0)">
                                                   <div class="icon">
                                                       <i class="fa fa-spinner fa-spin" aria-hidden="true"></i>
                                                   </div>
                                                   <div class="sl-content">
                                                       <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                       Đang tải...</span>
                                                       <span class="inline-block font-11  pull-right notifications-time"></span>
                                                       <div class="clearfix"></div>
                                                       <p class="truncate">Đang tải tin nhắn, vui l&ograve;ng đợi.</p>
                                                   </div>
                                               </a>
                                           </div>
                                                           </div>
                                       </div>
                                   </div>
                                </li>
                            </div>
                                                    <div id="chat_tab_1" data-key="1" class="chat-tab tab-pane fade " role="tabpane1">
                                <li>
                                   <div >
                                       <div class="streamline message-nicescroll-bar customScrollDiv" data-page="1" data-module="message">
                                       <div class="customScrollDivChild">
                                                              <div class="sl-item">
                                               <a href="javascript:void(0)">
                                                   <div class="icon">
                                                       <i class="fa fa-spinner fa-spin" aria-hidden="true"></i>
                                                   </div>
                                                   <div class="sl-content">
                                                       <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                       Đang tải...</span>
                                                       <span class="inline-block font-11  pull-right notifications-time"></span>
                                                       <div class="clearfix"></div>
                                                       <p class="truncate">Đang tải tin nhắn, vui l&ograve;ng đợi.</p>
                                                   </div>
                                               </a>
                                           </div>
                                                           </div>
                                       </div>
                                   </div>
                                </li>
                            </div>
                                                    <div id="chat_tab_2" data-key="2" class="chat-tab tab-pane fade " role="tabpane2">
                                <li>
                                   <div >
                                       <div class="streamline message-nicescroll-bar customScrollDiv" data-page="1" data-module="message">
                                       <div class="customScrollDivChild">
                                                              <div class="sl-item">
                                               <a href="javascript:void(0)">
                                                   <div class="icon">
                                                       <i class="fa fa-spinner fa-spin" aria-hidden="true"></i>
                                                   </div>
                                                   <div class="sl-content">
                                                       <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                       Đang tải...</span>
                                                       <span class="inline-block font-11  pull-right notifications-time"></span>
                                                       <div class="clearfix"></div>
                                                       <p class="truncate">Đang tải tin nhắn, vui l&ograve;ng đợi.</p>
                                                   </div>
                                               </a>
                                           </div>
                                                           </div>
                                       </div>
                                   </div>
                                </li>
                            </div>
                                                    <div id="chat_tab_3" data-key="3" class="chat-tab tab-pane fade " role="tabpane3">
                                <li>
                                 <div >
                                     <div class="streamline message-nicescroll-bar customScrollDiv" data-page="1" data-module="message">
                                     <div class="customScrollDivChild">
                                                            <div class="sl-item">
                                             <a href="javascript:void(0)">
                                                 <div class="icon">
                                                     <i class="fa fa-spinner fa-spin" aria-hidden="true"></i>
                                                 </div>
                                                 <div class="sl-content">
                                                     <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                     Đang tải...</span>
                                                     <span class="inline-block font-11  pull-right notifications-time"></span>
                                                     <div class="clearfix"></div>
                                                     <p class="truncate">Đang tải tin nhắn, vui l&ograve;ng đợi.</p>
                                                 </div>
                                             </a>
                                         </div>
                                                         </div>
                                     </div>
                                 </div>
                              </li>
                            </div>
                                                    <div id="chat_tab_4" data-key="4" class="chat-tab tab-pane fade " role="tabpane4">
                                <li>
                                 <div >
                                     <div class="streamline message-nicescroll-bar customScrollDiv" data-page="1" data-module="message">
                                     <div class="customScrollDivChild">
                                                            <div class="sl-item">
                                             <a href="javascript:void(0)">
                                                 <div class="icon">
                                                     <i class="fa fa-spinner fa-spin" aria-hidden="true"></i>
                                                 </div>
                                                 <div class="sl-content">
                                                     <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                     Đang tải...</span>
                                                     <span class="inline-block font-11  pull-right notifications-time"></span>
                                                     <div class="clearfix"></div>
                                                     <p class="truncate">Đang tải tin nhắn, vui l&ograve;ng đợi.</p>
                                                 </div>
                                             </a>
                                         </div>
                                                         </div>
                                     </div>
                                 </div>
                              </li>
                            </div>
                                                <div id="chat_tab_99" data-key="99" class="chat-tab tab-pane fade" role="tabpane99">
                             <li>
                               <div >
                                   <div class="streamline message-nicescroll-bar customScrollDiv" data-page="1" data-module="global">
                                   <div class="customScrollDivChild">
                                                          <div class="sl-item">
                                           <a href="javascript:void(0)">
                                               <div class="icon">
                                                   <i class="fa fa-spinner fa-spin" aria-hidden="true"></i>
                                               </div>
                                               <div class="sl-content">
                                                   <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                   Đang tải...</span>
                                                   <span class="inline-block font-11  pull-right notifications-time"></span>
                                                   <div class="clearfix"></div>
                                                   <p class="truncate">Đang tải tin nhắn, vui l&ograve;ng đợi.</p>
                                               </div>
                                           </a>
                                       </div>
                                                       </div>
                                   </div>
                               </div>
                            </li>
                         </div>
                    </div>
                    <li>
                        <div class="notification-box-bottom-wrap">
                            <hr class="light-grey-hr ma-0"/>
                            <div class="col-xs-6" style="border-right: 1px solid rgba(33, 33, 33, 0.1);">
                                <a class="block text-center read-all" href="https://pl.philongexpress.com/auth/messager" data-url="https://pl.philongexpress.com/auth/news"> Read All </a>
                            </div>
                            
                            <div class="col-xs-6">
                                <a id='mark-all' class="block text-center" href="#" data-url="https://pl.philongexpress.com/auth/tin-nhan/xem-tat-ca" style="color: #878787;padding: 5px 15px 0;font-size: 13px;text-transform: capitalize;"> Mark all as read </a>
                            </div>
                            
                        </div>
                    </li>
                </ul>
            </li>
                        <!-- end noti -->
            <li class="dropdown auth-drp">
                <a href="#" class="dropdown-toggle pr-0 t-dropdown" data-toggle="dropdown"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png" alt="user_auth" class="user-auth-img img-circle"/></a>
                <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                    <li>
                        <a href="https://pl.philongexpress.com/auth/user/doi-thong-tin-ca-nhan"><i class="zmdi zmdi-account"></i><span>Đổi thông tin</span></a>
                    </li>
                    <li>
                        <a href="https://pl.philongexpress.com/auth/user/doi-mat-khau"><i class="zmdi zmdi-settings"></i><span>Đổi mật khẩu</span></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="/logout"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- /Top Menu Items -->