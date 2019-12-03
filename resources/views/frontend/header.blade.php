 <!-- Header  -->
 <header>
     <!-- Top bar  -->
     <nav class="nav topbar">
         <div class="container">
             <div class="row">

                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <div class="py-2">
                         <i class="fa fa-home text-white" aria-hidden="true"></i>
                         <span class="text-uppercase text-white">CÔNG TY TNHH SX TM DV SÁU HOÀNG</span>
                     </div>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right py-2 topbar-right visible-md visible-lg">

                     <a href="mailto:cokhisauhoang@gmail.com" class="email" target="_blank">
                         <i class="fa fa-envelope text-pale-grey" aria-hidden="true"></i>
                         <span class="text-pale-grey">cokhisauhoang@gmail.com</span>
                     </a>
                     <a href="tel:+0908688589" target="_blank">
                         <i class="fa fa-phone text-pale-grey" aria-hidden="true"></i>
                         <span class="text-pale-grey">
                             0972925492
                         </span>
                     </a>


                 </div>

             </div>
         </div>
     </nav>
     <!-- MAIN MENU  -->
     <nav class="main-menu visible-md visible-lg">
         <!-- Logo and services  -->
         <div class="container">
             <div class="row">
                 <!-- left  -->
                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 px-0">

                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 px-0">
                         <a href="{{route('getHome')}}" class="main-logo">
                             <h1>
                                 <img src="{{asset('public/bancat/images/logo.png')}}" alt="Logo" title="Patin">
                             </h1>
                         </a>
                     </div>

                 </div>
                 <!-- right  -->
                 <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 px-0">
                     <!-- Services  -->

                     <div class="col-xs-9 col-sm-9 col-md-10 col-lg-10">
                         <!-- block service  -->
                         <div class="block-service col-md-4 col-lg-4 px-0">
                             <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 px-0">
                                 <img class="service-icn"
                                     src="{{asset('public/bancat/images/chips/giao-hang-toan-quoc.png')}}"
                                     alt="giao hàng">
                             </div>
                             <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 pl-0">
                                 <span>
                                     <strong>Thanh toán tại nhà</strong>
                                     <span>tại chi nhánh TPHCM</span>
                                 </span>
                             </div>

                         </div>
                         <!-- Blog service  -->
                         <div class="block-service col-md-4 col-lg-4 px-0">
                             <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 px-0">
                                 <img class="service-icn"
                                     src="{{asset('public/bancat/images/chips/tu-van-mien-phi.png')}}" alt="giao hàng">
                             </div>
                             <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 pl-0">
                                 <span>
                                     <strong>Hotline: 0972925492</strong>
                                     <span>tư vấn 24/7 miễn phí</span>
                                 </span>
                             </div>

                         </div>
                         <!-- Blog service  -->
                         <div class="block-service col-md-4 col-lg-4 px-0">
                             <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 px-0">
                                 <img class="service-icn"
                                     src="{{asset('public/bancat/images/chips/giao-hang-toan-quoc.png')}}"
                                     alt="giao hàng">
                             </div>
                             <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 pl-0">
                                 <span>
                                     <strong>Giao hàng toàn quốc</strong>
                                     <span>ship COD tận nhà</span>
                                 </span>
                             </div>

                         </div>

                     </div>
                     <!-- Cart  -->
                     <!-- <div class="cart col-lg-2 text-right">
                            <a href="#">
                                <button class="btn btn-primary">
                                    <span>Giỏ hàng/</span>
                                    <span>0đ</span>
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </button>
                            </a>
                        </div> -->
                 </div>


             </div>
         </div>
     </nav>

     <nav class="navbar navbar-default main-nav" role="navigation">
         <div class="container">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle mr-0" data-toggle="collapse"
                     data-target=".navbar-ex1-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <ul class="visible-xs visible-sm">
                     <li class="d-inline-block">
                         <a href="{{route('getHome')}}" class="main-logo">
                             <img src="{{asset('public/bancat/images/logo.png')}}" alt="Logo" title="Patin" width="200"
                                 class="py-2">
                         </a>
                     </li>
                 </ul>
             </div>

             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse navbar-ex1-collapse">
                 <ul class="nav navbar-nav">
                     <li style="margin-right: 10px"><a href="{{route('getHome')}}">Trang chủ</a></li>
                     <li style="margin-right: 10px"><a href="{{route('getIntro')}}">Giới thiệu</a></li>
                     <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Khóa học patin <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li> -->
                     <li class="dropdown" style="margin-right: 10px">
                         <a href="{{route('getAllProduct')}}" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm<b
                                 class="caret"></b></a>
                         <ul class="dropdown-menu">
                             @foreach( config('config.cate_name') as $cateKey => $cateInfo )
                             <li>
                                 <a
                                     href="{{route('getCate', ['cate' => config('config.cate')[$cateKey]])}}">{{$cateInfo[0]}}</a>
                             </li>
                             @endforeach
                         </ul>
                     </li>
                     <li style="margin-right: 10px"><a href="{{route('getAllNews')}}">Tin tức</a></li>
                     <!-- <li><a href="#">Đặt hàng</a></li> -->
                     <li><a href="{{route('getContact')}}">Liên hệ</a></li>
                 </ul>

                 <!-- <ul class="nav navbar-nav navbar-right">

                        <li>
                            <form class="navbar-form navbar-left search-form" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control mobile-search"
                                        placeholder="Bạn cần tìm gì...?">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"
                                            aria-hidden="true"></i></button>
                                </div>
                            </form>
                        </li>
                    </ul> -->
             </div><!-- /.navbar-collapse -->
         </div>
     </nav>

     <!-- Main menu  -->

 </header>

 <!-- end header  -->
