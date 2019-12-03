@extends('frontend.layout')

@section('content')

<!--============================================ PAGE CONTENT============================================  -->
<section class="product-detail container my-4">
    <div class="row">
        <!-- Images and detail  -->
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="product-images">
                        <div class="slider-for">
                            <img class="lazy" src="{{asset('public/img/post/' . $product->cover)}}"
                                alt="{{$product->title}}" style="object-fit: cover;width: 270px;height: 370px;" />
                        </div>
                        <!-- <div class="slider-nav mt-3">
                            @foreach(json_decode($product->list_img,true) as $img)
                            <p> <img src="{{asset('public/img/post/' . $img)}}" class="img-responsive mr-3"
                                    alt="Item 1"></p>
                            @endforeach
                        </div> -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="product-info">
                        <p>{{$product->title}}</p>
                        <div class="rating mb-2">
                            <i class="fa fa-star text-brand" aria-hidden="true"></i>
                            <i class="fa fa-star text-brand" aria-hidden="true"></i>
                            <i class="fa fa-star text-brand" aria-hidden="true"></i>
                            <i class="fa fa-star text-brand" aria-hidden="true"></i>
                            <i class="fa fa-star text-brand" aria-hidden="true"></i>
                        </div>
                        <div class="prod-id">
                            Mã Số Sản Phẩm: <span class="text-grey">13223 - 13210</span>
                        </div>

                        <div class="price text-brand my-4 fs-20">
                            {{number_format($product->price)}} ₫
                        </div>
                        <div class="prod-desc">
                            Mô tả ngắn: <span class="text-grey">{!!$product->description!!}</span>
                        </div>
                        <!-- Actions  -->
                        <div>
                            <br /><br />
                            <!-- <button class="bg-blue-light full-width btn my-3"><a href="#" class="text-white fs-20">Thêm
                                    vào giỏ hàng</a></button> -->
                            <div class="text-center">
                                Gọi đặt mua: <a class="text-brand" href="tel:0972925492">0972925492<time
                                        class="text-black"> (7:30-21:30)</time></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <!-- Description  -->
                <!-- NAVTABS ON DESKTOP  -->
                <div class="row hidden-xs hidden-sm visible-md visible-lg mt-3">
                    <div class="tabs-x align-center tabs-above tab-bordered">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li role="presentation" class="navtab-customized"><a href="#hcm" aria-controls="hcm"
                                    role="tab" data-toggle="tab" class="text-brand fs-20">THÔNG TIN SẢN PHẨM</a>
                            </li>
                        </ul>
                        <div class="qualities mt-3">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p class="d-inline-block">
                                        {!!$product->content!!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- NAVTABS MOBILE  -->
            <!-- Tabs menu on mobile -- drop down -->
            <div class="panel-group visible-xs visible-sm px-3 my-3" id="accordion" role="tablist"
                aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed d-inline-block text-uppercase full-width" role="button"
                                data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                THÔNG TIN SẢN PHẨM
                            </a>
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="qualities mt-3">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <p class="d-inline-block">
                                            {!!$product->content!!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Related products  -->
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <section class="related-products col-md-12 col-lg-12 px-0">
            <!-- Title  -->
            <div class="sub-sidebar-header bg-blue">
                <h4 class="text-uppercase text-white text-center p-2">
                    <span>Sản phẩm liên quan</span>
                </h4>
            </div>
            <div class="related-products-sliders col-md-12 col-lg-12">
                <div class="product-row row best-sellers my-3">
                    @foreach($productRelated as $item)
                    <div class="col-md-12 ">

                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 px-0">
                            <a href="{{route('getProduct', ['product' => $item->slug])}}">
                                <img src="{{asset('public/img/post/' . $item->cover)}}" alt="hinhanh"
                                    class="img-responsive"></a>
                        </div>

                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 product-caption ">
                            <a href="#">
                                <div>
                                    <span><a
                                            href="{{route('getProduct', ['product' => $item->slug])}}">{{$item->title}}</a></span>
                                </div>
                                <div class="price-wrapper">
                                    <span class="price">
                                        <span class="pricing">{{number_format($item->price)}}<span
                                                class="currency">₫</span></span></span>
                                </div>
                                <div class="product-rating">
                                    <i class="fa fa-star text-yellow"></i>
                                    <i class="fa fa-star text-yellow"></i>
                                    <i class="fa fa-star text-yellow"></i>
                                    <i class="fa fa-star text-yellow"></i>
                                    <i class="fa fa-star text-yellow"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

    </div>
    <!-- End Related products  -->
    <!-- News  -->
    <!-- Related products  -->
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <section class="related-products col-md-12 col-lg-12 px-0">
            <!-- Title  -->
            <div class="sub-sidebar-header bg-blue">
                <h4 class="text-uppercase text-white text-center p-2">
                    <span>Tin tức & Sự kiện</span>
                </h4>
            </div>
            <div class="latest-news col-md-12 col-lg-12 px-0">
                <div class="product-row row best-sellers my-3">
                    @foreach($newsRelated as $item)
                    <div class="col-md-12 ">
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 px-0">
                            <img src="{{asset('public/img/post/' . $item->cover)}}" alt="hinhanh"
                                class="img-responsive">
                        </div>
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 product-caption ">
                            <a href="{{route('getNews', ['news' => $item->slug])}}">
                                <div>
                                    <span class="fs-14">{{$item->title}}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
    <!-- End news  -->
    </div>
</section>
<!--============================================ PAGE CONTENT============================================  -->

@endsection