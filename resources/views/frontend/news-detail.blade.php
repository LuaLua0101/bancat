@extends('frontend.layout')

@section('content')

<div id="main_content">
    <div class="wapper cach_top">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12 col-noidung">
                <div class="w_tieude_tin">
                    <p>{{$news->title}}</p>
                </div>
                <div class="in_mota" style="margin-bottom: 20px;">
                    <p>{{$news->description}}</p>
                </div>
                {!!$news->content!!}
                <div class="fb-comments" data-href="{{url()->current()}}" data-numposts="5" data-width="100%"></div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 col-lq">
                <div class="w_tieude_tin">
                    <p>Các bài viết khác</p>
                </div>
                <ul>
                    @foreach($newsRelated as $item)
                    <li>
                        <a href="{{route('getNews', ['news' => $item->slug])}}">
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>{{$item->title}}</a>
                    </li>
                    @endforeach
                </ul>
                <div class="clear"></div>
                <div class="pagination"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<!---END #main_content-->

@endsection