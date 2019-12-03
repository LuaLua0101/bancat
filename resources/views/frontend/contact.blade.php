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
                                <img src="./images/logo.png" alt="showroom" class="img-responsive px-0">
                            </div>
                            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                <div class="mt-2">
                                    <address>
                                        <div class="store-name  text-red">
                                            <strong>
                                                TRUNG TÂM DẠY TRƯỢT PATIN TẠI GIA THỊNH NGUYỄN
                                            </strong>
                                        </div>
                                        <div class="my-3">
                                            <i class="fa fa-building  text-brand" aria-hidden="true"></i>
                                            <span>
                                                Địa chỉ: 232/17/5 Quốc Lộ 13, P.26, Quận Bình Thạnh, TP.HCM
                                            </span>
                                        </div>
                                    </address>
                                </div>
                                <ul>
                                    <li class="my-3"><a href="tel:+0908688589" class="text-black"><i
                                                class="fa fa-phone  text-brand" aria-hidden="true"></i>
                                            Hotline: 0908 688 589 - 0903.688.589</a></li>
                                    <li class="my-3"> <a href="mailto:daytruotpatin@gmail.com" class="text-black">
                                            <i class="fa fa-envelope  text-brand" aria-hidden="true"></i>
                                            <span>
                                                daytruotpatin@gmail.com
                                            </span>
                                        </a></li>
                                    <li class="my-3"><a href="#" target="_blank" rel="noopener noreferrer"
                                            class="text-black">
                                            <i class="fa fa-facebook text-brand" aria-hidden="true"></i>
                                            <span>
                                                www.facebook.com/DayTruotPatin
                                            </span>
                                        </a></li>
                                    <li class="my-3"><a href="#" target="_blank" rel="noopener noreferrer"
                                            class="text-black">
                                            <i class="fa fa-youtube text-brand" aria-hidden="true"></i>
                                            <span>
                                                www.youtube.com/DayTruotPatin
                                            </span>
                                        </a></li>
                                    <li class="my-3"><a href="#" target="_blank" rel="noopener noreferrer"
                                            class="text-black">
                                            <i class="fa fa-instagram  text-brand" aria-hidden="true"></i>
                                            <span>
                                                www.instagram.com/DayTruotPatin
                                            </span>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 px-0">
                <div style="width: 100%"><iframe width="100%"
                        src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a
                            href="https://www.maps.ie/coordinates.html">gps coordinates</a></iframe></div><br />
            </div>

        </div>

        <!-- Contact form  -->
        <div class="contact-form row my-4">

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
            <!-- Facebook comment plugin here  -->
            <div class="col-lg-6">
                <img src="./images/facebookProvider.PNG" alt="facebook" class="img-responsive">
            </div>
        </div>

</section>
<!--============================================ PAGE CONTENT============================================  -->

@endsection