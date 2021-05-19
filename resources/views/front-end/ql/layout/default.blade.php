
<!DOCTYPE html>
<html lang="en">

@yield('head')

<body data-token="YC9yQbzkaszuu0fQ3AvXJwryl6xt1nkLQumbk37Q" data-domain=0>
    <input type="hidden" id="cart_token" name="cart_token" value="eyJpdiI6InpOcWk2bVwvVVNRK1daTkpHSGlueHdnPT0iLCJ2YWx1ZSI6ImhiVkRpZWN1eGlOM25CZkRDTWdKVHc9PSIsIm1hYyI6IjVjZTdhMTU2MTgyYmNkYzNiMzkyZDU3MzMxMzI2OGMyZGIwM2Y1YzhkOGZiN2YxNjRmNjg1NThiOGUzMGNlNmMifQ==">
    <div class="wrapper theme-1-active theme_toggle pimary-color-green scrollable-nav slide-nav-toggle">
        @include('front-end.ql.layout.header')
        @include('front-end.ql.layout.sidebar')
        
        
        <!-- Right Sidebar Backdrop -->
        <div class="right-sidebar-backdrop"></div>
        <!-- /Right Sidebar Backdrop -->
       
        @yield('content')
            </div>
    <!-- /#wrapper -->
<style>
    @media (min-width: 992px) {
        .modal-lg {
            width: 1100px;
        }
    }
</style>


    @yield('js')
    </body>
</html>
