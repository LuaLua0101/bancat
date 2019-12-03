@extends('frontend.layout')

@section('content')

<section class="product-detail container my-4">
    <div class="row">
        <!-- Images and detail  -->
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="product-images">
                        <div class="slider-for">
                            <img src="./images/products/giay-truot-patin-f4-mau-tim-goc-nghieng.jpg"
                                class="img-responsive" alt="Item 1">
                            <img src="./images/products/frame-giay-truot-patin-f4-mau-tim.jpg" class="img-responsive"
                                alt="Item 1">
                            <img src="./images/products/khoa-giay-truot-patin-f4-mau-tim.jpg" class="img-responsive"
                                alt="Item 1">
                            <img src="./images/products/timthumb.jpg" class="img-responsive" alt="Item 1">
                        </div>
                        <div class="slider-nav mt-3">
                            <img src="./images/products/giay-truot-patin-f4-mau-tim-goc-nghieng.jpg"
                                class="img-responsive mr-3" alt="Item 1">
                            <img src="./images/products/frame-giay-truot-patin-f4-mau-tim.jpg"
                                class="img-responsive mr-3" alt="Item 1">
                            <img src="./images/products/khoa-giay-truot-patin-f4-mau-tim.jpg"
                                class="img-responsive mr-3" alt="Item 1">
                            <img src="./images/products/timthumb.jpg" class="img-responsive mr-3" alt="Item 1">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="product-info">
                        <p>THÔNG TIN SẢN PHẨM</p>
                        <div class="rating mb-2">
                            <i class="fa fa-star text-brand" aria-hidden="true"></i>
                            <i class="fa fa-star text-brand" aria-hidden="true"></i>
                            <i class="fa fa-star text-brand" aria-hidden="true"></i>
                            <i class="fa fa-star text-brand" aria-hidden="true"></i>
                            <i class="fa fa-star text-brand" aria-hidden="true"></i>
                            <!-- <p class="mt-2">(1 đánh giá từ khách hàng)</p> -->
                        </div>
                        <!-- <div class="prod-id">
                            Mã Số Sản Phẩm: <span class="text-grey">13223 - 13210</span>
                        </div> -->

                        <div class="price text-brand my-4 fs-20">
                            4.554.000 ₫
                        </div>
                        <div class="prod-desc">
                            Giày trượt Patin Flying Eagle F1 Màu Đen
                            Giày trượt Patin Flying Eagle F1 Màu Đen chính hãng mang lại cảm giác trượt tốt nhất
                            dành cho bạn. Flying Ealge là thương hiệu patin đang được ưu chuộng tại thị trường Việt
                            Nam
                        </div>
                        <!-- Actions  -->
                        <div>
                            <div>
                                Gọi đặt mua: <a class="text-brand" href="tel:+1900.6777">1900.6777<time
                                        class="text-black"> (7:30-21:30)</time></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <!-- Description  -->
                <!-- NAVTABS ON DESKTOP  -->
                <div class="row hidden-xs hidden-sm visible-md visible-lg mt-3">
                    <div class="tabs-x align-center tabs-above tab-bordered">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li role="presentation" class="navtab-customized active"><a href="#home"
                                    aria-controls="home" role="tab" data-toggle="tab" class="text-brand fs-20">MÔ TẢ</a>
                            </li>
                            <li role="presentation" class="navtab-customized"><a href="#hcm" aria-controls="hcm"
                                    role="tab" data-toggle="tab" class="text-brand fs-20">CHẾ ĐỘ BẢO HÀNH VÀ HẬU MÃI</a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-4">

                            <!-- Tab panel  -->
                            <div role="tabpanel" class="tab-pane active" id="hcm">

                                <div class="qualities mt-3">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <p class="d-inline-block">
                                                Tại sao nên mua hàng tốt, hàng chính hãng?
                                                <ul>
                                                    <li> ✓ Ưu điểm đầu tiên khi mua hàng chính hãng là bạn được hưởng
                                                        chế độ
                                                        bảo hành từ nhà sản xuất và cửa hàng của chúng tôi từ 12 tháng
                                                        đến
                                                        24 tháng và hỗ trợ trọn đời khi cần sửa chữa và thay thế .</li>
                                                    <li>

                                                        ✓ Thứ hai là hàng chính hãng luôn tốt hơn hàng trôi dạt, có độ
                                                        bền
                                                        cao. Đặc biệt đối với các môn thể thao mạo hiểm, khuyên dùng nên
                                                        sử
                                                        dụng sản phẩm chính hãng để đảm bảo an toàn cho bạn.
                                                    </li>
                                                    <li>
                                                        ✓ Thứ 3, đặc biệt đối với các môn thể thao mạo hiểm, khuyên dùng
                                                        nên
                                                        sử dụng sản phẩm chính hãng để đảm bảo an toàn cho bạn.
                                                        CLB Patin Thịnh Nguyễn nhập hàng trực tiếp từ đại lý chính hãng.
                                                        Các
                                                        loại giày trượt patin được các HLV là chuyên gia trong ngành
                                                        trực
                                                        tiếp kiểm tra.
                                                        Vì vậy đôi giày bạn mua luôn được đảm bảo là chính hãng, chất
                                                        lượng
                                                        và phù hợp nhất cho đôi chân của bạn. Ngoài ra CLB Thịnh Nguyễn
                                                        còn
                                                        có chính sách bảo hành và đổi trả giúp bạn an tâm hơn khi lựa
                                                        chọn
                                                        sản phẩm
                                                        Chính sách bảo hành, đổi trả:
                                                        <ul>
                                                            <li> ✓ Chế độ bảo hành: Trung Tâm Dạy Trượt Patin Thịnh
                                                                Nguyễn
                                                                cam kết bảo hành không giới hạn thời gian và miễn phí
                                                                công
                                                                sửa chữa, cấp lại ốc vít thất lạc đối với các sản phẩm
                                                                khi
                                                                mua hàng tại trung tâm.</li>
                                                            <li>
                                                                Chế độ bảo hành KHÔNG bao gồm các linh kiện, vật tư khi
                                                                thay
                                                                thế hoặc sửa chữa do hao mòn trong quá trình sử dụng như
                                                                gây
                                                                va đập trầy sướt (VD: Bánh xe, vòng bi v.v..)
                                                                ✓ Đổi trả: Được đổi trả sản phẩm khi quý khách không vừa
                                                                Size trong vòng 7 ngày (Chỉ áp dụng khi sản phẩm còn
                                                                nguyên
                                                                vẹn, không trày sướt, mòn bánh hoặc dính nước)
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- NAVTABS MOBILE  -->
                <!-- Tabs menu on mobile -- drop down -->
                <div class="panel-group visible-xs visible-sm px-3 my-3" id="accordion" role="tablist"
                    aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" class="d-inline-block text-uppercase full-width" data-toggle="collapse"
                                    data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Mô tả
                                </a>
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>
                                                Thương Hiệu</th>
                                            <td>Longines</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Số Hiệu Sản Phẩm</th>
                                            <td>L4.759.4.12.2</td>
                                        </tr>
                                        <tr>
                                            <th>Xuất Xứ</th>
                                            <td>Thụy Sỹ</td>
                                        </tr>
                                        <tr>
                                            <th>Giới Tính</th>
                                            <td>Nam</td>
                                        </tr>
                                        <tr>
                                            <th>Máy</th>
                                            <td>Sapphire (Kính Chống Trầy)</td>
                                        </tr>
                                        <tr>
                                            <th>Số Hiệu Sản Phẩm</th>
                                            <td>
                                                Quartz (Pin)</td>
                                        </tr>
                                        <tr>
                                            <th>Bảo Hành Quốc Tế</th>
                                            <td>2 Năm</td>
                                        </tr>
                                        <tr>
                                            <th>Bảo Hành Tại Hải Triều</th>
                                            <td>4 Năm – <a href="#" class="text-brand">RED Guarantee</a></td>
                                        </tr>

                                        <tr>
                                            <th>Đường Kính Mặt Số</th>
                                            <td>35 mm</td>
                                        </tr>
                                        <tr>
                                            <th>Bề Dày Mặt Số</th>
                                            <td> 6 mm</td>
                                        </tr>
                                        <tr>
                                            <th>Niềng</th>
                                            <td>Thép Không Gỉ</td>
                                        </tr>
                                        <tr>
                                            <th>Dây Đeo</th>
                                            <td>Dây Da Chính Hãng</td>
                                        </tr>
                                        <tr>
                                            <th>Màu Mặt Số</th>
                                            <td>Trắng</td>
                                        </tr>
                                        <tr>
                                            <th>Dây Đeo</th>
                                            <td>3 ATM</td>
                                        </tr>
                                        <tr>
                                            <th>Chức Năng</th>
                                            <td>
                                                Lịch Ngày</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed d-inline-block text-uppercase full-width" role="button"
                                    data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    CHẾ ĐỘ BẢO HÀNH VÀ HẬU MÃI
                                </a>
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <div class="qualities mt-3">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <p class="d-inline-block">
                                                Tại sao nên mua hàng tốt, hàng chính hãng?
                                                <ul>
                                                    <li> ✓ Ưu điểm đầu tiên khi mua hàng chính hãng là bạn được hưởng
                                                        chế độ
                                                        bảo hành từ nhà sản xuất và cửa hàng của chúng tôi từ 12 tháng
                                                        đến
                                                        24 tháng và hỗ trợ trọn đời khi cần sửa chữa và thay thế .</li>
                                                    <li>

                                                        ✓ Thứ hai là hàng chính hãng luôn tốt hơn hàng trôi dạt, có độ
                                                        bền
                                                        cao. Đặc biệt đối với các môn thể thao mạo hiểm, khuyên dùng nên
                                                        sử
                                                        dụng sản phẩm chính hãng để đảm bảo an toàn cho bạn.
                                                    </li>
                                                    <li>
                                                        ✓ Thứ 3, đặc biệt đối với các môn thể thao mạo hiểm, khuyên dùng
                                                        nên
                                                        sử dụng sản phẩm chính hãng để đảm bảo an toàn cho bạn.
                                                        CLB Patin Thịnh Nguyễn nhập hàng trực tiếp từ đại lý chính hãng.
                                                        Các
                                                        loại giày trượt patin được các HLV là chuyên gia trong ngành
                                                        trực
                                                        tiếp kiểm tra.
                                                        Vì vậy đôi giày bạn mua luôn được đảm bảo là chính hãng, chất
                                                        lượng
                                                        và phù hợp nhất cho đôi chân của bạn. Ngoài ra CLB Thịnh Nguyễn
                                                        còn
                                                        có chính sách bảo hành và đổi trả giúp bạn an tâm hơn khi lựa
                                                        chọn
                                                        sản phẩm
                                                        Chính sách bảo hành, đổi trả:
                                                        <ul>
                                                            <li> ✓ Chế độ bảo hành: Trung Tâm Dạy Trượt Patin Thịnh
                                                                Nguyễn
                                                                cam kết bảo hành không giới hạn thời gian và miễn phí
                                                                công
                                                                sửa chữa, cấp lại ốc vít thất lạc đối với các sản phẩm
                                                                khi
                                                                mua hàng tại trung tâm.</li>
                                                            <li>
                                                                Chế độ bảo hành KHÔNG bao gồm các linh kiện, vật tư khi
                                                                thay
                                                                thế hoặc sửa chữa do hao mòn trong quá trình sử dụng như
                                                                gây
                                                                va đập trầy sướt (VD: Bánh xe, vòng bi v.v..)
                                                                ✓ Đổi trả: Được đổi trả sản phẩm khi quý khách không vừa
                                                                Size trong vòng 7 ngày (Chỉ áp dụng khi sản phẩm còn
                                                                nguyên
                                                                vẹn, không trày sướt, mòn bánh hoặc dính nước)
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Related products  -->
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <section class="related-products col-md-12 col-lg-12 px-0">
                <!-- Title  -->
                <div class="sub-sidebar-header bg-blue">
                    <h4 class="text-uppercase text-white text-center p-2">
                        <span>Sản phẩm liên quan</span>
                    </h4>
                </div>
                <div class="related-products-sliders col-md-12 col-lg-12">
                    <div class="product-row row best-sellers my-3">
                        <div class="col-md-12 ">

                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 px-0">
                                <img src="./images/products/timthumb.jpg" alt="hinhanh" class="img-responsive">
                            </div>

                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 product-caption ">
                                <a href="#">
                                    <div>
                                        <span>Giày trượt tím</span>
                                    </div>
                                    <div class="price-wrapper">
                                        <span class="price">
                                            <span class="discount-price"><del>2.0000.0000</del></span>
                                            <span class="pricing">1.500.000<span class="currency">₫</span></span></span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-12 ">

                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 px-0">
                                <img src="./images/products/giay-truot-patin-flying-eagle-Drift-junior10-e1573824159161-247x296.jpg"
                                    alt="hinhanh" class="img-responsive">
                            </div>

                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 product-caption ">
                                <a href="#">
                                    <div>
                                        <span>Giày trượt Flying Eagle</span>
                                    </div>
                                    <div class="price-wrapper">
                                        <span class="price">
                                            <span class="discount-price"><del>2.0000.0000</del></span>
                                            <span class="pricing">1.500.000<span class="currency">₫</span></span></span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="product-row row best-sellers my-3">
                        <div class="col-md-12">

                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 px-0">
                                <img src="./images/products/timthumb.jpg" alt="hinhanh" class="img-responsive">
                            </div>

                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 product-caption ">
                                <a href="#">
                                    <div>
                                        <span>Giày trượt tím</span>
                                    </div>
                                    <div class="price-wrapper">
                                        <span class="price">
                                            <span class="discount-price"><del>2.0000.0000</del></span>
                                            <span class="pricing">1.500.000<span class="currency">₫</span></span></span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 px-0">
                                <img src="./images/products/giay-truot-patin-flying-eagle-Drift-junior10-e1573824159161-247x296.jpg"
                                    alt="hinhanh" class="img-responsive">
                            </div>

                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 product-caption ">
                                <a href="#">
                                    <div>
                                        <span>Giày trượt Flying Eagle</span>
                                    </div>
                                    <div class="price-wrapper">
                                        <span class="price">
                                            <span class="discount-price"><del>2.0000.0000</del></span>
                                            <span class="pricing">1.500.000<span class="currency">₫</span></span></span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                        <i class="fa fa-star text-yellow"></i>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- End Related products  -->
        <!-- News  -->
        <!-- Related products  -->
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <section class="related-products col-md-12 col-lg-12 px-0">
                <!-- Title  -->
                <div class="sub-sidebar-header bg-blue">
                    <h4 class="text-uppercase text-white text-center p-2">
                        <span>Tin tức & Sự kiện</span>
                    </h4>
                </div>
                <div class="latest-news col-md-12 col-lg-12 px-0">
                    <div class="product-row row best-sellers my-3">
                        <div class="col-md-12 ">

                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 px-0">
                                <img src="./images/banner/patin6.jpg" alt="hinhanh" class="img-responsive">
                            </div>

                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 product-caption ">
                                <a href="#">
                                    <div>
                                        <span class="fs-14">Các lợi ích mang lại cho bạn qua việc trượt patin hằng
                                            ngày</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-12 ">

                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 px-0">
                                <img src="./images/banner/patin3.jpg" alt="hinhanh" class="img-responsive">
                            </div>

                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 product-caption ">
                                <a href="#">
                                    <div>
                                        <span class="fs-14">Cách chơi patin cho người mới bắt đầu</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="product-row row best-sellers my-3">
                        <div class="col-md-12 ">

                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 px-0">
                                <img src="./images/banner/patin6.jpg" alt="hinhanh" class="img-responsive">
                            </div>

                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 product-caption ">
                                <a href="#">
                                    <div>
                                        <span class="fs-14">Các lợi ích mang lại cho bạn qua việc trượt patin hằng
                                            ngày</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-12 ">

                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 px-0">
                                <img src="./images/banner/patin3.jpg" alt="hinhanh" class="img-responsive">
                            </div>

                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 product-caption ">
                                <a href="#">
                                    <div>
                                        <span class="fs-14">Cách chơi patin cho người mới bắt đầu</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- End news  -->
    </div>
</section>
@endsection