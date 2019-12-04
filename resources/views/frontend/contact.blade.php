@extends('frontend.layout')

@section('content')

<!--============================================ PAGE CONTENT============================================  -->
<section class="contact-page">
    <div class="container">
        <!-- SEARCH RESULTS  -->
        <div class="row bg-pale-grey">

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 px-0">
                <div class="search-results">
                    <!-- List item -->
                    <div class="store-list col-md-12 px-0">
                        <!-- Item  -->
                        <div class="store-item col-md-12">
                            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 p-2">
                                <img src="./public/bancat/images/logo.png" alt="showroom" class="img-responsive px-0">
                            </div>
                            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                <div class="mt-2">
                                    <address>
                                        <div class="store-name  text-red">
                                            <strong>
                                                CÔNG TY TNHH SX TM DV SÁU HOÀNG
                                            </strong>
                                        </div>
                                        <div class="my-3">
                                            <i class="fa fa-building  text-brand" aria-hidden="true"></i>
                                            <span>
                                                Địa chỉ: 93/7/13 Đường 2, KP2, P. Tam Bình, Q. Thủ
                                                Đức
                                            </span>
                                        </div>
                                    </address>
                                </div>
                                <ul>
                                    <li class="my-3"><a href="tel:+0962212241" class="text-black"><i
                                                class="fa fa-phone  text-brand" aria-hidden="true"></i>
                                            Hotline: 0962212241</a></li>
                                    <li class="my-3"> <a href="mailto:akvinaco@gmail.com" class="text-black">
                                            <i class="fa fa-envelope  text-brand" aria-hidden="true"></i>
                                            <span>
                                                akvinaco@gmail.com
                                            </span>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 px-0">
                <div style="width: 100%"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7836.569338995628!2d106.7317371765191!3d10.865939505541618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527f063241d47%3A0x67dba266f4c86cf9!2zVGFtIELDrG5oLCBUaOG7pyDEkOG7qWMsIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1575359741540!5m2!1svi!2s"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
                <br />
            </div>

        </div>

        <!-- Contact form  -->
        <!-- <div class="contact-form row my-4">

            <form action="#" method="POST" role="form" class="col-lg-6">
                <legend>Liên hệ</legend>

                <div class="form-group">
                    <label for="hoten">Họ tên</label>
                    <input type="text" class="form-control" id="hoten" placeholder="Họ tên">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="message">Tin nhắn</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="full-width"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Gửi đi</button>
            </form>
            <div class="col-lg-6">
                <img src="./images/facebookProvider.PNG" alt="facebook" class="img-responsive">
            </div>
        </div> -->

</section>
<!--============================================ PAGE CONTENT============================================  -->

@endsection