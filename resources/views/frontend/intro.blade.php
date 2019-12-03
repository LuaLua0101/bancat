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
                            <!-- Start Comment Area Wrapper -->
                            <div class="comment-area-wrapper">
                        </section>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============================================ PAGE CONTENT============================================  -->

@endsection