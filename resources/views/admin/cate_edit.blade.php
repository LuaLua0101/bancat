@extends('admin.layout')

@section('list_cate_active', 'active')

@section('content')

<!-- Create Article Section -->
<section class="mt-30px mb-30px forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- Recent Updates Widget          -->
                <div id="create-news" class="card updates">
                    <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="h2 bold"><a href="javascript:void(0)">Chỉnh sửa danh mục</a></h2>
                    </div>
                    <div id="create-box" class="show create-box card-body">
                        <form action="{{route('adpostEditCate', ['id' => $cate->id])}}" method="POST" id="create-new"
                            class="form-create" enctype='multipart/form-data'>
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Tên danh mục:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-title" name="title" required=""
                                        value="{{$cate->title}}">
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Link thân thiện:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form-slug" name="slug" required=""
                                        value="{{$cate->slug}}">
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Thứ tự hiển thị:</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="form-pos" name="pos"
                                        value="{{$cate->pos}}">
                                </div>
                            </div>
                            <div class="line"></div>

                            <div class="form-group row">
                              <label class="col-sm-2 form-control-label">Mô tả:</label>
                              <div class="col-sm-10">
                                <textarea id="form-description-txt" class="text-content form-control" name="description" >{{$cate->description}}</textarea>
                              </div>
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