<div class="news-wrapper box-shadow-nn mrb-30">
    <div class="news-thumb">
        <img src="{{asset('uploads/images/blogs/'.$item->avata)}}" class="img-full" alt="blog">
        <!-- <div class="news-date">
            <div class="entry-date">26 <br> <span>July</span></div>
        </div> -->
    </div>
    <div class="news-description">
        <h4 class="the-title"><a href="/{{$item->url}}">{{$item->title}}</a></h4>
    </div>
    <div class="news-bottom-part">
        <div class="post-author">
            <div class="author-img">
                <a href="blog-single.html">
                    <img src="{{asset('images/testimonial-img2.jpg')}}" class="rounded-circle" alt="#">
                </a>
            </div>
            <span><a href="blog-single.html" class="text-primary-color">Admin</a></span>
        </div>
        @php
            Carbon\Carbon::setLocale('vi');
            $now = \Carbon\Carbon::now();
        @endphp
        <div class="post-link">
            <span class="entry-date mrr-20"><i class="far fa-clock mrr-10 text-primary-color"></i>{{\Carbon\Carbon::createFromTimestamp(strtotime($item->created_at))->diffForHumans($now)}}</span>
        </div>
    </div>
</div>