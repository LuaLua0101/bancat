<!-- footer  -->
<footer class="footer">
    <div class="container">
        <div class="row footer-content">

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <h4 class="text-uppercase">Liên hệ</h4>
                <ul>
                    <li class="my-3"><a href="#"><strong>Địa chỉ: 93/7/13 Đường 2, KP2, P. Tam Bình, Q. Thủ
                                Đức</strong></a></li>
                    <li class="my-3"><a href="#"><strong>Địa chỉ: 331/46 Vườn Lài, P. An Phú Đông, Q.12, TP.
                                HCM</strong></a></li>
                    <li class="mb-3"><a href="#"><strong>Điện thoại : 0962212241</strong></a>
                    </li>
                    <li class="mb-3"><a href="#"><strong>Email: akvinaco@gmail.com</strong></a></li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 px-0">
                    <h4 class="text-uppercase">Sản phẩm</h4>
                    <ul>
                        @foreach( config('config.cate_name') as $cateKey => $cateInfo )
                        <li class="my-3"><a
                                href="{{route('getCate', ['cate' => config('config.cate')[$cateKey]])}}">{{$cateInfo[0]}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h4 class="text-uppercase">Liên hệ</h4>
                    <ul >
                        <li class="my-3">
                            <img src="{{asset('public/bancat/images/logo.png')}}" alt="Logo" title="Patin" width="500"
                                class="img-responsive">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Copy right  -->
    <div class="copyright bg-blue">
        <div class="container text-center">
            <p class="my-3">Copyright 2019 © NAD </p>
        </div>
    </div>
</footer>

<!-- Chatbox button  -->
<div class="chatbox-btn-wrapper">
    <div class="chatbox-btn">
        <div class="call-link">
            <a href="tel:+021212588">
                <img src="{{asset('public/bancat/images/chips/phone.png')}}" alt="phone" width="50">
            </a>
        </div>
        <!-- <div class="zalo">
            <a href="#">
                <img src="./public/bancat/images/chips/zalo.png" alt="zalo" width="50">
            </a>
        </div> -->
        <!-- <div class="messenger">
            <a href="#">
                <img src="./public/bancat/images/chips/messenger.jpg" alt="messenger" width="50">
            </a>
        </div> -->
        <!-- <div class="chatbox">
            <a href="#">
                <img src="./public/bancat/images/chips/chatbox.png" alt="messenger" width="50">
            </a>
        </div> -->
    </div>

</div>
<!-- Go top top  -->
<a href="#" id="goTop"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
<!---END #footer-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0">
</script>
