@extends('frontend.layout')

@section('content')
<!--============================================ PAGE CONTENT============================================  -->
<section class="product-lists">
    <div class="container">
        <div class="row">

            <!-- Banner and products  -->
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <!-- RESULTS -->
                <div class="filter-results">
                    <!-- Filter sub bar  -->
                    <div class="row">

                        <!-- <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                <div class="d-inline-block">Showing 1–33 of 281 results</div>
                                <div class="d-inline-block">
                                    <form class="filter-sorting" method="get">
                                        <select name="orderby" class="orderby" aria-label="Shop order">
                                            <option value="popularity" selected="selected">Thứ tự theo mức độ phổ biến
                                            </option>
                                            <option value="rating">Thứ tự theo điểm đánh giá</option>
                                            <option value="date">Mới nhất</option>
                                            <option value="price">Thứ tự theo giá: thấp đến cao</option>
                                            <option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
                                        </select>
                                        <input type="hidden" name="paged" value="1">
                                    </form>
                                </div>
                            </div> -->
                        <!--
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                <ul class="filter-pagination">
                                    <li class="active">1</li>
                                    <li>2</li>
                                    <li>...</li>
                                    <li>9</li>
                                </ul>
                            </div> -->

                    </div>

                    <section class="best-sellers kids-products">
                        <div class="container">
                            <!-- Title  -->
                            <div class="breadcum">
                                <h2 class="text-uppercase breadcum-header">
                                    <span style="color:#0588fa"><b>{{$title}}</b></span>
                                </h2>
                            </div>
                            <!-- List products  -->
                            <div class="row my-4 pt-3">
                                @foreach($products as $item)
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <a href="{{route('getProduct', ['product' => $item->slug])}}"
                                        rel="noopener noreferrer">
                                        <div class="product-block thumbnail px-0 py-0">
                                            <div class="mb-0">
                                                <div class="product-img"  style="max-width: 100%; height:100%">
                                                    <img src="{{asset('public/img/post/' . $item->cover)}}"
                                                        alt="{{$item->title}}"
                                                       
                                                        class="img-responsive mx-auto">
                                                </div>
                                            </div>
                                            <div class="product-caption text-center">
                                                <h3 class="product-title mt-0 py-3">
                                                    <a
                                                        href="{{route('getProduct', ['product' => $item->slug])}}">{{$item->title}}</a>
                                                </h3>
                                                <div class="price-wrapper pb-3">
                                                    <span class="price"><span
                                                            class="pricing">{{number_format($item->price)}}<span
                                                                class="currency">₫</span></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
        <div class="row" style="padding: 10px">
            {!!$description!!}
        </div>
    </div>
</section>
<!--============================================ PAGE CONTENT============================================  -->

@endsection