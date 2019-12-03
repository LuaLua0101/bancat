@extends('frontend.layout')

@section('content')

<div id="main_content">
    <link href="{{asset('public/magiczoomplus/magiczoomplus.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('public/css/tab.css')}}" type="text/css" rel="stylesheet" />

    <div class="wapper">

        <!--End Jquery tabs-->
        <div class="title_danhmuc">
            <p>Chi tiết sản phẩm</p>
        </div>
        <div class="box_container">
            <div class="wap_pro">

                <div class="zoom_slick">
                    <div class="slick2">
                        @foreach(json_decode($product->list_img,true) as $img)
                        <a data-zoom-id="Zoom-detail" id="Zoom-detail" class="MagicZoom"
                            href="{{asset('public/img/post/' . $img)}}"><img class='cloudzoom'
                                src="{{asset('public/img/post/' . $img)}}" /></a>
                        @endforeach
                    </div>
                    <!--.slick-->

                    <div class="slick">
                        @foreach(json_decode($product->list_img,true) as $img)
                        <p><img src="{{asset('public/img/post/' . $img)}}" /></p>
                        @endforeach
                    </div>
                    <!--.slick-->
                </div>
                <!--.zoom_slick-->

                <ul class="product_info">
                    <li class="ten">{{$product->title}}</li>
                    <li class="gia"><b>Giá:</b>
                        <div class="gia">
                            <p>{{number_format($product->price)}} VND</p>
                        </div>
                    </li>
                    <li>
                        <b>Đơn vị tính:</b> <b>{{$product->unit}}</b>
                    </li>
                    <li>
                        <b>Trọng lượng:</b> <b>{{$product->weight}}</b>
                    </li>
                    <li>
                        <b>Xuất xứ:</b> <b>{{$product->origin}}</b>
                    </li>
                    <li>
                        <b>Tình trạng:</b> <b>{{$product->status===0?"Hết hàng":"Còn hàng"}}</b>
                    </li>

                    <!-- <li>
                        <div class="product-qty">
                            <div class="show">
                                <label>Đặt hàng:</label>
                            </div>
                            <div>
                                <div class="controls" style="display: inline-block;vertical-align: middle;">
                                    <button class="fa fa-minus"></button>
                                    <input type="text" value="1" readonly id="qty" />
                                    <button class="fa fa-plus is-up"></button>
                                    <div class="clear"></div>
                                </div>
                                <div class="cart" style="display: inline-block;vertical-align: middle;">
                                    <a href="javascript:void(0)" class="add-cart"
                                        onclick="doAddCartMore({{$product->id}},'{{$product->title}}','{{$product->slug}}','{{asset('public/img/post/' . $product->cover)}}',{{$product->price}});">Thêm
                                        vào giỏ <i class="fa fa-cart-plus"></i></a>
                                </div>

                                <div class="cart" style="display: inline-block;vertical-align: middle;">
                                    <a href="{{route('getCart')}}" class="add-cart"
                                        onclick="doAddCartMore({{$product->id}},'{{$product->title}}','{{$product->slug}}','{{asset('public/img/post/' . $product->cover)}}',{{$product->price}});">Mua
                                        ngay <i class="fa fa-cart-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </li> -->
                    <li>
                        {!!$product->description!!}
                    </li>
                </ul>
                <div class="clear"></div>
            </div>

            <div id="tabs">
                <ul id="ultabs">
                    <li data-vitri="0">Thông tin sản phẩm</li>
                </ul>
                <div style="clear:both"></div>

                <div id="content_tabs">
                    <div class="tab">
                        {!!$product->content!!}
                    </div>
                    <div class="fb-comments" data-href="{{url()->current()}}" data-numposts="5" data-width="100%"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

        <div class="title_danhmuc">
            <p>Sản phẩm liên quan</p>
        </div>
        <div class="show_sanpham">

            @foreach($productRelated as $item)
            <div class="pad_sp">
                <div class="bx_sp">
                    <a href="{{route('getProduct', ['product' => $item->slug])}}">
                        <img class="lazy" data-src="{{asset('public/img/post/' . $item->cover)}}" alt="{{$item->title}}"
                            style="object-fit: cover;width:270px;height: 270px;" />
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