<div class="wap_tintuc">
    <div class="wapper">
        <div class="title_danhmuc">
            <p>Tin tức - Video</p>
            <div>LỢI ÍCH CỦA TRÁI CÂY ĐỐI VỚI SỨC KHỎE - QUÁ TRÌNH THU HOẠCH CÁC LOẠI TRÁI CÂY</div>
        </div>
        <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-7 col-tintuc">
                <div class="slick_tintuc">

                    @foreach($newss as $item)
                    <div>
                        <div class="bx_tintuc clearfix">
                            <a href="{{route('getNews', ['news' => $item->slug])}}">
                                <img src="{{asset('public/img/post/' . $item->cover)}}" width="275px" alt="{{$item->title}}" />
                            </a>
                            <div class="info_tin">
                                <p><span><b>{{date('d', strtotime($item->created_at))}}</b>Tháng {{date('m', strtotime($item->created_at))}}</span>
                                    <a href="{{route('getNews', ['news' => $item->slug])}}">{{$item->title}}</a>
                                </p>
                                <div>{{$item->description}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-5 col-video">
                 <div id="video" class="load_video">


<div class="video_popup left_video">
    <iframe title="CẬN CẢNH VƯỜN NHO MẨU ĐƠN TẠI NHẬT BẢN" width="100%" src="https://www.youtube.com/embed/stLzgaFKaL8" frameborder="0" allowfullscreen></iframe></div>
<div class="slick_video">
            <div>
            <p>
                <a href="javascript:void(0)" rel="stLzgaFKaL8">
                    <img src="https://img.youtube.com/vi/stLzgaFKaL8/0.jpg" title="CẬN CẢNH VƯỜN NHO MẨU ĐƠN TẠI NHẬT BẢN">
                </a>
            </p>
        </div>
            <div>
            <p>
                <a href="javascript:void(0)" rel="RvOioq4XmlY">
                    <img src="https://img.youtube.com/vi/RvOioq4XmlY/0.jpg" title="QUÁ TRÌNH THU HOẠCH VÀ ĐÓNG GÓI CHERRY NEW ZEALAND">
                </a>
            </p>
        </div>
            <div>
            <p>
                <a href="javascript:void(0)" rel="IFpIgKRiY-Q">
                    <img src="https://img.youtube.com/vi/IFpIgKRiY-Q/0.jpg" title="GIỚI THIỆU CHERRY TASMANIA ÚC">
                </a>
            </p>
        </div>
            <div>
            <p>
                <a href="javascript:void(0)" rel="OiCE_1qBd78">
                    <img src="https://img.youtube.com/vi/OiCE_1qBd78/0.jpg" title="TÁO ENVY THƯƠNG HIỆU CỦA HÃNG ENZA">
                </a>
            </p>
        </div>
            <div>
            <p>
                <a href="javascript:void(0)" rel="YAUeQHghUUs">
                    <img src="https://img.youtube.com/vi/YAUeQHghUUs/0.jpg" title="QUÁ TRÌNH THU HOẠCH ĐÓNG GÓI TÁO CỦA HÃNG SUPER FRESH GROWERS">
                </a>
            </p>
        </div>
            <div>
            <p>
                <a href="javascript:void(0)" rel="Y0jCujQG7L0">
                    <img src="https://img.youtube.com/vi/Y0jCujQG7L0/0.jpg" title="QUÁ TRÌNH THU HOẠCH VÀ ĐÓNG GÓI CỦA QUẢ LỰU ISRAEL">
                </a>
            </p>
        </div>
            <div>
            <p>
                <a href="javascript:void(0)" rel="NIwLvshWyAw">
                    <img src="https://img.youtube.com/vi/NIwLvshWyAw/0.jpg" title="QUÁ TRÌNH THU HOẠCH VÀ ĐÓNG GÓI TRÁI KIWI NEW ZEALAND">
                </a>
            </p>
        </div>
    </div>

</div>
             </div>
        </div>
    </div>
</div>