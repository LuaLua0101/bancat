@extends('frontend.layout')

@section('content')

<div id="main_content" style="min-height: 300px;">
    <div class="wapper">
        <div class="title_danhmuc">
            <p>Giỏ hàng - Thanh toán</p>
        </div>
        <div id="have-product" class="row" style="display: none;">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="shop">
                    <div class="box_containerlienhe">
                        <div class="content" id="box-shopcart" style="width:100%">
                            <form name="form1" method="post" onsubmit="return false;">
                                <table id="giohang" class="table table-bordered "
                                    style="margin-top:10px;background:rgba(239, 239, 239, 0.47);">
                                    <thead style="background:rgba(239, 239, 239, 0.47);">
                                        <th align="center" class="hidden-xs"></th>
                                        <th>Tên sản phẩm</th>
                                        <th align="center">Giá bán</th>
                                        <th align="center">Số lượng</th>
                                        <th align="center" class="hidden-xs">Tổng giá</th>
                                        <th align="center">Công Cụ</th>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td colspan="6" style="padding:10px">
                                                <h3 class="all-cart-price">Tổng giá: 300.000 VNĐ</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" align="right">

                                                <button class="btn button" type="button"
                                                    onclick="window.history.back();"><i
                                                        class="fa fa-shopping-bag"></i>&nbsp;Mua tiếp</button>
                                                <button class="btn button" type="button" onclick="clearCart()"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Xóa tất
                                                    cả</button>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12">

                <div class="box_containerlienhe shop">

                    <div class="content ">

                        <div class="cus-info">
                            <form method="post" name="frm_order" id="frm_order" class="form-horizontal from-thanhtoan"
                                action="{{route('postAddCart')}}" enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}
                                <input type="hidden" name="cart" value="">
                                <div class="">
                                    <div class="bill_form">

                                        <div class="form-group">
                                            <label for="hoten" class="col-sm-3 control-label">Họ
                                                tên<span>*</span></label>
                                            <div class="col-sm-9">
                                                <input class="t form-control" name="name" id="hoten" type="text"
                                                    value="" required="" />

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="dienthoai" class="col-sm-3 control-label">Điện
                                                thoại<span>*</span></label>
                                            <div class="col-sm-9">
                                                <input class="t form-control" name="phone" id="dienthoai" type="number"
                                                    required="" value="" />

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="diachi" class="col-sm-3 control-label">Địa
                                                chỉ<span>*</span></label>
                                            <div class="col-sm-9">
                                                <input class="t form-control" name="address" id="diachi" type="text"
                                                    value="" required="" />

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email"
                                                class="col-sm-3 control-label">E-Mail<span>*</span></label>
                                            <div class="col-sm-9">
                                                <input class="t form-control" name="email" id="email" type="email"
                                                    value="" />

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="note" class="col-sm-3 control-label">Ghi
                                                chú<span>*</span></label>
                                            <div class="col-sm-9">
                                                <textarea id="note" name="note" class="form-control ax"
                                                    style="resize:none" cols="50" rows="4"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class='clearfix'></div>
                                </div>
                                <hr />
                        </div>
                        <div class="clear"></div>
                        <div class="clearfix"></div>
                        <div style="text-align: right;">
                            <button title='tiếp tục' class="btn xbtn" type="submit" onclick="checkCart();" value=""
                                style="cursor:pointer;" />Xác nhận và thanh toán <i class="fa fa-sign-in"></i></button>
                        </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
        <form id="no-product" name="form1" method="post" onsubmit="return false;" style="display: none;">
            <table class="table table-bordered " style="margin-top:10px;background:rgba(239, 239, 239, 0.47);">
                <tbody>
                    <tr bgcolor="#FFFFFF">
                        <td>Không có sản phẩm!</td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

    <div class="clear"></div>
</div>
<!---END #main_content-->

@endsection