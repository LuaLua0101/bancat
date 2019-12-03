@extends('frontend.layout')

@section('content')
<!--============================================ PAGE CONTENT============================================  -->
<section class="homepage">
    <!-- Categories bar & Slider  -->
    <div class="bars-and-slider">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 category-bar">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#" class="text-white"> DANH MỤC SẢN PHẨM</a></li>
                        </li>
                        @foreach( config('config.cate_name') as $cateKey => $cateInfo )

                        <li class="list-group-item"><a
                                href="{{route('getCate', ['cate' => config('config.cate')[$cateKey]])}}">{{$cateInfo[0]}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="homepage-sliders">
                        <div class="block-slider">
                            <img src="./bancat/images/banner/day-ky-thuat-truot-patin-tai-trung-tam-thinh-nguyen.jpg"
                                alt="banner" class="img-responsive mx-auto">
                        </div>
                        <div class="block-slider">
                            <img src="./bancat/images/banner/patin11.jpg" alt="banner" class="img-responsive mx-auto">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Categories bar & Slider  -->
    </div>
    <!-- 4 qualities  -->
    <div class="quality">
        <div class="container">
            <div class="row">
                <!-- item  -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="col-xs-3 col-lg-3 px-0">
                        <img src="./images/chips/icon1.jpg" alt="freeship" width="66" height="66">
                    </div>
                    <div class="col-xs-9 col-lg-9 pr-0 quality-caption">
                        <div class="main-caption">
                            <strong>Vận chuyển miễn phí</strong>
                        </div>
                        <p>với đơn hàng >1.000.000</p>
                    </div>
                </div>
                <!-- item  -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="col-xs-3 col-lg-3 px-0">
                        <img src="./images/chips/icon2.jpg" alt="freeship" width="66" height="66">
                    </div>
                    <div class="col-xs-9 col-lg-9 pr-0 quality-caption">
                        <div class="main-caption">
                            <strong>Chất lượng bảo đảm</strong>
                        </div>
                        <p>hàng chính hãng</p>
                    </div>
                </div>
                <!-- item  -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="col-xs-3 col-lg-3 px-0">
                        <img src="./images/chips/icon3.jpg" alt="freeship" width="66" height="66">
                    </div>
                    <div class="col-xs-9 col-lg-9 pr-0 quality-caption">
                        <div class="main-caption">
                            <strong>Đổi trả miễn phí</strong>
                        </div>
                        <p>Trong vòng 15 ngày</p>
                    </div>
                </div>
                <!-- item  -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="col-xs-3 col-lg-3 px-0">
                        <img src="./images/chips/icon4.jpg" alt="freeship" width="66" height="66">
                    </div>
                    <div class="col-xs-9 col-lg-9 pr-0 quality-caption">
                        <div class="main-caption">
                            <strong>Hỗ trợ miễn phí</strong>
                        </div>
                        <p>Từ 6h30 - 22h00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End 4 qualities  -->
    <!-- Best sellers -->
    <section class="best-sellers mt-4">
        <div class="container">
            <!-- Title  -->
            <div class="breadcum pt-3">
                <h2 class="text-uppercase breadcum-header">
                    <span>Sản phẩm bán chạy</span>
                </h2>
            </div>
            <!-- List products  -->
            <div class="row my-4 pt-3">
                <!-- Product block  -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <div class="product-block thumbnail px-0 py-0">
                            <div class="mb-0">
                                <div class="product-img">
                                    <img src="./images/products/giay-patin-flying-eagle-b5-den3-247x296.jpg" alt="prod"
                                        class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="product-caption text-center">
                                <h3 class="product-title mt-0 py-3">
                                    Giày Patin Flying Eagle S6 Xanh
                                </h3>
                                <div class="price-wrapper pb-3">
                                    <span class="price"><span class="pricing">1.500.000<span
                                                class="currency">₫</span></span></span>
                                </div>
                            </div>

                        </div>

                    </a>
                </div>
                <!-- Product block  with discount -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <div class="product-block thumbnail px-0 py-0">
                            <div class="mb-0">
                                <div class="product-img">
                                    <span class="discount-rate">-15%</span>
                                    <img src="./images/products/giay-patin-flying-eagle-b6-den2-247x296.jpg" alt="prod"
                                        class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="product-caption text-center">
                                <h3 class="product-title mt-0 py-3">
                                    Giày Patin Flying Eagle S6 Xanh
                                </h3>
                                <div class="price-wrapper pb-3">
                                    <span class="price">
                                        <span class="discount-price"><del>2.0000.0000</del></span>
                                        <span class="pricing">1.500.000<span class="currency">₫</span></span></span>
                                </div>
                            </div>

                        </div>


                    </a>
                </div>
                <!-- Product block  -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="#">

                        <div class="product-block thumbnail px-0 py-0">
                            <div class="mb-0">
                                <div class="product-img">
                                    <img src="./images/products/giay-patin-flying-eagle-F2-xanh6-e1573737787425-247x296.jpg"
                                        alt="prod" class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="product-caption text-center">
                                <h3 class="product-title mt-0 py-3">
                                    Giày Patin Flying Eagle S6 Xanh
                                </h3>
                                <div class="price-wrapper pb-3">
                                    <span class="price"><span class="pricing">1.500.000<span
                                                class="currency">₫</span></span></span>
                                </div>
                            </div>

                        </div>

                    </a>
                </div>
                <!-- Product block  with discount -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="#">


                    </a>
                    <div class="product-block thumbnail px-0 py-0">
                        <div class="mb-0">
                            <div class="product-img">
                                <span class="discount-rate">-15%</span>
                                <img src="./images/products/giay-truot-patin-flying-eagle-drift-21-247x296.jpg"
                                    alt="prod" class="img-responsive mx-auto">
                            </div>
                        </div>
                        <div class="product-caption text-center">
                            <h3 class="product-title mt-0 py-3">
                                Giày Patin Flying Eagle S6 Xanh
                            </h3>
                            <div class="price-wrapper pb-3">
                                <span class="price">
                                    <span class="discount-price"><del>2.0000.0000</del></span>
                                    <span class="pricing">1.500.000<span class="currency">₫</span></span></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End best sellers  -->
    <!-- Latest products  -->
    <section class="best-sellers latest-products">
        <div class="container">
            <!-- Title  -->
            <div class="breadcum">
                <h2 class="text-uppercase breadcum-header">
                    <span>Sản phẩm mới</span>
                </h2>
            </div>
            <!-- List products  -->
            <div class="row my-4 pt-3">
                <!-- Product block  -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <div class="product-block thumbnail px-0 py-0">
                            <div class="mb-0">
                                <div class="product-img">
                                    <img src="./images/products/giay-patin-flying-eagle-b5-den3-247x296.jpg" alt="prod"
                                        class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="product-caption text-center">
                                <h3 class="product-title mt-0 py-3">
                                    Giày Patin Flying Eagle S6 Xanh
                                </h3>
                                <div class="price-wrapper pb-3">
                                    <span class="price"><span class="pricing">1.500.000<span
                                                class="currency">₫</span></span></span>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <!-- Product block  with discount -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <div class="product-block thumbnail px-0 py-0">
                            <div class="mb-0">
                                <div class="product-img">
                                    <span class="discount-rate">-15%</span>
                                    <img src="./images/products/giay-patin-flying-eagle-b6-den2-247x296.jpg" alt="prod"
                                        class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="product-caption text-center">
                                <h3 class="product-title mt-0 py-3">
                                    Giày Patin Flying Eagle S6 Xanh
                                </h3>
                                <div class="price-wrapper pb-3">
                                    <span class="price">
                                        <span class="discount-price"><del>2.0000.0000</del></span>
                                        <span class="pricing">1.500.000<span class="currency">₫</span></span></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Product block  -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <div class="product-block thumbnail px-0 py-0">
                            <div class="mb-0">
                                <div class="product-img">
                                    <img src="./images/products/giay-patin-flying-eagle-F2-xanh6-e1573737787425-247x296.jpg"
                                        alt="prod" class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="product-caption text-center">
                                <h3 class="product-title mt-0 py-3">
                                    Giày Patin Flying Eagle S6 Xanh
                                </h3>
                                <div class="price-wrapper pb-3">
                                    <span class="price"><span class="pricing">1.500.000<span
                                                class="currency">₫</span></span></span>
                                </div>
                            </div>

                        </div>

                    </a>
                </div>
                <!-- Product block  with discount -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <div class="product-block thumbnail px-0 py-0">
                            <div class="mb-0">
                                <div class="product-img">
                                    <span class="discount-rate">-15%</span>
                                    <img src="./images/products/giay-truot-patin-flying-eagle-drift-21-247x296.jpg"
                                        alt="prod" class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="product-caption text-center">
                                <h3 class="product-title mt-0 py-3">
                                    Giày Patin Flying Eagle S6 Xanh
                                </h3>
                                <div class="price-wrapper pb-3">
                                    <span class="price">
                                        <span class="discount-price"><del>2.0000.0000</del></span>
                                        <span class="pricing">1.500.000<span class="currency">₫</span></span></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest products  -->
    <!-- Patin for kids -->
    <section class="best-sellers kids-products">
        <div class="container">
            <!-- Title  -->
            <div class="breadcum">
                <h2 class="text-uppercase breadcum-header">
                    <span>Patin trẻ em</span>
                </h2>
            </div>
            <!-- List products  -->
            <div class="row my-4 pt-3">
                <!-- Product block  -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <div class="product-block thumbnail px-0 py-0">
                            <div class="mb-0">
                                <div class="product-img">
                                    <img src="./images/products/giay-patin-flying-eagle-b5-den3-247x296.jpg" alt="prod"
                                        class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="product-caption text-center">
                                <h3 class="product-title mt-0 py-3">
                                    Giày Patin Flying Eagle S6 Xanh
                                </h3>
                                <div class="price-wrapper pb-3">
                                    <span class="price"><span class="pricing">1.500.000<span
                                                class="currency">₫</span></span></span>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <!-- Product block  with discount -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <div class="product-block thumbnail px-0 py-0">
                            <div class="mb-0">
                                <div class="product-img">
                                    <span class="discount-rate">-15%</span>
                                    <img src="./images/products/giay-patin-flying-eagle-b6-den2-247x296.jpg" alt="prod"
                                        class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="product-caption text-center">
                                <h3 class="product-title mt-0 py-3">
                                    Giày Patin Flying Eagle S6 Xanh
                                </h3>
                                <div class="price-wrapper pb-3">
                                    <span class="price">
                                        <span class="discount-price"><del>2.0000.0000</del></span>
                                        <span class="pricing">1.500.000<span class="currency">₫</span></span></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Product block  -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <div class="product-block thumbnail px-0 py-0">
                            <div class="mb-0">
                                <div class="product-img">
                                    <img src="./images/products/giay-patin-flying-eagle-F2-xanh6-e1573737787425-247x296.jpg"
                                        alt="prod" class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="product-caption text-center">
                                <h3 class="product-title mt-0 py-3">
                                    Giày Patin Flying Eagle S6 Xanh
                                </h3>
                                <div class="price-wrapper pb-3">
                                    <span class="price"><span class="pricing">1.500.000<span
                                                class="currency">₫</span></span></span>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <!-- Product block  with discount -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <div class="product-block thumbnail px-0 py-0">
                            <div class="mb-0">
                                <div class="product-img">
                                    <span class="discount-rate">-15%</span>
                                    <img src="./images/products/giay-truot-patin-flying-eagle-drift-21-247x296.jpg"
                                        alt="prod" class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="product-caption text-center">
                                <h3 class="product-title mt-0 py-3">
                                    Giày Patin Flying Eagle S6 Xanh
                                </h3>
                                <div class="price-wrapper pb-3">
                                    <span class="price">
                                        <span class="discount-price"><del>2.0000.0000</del></span>
                                        <span class="pricing">1.500.000<span class="currency">₫</span></span></span>
                                </div>
                            </div>

                        </div>

                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End patin for kids  -->
    <!-- Patin for kids -->
    <section class="best-sellers adults-products">
        <div class="container">
            <!-- Title  -->
            <div class="breadcum">
                <h2 class="text-uppercase breadcum-header">
                    <span>Giày trượt Patin người lớn</span>
                </h2>
            </div>
            <!-- List products  -->
            <div class="row my-4 pt-3">
                <!-- Product block  -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <div class="product-block thumbnail px-0 py-0">
                            <div class="mb-0">
                                <div class="product-img">
                                    <img src="./images/products/giay-patin-flying-eagle-b5-den3-247x296.jpg" alt="prod"
                                        class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="product-caption text-center">
                                <h3 class="product-title mt-0 py-3">
                                    Giày Patin Flying Eagle S6 Xanh
                                </h3>
                                <div class="price-wrapper pb-3">
                                    <span class="price"><span class="pricing">1.500.000<span
                                                class="currency">₫</span></span></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Product block  with discount -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <div class="product-block thumbnail px-0 py-0">
                            <div class="mb-0">
                                <div class="product-img">
                                    <span class="discount-rate">-15%</span>
                                    <img src="./images/products/giay-patin-flying-eagle-b6-den2-247x296.jpg" alt="prod"
                                        class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="product-caption text-center">
                                <h3 class="product-title mt-0 py-3">
                                    Giày Patin Flying Eagle S6 Xanh
                                </h3>
                                <div class="price-wrapper pb-3">
                                    <span class="price">
                                        <span class="discount-price"><del>2.0000.0000</del></span>
                                        <span class="pricing">1.500.000<span class="currency">₫</span></span></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Product block  -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="#" target="_blank" rel="noopener noreferrer">

                        <div class="product-block thumbnail px-0 py-0">
                            <div class="mb-0">
                                <div class="product-img">
                                    <img src="./images/products/giay-patin-flying-eagle-F2-xanh6-e1573737787425-247x296.jpg"
                                        alt="prod" class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="product-caption text-center">
                                <h3 class="product-title mt-0 py-3">
                                    Giày Patin Flying Eagle S6 Xanh
                                </h3>
                                <div class="price-wrapper pb-3">
                                    <span class="price"><span class="pricing">1.500.000<span
                                                class="currency">₫</span></span></span>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <!-- Product block  with discount -->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <div class="product-block thumbnail px-0 py-0">
                            <div class="mb-0">
                                <div class="product-img">
                                    <span class="discount-rate">-15%</span>
                                    <img src="./images/products/giay-truot-patin-flying-eagle-drift-21-247x296.jpg"
                                        alt="prod" class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="product-caption text-center">
                                <h3 class="product-title mt-0 py-3">
                                    Giày Patin Flying Eagle S6 Xanh
                                </h3>
                                <div class="price-wrapper pb-3">
                                    <span class="price">
                                        <span class="discount-price"><del>2.0000.0000</del></span>
                                        <span class="pricing">1.500.000<span class="currency">₫</span></span></span>
                                </div>
                            </div>

                        </div>

                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End patin for kids  -->
    <!-- News  -->
    <section class="latest-news">
        <div class="container">
            <!-- Title  -->
            <div class="breadcum">
                <h2 class="text-uppercase breadcum-header">
                    <span>Tin tức - Bài viết</span>
                </h2>
            </div>
            <div class="row">
                <!-- News item  -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 news-item">
                    <a href="#">
                        <div class="news-block thumbnail">
                            <div class="mb-0">
                                <div class="news-img">
                                    <img src="./images/banner/1-6797.jpg" alt="prod" class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="news-caption text-center px-3">
                                <h3 class="news-title mt-0 py-3">
                                    Dạy kỹ thuật trượt Patin tại trung tâm dạy trượt patin Thịnh Nguyễn
                                </h3>
                                <div class="news-overview pb-3">
                                    <p class="text-overflow">Trượt patin là một môn thể thao giải trí lành mạnh,
                                        giúp cơ thể dẻo dai, tinh
                                        thẩn sảng khoái. Trượt patin đòi hỏi người chơi phải [...]</p>
                                </div>
                            </div>

                        </div>

                    </a>
                </div>
                <!-- News item  -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 news-item">
                    <a href="#">
                        <div class="news-block thumbnail">
                            <div class="mb-0">
                                <div class="news-img">
                                    <img src="./images/banner/patin3.jpg" alt="prod" class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="news-caption text-center px-3">
                                <h3 class="news-title mt-0 py-3">
                                    Dạy kỹ thuật trượt Patin tại trung tâm dạy trượt patin Thịnh Nguyễn
                                </h3>
                                <div class="news-overview pb-3">
                                    <p class="text-overflow">Trượt patin là một môn thể thao giải trí lành mạnh,
                                        giúp cơ thể dẻo dai, tinh
                                        thẩn sảng khoái. Trượt patin đòi hỏi người chơi phải [...]</p>
                                </div>
                            </div>

                        </div>

                    </a>
                </div>
                <!-- News item  -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 news-item">
                    <a href="#">
                        <div class="news-block thumbnail">
                            <div class="mb-0">
                                <div class="news-img">
                                    <img src="./images/banner/patin11.jpg" alt="prod" class="img-responsive mx-auto">
                                </div>
                            </div>
                            <div class="news-caption text-center px-3">
                                <h3 class="news-title mt-0 py-3">
                                    Dạy kỹ thuật trượt Patin tại trung tâm dạy trượt patin Thịnh Nguyễn
                                </h3>
                                <div class="news-overview pb-3">
                                    <p class="text-overflow">Trượt patin là một môn thể thao giải trí lành mạnh,
                                        giúp cơ thể dẻo dai, tinh
                                        thẩn sảng khoái. Trượt patin đòi hỏi người chơi phải [...]</p>
                                </div>
                            </div>

                        </div>

                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- end news  -->
    <!-- FEEDBACK  -->
    <!-- <section class="feedback mb-4">
        <div class="container">
            <div class="breadcum pt-3">
                <h2 class="text-uppercase breadcum-header">
                    <span>Phản hồi từ khách hàng</span>
                </h2>
            </div>
            <div class="clients-sliders my-4">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 px-0">
                            <img src="./images/avatar.jpg" alt="client1" class="img-responsive mx-auto" width="60">
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, dolorum?</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 px-0">
                            <img src="./images/avater-2.jpg" alt="client1" class="img-responsive mx-auto" width="60">
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, dolorum?</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 px-0">
                            <img src="./images/avatar.jpg" alt="client1" class="img-responsive mx-auto" width="60">
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, dolorum?</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 px-0">
                            <img src="./images/avater-2.jpg" alt="client1" class="img-responsive mx-auto" width="60">
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, dolorum?</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
    <!-- end feedback  -->
    <!-- Advices  -->
    <!-- <section class="advices bg-blue">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 py-4">
                        <h4 class="text-uppercase text-white">Đăng ký tư vấn</h4>
                        <p class="text-white">Gửi email cho chúng tôi để nhận thông tin về sản phẩm phù hợp dành cho bạn
                        </p>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 subscribe-link">
                        <a href="#" target="_blank" class="text-uppercase bg-sub-color text-white">ĐĂNG KÝ</a>
                    </div>


                </div>
            </div>
        </section> -->
</section>
<!--============================================ PAGE CONTENT============================================  -->

@endsection