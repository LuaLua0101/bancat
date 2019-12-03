<div class="main-menu">
    <h5 class="sidenav-heading">Main</h5>
    <ul id="side-main-menu" class="side-menu list-unstyled">
        <li class="@yield('home_active')"><a href="{{route('adgetHome')}}"><i class="icon-home"></i>Home</a></li>
        <!-- <li class="@yield('list_cart_active')"><a href="{{ route('adgetListCart') }}"><i class="icon icon-bill"></i>Danh sách đơn hàng</a></li> -->
        <li class="@yield('add_product_active')"><a href="{{ route('adgetAddProduct') }}"><i class="icon-form"></i>Thêm
                sản phẩm mới</a></li>
        <li class="@yield('list_product_active')"><a href="{{ route('adgetListProduct') }}"><i
                    class="icon icon-list"></i>Danh sách sản phẩm</a></li>
        <li class="@yield('add_cate_active')"><a href="{{ route('adgetAddCate') }}"><i class="icon-form"></i>Thêm danh
                mục mới</a></li>
        <li class="@yield('list_cate_active')"><a href="{{ route('adgetListCate') }}"><i class="icon icon-list"></i>Danh
                sách danh mục</a></li>
        <li class="@yield('add_news_active')"><a href="{{ route('adgetAddNews') }}"><i class="icon-form"></i>Thêm tin
                tức mới</a></li>
        <li class="@yield('list_news_active')"><a href="{{ route('adgetListNews') }}"><i class="icon icon-list"></i>Danh
                sách tin tức</a></li>
        <!-- <li class="@yield('add_store_active')"><a href="{{ route('adgetAddStore') }}"><i class="icon-form"></i>Thêm cửa
                hàng mới</a></li>
        <li class="@yield('list_store_active')"><a href="{{ route('adgetListStore') }}"><i
                    class="icon icon-list"></i>Danh sách cửa hàng</a></li> -->
        <li class="@yield('list_user_active')"><a href="{{ route('adgetListUser') }}"><i class="icon icon-user"></i>Danh
                sách người dùng</a></li>
    </ul>
</div>