@extends('frontend.layout')

@section('content')

<!--============================================ PAGE CONTENT============================================  -->
<section class="blog-detail">

    <div class="blog-details-page-wrapper">
        <div class="container container-wide">
            <div class="row">
                <div class="col-lg-9">
                    <!-- Title  -->
                    <div class="breadcum pt-3">
                        <h2 class="text-uppercase breadcum-header">
                            <span>{{$news->title}}</span>
                        </h2>
                    </div>
                    <article class="blog-post-details">
                        <figure class="blog-post-thumb">
                            <img src="{{asset('public/img/post/'.$news->cover)}}" alt="{{$news->title}}"
                                class="img-responsive" style="object-fit: cover;width: 1270px;height: 350px;">
                        </figure>

                        <section class="blog-post-txt-wrap">
                            <div class="blog-post-txt">
                                <h2>{{$news->description}}</h2>

                                {!!$news->content!!}
                            </div>

                            <!-- <div class="share-article text-center">
                                <h6>Chia sẻ bài viết</h6>
                                <div class="share-icons nav justify-content-center">
                                    <a class="facebook" href="#">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>

                                    <a class="twitter" href="#">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a class="reddit" href="#">
                                        <i class="fa fa-reddit" aria-hidden="true"></i>
                                    </a>
                                    <a class="pinterest" href="#">
                                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div> -->

                            <!-- Start Comment Area Wrapper -->
                            <div class="comment-area-wrapper">
                        </section>
                    </article>
                </div>

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
                                            <!-- <p>{{$item->description}}</p> -->
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
</section>
<!--============================================ PAGE CONTENT============================================  -->

@endsection
