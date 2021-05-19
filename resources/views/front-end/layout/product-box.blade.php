<div class="product-box  ">
    <div class="product-thumbnail">
        
        
        
        <a href="/{{$product->url}}" title="{{$product->title}}" class="image_thumb">
            
            <img class="img-responsive center-block " src="{{asset('uploads/images/systems/loading.gif')}}"  data-lazyload="{{asset('uploads/images/products/avatas/'.$product->avata)}}" alt="{{$product->title}}">
            
        </a>


        
        <a href="/{{$product->url}}" data-handle="ong-thep-han-den" class="btn-white btn_view btn right-to quick-view" title="">
            <i class="fa fa-eye"></i>
        </a>
        
    </div>
    <div class="product-info a-left">
        <h3 class="product-name text2line"><a href="/{{$product->url}}" title="{{$product->title}}">{{$product->name}}</a></h3>
        
        
        
        
        <div class="price-box clearfix">

            <div class="special-price">
                <span class="price product-price">Liên hệ</span>
            </div>
        </div>
        
        
        <div class="bizweb-product-reviews-badge" data-id="15437285"></div>
    </div>



</div>