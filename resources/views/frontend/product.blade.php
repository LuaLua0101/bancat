@extends('frontend.layout')

@section('content')

<div id="main_content">
    <div class="wapper">
        <div class="title_danhmuc">
            <p>{{$title}}</p>
        </div>
        <div class="show_sanpham">
            @foreach($products as $item)
            <div class="pad_sp">
                <div class="bx_sp">
                    <a href="{{route('getProduct', ['product' => $item->slug])}}">
                        <img class="lazy" data-src="{{asset('public/img/post/' . $item->cover)}}" alt="{{$item->title}}"
                            style="object-fit: cover;width: 270px;height: 270px;" />
                    </a>
                    <div class="info_sp text-center">
                        <h3><a href="{{route('getProduct', ['product' => $item->slug])}}">{{$item->title}}</a></h3>
                        <div class="gia text-center">
                            <p>{{number_format($item->price)}} VND</p>
                        </div>
                        <!-- <p class="muahang">
                            <a onclick="doAddCart({{$item->id}},'{{$item->title}}','{{$item->slug}}','{{asset('public/img/post/' . $item->cover)}}',{{$item->price}},1);" href="javascript:void(0)">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Thêm vào giỏ hàng
                            </a>
                        </p> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="clear"></div>
</div>
<!---END #main_content-->

@endsection