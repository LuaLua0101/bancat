@extends('frontend.layout')

@section('content')

<div id="main_content">
    <div class="wapper">
        <div class="title_danhmuc">
            <p>Bạn có biết?</p>
        </div>
        <div class="box_container">
            <div class="wap_box_new">
                <div class="row">
                    @foreach($newss as $item)
                    <div class="col-md-4 col-sm-6 col-xs-6 col-tt">
                        <div class="pad_tuvan">
                            <a href="{{route('getNews', ['news' => $item->slug])}}">
                                <img src="{{asset('public/img/post/'.$item->cover)}}" alt="{{$item->title}}"
                                    style="height: 250px" />
                            </a>
                            <h5><a href="{{route('getNews', ['news' => $item->slug])}}">{{$item->title}}</a></h5>
                            <div>
                                <p>{{$item->description}}</p>
                            </div>
                            <p><a href="{{route('getNews', ['news' => $item->slug])}}">Xem thêm</a></p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="pagination"></div>
    </div>
    <div class="clear"></div>
</div>
<!---END #main_content-->

@endsection