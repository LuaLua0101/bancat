@extends('admin.layout')

@section('list_cart_active', 'active')

@section('content')

<!-- Create Article Section -->
<section class="mt-30px mb-30px forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- Recent Updates Widget          -->
                <div id="create-news" class="card updates">
                    <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="h2 bold"><a href="javascript:void(0)">Chỉnh sửa đơn hàng</a></h2>
                    </div>
                    <div id="create-box" class="show create-box card-body">
                        <form action="{{route('adpostEditCart', ['id' => $cart->id])}}" method="POST" id="create-new"
                            class="form-create" enctype='multipart/form-data'>
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Tên khách hàng:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-name" name="name" required=""
                                        value="{{$cart->name}}">
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Số điện thoại:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-phone" name="phone" required=""
                                        value="{{$cart->phone}}">
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Địa chỉ:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-address" name="address" required=""
                                        value="{{$cart->address}}">
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Email:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-email" name="email" required=""
                                        value="{{$cart->email}}">
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Ghi chú:</label>
                                <div class="col-sm-10">
                                    <textarea class="text-content form-control" name="note" >{{$cart->note}}</textarea>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Trạng thái:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="form-page-type" name="status">
                                        <option value="1" @if($cart->status == 1) selected="" @endif>Chưa giao</option>
                                        <option value="2" @if($cart->status == 2) selected="" @endif>Đang giao</option>
                                        <option value="3" @if($cart->status == 3) selected="" @endif>Đã giao</option>
                                        <option value="4" @if($cart->status == 4) selected="" @endif>Đã hủy</option>
                                    </select>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <table id="giohang" class="table table-bordered " style="margin-top:10px;background:rgba(239, 239, 239, 0.47);">
                                    <thead style="background:rgba(239, 239, 239, 0.47);">
                                        <th align="center" class="hidden-xs"></th>
                                        <th>Tên sản phẩm</th>
                                        <th align="center">Giá bán</th>
                                        <th align="center">Số lượng</th>
                                        <th align="center" class="hidden-xs">Tổng giá</th>
                                    </thead>
                                    <tbody>
                                        <?php $total = 0; ?>
                                        @foreach($products as $item)
                                        <tr class="cart_detail">
                                            <td width="10%" align="center" class="hidden-xs">
                                                <a target="_blank" href="{{route('getProduct', ['product' => $item->slug])}}"><img height="50px" src="{{asset('public/img/post/' . $item->cover)}}" class="img-responsive" /></a>
                                            </td>
                                            <td width="20%"><a class="name" target="_blank" href="{{route('getProduct', ['product' => $item->slug])}}">{{$item->title}}</a> </td>
                                            <td width="10%" align="center">
                                                <div class="price-real">{{number_format($item->price)}}</div>
                                            </td>
                                            <td width="10%" align="center">
                                                {{$item->number}}
                                            </td>
                                            <td width="18%" align="center" class="price-total hidden-xs">{{number_format($item->price*$item->number)}}</td>
                                            <?php $total += $item->price*$item->number; ?>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="6" style="padding:10px">
                                                <h3 class="all-cart-price">Tổng giá: {{number_format($total)}} VNĐ</h3>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="form-group bold">
                                <input type="reset" value="RESET" class="btn btn-secondary"> <input type="submit"
                                    value="CẬP NHẬT" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Recent Updates Widget End-->
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
<script src="{{asset('public/admin/js/post.js')}}" type="text/javascript" ></script>
@endsection