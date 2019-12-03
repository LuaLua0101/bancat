@extends('frontend.layout')

@section('content')

<!--============================================ PAGE CONTENT============================================  -->
<section class="blogs-page bg-light-grey">
    <div class="page-content-wrapper">
        <div class="blog-page-content-wrap">
            <div class="container container-wide">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="blog-content-wrapper">
                            <div class="row mtn-25">
                                @foreach($newss as $item)
                                <div class="col-md-6 col-lg-4">
                                    <div class="blog-item">
                                        <figure class="blog-item__thumb">
                                            <a href="{{route('getNews', ['news' => $item->slug])}}"><img
                                                    src="{{asset('public/img/post/'.$item->cover)}}"
                                                    alt="{{$item->title}}" class="img-responsive" alt="Blog"></a>
                                        </figure>

                                        <div class="blog-item__info">
                                            <div class="post-date fs-14 bg-white">
                                                <span>{{date('d', strtotime($item->created_at))}}</span>
                                                <span>{{date('M', strtotime($item->created_at))}}</span>
                                            </div>
                                            <h2 class="post-title"><a
                                                    href="{{route('getNews', ['news' => $item->slug])}}">{{$item->title}}</a>
                                            </h2>
                                            <p class="post-excerpt">{{$item->description}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- <nav class="pagination-wrap mt-70 mt-md-50 mt-sm-35">
                            <ul class="pagination pagination--2 justify-content-center">
                                <li class="active mr-2"><a href="#" class="bg-main-color">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </nav> -->
                    </div>

                    <div class="col-lg-3">
                        <div class="sidebar-area">

                            <!-- <div class="sidebar-item">
                                <h4 class="sidebar-title">Danh mục</h4>
                                <div class="sidebar-body">
                                    <ul class="sidebar-list">
                                        <li><a href="#">Giày patin trẻ em <span>(2)</span></a></li>
                                        <li><a href="#">Giày patin người lớn <span>(3)</span></a></li>
                                        <li><a href="#">Sửa chữa <span>(6)</span></a></li>
                                        <li><a href="#">Giày patin cho nữ <span>(2)</span></a></li>
                                        <li><a href="#">Chưa phân loại <span>(4)</span></a></li>
                                    </ul>
                                </div>
                            </div> -->

                            <div class="sidebar-item">
                                <h4 class="sidebar-title">Các bài viết mới nhất</h4>
                                <div class="sidebar-body">
                                    @foreach($news_5 as $item)
                                    <div class="sidebar-product">
                                        <a href="{{route('getNews', ['news' => $item->slug])}}" class="image"><img
                                                src="{{asset('public/img/post/'.$item->cover)}}" alt="{{$item->title}}"
                                                class="img-responsive" alt="Blog"></a>
                                        <div class="content">
                                            <a href="{{route('getNews', ['news' => $item->slug])}}">{{$item->title}}</a>
                                            <p>{{$item->description}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--============================================ PAGE CONTENT============================================  -->

@endsection