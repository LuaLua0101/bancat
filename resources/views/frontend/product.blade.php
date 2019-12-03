@extends('frontend.layout')

@section('content')
<!--============================================ PAGE CONTENT============================================  -->
<section class="product-lists">
    <div class="container">
        <div class="row">

            <!-- Banner and products  -->
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="title_danhmuc">
                    <h1 style="color:#0588fa"><b>{{$title}}</b></h1>
                </div>
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
                    <!-- Products list  -->
                    <div class="product-lists best-sellers my-4">
                        <div class="row">
                            @foreach($products as $item)
                            <!-- Product block  -->
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <div class="product-block thumbnail px-0 py-0">
                                        <div class="mb-0">
                                            <div class="product-img">
                                                <a href="{{route('getProduct', ['product' => $item->slug])}}">
                                                    <img class="lazy" src="{{asset('public/img/post/' . $item->cover)}}"
                                                        alt="{{$item->title}}"
                                                        style="object-fit: cover;width: 270px;height: 270px;" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-caption text-center">
                                            <h3 class="product-title mt-0 py-3">
                                                {{$item->title}}
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
                </div>
            </div>

        </div>
    </div>
</section>
<!--============================================ PAGE CONTENT============================================  -->

@endsection