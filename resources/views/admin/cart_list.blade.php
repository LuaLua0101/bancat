@extends('admin.layout')

@section('list_cart_active', 'active')

@section('content')
<section class="mt-30px mb-30px">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <!-- Recent Updates Widget          -->
        <div id="delete-page" class="card">
          <div id="delete-header" class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h2 bold"><a href="javascript:void(0)">Danh sách đơn hàng</a></h2>
          </div>
          <div id="delete-box" class="show delete-box card-body">
            <div class="delete-form">
              <ul>
                <li class="d-flex justify-content-between align-items-center bt-line">
                  <table class="table table-bordered ">
                    <thead>
                      <tr>
                        <th>Tên khách hàng</th>
                        <th>Điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Trạng thái</th>
                        <th colspan="2"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($carts as $item)
                      <tr>
                        <td><a href="{{route('adgetEditCart', ['id' => $item->id])}}">{{$item->name}}</a></td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->address}}</td>
                        @if ($item->status == 1)
                        <td>Chưa giao</td>
                        @elseif ($item->status == 2)
                        <td>Đang giao</td>
                        @elseif ($item->status == 3)
                        <td>Đã giao</td>
                        @elseif ($item->status == 4)
                        <td>Đã hủy</td>
                        @endif
                        <td width="80px" style="text-align: center;"><a href="{{route('adgetEditCart', ['id' => $item->id])}}">Chi tiết</a></td>
                        <td width="80px" style="text-align: center;"><a class="btn delete-btn" href="{{route('adgetDelCart', ['id' => $item->id])}}" onclick="return confirm('Bạn có chắc chắn xóa đơn hàng này?');"><i class="icon icon-close"></i></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </li>
                
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