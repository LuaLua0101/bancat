<div class="wap_danhmuc">
    <div class="wapper">

        @foreach( config('config.cate_name') as $cateKey => $cateInfo )
        <div class="danhmuc_nb">
            <div class="title_danhmuc">
                <h2><a href="{{route('getCate', ['cate' => config('config.cate')[$cateKey]])}}">{{$cateInfo[0]}}</a>
                </h2>
                <div>{{$cateInfo[1]}}</div>
            </div>
            <div class="row">
                <div class="slick_sanpham">

                    @if(isset($products[$cateKey]))
                    @foreach($products[$cateKey] as $item)
                    <div>
                        <div class="col-xs-12">
                            <div class="bx_sp">
                                <a href="{{route('getProduct', ['product' => $item->slug])}}">
                                    <img class="lazy" data-src="{{asset('public/img/post/' . $item->cover)}}"
                                        alt="{{$item->title}}" style="height: 260px" />
                                </a>
                                <div class="info_sp text-center">
                                    <h3><a
                                            href="{{route('getProduct', ['product' => $item->slug])}}">{{$item->title}}</a>
                                    </h3>
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
                    </div>
                    @endforeach
                    @endif

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>