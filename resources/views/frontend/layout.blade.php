<!doctype html>
<html lang="vi">

@include('frontend.head')

<body itemscope itemtype="//schema.org/WebPage" style="background:#ffffff" ondragstart="return false;" ondrop="return false;">
    <div class="wap">
        <div id="pre-loader">
            <div id="wrap">
                <div id="preloader_1"><span></span><span></span><span></span><span></span><span></span></div>
            </div>
        </div>

        @include('frontend.header')

        @yield('content')

        @include('frontend.footer') 
        @include('frontend.script')

    </div>

    @if (session('ordersuccess'))
    <script type="text/javascript">
    $(document).ready(function() {
        Lobibox.notify('success', {
        msg: "{{session('ordersuccess')}}",
        delay: 3000,
        showClass: 'zoomIn',        // Show animation class.
        hideClass: 'zoomOut',
        });
        clearCart();
    });
    </script>
    @endif
</body>

</html>