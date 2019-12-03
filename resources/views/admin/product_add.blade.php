@extends('admin.layout')

@section('add_product_active', 'active')

@section('content')

<!-- Create Article Section -->
<section class="mt-30px mb-30px forms">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <!-- Recent Updates Widget          -->
        <div id="create-news" class="card updates">
          <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h2 bold"><a href="javascript:void(0)">Tạo sản phẩm mới</a></h2>
          </div>
          <div id="create-box" class="show create-box card-body">
            <form action="{{route('adpostAddProduct')}}" method="POST" id="create-new" class="form-create" enctype='multipart/form-data'>
              {{ csrf_field() }}
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">Tên sản phẩm:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="form-title" name="title" required="">
                </div>
              </div>
              <div class="line"></div>
               <div class="form-group row">
                <label class="col-sm-2 form-control-label">Link thân thiện:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="form-slug" name="slug" required="">
                </div>
              </div>
              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">Loại sản phẩm:</label>
                <div class="col-sm-10">
                  <select class="form-control" id="form-page-type" name="type">
                    @foreach(config('config.cate_name') as $key => $name)
                    <option value="{{$key}}">{{$name[0]}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">Hình đại diện:</label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="form-avatar" name="cover">
                      <label class="custom-file-label" for="form-avatar">Choose file</label>
                    </div>
                  </div>
                   <img id="file-show"class="hidden">
                </div>
              </div>
              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">Các hình chi tiết:</label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" multiple="" class="custom-file-input" id="form-list_img" name="list_img[]">
                      <label class="custom-file-label" for="form-avatar">Choose file</label>
                    </div>
                  </div>
                   <div id="list_img-show">

                   </div>
                </div>
              </div>
              <div class="line"></div>
               <div class="form-group row">
                <label class="col-sm-2 form-control-label">Thứ tự hiển thị:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="form-pos" name="pos">
                </div>
              </div>
              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">Đơn giá:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="form-price" name="price" required="">
                </div>
              </div>
              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">Đơn vị tính:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="form-unit" name="unit">
                </div>
              </div>
              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">Trọng lượng:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="form-weight" name="weight">
                </div>
              </div>
              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">Xuất xứ:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="form-origin" name="origin">
                </div>
              </div>
              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">Tình trạng:</label>
                <div class="col-sm-10">
                  <select class="form-control" id="form-status" name="status">
                    <option value="1">Còn hàng</option>
                    <option value="0">Hết hàng</option>
                  </select>
                </div>
              </div>
              <div class="line"></div>


              <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Mô tả:</label>
                  <div class="col-sm-10">
                    <textarea id="form-description-txt" class="text-content form-control" name="description" ></textarea>
                  </div>
                </div>
                <div class="line"></div>

              <div class="content-post">
                
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Nội dung:</label>
                  <div class="col-sm-10">
                    <textarea id="form-content-txt" class="text-content form-control" name="content"></textarea>
                  </div>
                  <script>
                    
                    CKEDITOR.replace( 'form-content-txt', {
                      language: 'en',
                      filebrowserUploadUrl: '{!! route('uploadImage', ['_token' => csrf_token() ]) !!}',
                      filebrowserUploadMethod: 'form'
                    } );
                </script>
                </div>
              </div>

              <div class="form-group bold">       
                <input type="reset" value="RESET" class="btn btn-secondary"> <input type="submit" value="TẠO MỚI" class="btn btn-primary">
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