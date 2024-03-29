@extends('admin.layout')

@section('list_banner_active', 'active')

@section('content')
<section class="mt-30px mb-30px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- Recent Updates Widget          -->
                <div id="delete-page" class="card">
                    <div id="delete-header" class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="h2 bold"><a href="javascript:void(0)">Danh sách banner</a></h2>
                    </div>
                    <div id="delete-box" class="show delete-box card-body">
                        <div class="delete-form">
                            <ul>
                                @foreach($products as $item)
                                <li class="d-flex justify-content-between align-items-center bt-line">
                                    <div class="left-col title text-primary">
                                        <img src="{{asset('public/img/banners/' . $item->url)}}" height="80px"
                                            style="margin-right: 10px;">
                                        <!-- <a href="{{route('adgetEditBanner', ['id' => $item->id])}}">Chi tiết</a> -->
                                    </div>
                                    <div class="right-col text-right"><a class="btn delete-btn"
                                            href="{{route('adgetDelBanner', ['id' => $item->id])}}"
                                            onclick="return confirm('Bạn có chắc chắn xóa banner này?');"><i
                                                class="icon icon-close"></i></a></div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Recent Updates Widget End-->
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')

@endsection