
<!DOCTYPE html>
<html lang="vi">
    <head>
        @yield('meta')
        <link href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" rel="shortcut icon" type="image/png">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        @yield('css')
		
    </head>
    <body>
        @if( Session::has('flash_message'))
            <div class="note note-{{ Session::get('flash_level')}}" style="display: none;">
                <p class="flash-message">{{ Session::get('flash_message')}}</p>
            </div>
        @endif
        @if( count($errors) > 0)
            
            @foreach($errors->all() as $error)
                <div class="note note-danger" style="display: none;">
                    <p>{{$error}}</p>
                </div>
            @endforeach
                
        @endif      
        <!-- Preloader Start -->
        <div class="preloader"></div>
        <!-- Preloader End -->
        
		@include('front-end.layout.header')
	        
	    @yield('content')

		@include('front-end.layout.footer')

		<script src="{{asset('js/jquery.v1.12.4.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery-core-plugins.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/sweetalert.min.js')}}"></script>
        @if( Session::has('flash_message'))
            <script>
                var message = $('.flash-message').text();
                swal({
                  title: message,
                  text: "",
                  icon: "success",
                  button: "ĐÓNG",
                });
                
                
            </script>
        @endif

        @yield('js')
    </body>
</html>