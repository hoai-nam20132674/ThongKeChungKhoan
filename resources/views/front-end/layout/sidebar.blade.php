<aside class="left left-content col-lg-3 col-md-3 ">
            
    <aside class="aside-item collection-category">
        <div class="aside-title">
            <h2 class="title-head margin-top-0"><span>Danh mục </span></h2>
        </div>
        <div class="categories-box">
            <ul class="lv1">
                
                @php
                    $menus = App\Menu::where('parent_id',null)->orderBy('stt','ASC')->get();
                @endphp
                
                
                @foreach($menus as $menu)
                
                    @php
                        $menu2s = App\Menu::where('parent_id',$menu->id)->orderBy('stt','ASC')->get();
                    @endphp
                    @if(count($menu2s)!=0)
                        <li class="nav-item nav-items ">
                            <a href="/{{$menu->url}}" class="nav-link" title="{{$menu->title}}">
                                {{$menu->title}}
                            </a> 
                            <span class="open-close">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                            <ul class="lv2">
                                @foreach($menu2s as $menu2)
                                    @php
                                        $menu3s = App\Menu::where('parent_id',$menu2->id)->orderBy('stt','ASC')->get();
                                    @endphp
                                    @if(count($menu3s)!=0)
                                        <li class="">
                                            <a class="nav-link" href="/{{$menu2->url}}" title="{{$menu2->title}}">
                                                {{$menu2->title}}
                                            </a>
                                            
                                            <span class="open-close">
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </span>
                                            <ul class="lv3">
                                                @foreach($menu3s as $menu3)
                                                <li class="nav-item-lv3">
                                                    <a class="nav-link" href="/{{$menu3->url}}" title="{{$menu3->title}}">{{$menu3->title}}</a>
                                                </li> 
                                                @endforeach
                                            </ul> 
                                            
                                        </li>

                                    @else
                                        <li class=""><a class="nav-link" target="{{$menu2->target}}" href="/{{$menu2->url}}" title="{{$menu2->title}}">{{$menu2->title}}</a></li>
                                    @endif
                                
                                @endforeach
                            </ul>
                        </li>

                    @else
                        <li class="nav-item nav-items ">
                            <a href="/{{$menu->url}}" target="{{$menu->target}}"title="{{$menu->title}}">{{$menu->title}}</a>
                        </li>
                    @endif
                
                @endforeach

            </ul>
        </div>
    </aside>


    <div class="sticky-top60">



    <div class="aside-item">
        <div class="aside-title">
            <div class="title-head margin-top-0">
                
                <a href="/tin-tuc" title="Bài viết liên quan">
                    <h2>Tin tức mới</h2>
                </a>
                
            </div>
        </div>
        <div class="list-blogs">
            @foreach($blogs as $bl)                                    
                <article class="blog-item blog-item-list">                  
                    <h3 class="blog-item-name"><a href="/{{$bl->url}}" title="{{$bl->title}}">{{$bl->title}}</a></h3>
                </article>       
            @endforeach
        </div>
    </div>



    <div class="aside-title fanepage"><h2>Facebook</h2></div>
    <div style="width: 100%" class="fb-page" data-href="{{$system->facebook}}" data-tabs="" data-width="260" data-height="" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{$system->facebook}}" class="fb-xfbml-parse-ignore"><a href="{{$system->facebook}}">{{$system->name}}</a></blockquote></div>
    
</div>
        </aside>
        

<div class="ab-module-article-mostview"></div>
<input class="abbs-article-id" type="hidden" data-article-id="1614934">

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3"></script>

        <div class="bizweb-product-reviews-module"></div>