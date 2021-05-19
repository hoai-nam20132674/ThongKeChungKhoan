<article class="col-md-3 col-sm-6 col-xs-12 blog-item">
	<a href="/{{$blog->url}}" title="{{$blog->title}}" class="clearfix">
		<div class="evo-article-image">
			
			<img src="{{asset('uploads/images/systems/loading.gif')}}" data-src="{{asset('uploads/images/blogs/'.$blog->avata)}}" alt="{{$blog->title}}" class="lazy img-responsive center-block" />
			
		</div>
		<h3 class="line-clamp">{{$blog->title}}</h3>
		<p>{!! \Illuminate\Support\Str::words($blog->content, 10,'...')  !!}</p>
	</a>
</article>