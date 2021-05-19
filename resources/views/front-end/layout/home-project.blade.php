<div class="home-project" data-lazyload2="{{asset('uploads/images/systems/bg-footer.png')}}" style="background-image: url({{asset('uploads/images/systems/loading.gif')}});">
    <div class="container">
        <div class="title-text bg-grey">
            <h2>DỰ ÁN ĐÃ THỰC HIỆN</h2>
        </div>
        <div class="owl-project carousel-resize-991">

            <!-- Item -->
            @foreach($projects as $project)
                @include('front-end.layout.project-box')
            @endforeach
            <!--End item-->
            
        </div>
    </div>
</div>