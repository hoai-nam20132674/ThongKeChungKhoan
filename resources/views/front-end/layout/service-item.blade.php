<article class="blog-item">
    <div class="blog-item-thumbnail">                       
        <a href="/{{$service->url}}" title="{{$service->title}}">
            <img src="{{asset('uploads/images/services/'.$service->avata)}}" style="width:100%;" class="img-responsive" alt="{{$service->title}}">
        </a>
    </div>
    
    <div class="blog-item-info">
        <a href="/{{$service->url}}" title="{{$service->title}}"><h3 class="blog-item-name">{{$service->name}}</h3></a>

    </div>
</article>