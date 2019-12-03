@extends('frontend.layout')

@section('content')

<section class="product-detail container my-4">
    <div class="row">
        <!-- Images and detail  -->
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="product-images">
                        <div class="slider-for">
                        @foreach(json_decode($product->list_img,true) as $img)
                            <img src="{{asset('public/img/post/' . $img)}}"
                                class="img-responsive" alt="Item 1">
                                @endforeach
                            <img src="{{asset('public/img/post/' .$product->cover)}}" class="img-responsive" alt="Item 1">
                        </div>
                        <div class="slider-nav mt-3">
                        @foreach(json_decode($product->list_img,true) as $img)
                            <img src="{{asset('public/img/post/' . $img)}}"
                                class="img-responsive mr-3" alt="Item 1">
                                @endforeach

                            <img src="{{asset('public/img/post/' .$product->cover)}}" class="img-responsive mr-3" alt="Item 1">
                        </div>
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
                            <!-- <p class="mt-2">(1 đánh giá từ khách hàng)</p> -->
                        </div>
                        <!-- <div class="prod-id">
                            Mã Số Sản Phẩm: <span class="text-grey">13223 - 13210</span>
                        </div> -->

                        <div class="price text-brand my-4 fs-20">
                        {{number_format($product->price)}} ₫
                        </div>
                        <div class="prod-desc">
                        {!!$product->description!!}
                        </div>
                        <!-- Actions  -->
                        <div>
                            <div>
                                Gọi đặt mua: <a class="text-brand" href="tel:+1900.6777">1900.6777<time
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
                            <li role="presentation" class="navtab-customized active"><a href="#home"
                                    aria-controls="home" role="tab" data-toggle="tab" class="text-brand fs-20">MÔ TẢ</a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-4">

                            <!-- Tab panel  -->
                            <div role="tabpanel" class="tab-pane active" id="hcm">

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
                <!-- NAVTABS MOBILE  -->
                <!-- Tabs menu on mobile -- drop down -->
                <div class="panel-group visible-xs visible-sm px-3 my-3" id="accordion" role="tablist"
                    aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" class="d-inline-block text-uppercase full-width" data-toggle="collapse"
                                    data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Mô tả
                                </a>
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p>       {!!$product->content!!}</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Related products  -->

        <div class="col-lg-3 my-4">
                    <div class="sidebar-area">
                        <div class="sidebar-item">
                            <h4 class="sidebar-title">Sản phẩm liên quan</h4>
                            <div class="sidebar-body">
                            @foreach($productRelated as $item)
                                <div class="sidebar-product">
                                    <a href="{{route('getProduct', ['product' => $item->slug])}}" class="image"><img
                                            src="{{asset('public/img/post/'.$item->cover)}}" alt="{{$item->title}}"
                                            class="img-responsive"></a>
                                    <div class="content">
                                        <a href="{{route('getProduct', ['product' => $item->slug])}}"
                                            class="title">{{$item->title}}</a>
                                            <div class="price-wrapper">
                                        <span class="price">
                                            <span class="pricing">{{number_format($item->price)}}<span class="currency">₫</span></span></span>
                                    </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
        <!-- End Related products  -->
        <!-- News  -->
        <!-- Related products  -->
            <div class="col-lg-3 my-4">
                    <div class="sidebar-area">
                        <div class="sidebar-item">
                            <h4 class="sidebar-title">Các bài viết mới nhất</h4>
                            <div class="sidebar-body">
                                @foreach($newsRelated as $item)
                                <div class="sidebar-product">
                                    <a href="{{route('getNews', ['news' => $item->slug])}}" class="image"><img
                                            src="{{asset('public/img/post/'.$item->cover)}}" alt="{{$item->title}}"
                                            class="img-responsive"></a>
                                    <div class="content">
                                        <a href="{{route('getNews', ['news' => $item->slug])}}"
                                            class="title">{{$item->title}}</a>
                                        <p>{{$item->description}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
        <!-- End news  -->
    </div>
</section>
@endsection
